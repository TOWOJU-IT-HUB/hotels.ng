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
				} elseif (session()->get('role') == 'user') {
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
				print_r($data['validation']);
				exit;
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
				}
				return json_encode(['success' => 'Registration Successful.']);
			}
		}
		return redirect('/');
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
		echo view('parts/header', $data);
		echo view('contact');
		echo view('parts/footer');
	}

	function add_order()
	{
		// receive post request and insert data into ::DB
		$r = $this->request;
		if ($r->getMethod() == 'post') {
			foreach ($_POST as $k => $v) {
				$q[$k] = $v;
			}
			if ($this->orders->insert($q)) {
				return json_encode(['success' => "Success Booking request sent successfully"]);
			} else {
				return json_encode(['error' => "Unable to process your booking request at this time."]);
			}
		}
	}

	function invoice($inv_id)
	{
		try {
			$response = $this->gateway->purchase(array(
				'amount' => 1000,
				'currency' => PAYPAL_CURRENCY,
				'returnUrl' => PAYPAL_RETURN_URL,
				'cancelUrl' => PAYPAL_CANCEL_URL,
			))->send();

			if ($response->isRedirect()) {
				$response->redirect(); // this will automatically forward the customer
			} else {
				// not successful
				// echo $response->getMessage();
				var_dump($response);
			}
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		exit;
		// $return_url = "http://example.com/payment-successful.html";
		// $cancel_url = "http://example.com/payment-successful.html";
		// $notify_url = "http://example.com/payment-successful.html";

		$post_data = [
			"purchase_units" => [
				'application_context' => [
					"cancel_url" => "https://example.com/cancel",
					"return_url" => "https://example.com/return",
				],
				"intent"	=> "CAPTURE",
				'amount' => [
					'currency_code' => 'USD',
					'value' => '100.00',
				],
			],
		];

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'https://api-m.sandbox.paypal.com/v2/checkout/orders');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));

		$headers = array();
		$headers[] = 'Content-Type: application/json';
		$headers[] = 'Authorization: Bearer Access-Token';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}
		curl_close($ch);

		return view('test');
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
					foreach($result as $user) {
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
}
