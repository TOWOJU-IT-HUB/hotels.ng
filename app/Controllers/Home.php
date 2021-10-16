<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
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
				
			}
		}
		// return view('customers/register', $data);
	}
	
	public function page()
	{
		return view('customers/dashboard');
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

	public function logout()
	{
		session_destroy();
		return redirect('home');
	}
}
