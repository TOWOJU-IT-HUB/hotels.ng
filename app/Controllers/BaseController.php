<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
#----- Models ---------
use \App\Models\Settings;
use \App\Models\Users;
use \App\Models\Blog;
use \App\Models\Orders;
use \App\Models\Pages;
use \App\Models\Notifications;
use \App\Models\PartnersEarnings;
use \App\Models\Partners; 
use \App\Models\Categories; 
use \App\Models\Apartments;
use App\Models\CityList;
use \App\Models\Gateways; 
use \App\Models\Comments; 
use \App\Models\Coupons;
use App\Models\DestinationsID;
use App\Models\HotelsFacilities;
use App\Models\HotelsImages;
use App\Models\HotelsModel;
use App\Models\HotelsReview;
use App\Models\Menu;
use App\Models\Wishlist;
use App\Models\Withdrawal;
use Omnipay\PayPal as PayPal;


#-------------------------
// use Omnipay\

/**
 * Class BaseController  
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['url', 'text', 'form'];

    /**
     * Constructor.BaseController
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();

        $session        = \Config\Services::session();
        $this->db       = \Config\Database::connect();
        $language       = \Config\Services::language();
        $this->paypal 	= \Config\Services::paypal();
        $language->setLocale($session->lang);

        #--------------------------------------------
        #   Variables and Models $this->coupons
        #--------------------------------------------
        $this->settings         = new Settings();
        $this->orders           = new Orders();
        $this->blog             = new Blog();
        $this->menu             = new Menu();
        $this->page             = new Pages();
        $this->partners         = new Partners();
        $this->comments         = new Comments();
        $this->coupon           = new Coupons();
        $this->gateways         = new Gateways();
        $this->categories       = new Categories();
        $this->notifications    = new Notifications();
        $this->apartments       = new Apartments();
        $this->p_earnings       = new PartnersEarnings();
        $this->dest             = new DestinationsID();
        $this->hotels           = new HotelsModel();
        $this->users            = $this->user = new Users();
        $this->city_list        = $this->cities = new CityList();
        $this->hotel_reviews    = new HotelsReview();
        $this->hotel_facilities = new HotelsFacilities();
        $this->hotels_images    = new HotelsImages();
        $this->wishlist         = new Wishlist();
        $this->withdrawal       = new Withdrawal();
        // $this->paypal           = $this->PaypalExpress();



        $settings               = $this->settings->find(1);
        $this->_id              = $this->user_id = session()->get('id');

        #--------------------------------------------
        #   Constants from the settings ::DB 
        #--------------------------------------------
        defined('conf') || define('conf', $settings);
        defined('COUNTRY_CURRENCY') || define('COUNTRY_CURRENCY', "USD");
        defined('RAPID_API_KEY')    || define('RAPID_API_KEY', conf['rapid_api_key']);
        // defined('COUNTRY_CURRENCY') || define('COUNTRY_CURRENCY', country_currency());
        
        define('CLIENT_ID', conf['paypal_client_id']);
        define('CLIENT_SECRET', conf['paypal_client_secret']);
        
        define('PAYPAL_RETURN_URL', base_url('success'));
        define('PAYPAL_CANCEL_URL', base_url('cancel'));
        define('PAYPAL_CURRENCY', 'USD'); // set your currency here
        
        $this->gateway = $this->paypal;
        $this->gateway->setClientId(CLIENT_ID);
        $this->gateway->setSecret(CLIENT_SECRET);
        $this->gateway->setTestMode(true); //set it to 'false' when go live
    }
}

class PaypalExpress{ 
    public $paypalEnv       = 'production'; // PAYPAL_SANDBOX?'sandbox' : 'production' 
    public $paypalURL       = 'https://api.paypal.com/v1/';  //PAYPAL_SANDBOX?'https://api.sandbox.paypal.com/v1/':'https://api.paypal.com/v1/'; 
    public $paypalClientID  = "Ac3USf803MQxxrQg3_f8xR4NDfse0zHETobbxdNNFFYSfO-hC_6LUAHdN4yqdwTfI8ztlgXDNWe2jvT_"; // PAYPAL_API_CLIENT_ID; 
    private $paypalSecret   = "EERhZCbms8sWu88UzHX-9ovbxRd-HXVas6IqQbRVEMeRZmbDEhFsf77uyMF4sQYTzLMXXHhS4b8wLasF"; // PAYPAL_API_SECRET; 
     
    public function validate($paymentID, $paymentToken, $payerID, $productID){ 
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $this->paypalURL.'oauth2/token'); 
        curl_setopt($ch, CURLOPT_HEADER, false); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
        curl_setopt($ch, CURLOPT_POST, true); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_USERPWD, $this->paypalClientID.":".$this->paypalSecret); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials"); 
        $response = curl_exec($ch); 
        curl_close($ch); 
         
        if(empty($response)){ 
            return false; 
        }else{ 
            $jsonData = json_decode($response); 
            $curl = curl_init($this->paypalURL.'payments/payment/'.$paymentID); 
            curl_setopt($curl, CURLOPT_POST, false); 
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 
            curl_setopt($curl, CURLOPT_HEADER, false); 
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt($curl, CURLOPT_HTTPHEADER, array( 
                'Authorization: Bearer ' . $jsonData->access_token, 
                'Accept: application/json', 
                'Content-Type: application/xml' 
            )); 
            $response = curl_exec($curl); 
            curl_close($curl); 
             
            // Transaction data 
            $result = json_decode($response); 
             
            return $result; 
        } 
     
    } 
}