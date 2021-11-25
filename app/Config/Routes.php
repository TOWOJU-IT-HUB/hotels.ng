<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */ 

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index', ['as' => 'home']);
$routes->get('lang/{locale}', 'Language::index', ['as', 'lang']);
$routes->match(['get', 'post'], 'post', 	'Blog::post', 	['as' => 'blog.view']);
$routes->match(['get', 'post'], 'blog', 	'Blog::index', 	['as' => 'blog']);
$routes->match(['get', 'post'], 'search', 	'Home::search', 	['as' => 'search']);
$routes->match(['get', 'post'], 'add_order','Home::add_order', 	['as' => 'add_order']);
$routes->match(['get', 'post'], 'add_order','Home::add_order', 	['as' => 'add_order']);

#----------------------------------------------------------------------
# Authentication Routes
#----------------------------------------------------------------------

$routes->match(['get', 'post'], 'login', 	                'Home::login', 	        ['as' => 'login']);
$routes->match(['get', 'post'], 'register', 	    'Home::register', 	    ['as' => 'register']);
$routes->match(['get', 'post'], 'password_reset', 	'Home::password_reset', ['as' => 'password_reset']);
$routes->match(['get', 'post'], 'do_login',         'Home::do_login', 	    ['as' => 'check']);
$routes->match(['get', 'post'], 'contact-us',       'Home::contact_us',     ['as' => 'contact_us']);
$routes->match(['get', 'post'], 'logout',	        'Home::logout',         ['as' => 'logout']);

#----------------------------------------------------------------------
# Hotel Routes
#----------------------------------------------------------------------
$routes->group('hotels', ['filter' => 'login'], function ($routes) {
    $routes->match(['get', 'post'], 'test',	'Hotels::getHotels', ['as' => 'hotel']); 
    $routes->match(['get', 'post'], 'hotel-locations', 	    'Home::getLocations', 	['as' => 'hotel.locations']);
    // $routes->match(['get', 'post'], 'hotel', 	    'Hotels::viewHotel', 	    ['as' => 'hotels.view']);
});

$routes->match(['get', 'post'], 'hotel', 	    'Hotels::viewHotel', 	    ['as' => 'hotels.view']);


#----------------------------------------------------------------------
#   User Routes
#----------------------------------------------------------------------
$routes->group('users', ['filter' => 'login'], function ($routes) {
	$routes->match(['get', 'post'], 'dashboard', 	'Users::dashboard', 	['as' => 'dashboard']);
	$routes->match(['get', 'post'], 'profile', 		'Users::profile', 		['as' => 'profile']);
});


#----------------------------------------------------------------------
#   Admin Routes 
#----------------------------------------------------------------------

$routes->group('admin', ['filter' => 'admin'], function ($routes) {

	// Settings Routes
	$routes->match(['get', 'post'], 'settings',					'Admin::general_settings',		['as' => 'general_settings']);
	$routes->match(['get', 'post'], 'page_settings',			'Admin::page_settings',			['as' => 'page_settings']);
	$routes->match(['get', 'post'], 'booking_settings',			'Admin::booking_settings',		['as' => 'booking_settings']);
	$routes->match(['get', 'post'], 'services_settings',		'Admin::services_settings',		['as' => 'services_settings']);
	$routes->match(['get', 'post'], 'reviews_settings',			'Admin::reviews_settings',		['as' => 'reviews_settings']);
	$routes->match(['get', 'post'], 'apperance_settings',		'Admin::apperance_settings',	['as' => 'apperance_settings']);
	$routes->match(['get', 'post'], 'email_settings',			'Admin::email_settings',		['as' => 'email_settings']);
	$routes->match(['get', 'post'], 'advance_settings',			'Admin::advance_settings',		['as' => 'advance_settings']);
	
	// others
	$routes->match(['get', 'post'], 'orders',					'Admin::orders', 				['as' => 'admin.orders']);
	$routes->match(['get', 'post'], 'menu',						'Admin::menu', 					['as' => 'admin.menu']);
	$routes->match(['get', 'post'], 'all_users',				'Admin::all_users', 			['as' => 'admin.all_users']);
	$routes->match(['get', 'post'], 'partner_request',			'Admin::partner_request', 		['as' => 'admin.partner_request']);
	$routes->match(['get', 'post'], 'media',					'Admin::media', 				['as' => 'admin.media']);
	$routes->match(['get', 'post'], 'coupons',					'Admin::coupons', 				['as' => 'admin.coupons']);
	$routes->match(['get', 'post'], 'import_data',				'Admin::import_data', 			['as' => 'admin.import_data']);
	$routes->match(['get', 'post'], 'seo',						'Admin::seo', 					['as' => 'admin.seo']);
	$routes->match(['get', 'post'], 'types',					'Admin::types', 				['as' => 'admin.types']);
	$routes->match(['get', 'post'], 'amenities',				'Admin::amenities', 			['as' => 'admin.amenities']);

});


$routes->group('admin', ['filter' => 'login'], function ($routes) {
	$routes->match(['get', 'post'], 'dashboard', 				'Admin::dashboard', 			['as' => 'admin.dashboard']);
	$routes->match(['get', 'post'], 'profile', 					'Admin::profile', 				['as' => 'admin.profile']);
	$routes->match(['get', 'post'], 'notification',				'Admin::notifications',			['as' => 'admin.notification']);
	$routes->match(['get', 'post'], 'myorders',					'Admin::myorders',				['as' => 'admin.my_orders']);
	$routes->match(['get', 'post'], 'order',					'Admin::order',					['as' => 'admin.order']);
	$routes->match(['get', 'post'], 'wishlist',					'Admin::wishlist', 				['as' => 'admin.wishlist']);
	$routes->match(['get', 'post'], 'analytics',				'Admin::analytics', 			['as' => 'admin.analytics']);
	$routes->match(['get', 'post'], 'withdrawal',				'Admin::withdrawal', 			['as' => 'admin.withdrawal']);
	$routes->match(['get', 'post'], 'partners_earnings',		'Admin::partners_earnings', 	['as' => 'admin.partners_earnings']);

	// $routes->match(['get', 'post'], 'all_posts',				'Admin::all_posts', 			['as' => 'admin.all_posts']);

	// posts
	$routes->match(['get', 'post'], 'all_posts',				'Admin::all_posts', 			['as' => 'admin.all_posts']);
	$routes->match(['get', 'post'], 'add_post',					'Admin::add_post', 				['as' => 'admin.add_new']);
	$routes->match(['get', 'post'], 'category',					'Admin::post_category',			['as' => 'admin.category']);
	$routes->match(['get', 'post'], 'tags',						'Admin::post_tags', 			['as' => 'admin.tags']);
	$routes->match(['get', 'post'], 'comments',					'Admin::comments',				['as' => 'admin.comments']);

	// pages
	$routes->match(['get', 'post'], 'all_pages',				'Admin::all_pages', 			['as' => 'admin.all_pages']);
	$routes->match(['get', 'post'], 'add_page',					'Admin::add_page', 				['as' => 'admin.add_page']);
	$routes->match(['get', 'post'], 'edit_page',				'Admin::edit_page',				['as' => 'admin.page_edit']);

	// hotels
	$routes->match(['get', 'post'], 'all_hotels',				'Admin::all_hotels', 			['as' => 'admin.all_hotels']);
	$routes->match(['get', 'post'], 'all_orders',				'Admin::all_orders', 			['as' => 'admin.all_orders']);
	$routes->match(['get', 'post'], 'add_new_hotels',			'Admin::add_new_hotels', 		['as' => 'admin.add_new_hotels']);
	$routes->match(['get', 'post'], 'all_apartments',			'Admin::all_apartments', 		['as' => 'admin.all_apartments']);
	$routes->match(['get', 'post'], 'property_type',			'Admin::property_type', 		['as' => 'admin.property_type']);
	$routes->match(['get', 'post'], 'facilities',				'Admin::facilities', 			['as' => 'admin.facilities']);
	$routes->match(['get', 'post'], 'hotel_services',			'Admin::hotel_services', 		['as' => 'admin.hotel_services']);
	$routes->match(['get', 'post'], 'room_facilities',			'Admin::room_facilities', 		['as' => 'admin.room_facilities']);
	$routes->match(['get', 'post'], 'rooms',					'Admin::rooms', 				['as' => 'admin.rooms']);
	$routes->match(['get', 'post'], 'manage-rooms',				'Admin::manage_rooms',			['as' => 'admin.manage_rooms']);
});


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
