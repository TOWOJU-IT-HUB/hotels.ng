<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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
use App\Models\PasswordReset;
use App\Models\Rooms;
use App\Models\Wishlist;
use App\Models\Withdrawal;
use Omnipay\PayPal as PayPal;
use App\Models\TransactionId;


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
        $this->paypal     = \Config\Services::paypal();
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
        $this->rooms            = new Rooms();
        $this->hotels           = new HotelsModel();
        $this->users            = $this->user = new Users();
        $this->city_list        = $this->cities = new CityList();
        $this->hotel_reviews    = new HotelsReview();
        $this->hotel_facilities = new HotelsFacilities();
        $this->hotels_images    = new HotelsImages();
        $this->wishlist         = new Wishlist();
        $this->withdrawal       = new Withdrawal();
        $this->password_reset   = new PasswordReset();
        $this->payment          = new TransactionId();
        // $this->paypal           = $this->PaypalExpress();


        $this->_id              = $this->user_id = session()->get('id');

        $settings               = $this->settings->find(1);
        $curr_user              = $this->users->find($this->_id);

        // #--------------------------------------------
        // #   Constants from the settings ::DB 
        // #--------------------------------------------

        if(session()->get('currency') == true){
            defined('COUNTRY_CURRENCY') || define('COUNTRY_CURRENCY', session()->get('currency'));
        } else {
            defined('COUNTRY_CURRENCY') || define('COUNTRY_CURRENCY', country_currency());
        }
        defined('conf') || define('conf', $settings);
        defined('curr_user') || define('curr_user', $curr_user);
        defined('RAPID_API_KEY')    || define('RAPID_API_KEY', conf['rapid_api_key']);

        define('CLIENT_ID', conf['paypal_client_id']);
        define('CLIENT_SECRET', conf['paypal_client_secret']);

        define('PAYPAL_RETURN_URL', base_url('success'));
        define('PAYPAL_CANCEL_URL', base_url('cancel'));
        define('PAYPAL_ENV', "production"); // production OR sandbox
        define('PAYPAL_CURRENCY', 'GBP'); // set your currency here

        $this->gateway = $this->paypal;
        $this->gateway->setClientId(CLIENT_ID);
        $this->gateway->setSecret(CLIENT_SECRET);
        $this->gateway->setTestMode(false); //set it to 'false' when go live

    }

    public function send_mail($to, $subject, $msg, $psw_link=null, $action=null)
    {
        // To send HTML mail, the Content-type header must be set
        $from = "support@weotrip.com";
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
         
        // Create email headers
        $headers .= 'From: '.$from."\r\n".
            'Reply-To: '.$from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $msg, $headers);
         
        // Compose a simple HTML email message
        return true; // "Email sending bypassed by configuration";
    }
}
