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
		// get hotels from booking.
		$endpoint = "search?";
		$q = [
			'locale' => 'en-us',
			'room_number' => 1,
			'checkout_date' => '2021-11-26',
			'order_by' => 'distance',
			'units' => 'metric',
			'adults_number' => 2,
			'filter_by_currency' => 'NGN',
			'checkin_date' => '2021-11-25',
			'dest_type' => 'city',
			'dest_id' => '-1997013',
			'children_number' => 2,
			'page_number' => 0,
			'children_ages' => '5'
		];
		$r = $this->request;

		$city = $r->getGet('location');
		
		$this->hotels->where('city', $city);
		if (!empty($_GET['country'])) {
			$this->hotels->where('city', $city);
		}

		if (!empty($_GET['country'])) {
			$this->hotels->Where('country_trans',$r->getGet('country'));
		}
	
		if(!empty($r->getGet('room_type'))){
			if(is_array($r->getGet('room_type'))){
				$arr = explode(",", implode($r->getGet('room_type')));
				foreach($arr as $room_type){
					$this->hotels->where('accommodation_type_name', $room_type);
				}
			} else {
				$this->hotels->where('accommodation_type_name', $r->getGet('room_type'));
			}
		}

		if(!empty($r->getGet('price_range'))){
			$pricy = explode(";", $r->getGet('price_range'));
			$min_price = $pricy[0];
			$max_price = $pricy[1];
			$this->hotels->where(" `min_total_price` >= $min_price AND `min_total_price` <= $max_price");
		}
		
		// echo "<pre>";
		// print_r($search); exit;
		// $search = $this->hotels->paginate(9);

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
				return redirect()->back()->with('error', 'Login failed.');
			} else {
				//Confirm user credentials and Start a Session//
				$model = $this->user;
				$user = $model->where('email', $this->request->getVar('email'))->first();
				$this->setUserSession($user);
				session()->setFlashdata('success', 'Login Successful...');
				// if (session()->get('role') == 'admin') {
				// 	$uri = base_url(route_to('admin.dashboard'));
				// } elseif (session()->get('role') == 'user') {
				// 	$uri = base_url(route_to('dashboard'));
				// }
				return redirect()->to(base_url('admin/dashboard'))->with('success', 'Login Successful.');
			}
		}
		return view('login', $data);
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
				// print_r($data['validation']);
				// exit;
			} else {

				//save user details into DB//
				$model = $this->user;
				$firstname = xx_clean($this->request->getPost('firstname'));
				$lastname = xx_clean($this->request->getPost('lastname'));
				$email = xx_clean($this->request->getPost('email'), 'email');
				$newdata = [
					// 'idz'	=>	1,
					'fullname' 		=>  $firstname . ' ' . $lastname,
					'email' 		=>  $email,
					'role'			=>	'customer',
					'password' 		=>  $this->request->getPost('password'),
				];

				if ($model->insert($newdata)) {
					$user = $model->where('email', $email)->first();
					$this->setUserSession($user);
					return redirect()->back()->with('success', 'Registration Successful.');
				}
			}
		}
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
			$msg 		= $r->getPost('email'). "\n \n";
			$full_name 	= $r->getPost('full_name'). "\n \n";
			$subject 	= $r->getPost('subject'). "\n \n";
			$content 	= $r->getPost('content'). "\n \n";

			$send_msg = $msg.$full_name.$subject.$content;

			$adminEmail = conf['contact_us_email'];
			if(mail($adminEmail, "Contact Us Form", $send_msg)) {
                return redirect()->back()->with('success', "Request sent successfully");
            } else {
                return redirect()->back()->with('error', "Unable to submit your Contact request");
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
		if($r->getMethod() == 'post')
		{
			foreach ($_POST as $k => $v) {
				$q[$k] = $v;
			}
			if($this->partners->insert($q)) {
                return redirect()->back()->with('success', "Request sent successfully");
            } else {
                return redirect()->back()->with('error', "Unable to submit your Partnership request");
            }
		}
		echo view('parts/header', $data);
		echo view('partner');
		echo view('parts/footer');
	}

	function add_order($hotel_id=null)
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
			foreach ($_POST as $k => $v) {
				$q[$k] = $v;
				$q['booking_from'] =  ($r->getPost('checkin'));
				$q['booking_to'] =  ($r->getPost('checkout'));
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

	public function invoice($inv_id, $action = null)
	{
		$info = $this->orders->find($inv_id);
		$hotel = $this->hotels->where('hotel_id', $info['hotel_id'])->first();
		$total = $hotel['min_total_price'] - $info['total_paid'];
		$portion = 10;
		$percentage = ($portion / 100) * $total; // 20
		$amount = base64_encode($percentage);
		if ($action == 'pay') {
			try {
				$response = [];
				$response = $this->gateway->purchase(array(
					'amount' => round($percentage, 2), //intval($hotel['min_total_price']),
					'currency' => $hotel['currencycode'],
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
			} catch (Exception $e) {
				echo $e->getMessage();
				die('can not process payment at the moment please contact the support');
			}
			exit;
		}
		$data = [
			'info'	=>	$info,
			'hotel'	=>	$hotel,
			'_id'	=>	$inv_id,
			'amount' => $percentage,
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
		$data[] = null;
		$data['new'] = [];
		// $amount = 10000;
		// $a = convertedCurrency($amount, 'INR');
		// echo "<pre>";
		// print_r($a);
		// return view('test', $data);

		return country_currency();
	}

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
		// if(!isset($_SERVER['HTTP_REFERER'])){
		// 	// redirect them to your desired location
		// 	http_response_code(404);
		// 	header('Location: '.base_url());
		// 	return redirect()->to(base_url())->with('error', 'Unknown Request');
		// }
		$pay_id = $this->request->getGet('pay_id');
		$info = $this->orders->find($pay_id);
		$paid = $info['total_paid'];
		$amount = base64_decode($this->request->getGet('am'));
		if(isset($pay_id)){
			$this->orders->where('id', $pay_id)->set(['total_paid' => ($paid+$amount)])->update();
			return redirect()->to(base_url())->with('success', 'Payment of 10% Fee Successful, we would get intouch via email');
		}
	}

	public function availability()
	{
		// header('Content-Type: application/json; charset=utf-8');
		$checkin 	= $_POST['checkIn'];
		$checkout 	= $_POST['checkOut'];
		$adult 		= $_POST['adult'];
		$children 	= $_POST['children'];
		$data = [
            'response'  =>  $this->hotels->findAll(12),
        ];     
        $endpoint = "room-list?";
        $r = $this->request; 
        $q = [
            'locale'=> 'en-us',
            'checkout_date' => $checkout,
            'adults_number_by_rooms'    => $adult,
            'checkin_date'  => $checkin,
            'units' => 'metric',
            'hotel_id'  => $r->getPost('hotel_id'),
            'currency'  => COUNTRY_CURRENCY,
			// 'children_number_by_rooms' => $children,
        ];

        $endpoint = $endpoint.http_build_query($q);
        $rex = curl_get($endpoint, $data);
        return json_encode(['data' => $rex], JSON_PRETTY_PRINT);
	}

	public function book_now($hotel_id)
	{
		echo $hotel_id;
	}
}