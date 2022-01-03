<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        return redirect('dashboard');
    }
    public function dashboard()
    {
        $data = [
            'total_orders'  =>  $this->orders->where('user_id', $this->_id)->countAllResults(),
            'total_earnings'  =>  $this->p_earnings->where('partner_id', $this->_id)->selectSum('balance')->first(),
            'total_hotels'  =>  $this->hotels->where('user_id', $this->_id)->countAllResults(),
        ];
        echo view('parts/dashboard/header', $data);
        echo view('admin/dashboard');
        echo view('parts/dashboard/footer');
    }
    public function profile()
    {
        $data = [
            'user' => $this->user->find($this->_id),
        ];
        if ($this->request->getMethod() == 'post') {
            # code...
            $r = $this->request;
            if (!empty($r->getPost('password')) && ($r->getPost('password') !== $r->getPost('passconf'))) {
                return redirect()->back()->with('error', 'Password does not match');
            }
            $lastname = $r->getPost('lastname');
            $firstname = $r->getPost('firstname');
            foreach ($_POST as $k => $v) {
                $fileName = $_FILES['profile_image']['name'] . '-' . $this->user_id;
                $filePath = "uploads/profile_image/" . $_FILES['profile_image']['name'] . '-' . $this->user_id;
                $q[$k] = $v;
                $q['fullname']  =   xx_clean($lastname . ' ' . $firstname);
                if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $filePath)) {
                    $q['profile_image'] = $fileName;
                }
            }
            if ($this->users->where('id', $this->_id)->set(array_filter($q))->update()) {
                return redirect()->back()->with('success', 'Updated successfully');
            } else {
                return redirect()->back()->with('error', 'unable to update settings.');
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/profile');
        echo view('parts/dashboard/footer');
    }
    public function notifications()
    {
        $data = [
            'notifications' => $this->notifications->where('user_id', $this->user_id)->findAll(),
        ];
        echo view('parts/dashboard/header', $data);
        echo view('admin/notifications');
        echo view('parts/dashboard/footer');
    }
    public function myorders($type = null)
    {
        if (isset($type) && $type != null) {
            session()->set(['orders_type' => $type]);
        } else {
            session()->remove('orders_type');
        }
        $where = [];

        if (session()->get('id') != null) {
            $where = [
                'user_id' => session()->get('id'),
            ];
        }

        if (session()->get('orders_type') != null && !isset($_GET)) {
            $order_type = session()->get('orders_type');
            $data['orders']    =  $this->orders->where('services', $order_type)->findAll();
        } elseif (isset($_GET) && session()->get('orders_type') != null) {
            foreach ($_GET as $key => $val) {
                $where = array($key => $val);
            }
            $order_type = session()->get('orders_type');
            $data['orders']    =  $this->orders->where('services', $order_type)->where($where)->findAll();
        } elseif (isset($_GET)) {
            foreach ($_GET as $key => $val) {
                $where = array($key => $val);
            }
            $data['orders']    =  $this->orders->where($where)->findAll();
        } else {
            if (session()->get('id') !== null) {
                $data['orders']    =  $this->orders->where($where)->findAll();
            } else {
                $data['orders']    =  $this->orders->findAll();
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/myorders');
        echo view('parts/dashboard/footer');
    }
    public function all_orders($type = null)
    {
        if (isset($type) && $type != null) {
            session()->set(['orders_type' => $type]);
        } else {
            session()->remove('orders_type');
        }
        $where = [];
        if (curr_user['role'] != 'admin') {
            $where = ['partner_id', $this->_id];
        }

        if (session()->get('orders_type') != null && !isset($_GET)) {
            $order_type = session()->get('orders_type');
            $data['orders']    =  $this->orders->where('services', $order_type)->findAll();
        } elseif (isset($_GET) && session()->get('orders_type') != null) {
            foreach ($_GET as $key => $val) {
                $where = array($key => $val);
            }
            $order_type = session()->get('orders_type');
            $data['orders']    =  $this->orders->where('services', $order_type)->where($where)->findAll();
        } elseif (isset($_GET)) {
            foreach ($_GET as $key => $val) {
                $where = array($key => $val);
            }
            $data['orders']    =  $this->orders->where($where)->findAll();
        } else {
            if (session()->get('id') !== null) {
                $data['orders']    =  $this->orders->where($where)->findAll();
            } else {
                $data['orders']    =  $this->orders->findAll();
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/hotels/orders');
        echo view('parts/dashboard/footer');
    }
    public function order($order_id)
    {
        $data['order']    =  $this->orders->where('orders.id', $order_id)->join('hotels', 'hotels.hotel_id=orders.hotel_id')->join('users', 'users.id=orders.user_id')->first();
        $data['slug']    =  $order_id;
        // print_r($data['order']);
        // echo view('parts/dashboard/header', $data);
        echo view('admin/order', $data);
        // echo view('parts/dashboard/footer');
    }
    public function wishlist($user = null)
    {
        $data = [
            'response'  => $this->wishlist->where('user_id', $this->user_id)->findAll(),
        ];
        $user_id = $this->user_id;

        $r = $this->request;
        if ($r->getMethod() == 'post') {
            $hotel_id = $r->getPost('hotel_id');
            $count = $this->wishlist->where('hotel_id', $hotel_id)->where('user_id', $this->user_id)->countAllResults();
            if ($count < 1) {
                $select_hotel = $this->hotels->where('hotel_id', $hotel_id)->first();
                $q['hotel_id']      =   $hotel_id;
                $q['user_id']       =   $this->user_id;
                $q['review_score']  =   $select_hotel['review_score'] / 2;
                $q['hotel_name']    =   $select_hotel['hotel_name'];
                $q['address']       =   $select_hotel['address'];
                $q['currency']      =   $select_hotel['currencycode'];
                $q['price']         =   $select_hotel['min_total_price'];
                $q['city']          =   $select_hotel['city'];
                $q['country_trans'] =   $select_hotel['country_trans'];
                $q['checkout']      =   $select_hotel['checkout'];
                $q['checkin']       =   $select_hotel['checkin'];
                $q['hotel_thumbnail'] =  str_replace('max1280x900', '200x150', $select_hotel['hotel_thumbnail']);
                $q['accommodation_type_name']   =   $select_hotel['accommodation_type_name'];
                $this->wishlist->insert($q);

                return json_encode(['status' => 'Item added from wishlist']);
            } else {
                $this->wishlist->where('user_id', $user_id)->where('hotel_id', $hotel_id)->delete();
                return json_encode(['status' => 'Item removed from wishlist']);
            }
        }
        if ($r->getMethod() == 'get'){
            if($r->getGet('action') == 'delete'){
                $_del = $this->wishlist->where('id', $r->getGet('id'))->delete();
                if($_del){
                    return redirect()->back()->with('success', 'Hotel successfully removed from wishlist');
                }
            }
        }

        echo view('parts/dashboard/header', $data);
        echo view('admin/wishlist');
        echo view('parts/dashboard/footer');
    }
    public function analytics($user = null)
    {
        $data = [];
        if ($user != null) {
            $data['analytics'] = "";
        } else {
            $data['analytics'] = "";
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/analytics');
        echo view('parts/dashboard/footer');
    }
    public function withdrawal($user = null)
    {
        $data = [];
        if ($user != null) {
            $data['withdrawals'] = $this->db->query("SELECT w.id as w_id, w.*, u.fullname, u.email FROM withdrawal w JOIN users u ON w.user_id= u.id WHERE w.user_id=$user")->getResultArray();//$this->withdrawal->where('user_id', $user)->join('users', 'users.id=withdrawal.user_id')->findAll();
        } else {
            $data['withdrawals'] = $this->db->query("SELECT w.id as w_id, w.*, u.fullname, u.email FROM withdrawal w JOIN users u ON w.user_id=u.id")->getResultArray(); //withdrawal->join('users', 'users.id=withdrawal.user_id')->findAll();
            // print_r($data['withdrawals']); exit;
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/withdrawal');
        echo view('parts/dashboard/footer');
    }
    public function all_posts($status = null, $post_id = null)
    {
        $data = [];
        if ($status != null && $status != "delete") {
            $data['posts']  =   $this->blog->where('status', $status)->findAll();
        } elseif ($status != null && $status == "delete") {
            $data['posts']  =   $this->blog->where('id', $post_id)->delete();
            return redirect()->back()->with('success', "Blog post deleted successfully");
        } else {
            $data['posts']  =   $this->blog->findAll();
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/posts/all_posts');
        echo view('parts/dashboard/footer');
    }
    public function add_post()
    {
        $data = [
            'categories' =>  $this->categories->findAll(),
        ];
        if ($this->request->getMethod() == 'post') {
            // receive post data and pass to xx_clean
            $q['title']      = xx_clean($this->request->getPost('title'));
            $q['body']       = $this->request->getPost('body');
            $q['slug']       = xx_clean($this->request->getPost('slug')); //url_title($title.uniqid());
            $q['short_desc'] = xx_clean($this->request->getPost('short_desc'));
            $q['categories'] = $this->request->getPost('categories');
            $q['tags']       = xx_clean($this->request->getPost('tags'));
            $q['status']     =$this->request->getPost('status');

            $fileName = md5(time()).$_FILES['image']['name'];
            $filePath = "uploads/blog_images/" . $fileName;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $filePath)) {
                $q['image'] = $fileName;
            }

            if ($this->blog->insert($q)) {
                return redirect()->back()->with('success', 'Post created successfully');
            } else {
                return redirect()->back()->with('error', 'Unable to create post.');
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/posts/add_new');
        echo view('parts/dashboard/footer');
    }
    public function edit_post($post_id)
    {
        $data = [
            'categories' =>  $this->categories->findAll(),
        ];
        $data['posts']  =   $this->blog->find($post_id);
        if ($this->request->getMethod() == 'post') {
            // receive post data and pass to xx_clean
            $q['title']      = xx_clean($this->request->getPost('title'));
            $_id      = xx_clean($this->request->getPost('post_id'));
            $q['body']       = $this->request->getPost('body');
            $q['slug']       = url_title($this->request->getPost('slug')); //url_title($title.uniqid());
            $q['short_desc'] = xx_clean($this->request->getPost('short_desc'));
            $q['categories'] = $this->request->getPost('categories');
            $q['tags']       = xx_clean($this->request->getPost('tags'));
            $q['status']     =$this->request->getPost('status');

            $fileName = md5(time()).$_FILES['image']['name'];
            $filePath = "uploads/blog_images/" . $fileName;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $filePath)) {
                $q['image'] = $fileName;
            }

            if ($this->blog->where('id', $_id)->set($q)->update()) {
                return redirect()->back()->with('success', 'Post Updated successfully');
            } else {
                return redirect()->back()->with('error', 'Unable to updated post.');
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/posts/edit_post');
        echo view('parts/dashboard/footer');
    }
    public function post_tags($action = null, $post_id = null)
    {
        $data = [
            'tags'  =>  $this->categories->findAll(),
        ];
        echo view('parts/dashboard/header', $data);
        echo view('admin/posts/tags');
        echo view('parts/dashboard/footer');
    }
    public function post_category($action = null, $post_id = null)
    {
        $data = [
            'categories' =>  $this->categories->findAll(),
        ];
        $r = $this->request;
        if ($r->getMethod() == 'post') {
            foreach ($_POST as $k => $v) {
                $q[$k]  =   $v;
            }
            if ($this->categories->insert($q)) {
                return redirect()->back()->with('success', 'Category created successfully');
            } else {
                return redirect()->back()->with('error', 'Unable to create Category.');
            }
        }

        if ($action == 'delete') {
            if ($this->categories->delete($post_id)) {
                return redirect()->back()->with('success', 'Category deleted successfully');
            } else {
                return redirect()->back()->with('error', 'Unable to delete Category.');
            }
        }

        echo view('parts/dashboard/header', $data);
        echo view('admin/posts/category');
        echo view('parts/dashboard/footer');
    }

    /**
     * Post comments
     */
    public function comments($action = null, $post_id = null)
    {
        $data = [];
        if ($action != null && $action != "delete") {
            $data['comments']  =   $this->comments->where('status', $action)->findAll();
        } elseif ($action != null && $action == "delete") {
            $data['comments']  =   $this->comments->where('id', $post_id)->delete();
            return redirect()->back()->with('success', "Comment deleted successfully");
        } else {
            $data['comments']  =   $this->comments->join('users', 'users.id=comments.user_id')->join('blog', 'blog.id=blog_id')->findAll();
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/posts/comments');
        echo view('parts/dashboard/footer');
    }
    public function partners_earnings($user = null)
    {
        $data = [
            'earnings' =>  $this->p_earnings->join('partners', 'partners.id=earnings.partner_id')->findAll(),
        ];
        echo view('parts/dashboard/header', $data);
        echo view('admin/partners_earnings');
        echo view('parts/dashboard/footer');
    }
    public function all_users($action = null, $user = null)
    {
        $data = [
            'users' =>  $this->users->findAll(),
        ];
        echo view('parts/dashboard/header', $data);
        echo view('admin/all_users');
        echo view('parts/dashboard/footer');
    }
    public function partner_request($acction = null, $user_id = null)
    {
        $data = [
            'users' =>  $this->partners->findAll(),
        ];
        echo view('parts/dashboard/header', $data);
        echo view('admin/partner_request');
        echo view('parts/dashboard/footer');
    }
    public function all_pages($acction = null, $_id = null)
    {
        $data = [
            'pages' =>  $this->page->findAll(),
        ];
        if ($acction == "delete") {
            if ($this->page->where('id', $_id)->delete()) {
                return redirect()->back()->with('success', "Page deleted successfully");
            } else {
                return redirect()->back()->with('error', "unable to delete page");
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/pages/all_pages');
        echo view('parts/dashboard/footer');
    }
    public function edit_page($_id = null)
    {
        $data = [
            'page' =>  $this->page->find($_id),
        ];
        if ($this->request->getMethod() == 'post') {
            # code...
            $r = $this->request;
            $q['title']  = $r->getPost('title');
            $q['slug']   = url_title($r->getPost('slug'));
            $q['body']   = $r->getPost('body');
            $q['status'] = $r->getPost('status');
            if ($this->page->where('id', $_id)->set($q)->update()) {
                return redirect()->back()->with('success', 'Page updated successfully');
            } else {
                return redirect()->back()->with('error', 'Unable to update page.');
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/pages/edit_page');
        echo view('parts/dashboard/footer');
    }
    public function add_page($acction = null, $user_id = null)
    {
        $data = [
            'pages' =>  $this->page->findAll(),
        ];
        if ($this->request->getMethod() == 'post') {
            # code...
            $r = $this->request;
            $q['title']  = $r->getPost('title');
            $q['slug']   = url_title($r->getPost('slug'));
            $q['body']   = $r->getPost('body');
            $q['status'] = $r->getPost('status');
            if ($this->page->insert($q)) {
                return redirect()->back()->with('success', 'Page created successfully');
            } else {
                return redirect()->back()->with('error', 'unable to create page.');
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/pages/add_new');
        echo view('parts/dashboard/footer');
    }
    public function all_hotels($action = null, $hotel_id = null)
    {
        $data = [];
        if ($action == "published" && curr_user['role'] == 'admin') {
            $data = [
                'hotels' =>  $this->hotels->where('status', 'published')->findAll(),
                'pager'  =>  $this->hotels->pager,
            ];
        }
        if ($action == 'draft' && curr_user['role'] == 'admin') {
            $data = [
                'hotels' =>  $this->hotels->where('status', 'draft')->findAll(),
                'pager'  =>  $this->hotels->pager,
            ];
        }
        if ($action == 'pending' && curr_user['role'] == 'admin') {
            $data = [
                'hotels' =>  $this->hotels->where('status', 'pending')->findAll(),
                'pager'  =>  $this->hotels->pager,
            ];
        }

        if ($action == null  && curr_user['role'] == 'admin') {
            $data = [
                'hotels' =>  $this->hotels->findAll(),
                'pager'  =>  $this->hotels->pager,
            ];
        }

        if ($action == "published") {
            $data = [
                'hotels' =>  $this->hotels->where('user_id', $this->_id)->where('status', 'published')->findAll(),
                'pager'  =>  $this->hotels->pager,
            ];
        }
        if ($action == 'draft') {
            $data = [
                'hotels' =>  $this->hotels->where('user_id', $this->_id)->where('status', 'draft')->findAll(),
                'pager'  =>  $this->hotels->pager,
            ];
        }
        if ($action == 'pending') {
            $data = [
                'hotels' =>  $this->hotels->where('user_id', $this->_id)->where('status', 'pending')->findAll(),
                'pager'  =>  $this->hotels->pager,
            ];
        }

        if ($action == null) {
            $data = [
                'hotels' =>  $this->hotels->where('user_id', $this->_id)->findAll(),
                'pager'  =>  $this->hotels->pager,
            ];
        }
        if ($action == "delete") {
            if ($this->hotels->where('hotel_id', $hotel_id)->delete()) {
                return redirect()->back()->with('success', "Hotel deleted successfully");
            } else {
                return redirect()->back()->with('error', "unable to delete hotel");
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/hotels/all_hotels');
        echo view('parts/dashboard/footer');
    }
    public function add_new_hotels()
    {
        $data = [
            'pages' =>  $this->page->findAll(),
        ];
        if ($this->request->getMethod() == 'post') {

            $r = $this->request;

            $hotel_id = $r->getPost('hotel_id');
            $q['url']                       =   $r->getPost('url');
            $q['hotel_id']                  =   $r->getPost('hotel_id');
            $q['partner_id'] = $q['user_id'] =  $this->_id;
            $q['hotel_name']                =   $r->getPost('hotel_name');
            $q['description']               =   $r->getPost('description');
            $q['city']                      =   $r->getPost('city');
            $q['country_trans']             =   $r->getPost('country_trans');
            $q['accommodation_type_name']   =   $r->getPost('accommodation_type_name');
            $q['review_score']              =   $r->getPost('review_score');
            $q['checkin']                   =   $r->getPost('checkin');
            $q['checkout']                  =   $r->getPost('checkout');
            $q['currencycode']              =   $r->getPost('currencycode');
            $q['min_total_price']           =   $r->getPost('min_total_price');

            $q['latitude']                  =   $r->getPost('latitude');
            $q['longitude']                 =   $r->getPost('longitude');
            $q['status']                    =   $r->getPost('status');
            $q['map_preview_url']           =   $r->getPost('map_preview_url');

            if ($_FILES["max_photo_url"]) {
                $targetDir = "uploads/hotel_images/";
                $fileName = $hotel_id . md5(time());
                $targetFilePath = $targetDir . $fileName;

                if (move_uploaded_file($_FILES["max_photo_url"]["tmp_name"], $targetFilePath)) {
                    // Image db insert sql 
                    $i['hotel_id'] = $hotel_id;
                    $q['hotel_thumbnail']           =    base_url($targetDir . $fileName);
                    $this->hotels_images->insert($i);
                }
            }


            foreach ($_FILES['hotel_images']['name'] as $key => $val) {
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                // File upload path 
                $fileName = basename($_FILES['hotel_images']['name'][$key]);
                $targetDir = "uploads/hotel_images/";
                $targetFilePath = $targetDir . $fileName;

                // Check whether file type is valid 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                if (in_array($fileType, $allowTypes)) {
                    // Upload file to server 
                    if (move_uploaded_file($_FILES["hotel_images"]["tmp_name"][$key], $targetFilePath)) {
                        // Image db insert sql 
                        $i['hotel_id'] = $hotel_id;
                        $i['url_max'] = base_url("uploads/hotel_images/$fileName");
                        $i['img_url'] = base_url("uploads/hotel_images/$fileName");
                        $this->hotels_images->insert($i);
                    }
                }
            }

            foreach ($r->getPost('facilities') as $key => $facilities) {
                $q['facilitytype_name'] = $facilities;
                $q['facility_name']     = $facilities;
                $q['hotel_id']          = $r->getPost('hotel_id');
                $this->hotel_facilities->insert($q);
            }

            if ($this->hotels->insert($q)) {
                return  redirect()->to(route_to('admin.add_new_hotels'))->with('success', 'hotel added successfylly');
            } else {
                return redirect()->back()->with('error', 'unable to create page.');
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/hotels/add_new_hotels');
        // echo view('admin/hotels/add_new_hotel');
        echo view('parts/dashboard/footer');
    }

    public function rooms()
    {
        $data = [];
        if(curr_user['role'] != 'admin'){
            $data['rooms'] = $this->rooms->where('partner_id', $this->_id)->findAll();
        } else {
            $data['rooms'] = $this->rooms->findAll();
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/hotels/rooms');
        echo view('parts/dashboard/footer');
    }
    

    public function add_rooms()
    {
        $data = [
            'rooms' => $this->rooms->where('partner_id', $this->_id)->findAll(),
            'facilities' => ['a', 'b'],
        ];
        $r = $this->request;
        if($r->getMethod() == 'post'){
            foreach ($_POST as $k => $v) {
                $q[$k] = $v;
            }
            if ($_FILES["room_image"]) {
                $targetDir = "uploads/hotel_images/";
                $fileName = $_FILES["room_image"]["name"].md5(time());
                $targetFilePath = $targetDir . $fileName;

                if (move_uploaded_file($_FILES["room_image"]["tmp_name"], $targetFilePath)) {
                    $q['room_image']           =    base_url($targetDir . $fileName);
                }
            }
            if ($this->rooms->insert($q)) {
                return redirect()->back()->with('success', 'Room added successfully');
            } else {
                return redirect()->back()->with('error', 'Unable to add Room');
            }
        } 
        echo view('parts/dashboard/header', $data);
        echo view('admin/hotels/add-rooms');
        echo view('parts/dashboard/footer');
    }
    

    public function manage_rooms()
    {
        $r = $this->request;
        if($r->getMethod() == 'post'){
            foreach ($_POST as $k => $v) {
                $q[$k] = $v;
            }
            $room_id = $r->getPost('id');
            if ($_FILES["room_image"]) {
                $targetDir = "uploads/hotel_images/";
                $fileName = $_FILES["room_image"]["name"].md5(time());
                $targetFilePath = $targetDir . $fileName;

                if (move_uploaded_file($_FILES["room_image"]["tmp_name"], $targetFilePath)) {
                    $q['room_image']           =    base_url($targetDir . $fileName);
                }
            }
            if($this->rooms->where('id', $room_id)->set(array_filter($q))->update()) {
                return redirect()->back()->with('success', 'Room updated successfully');
            } else {
                return redirect()->back()->with('error', 'Unable to update Room');
            }
        } 

        if(!isset($_GET['room_id']) || empty($_GET['room_id'])){
            return redirect()->to(route_to('admin.rooms'))->with('error',"Please select a valid Room");
        }

        $data = [
            'rooms' => $this->rooms->where('partner_id', $this->_id)->where('id', $_GET['room_id'])->first(),
            'facilities' => ['a', 'b'],
        ];

        echo view('parts/dashboard/header', $data);
        echo view('admin/hotels/manage-rooms');
        echo view('parts/dashboard/footer');
    }
    

    public function all_apartments($status = null, $post_id = null)
    {
        $data = [];
        if ($status != null && $status != "delete") {
            $data['apartments']  =   $this->apartments->where('status', $status)->findAll();
        } elseif ($status != null && $status == "delete") {
            $data['apartments']  =   $this->apartments->where('id', $post_id)->delete();
            return redirect()->back()->with('success', "Apartments deleted successfully");
        } else {
            $data['apartments']  =   $this->apartments->findAll();
        }
        if ($this->request->getMethod() == 'post') {
            # code...
            $r = $this->request;
            foreach ($_POST as $k => $v) {
                $q[$k] = $v;
            }
            if ($this->settings->where('id', 1)->set($q)->update()) {
                return redirect()->back()->with('success', 'Page created successfully');
            } else {
                return redirect()->back()->with('error', 'unable to create page.');
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/apartments/all_apartments');
        echo view('parts/dashboard/footer');
    }
    public function general_settings()
    {
        $data = [
            'settings' =>  $this->settings->find(1),
        ];
        if ($this->request->getMethod() == 'post') {
            # code...
            $r = $this->request;
            foreach ($_POST as $k => $v) {
                $q[$k] = $v;
            }
            if ($this->settings->where('id', 1)->set($q)->update()) {
                return redirect()->back()->with('success', 'Updated successfully');
            } else {
                return redirect()->back()->with('error', 'unable to update settings.');
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/settings/settings');
        echo view('parts/dashboard/footer');
    }
    public function page_settings()
    {
        $data = [
            'settings' =>  $this->settings->find(1),
        ];
        if ($this->request->getMethod() == 'post') {
            # code...
            $r = $this->request;
            foreach ($_POST as $k => $v) {
                $q[$k] = $v;
            }
            if ($this->settings->where('id', 1)->set($q)->update()) {
                return redirect()->back()->with('success', 'Page created successfully');
            } else {
                return redirect()->back()->with('error', 'unable to create page.');
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/settings/page_settings');
        echo view('parts/dashboard/footer');
    }
    public function booking_settings()
    {
        $data = [
            'settings' =>  $this->settings->find(1),
            'gateway'  =>  $this->gateways->findAll(),
        ];
        if ($this->request->getMethod() == 'post') {
            # code...
            $r = $this->request;
            foreach ($_POST as $k => $v) {
                $q[$k] = $v;
            }
            if ($this->settings->where('id', 1)->set($q)->update()) {
                return redirect()->back()->with('success', 'Page created successfully');
            } else {
                return redirect()->back()->with('error', 'unable to create page.');
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view("admin/settings/booking_settings");
        echo view('parts/dashboard/footer');
    }
    public function services_settings()
    {
        $data = [
            'settings' =>  $this->settings->find(1),
        ];
        if ($this->request->getMethod() == 'post') {
            # code...
            $r = $this->request;
            foreach ($_POST as $k => $v) {
                $q[$k] = $v;
            }
            if ($this->settings->where('id', 1)->set($q)->update()) {
                return redirect()->back()->with('success', 'Page created successfully');
            } else {
                return redirect()->back()->with('error', 'unable to create page.');
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view("admin/settings/services_settings");
        echo view('parts/dashboard/footer');
    }
    public function reviews_settings()
    {
        $data = [
            'settings' =>  $this->settings->find(1),
        ];
        if ($this->request->getMethod() == 'post') {
            # code...
            $r = $this->request;
            foreach ($_POST as $k => $v) {
                $q[$k] = $v;
            }
            if ($this->settings->where('id', 1)->set($q)->update()) {
                return redirect()->back()->with('success', 'Page created successfully');
            } else {
                return redirect()->back()->with('error', 'unable to create page.');
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view("admin/settings/reviews_settings");
        echo view('parts/dashboard/footer');
    }
    public function apperance_settings()
    {
        $data = [
            'settings' =>  $this->settings->find(1),
        ];
        if ($this->request->getMethod() == 'post') {
            # code...
            $r = $this->request;
            foreach ($_POST as $k => $v) {
                $q[$k] = $v;
            }
            if ($this->settings->where('id', 1)->set($q)->update()) {
                return redirect()->back()->with('success', 'Page created successfully');
            } else {
                return redirect()->back()->with('error', 'unable to create page.');
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view("admin/settings/apperance_settings");
        echo view('parts/dashboard/footer');
    }
    public function email_settings()
    {
        $data = [
            'settings' =>  $this->settings->find(1),
        ];
        if($this->request->getMethod() == 'post' && !empty($_POST)) {
            # code...
            $r = $this->request;
            foreach ($_POST as $k => $v) {
                $q[$k] = $v;
            }
            if ($this->settings->where('id', 1)->set(array_filter($q))->update()) {
                return redirect()->back()->with('success', 'Settings Updated successfully');
            } else {
                return redirect()->back()->with('error', 'unable to update settings.');
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view("admin/settings/email_settings");
        echo view('parts/dashboard/footer');
    }
    public function advance_settings()
    {
        $data = [
            'settings' =>  $this->settings->find(1),
        ];
        if ($this->request->getMethod() == 'post') {
            # code...
            $r = $this->request;
            foreach ($_POST as $k => $v) {
                $q[$k] = $v;
            }
            if ($this->settings->where('id', 1)->set($q)->update()) {
                return redirect()->back()->with('success', 'Page created successfully');
            } else {
                return redirect()->back()->with('error', 'unable to create page.');
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view("admin/settings/advance_settings");
        echo view('parts/dashboard/footer');
    }
    public function coupons($action = null, $_id = null)
    {
        $data = [
            'coupons' =>  $this->coupon->findAll(),
        ];
        if ($this->request->getMethod() == 'post') {
            # code...
            $r = $this->request;
            foreach ($_POST as $k => $v) {
                $q[$k] = $v;
            }
            $q['status'] = $r->getPost('status');
            if ($this->coupon->insert(array_filter($q))) {
                return redirect()->back()->with('success', 'Coupon created successfully');
            } else {
                return redirect()->back()->with('error', 'unable to create coupon.');
            }
        }
        if ($action == 'delete') {
            # code...
            if ($this->coupon->where('id', $_id)->delete()) {
                return redirect()->back()->with('success', 'Coupon deleted successfully');
            } else {
                return redirect()->back()->with('error', 'unable to delete coupon.');
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/coupons');
        echo view('parts/dashboard/footer');
    }
    public function menu($action = null, $menu_id = null)
    {
        $data = [
            'title' =>  "Menu's",
            'menus' =>  $this->menu->findAll()
        ];
        if ($action == 'delete') {
            if ($this->menu->where('id', $menu_id)->delete()) {
                return redirect()->back()->with('success', "Menu deleted successfully");
            } else {
                return redirect()->back()->with('error', "Unable to delete Menu");
            }
        }
        if ($this->request->getMethod() == 'post') {
            # code...
            $r = $this->request;
            foreach ($_POST as $k => $v) {
                $q[$k] = $v;
            }
            if ($this->menu->insert($q)) {
                return redirect()->back()->with('success', 'Menu created successfully');
            } else {
                return redirect()->back()->with('error', 'Unable to create menu.');
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/menu');
        echo view('parts/dashboard/footer');
    }
    public function seo()
    {
        $data = [
            'settings' =>  $this->settings->find(1),
        ];
        if ($this->request->getMethod() == 'post') {
            # code...
            $r = $this->request;
            foreach ($_POST as $k => $v) {
                $q[$k] = $v;
            }
            if ($this->settings->where('id', 1)->set($q)->update()) {
                return redirect()->back()->with('success', 'Page created successfully');
            } else {
                return redirect()->back()->with('error', 'unable to create page.');
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/seo');
        echo view('parts/dashboard/footer');
    }
    public function import_data()
    {
        $data = [
            'settings' =>  $this->settings->find(1),
        ];
        if ($this->request->getMethod() == 'post') {
            # code...
            $r = $this->request;
            foreach ($_POST as $k => $v) {
                $q[$k] = $v;
            }
            if ($this->settings->where('id', 1)->set($q)->update()) {
                return redirect()->back()->with('success', 'import successful');
            } else {
                return redirect()->back()->with('error', 'failed to import data.');
            }
        }
        echo view('parts/dashboard/header', $data);
        echo view('admin/import_data');
        echo view('parts/dashboard/footer');
    }

    public function test()
    {
        $data = $row = array();

        // Fetch member's records
        $memData = $this->db->query("SELECT * FROM hotels")->getResult();
        // var_dump($memData->created_at ); exit;

        $i = 0;
        foreach ($memData as $member) {
            $i++;
            $created = date('jS M Y', strtotime($member->created_at));
            $status = ($member->status == 1) ? 'Active' : 'Inactive';
            $data[] = array($i, $member->hotel_name, $member->accommodation_type_name, $member->min_total_price, $member->status, 'Action');
        }

        $output = array(
            "draw" => 10,
            "recordsTotal" => $this->hotels->countAll(),
            // "recordsFiltered" => $this->hotels->countFiltered($_POST),
            "data" => $data,
        );

        // Output to JSON format
        echo json_encode($output);
    }

    public function grabActive($hotel_id, $pay_id)
    {
        // generate invoice and send to user.
        $order = $this->orders->find($pay_id);
        $hotel = $this->hotels->find($hotel_id);
        // send invoice with payment url to user //
        $to = $order['email'];
        $msg = "Below is the URL to your invoice payment.";
        $url = base_url('home/invoice/');
        $this->send_mail($to, "Invoice From WEOTRIP", $msg, $url, "Make Payment Now");
        return redirect()->back()->with('success', 'Invoice sent successfully');
    }

    public function cancelled()
    {
        $req_id = $_GET['req_id'];
        if($this->withdrawal->where('id', $req_id)->set(['status' => 'rejected'])->update()){
            return redirect()->back()->with('success', 'Withdrawal request cancelled successfully');
        } else {
            return redirect()->back()->with('error', 'Error cancelling withdrawal request');
        }
    }

    public function accept()
    {
        $amount = $_GET['amount'];
        $user_id = $_GET['user_id'];
        $req_id = $_GET['req_id'];

        $approved = $this->p_earnings->where('partner_id', $user_id)->set('balance', "balance-$amount")->update();
        
        if($approved){
            $this->withdrawal->where('id', $req_id)->set(['status' => 'paid'])->update();
            return redirect()->back()->with( 'success', 'Withdrawal request approved successfully');
        } else {
            return redirect()->back()->with('error', 'Unable to mark withdrawal as cancelled');
        }
    }
    
    public function mark_as_paid($order_id)
    {
        $find = $this->orders->find($order_id);
        $orderData = [
            'status' => 'paid',
            'total_paid' => $find['total'],
        ];
        $mark = $this->orders->where('id', $order_id)->set($orderData)->update();
        return redirect()->back()->with('success', 'Order successfully marked as paid');
    }
}
