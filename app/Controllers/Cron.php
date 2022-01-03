<?php

namespace App\Controllers;

ini_set('max_execution_time', 0);

use App\Controllers\BaseController;

class Cron extends BaseController
{
    public function index()
    {
        $rex = $this->get_city_list();
        // echo "<pre>";
        // print_r($rex); exit;
    }

    public function get_city_list()
    {
        $data = [];
        $endpoint = "locations?";
        $city_list = $this->city_list->where('status', '0')->findAll(1);
        foreach ($city_list as $city => $list) {
            $q = [
                'locale' => 'en-us',
                'name' => $list["city"],
            ];
            $city = $list["city"];
            $this->city_list->where("city", $city)->set(['status' => '1'])->update();

            $endpoint = $endpoint . http_build_query($q);
            $rex = curl_get($endpoint, $data);
            
            if ($rex === NULL || $rex === "") {
                error_log('Error encountered empty value received');
                die();
            }
            foreach ($rex as $v) {
                try {
                    $k['region']        =   $v['region'];
                    $k['dest_type']     =   $v['dest_type'];
                    $k['city_name']     =   $v['city_name'];
                    $k['city_ufi']      =   $v['city_ufi'];
                    $k['type']          =   $v['type'];
                    $k['hotels']        =   $v['hotels'];
                    $k['country']       =   $v['country'];
                    $k['latitude']      =   $v['latitude'];
                    $k['landmark_type'] =   $v['landmark_type'];
                    $k['longitude']     =   $v['longitude'];
                    $k['name']          =   $v['name'];
                    $k['dest_id']       =   $v['dest_id'];
                    $k['nr_hotels']     =   $v['nr_hotels'];
                    $k['timezone']      =   $v['timezone'];
                    $k['image_url']     =   $v['image_url'];
                    $k['label']         =   $v['label'];
                    $k['rtl']           =   $v['rtl'];
                    $k['cc1']           =   $v['cc1'];
                    $k['lc']            =   $v['lc'];

                    $this->dest->save(array_filter($k));
                    // var_dump($k); exit;
                    if($_response = $this->getHotels($v['dest_id'])){
                        // return $_response;
                    }
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        }
    }

    /**
     * Return Hotel's Search
     * this will search for hotels and return hotels ID.
     * Hotels ID will be passed to get hotel.
     */
    public function getHotels($dest_id)
    {
        $endpoint = "search?";
        // $dest_id = $this->dest->where('status', 0)->first();
        // $dest_count = $this->dest->where('status', 0)->countAllResults();
        // $dest_id = $dest_id['dest_id'];
        $q = [
            'locale' => 'en-us',
            'room_number' => 1,
            'checkout_date' => date('Y-m-d', strtotime(date('Y-m-d H:i:s') . ' +1 day')),
            'order_by' => 'distance',
            'units' => 'metric',
            'adults_number' => 2,
            'filter_by_currency' => 'USD',
            'checkin_date' => date('Y-m-d'),
            'dest_type' => 'city',
            'dest_id' => $dest_id,
            'children_number' => 2,
            'page_number' => 0,
            'children_ages' => '5'
        ];

        $data = [];
        $endpoint = $endpoint . http_build_query($q);
        $rex = curl_get($endpoint, $data);
        if (isset($rex['primary_count']) && $rex['primary_count'] > 0) {
            $data['response'] = $rex['result'];
            $rex = $rex['result'];
            foreach ($rex as $key => $rex) {
                // print_r($rex);
                $q['url']                       =   $rex['url'];
                $q['hotel_id']                  =   $rex['hotel_id'];
                 $q['partner_id'] = $q['user_id'] =  0;
                $q['hotel_name']                =   $rex['hotel_name'];
                $q['city']                      =   $rex['city'];
                $q['country_trans']             =   $rex['country_trans'];
                $q['accommodation_type_name']   =   $rex['accommodation_type_name'];
                $q['review_score']              =   $rex['review_score'];
                $q['checkin']                   =   $rex['checkin']['from'];
                $q['checkout']                  =   $rex['checkout']['until'];
                $q['currencycode']              =   $rex['currencycode'];
                $q['min_total_price']           =   $rex['min_total_price'];
                $q['hotel_thumbnail']           =   str_replace('max1280x900', '358x238', $rex['max_photo_url']);
                $hotel_id = $q['hotel_id'];

                if ($this->hotels->insert($q)) {
                    // call the next method/function 
                    if ($images = $this->hotelImage($hotel_id)) {
                        // insert images to hotel images table.
                        foreach ($images as $image) {
                            $q['url_max'] = $image['url_max'];
                            $q['hotel_id']  = $hotel_id;
                            $q['img_url'] = str_replace('1440x1440', '393x327', $image['url_1440']);
                            $this->hotels_images->insert($q);
                        }
                    }
                    if ($desc = $this->getDescription($hotel_id)) {
                        // insert images to hotel images table.
                        $q['description'] =   $desc['description'];
                        $this->hotels->where('hotel_id', $hotel_id)->set($q)->update();
                    }
                    if ($reviews = $this->getReviews($hotel_id)) {
                        // insert images to hotel images table.
                        foreach ($reviews['result'] as $review) {
                            $q['author']    = $review['author']['name'];
                            $q['date']      = $review['date'];
                            $q['title']     = $review['title'];
                            $q['pros']      = $review['pros'];
                            $q['hotel_id']  = $hotel_id;
                            $this->hotel_reviews->insert($q);
                        }
                    }
                    if ($facilities = $this->getFacilities($hotel_id)) {
                        // insert images to hotel images table.
                        foreach ($facilities as $f) {
                            $q['facilitytype_name'] = $f['facilitytype_name'];
                            $q['facility_name']     = $f['facility_name'];
                            $q['hotel_id']          = $f['hotel_id'];
                            $this->hotel_facilities->insert($q);
                        }
                    }
                    if ($map = $this->getMap($hotel_id)) {
                        // insert images to hotel images table.
                        $q['latitude']  =   $map['geo_info']['city_centre']['latitude'];
                        $q['longitude'] =   $map['geo_info']['city_centre']['longitude'];
                        $q['map_preview_url'] = $map['map_preview_url'];
                        $this->hotels->where('hotel_id', $hotel_id)->set($q)->update();
                    }

                    log_message("info", "cronJob successful for destination ID: $hotel_id");
                    // exit;
                }
            }
            // Now that will have hotel lists we save the info in ::DB most importantly Hotel's ID.
            // Now we can call each additional functions like HotelImage, HotelFacilities and so on. and store all response in ::DB
        }
    }

    /*
    * call the get image rapidAPI endpoint
    */
    public function hotelImage($hotel_id)
    {
        $data = [];
        $endpoint = "photos?";
        $q = [
            'hotel_id'  => $hotel_id,
            'locale' =>  'en-us'
        ];
        $endpoint = $endpoint . http_build_query($q);
        $rex = curl_get($endpoint, $data);
        return $rex;
    }

    /**
     * Get hotel description content
     */
    public function getDescription($hotel_id)
    {
        $data = [];
        $endpoint = "description?";
        $q = [
            'hotel_id'  => $hotel_id,
            'locale' =>  'en-us'
        ];
        $endpoint = $endpoint . http_build_query($q);
        $rex = curl_get($endpoint, $data);
        return $rex;
    }

    /**
     * Get hotel Reviews
     */
    public function getReviews($hotel_id)
    {
        $data = [];
        $endpoint = "reviews?";
        $q = [
            'hotel_id'  => $hotel_id,
            'sort_type' => 'SORT_RECENT_DESC',
            'locale' =>  'en-us'
        ];
        $endpoint = $endpoint . http_build_query($q);
        $rex = curl_get($endpoint, $data);
        return $rex;
    }

    /**
     * Get hotel Facilities content
     */
    public function getFacilities($hotel_id)
    {
        $data = [];
        $endpoint = "facilities?";
        $q = [
            'hotel_id'  => $hotel_id,
            'locale' =>  'en-us'
        ];
        $endpoint = $endpoint . http_build_query($q);
        $rex = curl_get($endpoint, $data);
        return $rex;
    }

    public function getMap($hotel_id)
    {
        $data = [];
        $endpoint = "map-markers?";
        $q = [
            'hotel_id'  => $hotel_id,
            'locale' =>  'en-us'
        ];
        $endpoint = $endpoint . http_build_query($q);
        $rex = curl_get($endpoint, $data);
        return $rex;
    }



    /**
     * Update Hotel price list using destination ID
     */

    function updatePriceList()
    {       
        $destination_id = $this->dest->orderBy('price_updated', 'DESC')->findAll(1);
        // print_r($destination_id); exit;
        foreach ($destination_id as $key => $value) {
            # code...
            if(!empty($value)){
                $dest_id = $value['dest_id'];
                $price_updated = $value['price_updated'] + 1;
                $endpoint = "search?";
                $q = [
                    'locale' => 'en-us',
                    'room_number' => 1,
                    'checkout_date' => date('Y-m-d', strtotime(date('Y-m-d H:i:s') . ' +1 day')),
                    'order_by' => 'distance',
                    'units' => 'metric',
                    'adults_number' => 2,
                    'filter_by_currency' => 'USD',
                    'checkin_date' => date('Y-m-d'),
                    'dest_type' => 'city',
                    'dest_id' => $dest_id,
                    'children_number' => 0,
                    'page_number' => 0,
                    'children_ages' => '5'
                ];

                $data = [];
                echo '<pre>';
                $endpoint = $endpoint . http_build_query($q);
                $rex = curl_get($endpoint, $data);
                if (isset($rex['primary_count']) && $rex['primary_count'] > 0) {
                    $data['response'] = $rex['result'];
                    $rex = $rex['result'];
                    foreach($rex as $key => $rex) {
                        // print_r($rex); exit;
                        
                        $hotel_id                       =   $rex['hotel_id'];                        
                        $q['currencycode']              =   $rex['currencycode'];
                        $q['min_total_price']           =   $rex['min_total_price'];
                        $this->hotels->set($q)->where('hotel_id', $hotel_id)->update();
                        // var_dump($q); exit;
                    }
                    $this->dest->where('dest_id', $dest_id)->set(['price_updated' => $price_updated])->update();
                    echo "Update Completed";
                }
            }
        }
    }
}