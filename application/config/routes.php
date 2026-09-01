<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//----user registration-----
$route['aa_research'] = 'Welcome/aa_research';
$route['aaUserRegisteration'] = 'Welcome/aaUserRegisteration';
$route['verifyAA_otp'] = 'Welcome/verifyAA_otp';

$route['aa_otp_verification'] = 'Welcome/aa_otp_verification';
$route['resendAA_otp'] = 'Welcome/resendAA_otp';

$route['terms_and_condition'] = 'Welcome/terms_and_condition';
$route['aa_bharat_business'] = 'Welcome/aa_bharat_business';
$route['our_teams'] = 'Welcome/our_teams';
$route['blogs'] = 'Welcome/blogs';
$route['contact'] = 'Welcome/contact';
// $route['common'] = 'Welcome/common';
$route['authentication'] = 'Welcome/authentication';
$route['our_story'] = 'Welcome/our_story';
$route['market_research'] = 'Welcome/market_research';
$route['customer_insight'] = 'Welcome/customer_insight';
$route['data_science'] = 'Welcome/data_science';
$route['kyc'] = 'Welcome/kyc';
$route['slide'] = 'Welcome/slide';
$route['bharat_bussiness_section'] = 'Welcome/bharat_bussiness_section';
$route['contact_us'] = 'Welcome/contact_us';
$route['newYear'] = 'Welcome/newYear';
$route['singleBlog'] = 'Welcome/singleBlog';
