<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller']    = 'web/load';
$route['404_override']          = 'errors/custom_404';
$route['translate_uri_dashes']  = FALSE;



// ============================ web routes
$route['home']                          = 'web/load';
$route['contact-us']                    = 'web/load/contact_us';
$route['about']                         = 'web/load/about';
$route['product']                       = 'web/load/product';
$route['updates']                       = 'web/load/updates';

// ============================ admin routes
$route['admin']                         = 'admin/Admin/index';
$route['admin/home']                    = 'admin/pages/home';
$route['admin/products']                = 'admin/pages/product';
$route['admin/product/add']             = 'admin/pages/product_add';
$route['admin/login']                   = 'admin/Admin/login';
$route['admin/logout']                  = 'admin/Admin/logout';
$route['admin/messages']                = 'admin/Admin/messages';
$route['admin/alerts']                  = 'admin/Admin/alerts';
$route['admin/infrastructure']          = 'admin/Admin/infrastructure';
$route['admin/updates']                 = 'admin/Admin/updates';
$route['admin/about']                   = 'admin/Admin/about';
$route['admin/product/features/add']    = 'admin/pages/product_feature_add';


