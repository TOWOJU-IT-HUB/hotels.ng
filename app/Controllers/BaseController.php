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
        // $this->paypal           = $this->PaypalExpress();


        $this->_id              = $this->user_id = session()->get('id');

        $settings               = $this->settings->find(1);
        $curr_user              = $this->users->find($this->_id);

        // #--------------------------------------------
        // #   Constants from the settings ::DB 
        // #--------------------------------------------
        defined('conf') || define('conf', $settings);
        defined('curr_user') || define('curr_user', $curr_user);

        // defined('COUNTRY_CURRENCY') || define('COUNTRY_CURRENCY', "USD");
        defined('RAPID_API_KEY')    || define('RAPID_API_KEY', conf['rapid_api_key']);
        
        defined('COUNTRY_CURRENCY') || define('COUNTRY_CURRENCY', country_currency());

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

    public function send_mail($to, $subject, $msg, $psw_link=null, $action=null)
    {
        // if(!empty(conf['email_host'])){
        //     $mail = new PHPMailer(true);

        //     try {
        //         //Server settings
        //         if(isset(curr_user['fullname'])){
        //             $full_name = curr_user['fullname'];
        //         } else {
        //             $full_name = "WEOTRIP USER";
        //         }
        //         // $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
        //         $mail->isSMTP();  //Send using SMTP
        //         $mail->Host       = conf['email_host']; //Set the SMTP server to send through
        //         $mail->SMTPAuth   = true;  //Enable SMTP authentication
        //         $mail->Username   = conf['email_username']; //SMTP username
        //         $mail->Password   = conf['email_password'];    //'Adedayo201@';                               //SMTP password
        //         $mail->SMTPSecure = conf['email_enc']; //PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        //         $mail->Port       = conf['email_port']; //465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //         //Recipients
        //         $mail->setFrom(conf['email_username'], "WEOTRIP LLC");
        //         $mail->addAddress($to, $full_name);  
        //         $_data['msg'] = $msg;
        //         if($psw_link != null){
        //             $_data['psw_link']  =   $psw_link;
        //             $_data['action']    =   $action;
        //         }
        //         //Content
        //         $mail->isHTML(true);                                  //Set email format to HTML
        //         $mail->Subject = $subject;
        //         $mail->Body    = view('test', $_data);

        //         if($mail->send()){
        //             return "Email sent successfully";
        //         }
        //     } catch (Exception $e) {
        //         error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        //         return "sorry we are unable to send your email";
        //     }
        // }
        return "Email sending bypassed by configuration";
    }
}
