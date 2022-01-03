<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
	use ResponseTrait;

	public function index()
	{
		// get hotels from booking.
		$data = [
			'response'	=>	$this->hotels->paginate(9),
			'pager' 	=> 	$this->hotels->pager,
			'menu1'		=>	$this->menu->where('location', '1')->findAll(),
			'menu2'		=>	$this->menu->where('location', '2')->findAll(),
			'menu3'		=>	$this->menu->where('location', '3')->findAll(),

			'by_country'		=>	$this->hotels->where('country_trans', user_country())->orderBy('RAND()')->groupBy('city')->findAll(6),
			'_country'			=>	$this->hotels->orderBy('min_total_price', 'ASC')->orderBy('RAND()')->groupBy('country_trans')->findAll(6),
			'dest_we_love'		=>	$this->hotels->orderBy('RAND()')->distinct()->findAll(16),
			'cities'			=>	$this->hotels->orderBy('RAND()')->findAll(16),
			'agent' 			=>	$this->request->getUserAgent(),
		];
		echo view('parts/header', $data);
		echo view('welcome_message');
		echo view('parts/footer');
	}

	public function home()
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
		echo view('home');
		echo view('parts/footer');
	}

	function countData()
	{
		$city = $_GET['city'];
		return $this->hotels->where('city', $city)->countAllResults();
	}

	public function search()
	{

		$r = $this->request;


		if (!empty($_GET['location'])) {
			$city = $r->getGet('location');
			$this->hotels->where('city', $city);
		}


		if (!empty($r->getGet('room_type'))) {
			$this->hotels->whereIn('accommodation_type_name', $r->getGet('room_type'));
		}

		if (!empty($r->getGet('price_range'))) {
			$pricy = explode(";", $r->getGet('price_range'));
			$min_price = $pricy[0];
			$max_price = $pricy[1];
			$this->hotels->where(" `min_total_price` >= $min_price AND `min_total_price` <= $max_price");
		}

		if (!empty($_GET['country'])) {
			$this->hotels->WhereIn('country_trans', $r->getGet('country'));
		}

		$data = [
			'response'	=>	$this->hotels->paginate(9), //$search,
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
	    if(session()->get('id') == true){
	        return redirect()->to(base_url('admin/dashboard'));
	    }
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
				return redirect()->to(base_url('login'))->with('error', 'Incorrect Login Data.');
			} else {
				//Confirm user credentials and Start a Session//
				$model = $this->user;
				$_email = $this->request->getVar('email');
				$user = $model->where('email', xx_clean($_email, 'email'))->first();
				$this->setUserSession($user);
				session()->setFlashdata('success', 'Login Successful...');
				$user = $this->setUserSession($user);

				$full_name = session()->get('fullname');

				mail($_email, "New Login on WEOTRIP", "Someone just loged in to your WeoTrip account. If this wasn't you, please kindly login and change your password ASAP, or reach out to us via " . conf['site_email']);

				return redirect()->back()->with('success', 'Login Successful.');
			}
		}
		echo view('parts/header', $data);
        echo view('login');
        echo view('parts/footer');
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

			if ($_REQUEST['password'] !== $_REQUEST['confpass']) {
				return redirect()->back()->with('error', 'Password doesn\'t match.');
			}

			// Receive all user input and process it to the ::DB
			$rules = [
				'firstname'	=> 'required|min_length[3]',
				'lastname'	=> 'required|min_length[3]',
				'email'		=> 'required|is_unique[users.email]|valid_email',
				'password'	=> 'required|min_length[5]',
			];

			if (!$this->validate($rules)) {
				$data['validation'] = $this->validator; // return array.
				return view('register', $data); // won't work because it return an array
				
			} else {

				//save user details into DB//
				$model = $this->user;
				$firstname = xx_clean($this->request->getPost('firstname'));
				$lastname = xx_clean($this->request->getPost('lastname'));
				$email = xx_clean($this->request->getPost('email'), 'email');
				$phone = xx_clean($this->request->getPost('phone'), 'int');
				$newdata = [
					// 'idz'	=>	1,
					'fullname' 		=>  $firstname . ' ' . $lastname,
					'firstname' 	=>  $firstname,
					'lastname' 		=>  $lastname,
					'username' 		=>  $lastname.$phone,
					'email' 		=>  $email,
					'phone' 		=>  $phone,
					'role'			=>	'customer',
					'password' 		=>  $this->request->getPost('password'),
				];

				if ($model->insert($newdata)) {
					$user = $model->where('email', $email)->first();
					$user = $this->setUserSession($user);
					$msg = "We can’t wait for you to start using WEOTRIP and seeing how we get you the best hotels booking at an affordable rates. \n \nSimply go here www.weotrip.com to get started, or visit our Help Center www.weotrip.com/contact-us to resolve any issue you might have using our services. \nAs always, our support team can be reached at " . conf['site_email'] . " if you ever get stuck.";
					mail($email,  "Registration Was Succesful", $msg);
					return redirect()->back()->with('success', 'Registration Successful.');
				}
			}
		} 
// 		return redirect()->to(base_url());
        return view('register');
	}

	public function page($slug)
	{
		$data['page'] = $this->pages->where('slug', $slug)->first();
		$data['title'] = $data['page']['title'];

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
		} elseif (session()->get('isLoggedIn') == true && session()->get('role') == 'admin') {
			return redirect()->to(route_to('admin.dashboard'));
		} else {
			session_destroy();
			return redirect()->to(base_url('/'));
		}
	}

	public function withdrawal($id = null)
	{
		$data['inf'] = $this->withdrawal->find($id);
		$data['userInfo'] = $this->users->find($data['inf']['user_id']);
		return view('admin/withdrawal_info', $data);
	}

	function edit_category($_id)
	{
		//
	}

	function contact_us()
	{
		$data['inf'] = $this->settings->find(1);
		$r = $this->request;
		
		if ($r->getMethod() == 'post') {

    		$rules = [
    			'email' => 'required|valid_email',
    			'subject'	=>	'required',
    			'full_name' => 'required',
    			'content'	=>	'required'
    		];
    
    		if (!$this->validate($rules)) {
    			$d_resx = $data['validation'] = $this->validator;
    			return redirect()->back()->with('error', "Please check your input.");
    		} else {
				$msg 		= $r->getPost('email') . "\n \n";
				$full_name 	= $r->getPost('full_name') . "\n \n";
				$subject 	= $r->getPost('subject') . "\n \n";
				$content 	= $r->getPost('content') . "\n \n";

				$send_msg = $msg . $full_name . $subject . $content;

				$adminEmail = conf['contact_us_email'];
				if (mail($adminEmail, "Contact Us Form", $send_msg)) {
					return redirect()->back()->with('success', "Request sent successfully");
				} else {
					return redirect()->back()->with('error', "Unable to submit your Contact request");
				}
			}
		}
		
		echo view('parts/header', $data);
		echo view('contact');
		echo view('parts/footer');
	}

	function partner()
	{
		$data['inf'] = $this->settings->find(1);
		$r = $this->request;
		if ($r->getMethod() == 'post') {
			// Receive all user input and process it to the ::DB
			$rules = [
				'firstname'	=> 'required|min_length[3]',
				'lastname'	=> 'required|min_length[3]',
				'email'		=> 'required|is_unique[users.email]|valid_email',
				'password'	=> 'required|min_length[8]',
			];
			foreach ($_POST as $k => $v) {
				$q[$k] = xx_clean($v);
			}
			if ($this->partners->insert($q)) {

				if (!$this->validate($rules)) {
					$data['validation'] = $this->validator;
				} else {

					//save user details into DB//
					$model = $this->user;
					$firstname = xx_clean($this->request->getPost('firstname'));
					$lastname = xx_clean($this->request->getPost('lastname'));
					$email = xx_clean($this->request->getPost('email'), 'email');
					$phone = xx_clean($this->request->getPost('phone'), 'int');
					$newdata = [
						'fullname' 		=>  $firstname . ' ' . $lastname,
						'firstname' 	=>  $firstname,
						'lastname' 		=>  $lastname,
						'username' 		=>  $lastname.$phone,
						'email' 		=>  $email,
						'phone' 		=>  $phone,
						'role'			=>	'partner',
						'password' 		=>  $this->request->getPost('password'),
					];

					if ($model->insert($newdata)) {
						$user = $model->where('email', $email)->first();
						$user = $this->setUserSession($user);
						$msg = "We can’t wait for you to start using WEOTRIP and seeing how we get you the best hotels booking at an affordable rates.
						<br> <br>Simply go here www.weotrip.com to get started, or visit our Help Center www.weotrip.com/contact-us to resolve any issue you might have using our services.<br> <br>As always, our support team can be reached at " . conf['site_email'] . " if you ever get stuck.";
						$this->send_mail($email,  "Registration Was Succesful", $msg);
						$model = $this->user;
        				$_email = $this->request->getVar('email');
        				$user = $model->where('email', xx_clean($_email, 'email'))->first();
						return redirect()->to(base_url('admin/add_new_hotels'))->with('success', 'Registration Successful.');
					}
				}
				return redirect()->to(base_url('login'))->with('success', "Request sent successfully");
			} else {
				return redirect()->back()->with('error', "Unable to submit your Partnership request");
			}
		}
		echo view('parts/header', $data);
		echo view('partner');
		echo view('parts/footer');
	}

	function add_order($hotel_id = null)
	{
		if (session()->get('id') === null) {
			return redirect()->back()->with('error', "Please Login to continue.");
		}
		// receive post request and insert data into ::DB
		$data = [
			'hotel_id'	=> $hotel_id,
		];
		$r = $this->request;
		if ($r->getMethod() == 'post') {
		    $rules = [
    			'email' => 'required|valid_email',
    			'firstname'     => 'required',
                'lastname'      => 'required',
                'checkin'       => 'required',
                'checkout'      => 'required',
                'checkin_time'  => 'required',
                'checkout_time' => 'required',
                'country'       => 'required',
                'number'        => 'required',
				'quantity'		=> 'required'
    		];
    
    		if (!$this->validate($rules)) {
    			$d_resx = $data['validation'] = $this->validator;
    			return redirect()->back()->with('error', "All fields are required.");
    		}
			foreach ($_POST as $k => $v) {
				$q[$k] = $v;
				$q['quantity']		=	$r->getPost('quantity');
				$q['booking_from'] =  ($r->getPost('checkin'));
				$q['booking_to'] =  ($r->getPost('checkout'));
		        $q['user_id']   =  session()->get('id');
		        $q['total'] =   $this->hotel_cost($r->getPost('hotel_id'));
                $q['services']   =  $r->getPost('checkin')." -> ".$r->getPost('checkout');
			}
			if ($_d = $this->orders->insert($q)) {
				return redirect()->to(base_url("home/invoice/$_d"))->with('success', "Booking Success please pay 10% of your booking fee.");
			} else {
				return json_encode(['error' => "Unable to process your booking request at this time."]);
			}
		}

		echo view('parts/header', $data);
		echo view('hotels/book_hotel');
		echo view('parts/footer');
	}
	
	/**
	*   Find Hotel cost using hotel ID
	*/
	
	function hotel_cost($hotel_id)
	{
	    $result = $this->hotels->where('hotel_id', $hotel_id)->first();
	    $result = (0 + $result['min_total_price']);
	    return $result;
	}

	public function invoice($inv_id, $action = null)
	{
	    if(session()->get('id') == false){ return redirect()->to(base_url('login')); }
		$info = $this->orders->find($inv_id);
		$hotel = $this->hotels->where('hotel_id', $info['hotel_id'])->first();
		$total = $hotel['min_total_price'] - $info['total_paid'];
		$portion = 10;
		$percentage = ($portion / 100) * $total; // 20
		$amount = base64_encode($percentage);
		$final_price = round(convertedCurrency($percentage, COUNTRY_CURRENCY, PAYPAL_CURRENCY), 2);
		if ($action == 'pay') {
			try {
				$response = [];
				$response = $this->gateway->purchase(array(
					'amount' => $final_price, //intval($hotel['min_total_price']),
					'currency' => PAYPAL_CURRENCY,
					'returnUrl' => base_url("home/check_paypal?pay_id=$inv_id&am=$amount"),
					'cancelUrl' => base_url('/'),
				))->send();
				// echo "<pre>";
				// print_r($response);
				// exit;

				if ($response->isRedirect()) {
					$response->redirect(); // this will automatically forward the customer
				} else {
					// not successful
					die('Can not process payment at the moment please contact the support, <hr> Reason: ' . $response->getMessage());
				}
			} catch (\Exception $e) {
				echo $e->getMessage();
				die('can not process payment at the moment please contact the support');
			}
			exit;
		}
		$data = [
			'info'	=>	$info,
			'hotel'	=>	$hotel,
			'_id'	=>	$inv_id,
			'inv_id' => $inv_id,
			'amount' => $percentage,
			'final_price' => $final_price
		];

		echo view('invoice', $data);
	}

	public function logout()
	{
		session_destroy();
		return redirect('home');
	}

	function test()
	{	
		if(isset($_GET['email'])){
			$email = $_GET['email'];
			$send = $this->send_mail($email, "Test Email", "Your email is fully working please go ahead and save do something great.");
			return $send;
		} else {
			die("Email not passed; ex: ?email=admin@example.com");
		}
	}

    /**
     * For search location auto complete
     */
	function complete()
	{
		$r = $this->request;
		if ($r->isAJAX()) {
			if (isset($_GET['term'])) {

				$query = "SELECT * FROM citylists WHERE city LIKE '{$_GET['term']}%' LIMIT 25";
				$result = $this->db->query($query)->getResultArray();

				if (!empty($result)) {
					foreach ($result as $user) {
						$res[] = $user['city'];
					}
				} else {
					$res = array();
				}
				//return json res
				echo json_encode($res);
			}
		} else {
			die("Undefined Route");
		}
	}

	public function check_paypal()
	{
		$pay_id = $this->request->getGet('pay_id');
		$info = $this->orders->find($pay_id); 
		$paid = $info['total_paid'];
		$amount = $this->request->getGet('pid');
		$check_processed = $this->payment->where('token', $this->request->getGet('token'))->countAllResults();
		if($check_processed > 0){
			return redirect()->to(base_url('admin/myorders'))->with('error', 'Payment Proccessed Already.');
		}
		if (isset($pay_id)) {
		        $_data = [
    		        'total_paid' => ($paid + $amount),
    		        'currency' => preg_replace("/[^a-zA-Z0-9]+/", "", $_GET['currency'])
		        ];
			if($this->orders->where('id', $pay_id)->set($_data)->update()){
		        $payment_data = [
		            'token'     =>  $this->request->getGet('token'),
		            'payment_id'=>  $this->request->getGet('paymentID'),
		            'order_id'  =>  $this->request->getGet('pay_id')
		        ];
		        $orderId = $this->payment->insert($payment_data);
		        
		        $_hot['info'] = $info;
		        $_hot['hotel'] = $this->hotels->find($info['hotel_id']);
		        
		        $orderMSG = view('inv', $_hot);
		        $this->send_mail(session()->get('email'), "Payment on WEOTRIP", $orderMSG);
    			return redirect()->to(base_url('admin/myorders'))->with('success', 'Payment of 10% Fee Successful, we would get in touch via email');
			} else {
    			return redirect()->to(base_url('admin/myorders'))->with('error', 'Payment of 10% Fee Successful, but we\'re unable to update your payment at the moment, please contact support');
			}
		}
	}

    // check room availablility //
	public function availability()
	{
		// header('Content-Type: application/json; charset=utf-8');
		$checkin 	= $_POST['checkIn'];
		$checkout 	= $_POST['checkOut'];
		$adult 		= $_POST['adult'];
		$children 	= $_POST['children'];
		session()->set('checkin', $checkin);
		session()->set('checkout', $checkout);
		$data = [
			'response'  =>  $this->hotels->findAll(12),
		];
		$endpoint = "room-list?";
		$r = $this->request;
		$q = [
			'locale' => 'en-us',
			'checkout_date' => $checkout,
			'adults_number_by_rooms'    => $adult,
			'checkin_date'  => $checkin,
			'units' => 'metric',
			'hotel_id'  => $r->getPost('hotel_id'),
			'currency'  => COUNTRY_CURRENCY,
			// 'children_number_by_rooms' => $children,
		];

		$endpoint = $endpoint . http_build_query($q);
		$rex = curl_get($endpoint, $data);
		return json_encode(['data' => $rex], JSON_PRETTY_PRINT);
	}

	public function book_now($hotel_id)
	{
		echo $hotel_id;
	}

	public function social_login()
	{
		$r = $this->request;
		if ($r->isAjax()) {
			// since the request type is ajax we can accept the incoming request as user's registeration request and insert record into :DB while sending password to users email.
			$email = $r->getPost('email');
			$firstname = $r->getPost('first_name');
			$lastname = $r->getPost('last_name');

			if ($firstname === $lastname && (explode(' ', $firstname) == true)) {
				$array = explode(' ', $firstname);
				$firstname = $array[0];
				$lastname  = $array[1];
			}

			$model = $this->user;
			$user = $model->where('email', $this->request->getVar('email'))->countAllResults();
			if ($user > 0) {
				// then user exist log user in
				$user = $model->where('email', $this->request->getVar('email'))->first();
				$this->setUserSession($user);
				session()->setFlashdata('success', 'Login Successful...');
				return json_encode(['success' => "Login Successful."]);
			} else {
				// Register user.
				$model = $this->user;
				$firstname = xx_clean($r->getPost('first_name'));
				$lastname = xx_clean($r->getPost('last_name'));
				$email = xx_clean($r->getPost('email'), 'email');
				$newdata = [
					'fullname' 		=>  $firstname . ' ' . $lastname,
					'firstname' 	=>  $firstname,
					'lastname' 		=>  $lastname,
					'email' 		=>  $email,
					'role'			=>	'customer',
					'password' 		=>  $lastname,
				];

				if ($model->insert($newdata)) {
					$user = $model->where('email', $email)->first();
					$this->setUserSession($user);
					return json_encode(['success' => "Registration Successful. You can now login with your email and $lastname as your password."]);
				}
			}
		}
	}

	/**
	 * Reset user forgotten password request
	 */
	function password_reset()
	{
		$r = $this->request;
		if ($r->getMethod() == "post") {
			$check  = $this->users->where('email', $r->getPost('email'))->countAllResults();
			if($check > 0){
				$check  = $this->users->where('email', $r->getPost('email'))->first();
				$full_name = $check['fullname'];
				$email 	= $check['email'];
				$hash 	= sha1($full_name).time();
				$url 	= base_url()."/home/psw_reset?hash=".$hash;
				$newdata = [
					'user_email' => $email,
					'reset_hash' => $hash, 
				];
				$msg 	= "Hi $full_name,<br><br>Someone probably you have just request for a password reset on our website www.weotrip.com please use the below url to reset your password <br><br> <a href='{$url}'>$url</a> ";
				$this->password_reset->insert($newdata);
				mail($email, "Password Reset on WEOTRIP", $msg);
			}
			return redirect()->to('/')->with("success", "Your password Reset URL should arrive in 5 minutes");
		}
	}

	/**
	 * process user forgotten password request
	 * from email only if reset hash is valid
	 */
	function psw_reset()
	{
		$r = $this->request;
		if ($r->getMethod() == "post") {
			if($r->getPost('password') !== $r->getPost('passconf')){
				return redirect()->back()->with("error", "Password doesn't match");
			}
			$newdata = ['password' => $r->getPost('password')];
			$this->user->where('email', $r->getPost('email'))->set($newdata)->update();
			$deleteHash  = $this->password_reset->where('user_email', $r->getPost('email'))->delete();
			return redirect()->to('/')->with("success", "Your Password has been updated successfully");
		} elseif (!isset($_GET['hash'])) {
			return redirect()->to('/')->with("error", "Invalid Request");
		} elseif(isset($_GET['hash']) && $r->getMethod() == "get") {
			$hash = $r->getGet('hash');
			// check if reset hash is valid
			$check  = $this->password_reset->where('reset_hash', $hash)->first();
			$_data['email'] = $check['user_email'];
			if (!$check or empty($check)) {
				return redirect()->to('/')->with("error", "Invalid Request");
			}
			return view('psw_reset', $_data);
		}
	}

	function enquiry()
	{
		$r = $this->request;
		if($r->getMethod() == 'post'){
		    $rules = [
    			'email'     => 'required|valid_email',
    			'full_name' => 'required',
    			'content'	=>	'required'
    		];
    
    		if (!$this->validate($rules)) {
    			$d_resx = $data['validation'] = $this->validator;
    			return redirect()->back()->with('error', "All fields are required.");
    		}
    		
			$name 	= $r->getPost('full_name');
			$email 	= $r->getPost('email');
			$body 	= $r->getPost('content');
			$hotel 	= $r->getPost('hotel_name'). " Hotel I.D: ". $r->getPost('hotel_id')."Hotel URL: ".$r->getPost('_url');
			$msg	= "Message From: $name, Email: $email <br><br>Hotel Details: <br>Hotel Name: $hotel and <br><br>Message: <br>$body";
			if($this->send_mail(conf['site_email'], "Enquiry on Hotel: ", $msg)){
				return redirect()->back()->with('success', "Enquiry sent successfully");
			}
		}
	}

	function reviews()
	{
		if ($this->request->getMethod() == 'post') {
            # code...
            $rules = [
    			'email'     =>  'required|valid_email',
    			'rating'    =>  'required',
                'author'    =>  'required',
                'email'     =>  'required',
                'title'     =>  'required',
                'pros'      =>  'required',
    		];
    
    		if (!$this->validate($rules)) {
    			$d_resx = $data['validation'] = $this->validator;
    			return redirect()->back()->with('error', "All fields are required.");
    		}
            $r = $this->request;
            foreach ($_POST as $k => $v) {
                $q[$k] = $v;
            }
            if ( $this->hotel_reviews->insert(array_filter($q))) {
                return redirect()->back()->with('success', 'Review added successfully');
            } else {
                return redirect()->back()->with('error', 'unable to review.');
            }
        } else {
			return redirect()->back();
		}
	}
	
	function tee(){
	    $ee = $this->p_earnings->where('partner_id',1)->selectSum('balance')->first();
	    var_dump($ee);
	}
	
	function getPaypalUri(){
	    return "https://ipnpb.paypal.com/cgi-bin/webscr";
	}
	
	public function verify_ipn()
    {
        if ( ! count($_POST)) {
            throw new Exception("Missing POST Data");
        }

        $raw_post_data = file_get_contents('php://input');
        file_put_contents(WRITEPATH.'cert/log_data.txt', $raw_post_data, FILE_APPEND);
        $raw_post_array = explode('&', $raw_post_data);
        $myPost = array();
        foreach ($raw_post_array as $keyval) {
            $keyval = explode('=', $keyval);
            if (count($keyval) == 2) {
                // Since we do not want the plus in the datetime string to be encoded to a space, we manually encode it.
                if ($keyval[0] === 'payment_date') {
                    if (substr_count($keyval[1], '+') === 1) {
                        $keyval[1] = str_replace('+', '%2B', $keyval[1]);
                    }
                }
                $myPost[$keyval[0]] = urldecode($keyval[1]);
            }
        }

        // Build the body of the verification post request, adding the _notify-validate command.
        $req = 'cmd=_notify-validate';
        $get_magic_quotes_exists = false;
        if (function_exists('get_magic_quotes_gpc')) {
            $get_magic_quotes_exists = true;
        }
        foreach ($myPost as $key => $value) {
            if ($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) {
                $value = urlencode(stripslashes($value));
            } else {
                $value = urlencode($value);
            }
            $req .= "&$key=$value";
        }

        // Post the data back to PayPal, using curl. Throw exceptions if errors occur.
        $ch = curl_init($this->getPaypalUri());
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
        curl_setopt($ch, CURLOPT_SSLVERSION, 6);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

        // This is often required if the server is missing a global cert bundle, or is using an outdated one.
        if ($this->use_local_certs) {
            curl_setopt($ch, CURLOPT_CAINFO, WRITEPATH . "/cert/cacert.pem");
        }
        curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'User-Agent: PHP-IPN-Verification-Script',
            'Connection: Close',
        ));
        $res = curl_exec($ch);
        if ( ! ($res)) {
            $errno = curl_errno($ch);
            $errstr = curl_error($ch);
            curl_close($ch);
            throw new Exception("cURL error: [$errno] $errstr");
        }

        $info = curl_getinfo($ch);
        $http_code = $info['http_code'];
        if ($http_code != 200) {
            throw new Exception("PayPal responded with http code $http_code");
        }

        curl_close($ch);

        // Check if PayPal verifies the IPN data, and if so, return true.
        if ($res == self::VALID) {
            return true;
        } else {
            return false;
        }
    }
    
    function webhook()
    {
        //
    }
    
    function test_ipn(){
        echo "<form method='post' action='".base_url()."/home/verify_ipn'><input name='amount'><button type='submit'>submit</button>";
    }
}
