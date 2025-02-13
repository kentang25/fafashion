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
$route['default_controller'] = 'fafashion';
$route['404_override'] = 'notfound';
$route['translate_uri_dashes'] = FALSE;

// --- admin ----

$route['admin'] = 'fa_admin/dashboard';
$route['admin/data-barang'] = 'fa_admin/data_barang';
$route['admin/data-barang/edit/(:any)'] = 'fa_admin/data_barang/edit/$1';
$route['admin/data-barang/delete/(:any)'] = 'fa_admin/data_barang/delete/$1';
$route['admin/data-barang/detail/(:any)'] = 'fa_admin/data_barang/detail/$1';
$route['admin/cart-data'] = 'fa_admin/data_cart';
$route['admin/orders-data'] = 'fa_admin/data_order';
$route['admin/transaksi-data'] = 'fa_admin/data_transaksi';

$route['admin/searching'] = 'fa_admin/data_barang/search';
$route['admin/searching_cart'] = 'fa_admin/data_cart/search_cart';

// --- end admin ---

// --- auth admin ---
$route['admin/register'] = 'fa_admin/admin_auth/auth_admin/register';
$route['admin/login'] = 'fa_admin/admin_auth/auth_admin/login';

// --- end auth admin ---

// --- auth fafashion ---

$route['register'] = 'fafashion/auth_user/register';
$route['login'] = 'fafashion/auth_user/login';
$route['logout'] = 'fafashion/auth_user/logout';

// --- end auth ---

// --- fafashion ---

$route['wanita'] = 'fafashion/f_wanita';
$route['pria'] = 'fafashion/f_pria';
$route['shop'] = 'fafashion/f_shop';
$route['kontak'] = 'fafashion/kontak';

// --- kategori ---

$route['shop/shoes'] = 'fafashion/kategori/shoes_wanita';
$route['shop/tshirt'] = 'fafashion/kategori/tshirt_wanita';

// --- cart shop ---
$route['add-cart/(:any)'] = 'fafashion/cart/addCart/$1';
$route['cart-shop'] = 'fafashion/cart/cart_shop';
$route['cart/update_qty'] = 'fafashion/cart/update_qty';

// --- pembayaran ---

$route['pembayaran/order'] = 'fafashion/pembayaran/order';
$route['pembayaran/transaksi/(:any)'] = 'fafashion/pembayaran/transaksi/$1';
