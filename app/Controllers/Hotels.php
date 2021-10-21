<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PhpParser\Node\Expr\Print_;

class Hotels extends BaseController
{
    public function index()
    {
        //
    }

    /**
     * Return Hotel's Search
     */
    public function getHotel()
    {    
        $endpoint = "search?";
        $q = [
            'locale'=> 'en-us',
            'room_number'=> 1,
            'checkout_date'=> '2021-11-26',
            'order_by'=> 'distance',
            'units'=> 'metric',
            'adults_number'=> 2,
            'filter_by_currency'=> 'NGN',
            'checkin_date'=> '2021-11-25',
            'dest_type'=> 'city',
            'dest_id'=> '-1997013',
            'children_number'=> 2,
            'page_number'=> 0,
            'children_ages'=> '5'
        ];

        $data = []; 
        $endpoint = $endpoint.http_build_query($q);
        $rex = curl_get($endpoint, $data);
        // echo "<pre>";
        // print_r($rex);
        if(isset($rex['primary_count']) && $rex['primary_count'] > 0){
            $data['response'] = $rex['result'];
            $data['rex'] = $rex['result'];
        } else {
            $data['response'] = [];
        }
        echo view('parts/header', $data);
        echo view('welcome_message');
        echo view('parts/footer');    
        // echo "<pre>";
        // print_r($rex);
    }

    /**
     * Get Single Hotel info
     * @q = query
     */
    public function getHotels()
    {
        $endpoint = "search?";
        $q = [
            'locale'=> 'en-us',
            'hotel_id'=> 1,
        ];

        $data = [
            'response'  =>  $this->hotels->findAll(12),
        ]; 
        
        echo view('parts/header', $data);
        echo view('welcome_message');
        echo view('parts/footer');    
    }

    public function bookHotel(){
        foreach($this->request->getPost() as $key => $value)
        {
            $bookingData[xx_clean($key)] = xx_clean($value);
        }

        if($this->booking->insert($bookingData)){
            return true;
        } else {
            return false;
        }
    }

    public function getLocations($hotel_id)
    {
        if ($this->request->getMethod() == 'post') {
            $data = [];
            $endpoint = "locations?";
            $q = [
                'name'  => $hotel_id,
                'locale'=>  'en-us'
            ];
            $endpoint = $endpoint.http_build_query($q);
            $rex = curl_get($endpoint, $data);

            if(!empty($rex)) {
                echo '<ul id="country-list">';
                foreach($rex as $country){
                    $rex_country = $country["country_name"];
                    echo "<li class='select2' onClick='selectCountry(<?= $rex_country ?>);'><?= $rex_country ?></li></ul>";
                }
            // return json_encode(['success'=>true, 'data' => $rex]);
            }
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
            'locale'=>  'en-us'
        ];
        $endpoint = $endpoint.http_build_query($q);
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
            'locale'=>  'en-us'
        ];
        $endpoint = $endpoint.http_build_query($q);
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
            'locale'=>  'en-us'
        ];
        $endpoint = $endpoint.http_build_query($q);
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
            'locale'=>  'en-us'
        ];
        $endpoint = $endpoint.http_build_query($q);
        $rex = curl_get($endpoint, $data);
        return $rex;
    }

    public function getMap($hotel_id)
    {
        $data = [];
        $endpoint = "map-markers?";
        $q = [
            'hotel_id'  => $hotel_id,
            'locale'=>  'en-us'
        ];
        $endpoint = $endpoint.http_build_query($q);
        $rex = curl_get($endpoint, $data);
        return $rex;
    }

    /**
     * Get hotel Photo <> Images
     */
    public function viewHotel()
    {
        $data = [];
        $hotel_id = $_GET['hotel_id'];
        $data['description'] = $this->hotels->where('hotel_id', $hotel_id)->first();
        $data['reviews'] = $this->hotel_reviews->where('hotel_id', $hotel_id)->findAll();
        $data['facilities'] = $this->hotel_facilities->where('hotel_id', $hotel_id)->findAll();
        $data['images'] = $this->hotels_images->where('hotel_id', $hotel_id)->findAll();
        $data['map'] = $this->hotels->where('hotel_id', $hotel_id)->findAll();

        // echo "<hr>".$data['description']['description']."<pre>";
        // return print_r($data);
        echo view('parts/header', $data);
        echo view('hotels/single');
        echo view('parts/footer');
    }
}