<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller']    = 'web/load';
$route['404_override']          = 'errors/custom_404';
$route['translate_uri_dashes']  = FALSE;



// ============================ web routes
$route['home']                      = 'web/load';
$route['contact-us']                = 'web/load/contact_us';
$route['about']                     = 'web/load/about';

// ============================ admin routes
$route['admin']                     = 'admin/Admin/index';
$route['admin/login']               = 'admin/Admin/login';
$route['admin/logout']              = 'admin/Admin/logout';
$route['admin/dashboard']           = 'admin/Admin/dashboard';
$route['admin/gallery']             = 'admin/Admin/gallery';
$route['admin/events']              = 'admin/Admin/events';
$route['admin/events']              = 'admin/Admin/events';
$route['admin/events/add']          = 'admin/Admin/events_add';
$route['admin/events/edit']         = 'admin/Admin/events_update';
$route['admin/causes']              = 'admin/Admin/causes';
$route['admin/causes/add']          = 'admin/Admin/causes_add';
$route['admin/causes/edit']         = 'admin/Admin/causes_update';
$route['admin/pages/']              = 'admin/Pages/index';
$route['admin/messages']            = 'admin/Pages/message';
$route['admin/pages/home']          = 'admin/Pages/home';
$route['admin/pages/projects']      = 'admin/Pages/projects';
$route['admin/pages/projects/add']  = 'admin/Pages/projects_add';
$route['admin/pages/projects/edit'] = 'admin/Pages/projects_update';
$route['admin/pages/donors']        = 'admin/Pages/donors';
$route['admin/pages/donors/add']    = 'admin/Pages/donors_add';
$route['admin/pages/volunteers']    = 'admin/Pages/volunteers';
$route['admin/pages/volunteers/add']= 'admin/Pages/volunteers_add';
$route['admin/pages/our/team']      = 'admin/Pages/our_team';
$route['admin/pages/our/team/add']  = 'admin/Pages/our_team_add';
$route['admin/blog']                = 'admin/Pages/blog';
$route['admin/add/blog']            = 'admin/Pages/blog_add';
$route['admin/pages/volunteers']    = 'admin/Pages/volunteers';
$route['admin/pages/volunteers/add']= 'admin/Pages/volunteers_add';
$route['admin/pages/our/team']      = 'admin/Pages/our_team';
$route['admin/pages/our/team/add']  = 'admin/Pages/our_team_add';
$route['admin/donations']           = 'admin/Pages/donation';
$route['admin/webhook']             = 'admin/Admin/rezorpay_webhook';



