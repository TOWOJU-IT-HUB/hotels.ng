<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // get hotels from booking.
        $data = [
			'response'	=>	$this->hotels->paginate(9),
			'pager' 	=> 	$this->hotels->pager,
			'menu1'		=>	$this->menu->where('location', '1')->findAll(),
			'menu2'		=>	$this->menu->where('location', '2')->findAll(),
			'menu3'		=>	$this->menu->where('location', '3')->findAll(),
		]; 
        echo view('parts/header', $data);
        echo view('welcome_message');
        echo view('parts/footer');
    }
    public function search()
    {
        // get hotels from booking.
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
		$r = $this->request;
		$query['city'] = $r->getGet('location');
		// $query['country_trans'] = $r->getGet('location');

		$search = $this->hotels->like(array_filter($query))->paginate(90);
        $data = [
			'response'	=>	$this->hotels->like(array_filter($query))->paginate(9),
			'pager' 	=> 	$this->hotels->pager,
		]; 
		// echo "<pre>";

		// print_r($search);
        echo view('parts/header', $data);
        echo view('search');
        echo view('parts/footer');
    }
    
	public function login()
	{
        $data   =   [];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|valid_email',
                'password'  => 'required|min_length[3]|ValidateUser[eamil,password]'
            ];

            $errors =   [
                'password'  =>  [
                    'ValidateUser'  =>  'Email or Password is incorrect!'
                ]
			];
			
            if (!$this->validate($rules, $errors)) {
                $d_resx = $data['validation'] = $this->validator;
				return json_encode(['error' => 'Invalid Login']);
            } else {
                //Confirm user credentials and Start a Session//
                $model = $this->user;
				$user = $model->where('email', $this->request->getVar('email'))->first();
				$this->setUserSession($user);
				session()->setFlashdata('success', 'Login Successful...');
				if (session()->get('role') == 'admin') {
					$uri = base_url(route_to('admin.dashboard'));
				} elseif(session()->get('role') == 'user'){
					$uri = base_url(route_to('dashboard'));
				}
				return json_encode(['success' => 'Login Successful.']);
                // return redirect()->to(route_to('dashboard'));
            }
		}
		// return view('login', $data);
	}
	
	private function setUserSession($user)
	{
		
			$data	=	[
				'id'	        =>	$user['id'],
				'fullname'		=>	$user['fullname'],
				'email'			=>	$user['email'],
				'role'          =>  $user['role'],
				'isLoggedIn'	=>	true,
				'profile_image'	=>	$user['profile_image'],
			];

		session()->set($data);
		return true;
	}

	function register()
	{
		$data = [];

		if ($this->request->getMethod() == 'post') {
			
			// Receive all user input and process it to the ::DB
			$rules = [
				'firstname'	=> 'required|min_length[3]',
				'lastname'	=> 'required|min_length[3]',
				'email'		=> 'required|is_unique[users.email]|valid_email',
				'password'	=> 'required|min_length[5]',
			];

			if (!$this->validate($rules)) {
				$data['validation'] = $this->validator;
				print_r($data['validation']); exit;
			} else {
				
				//save user details into DB//
				$model = $this->user;
				$firstname = xx_clean($this->request->getPost('firstname'));
				$lastname = xx_clean($this->request->getPost('lastname'));
				$email = xx_clean($this->request->getPost('email'), 'email');
				$newdata = [
					// 'idz'	=>	1,
					'fullname' 		=>  $firstname.' '.$lastname,
					'email' 		=>  $email,
					'role'			=>	'customer',
					'password' 		=>  $this->request->getPost('password'),
				];

				if($model->insert($newdata)){
					$user = $model->where('email', $email)->first();
					$this->setUserSession($user);
				}
				return json_encode(['success' => 'Registration Successful.']);
				
			}
		}
		return redirect('/');
	}
	
	public function page($slug)
	{
		$data['page'] = $this->pages->where('slug', $slug)->first();
		$data['title']= $data['page']['title'];
		
		echo view('parts/header', $data);
		echo view('blog_post');
		echo view('parts/footer');
	}
	
	public function error()
	{
		url_to('Users::dashboard');
		//return view('errors/404');
	}

	/**
	 * Check user role and redirect to the required dashboard.
	 * @param user, admin, partner, guest****
	 */
	public function do_login()
	{
		if (session()->get('isLoggedIn') == true && session()->get('role') == 'customer') {
            return redirect()->to(route_to('dashboard'));
        } elseif(session()->get('isLoggedIn') == true && session()->get('role') == 'admin') {
            return redirect()->to(route_to('admin.dashboard'));
        } else {
            session_destroy();
            return redirect()->to(base_url('/'));
        }
	}

	public function withdrawal($id = null)
	{
		$data['inf'] = $this->withdrawal->find($id);
		$data['userInfo'] = $this->users->find($data['inf'] ['user_id']);
		return view('admin/withdrawal_info', $data);
	}

	function edit_category($_id)
	{
		//
	}

	function contact_us()
	{
		$data['inf'] = $this->settings->find(1);
		echo view('parts/header', $data);
		echo view('contact');
		echo view('parts/footer');
	}

	function add_order()
	{
		// receive post request and insert data into ::DB
		$r = $this->request;
		if($r->getMethod() == 'post')
		{
			foreach ($_POST as $k => $v) {
				$q[$k] = $v;
			}
			if($this->orders->insert($q)){
				return json_encode(['success' => "Success Booking request sent successfully"]);
			} else {
				return json_encode(['error' => "Unable to process your booking request at this time."]);
			}
		}
	}

	function invoice($inv_id){
		$order = $this->orders->find($inv_id);
		$hotel = $this->hotels->find($order['hotel_id']);

		$return_url = "";
		$cancel_url = "";
		$notify_url = "";

		$q['cmd']		=	"_xclick";
		$q['ctxn_idmd']	=	"txn_id";
		$q['cmd']		=	"txn_type";
		$q['no_note']	=	"1";
		$q['lc']		=	"USA";
		$q['bn']		=	"PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest";
		$q['item_number']	=	"123456";
		$q['first_name']	=	"_xclick";
		$q['last_name']	=	"_xclick";
		$q['payer_email']	=	"_xclick";

		$data['business'] = conf['email'];

		// Set the PayPal return addresses.
		$data['return'] = stripslashes($return_url);
		$data['cancel_return'] = stripslashes($cancel_url);
		$data['notify_url'] = stripslashes($notify_url);

		// Set the details about the product being purchased, including the amount
		// and currency so that these aren't overridden by the form data.
		$data['item_name'] = "Hotel Booking Payment for ".$hotel['hotel_name'];
		$data['amount'] = $order['price'];
		$data['currency_code'] = $hotel['currencycode'];

		// Add any custom fields for the query string.
		//$data['custom'] = USERID;

		// Build the query string from the data.
		$queryString = http_build_query($data);

		// Redirect to paypal IPN
		header('location:' . $paypalUrl . '?' . $queryString);
		exit();
	}

	public function logout()
	{
		session_destroy();
		return redirect('home');
	}

	function test(){
		$data[] = null;
		$data['new'] = [];
		// $amount = 10000;
		// $a = convertedCurrency($amount, 'INR');
		// echo "<pre>";
		// print_r($a);
		// return view('test', $data);
		
		return country_currency();
	}
}
