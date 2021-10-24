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
use App\Models\Wishlist;
use App\Models\Withdrawal;

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

        $session = \Config\Services::session();
        $this->db = \Config\Database::connect();
        $language = \Config\Services::language();
        $language->setLocale($session->lang);

        #--------------------------------------------
        #   Variables and Models $this->coupons
        #--------------------------------------------
        $this->settings         = new Settings();
        $this->orders           = new Orders();
        $this->blog             = new Blog();
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



        $settings               = $this->settings->find(1);
        $this->_id              = $this->user_id = session()->get('id');

        #--------------------------------------------
        #   Constants from the settings ::DB 
        #--------------------------------------------
        defined('conf') || define('conf', $settings);
        // defined('COUNTRY_CURRENCY') || define('COUNTRY_CURRENCY', "USD");
        defined('RAPID_API_KEY')    || define('RAPID_API_KEY', conf['rapid_api_key']);
        defined('COUNTRY_CURRENCY') || define('COUNTRY_CURRENCY', country_currency());
    }
}