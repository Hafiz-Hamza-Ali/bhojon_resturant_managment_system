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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
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
$route["default_controller"] = "hungry";
$route['login']  = "dashboard/auth/index";
$route['logout'] = "dashboard/auth/logout";
$route['/'] = "hungry";
$route['menu'] = "hungry/menu";
$route['menu/(:any)'] = "hungry/menu/$1";
$route['searchitem'] = "hungry/searchitem";
$route['details/(:any)/(:any)'] = "hungry/details/$1/$2";
$route['reservation'] = "hungry/reservation";
$route['cart'] = "hungry/cart";
$route['checkcoupon'] = "hungry/checkcoupon";
$route['checkout'] = "hungry/checkout";
$route['payments/(:any)'] = "hungry/payments/$1";
$route['payment-process'] = "hungry/payments_process";
$route['mylogin'] = "hungry/login";
$route['signup'] = "hungry/signup";
$route['orderdelevered/(:any)'] = "hungry/orderdelevered/$1";
$route['about'] = "hungry/about";
$route['contact'] = "hungry/contact";
$route['privacy'] = "hungry/privacy";
$route['terms'] = "hungry/terms";
$route['myprofile'] = "hungry/myprofile";
$route['myorderlist'] = "hungry/myorderlist";
$route['vieworder/(:any)'] = "hungry/vieworder/$1";
$route['myoreservationlist'] = "hungry/myoreservationlist";
$route['app-terms'] = "hungry/termsqr";
$route['app-refund-policty'] = "hungry/refundpolicyqr";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Qr Route


/////////////Super-Admin Panel Routes Start//////////////

$route['admin/store'] = '';
$route['admin/dashboard'] = "admin/superadmin/index";
$route['admin/login'] = "admin/login/index";
$route['admin/logout'] = "admin/login/logout";
$route['admin/store/post'] = "admin/login/post";
$route['admin/store/list'] = "admin/login/list";
$route['admin/store/delete'] = "admin/login/delete";
$route['admin/store/edit'] = "admin/login/edit";
$route['admin/store/update'] = "admin/login/update";
$route['admin/products'] = "admin/login/products";
$route['admin/products'] = "admin/login/products";
$route['admin/store/create'] = "admin/login/create";
$route['admin/web_setting/create'] = "admin/login/web_view";
$route['admin/web_setting/add_banner'] = "admin/login/add_banner";
$route['admin/login/delete_banner/(:bannerid)'] = "admin/login/delete_banner";
$route['admin/web_setting/common'] = "admin/login/common_view";
$route['admin/web_setting/payment'] = "admin/login/payment_view";
$route['admin/web_setting/common'] = "admin/login/menusetting";
$route['admin/web_setting/common_create'] = "admin/login/common_create";
$route['admin/web_setting/payment_create'] = "admin/login/payment_create";
$route['admin/profile_setting'] = "admin/login/profile_setting";
$route['admin/login/updatepassword'] = "admin/login/updatepassword";
$route['admin/web_setting/menu_create'] = "admin/login/createmenu";
$route['admin/web_setting/email_config_setup'] = "admin/login/email_config_setup";
$route['admin/web_setting/email_config_save'] = "admin/login/email_config_save";
$route['admin/view/users'] = "admin/login/users";
$route['admin/users/edit'] = "admin/login/edits";
$route['admin/users/user_update'] = "admin/login/user_update";
$route['admin/user/delete'] = "admin/login/delete_user";
$route['admin/login/editbanner'] = "admin/login/editBanner";
/////////////Super-Admin Panel Routes End//////////////

//set modules/config/routes.php
$modules_path = APPPATH.'modules/';     
$modules = scandir($modules_path);

foreach($modules as $module)
{
    if($module === '.' || $module === '..') continue;
    if(is_dir($modules_path) . '/' . $module)
    {
        $routes_path = $modules_path . $module . '/config/route.php';
        if(file_exists($routes_path))
        {
            if (file_exists(APPPATH.'modules/'.$module.'/assets/data/env')){
			require($routes_path);
			}
        }
        else
        {
            continue;
        }
    }
}

