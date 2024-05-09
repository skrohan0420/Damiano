<?php
defined('BASEPATH') or exit('No direct script access allowed');
define('SHOW_DEBUG_BACKTRACE', TRUE);
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0755);
define('FOPEN_READ', 'rb');
define('FOPEN_READ_WRITE', 'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 'ab');
define('FOPEN_READ_WRITE_CREATE', 'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');
define('EXIT_SUCCESS', 0); // no errors
define('EXIT_ERROR', 1); // generic error
define('EXIT_CONFIG', 3); // configuration error
define('EXIT_UNKNOWN_FILE', 4); // file not found
define('EXIT_UNKNOWN_CLASS', 5); // unknown class
define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
define('EXIT_USER_INPUT', 7); // invalid user input
define('EXIT_DATABASE', 8); // database error
define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code
define('rest_controller_path', 'libraries/RestController.php');
define('DATA', 'data');
define('HTTP_STATUS', 'http_status');
define('key_status', 'status');
define('key_message', 'message');
define('key_data', 'data');
define('http_ok', 200);
define('header_allow_origin', 'Access-Control-Allow-Origin: *');
define('header_allow_headers', 'Access-Control-Allow-Headers: *');
define('header_allow_methods', "Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE, PATCH");
define('helper_form', 'form');
define('helper_url', 'url');
define('field_date', 'Y-m-d');
define('field_date_time', 'Y-m-d H:i:s');
define('field_location', 'Asia/Kolkata');



//////////////////////////////////////////////__URL

define('BASE_URL', 'http://localhost/Damiano/');

//////////////////////////////////////////////__PAGEDATA
define('PAGE_DATA_WEB', ['data_page' => [], 'data_header' => ['header_link' => [], 'title' => '', 'projects' => [], 'header' => [], 'sidebar' => [], 'site' => 'web'], 'data_footer' => ['footer_link' => [], 'footer' => [], 'site' => 'web']]);
define('PAGE_DATA_ADMIN', ['data_page' => [], 'data_header' => ['header_link' => [], 'title' => '', 'header' => [], 'sidebar' => [], 'site' => 'admin'], 'data_footer' => ['footer_link' => [], 'footer' => [], 'site' => 'admin']]);

/////////////////////////////////////////////__IMG_UPLOAD_CONFIG
define('IMG_FILE_TYPES', 'gif|jpg|png|JPG|jpeg|JPEG|PNG');
define('IMG_FILE_SIZE', 5048);

/////////////////////////////////////////////__MODELS
define('MODEL_COMMON', 'Common_model');
define('MODEL_ADMIN', 'Admin_model');
define('MODEL_PAGES', 'Pages_model');

////////////////////////////////////////////__TABLES
define('TABLE_USER', 'users');
define('TABLE_QUOTES', 'quotes');
define('TABLE_VIDEOS', 'videos');
define('TABLE_ABOUT', 'about');
define('TABLE_MISSION_VISION', 'mission_vision');
define('TABLE_SERVICES', 'services');
define('TABLE_PROJECTS', 'projects');
define('TABLE_DONORS', 'donors');
define('TABLE_VOLUNTEERS', 'volunteers');
define('TABLE_OUR_TEAM', 'our_team');
define('TABLE_GALLERY', 'gallery_img');
define('TABLE_BLOG', 'blog');
define('TABLE_CAUSES', 'causes');
define('TABLE_EVENTS', 'events');
define('TABLE_DONATIONS', 'donations');
define('TABLE_USER_MESSAGE', 'user_message');
define('TABLE_NEWS_LETTER', 'news_letter');
define('TABLE_AUDIO', 'audio');
define('TABLE_PAYMENT', 'payment');

////////////////////////////////////////////__SESSION_VARS
define('SES_ADMIN_ID', 'admin_id');
define('SES_ADMIN_NAME', 'admin_name');
define('SES_SUB_ADMIN_ID', 'sub_admin_id');
define('SES_SUB_ADMIN_NAME', 'sub_admin_name');
define('SES_TYPE', 'type');

////////////////////////////////////////////__USERS
define('USER_ADMIN', 'admin');
define('USER_SUB_ADMIN', 'sub_admin');


////////////////////////////////////////////__KEYS
define("KEY_STATUS", "status");
define("KEY_MESSAGE", "message");
define("KEY_TYPE", "type");
define('KEY_USER_NAME', 'user_name');
define('KEY_UID', 'uid');

///////////////////////////////////////////__UID-PREFIX
define('UID_WORK', 'WDO');
define('UID_PROJECT', 'PRO');
define('UID_CAUSES', 'CUS');
define('UID_DONOR', 'DON');
define('UID_VOLUNTEER', 'VOL');
define('UID_OUR_TEAM', 'OUT');
define('UID_BLOG', 'BLG');
define('UID_EVENTS', 'EVN');
define('UID_DONATION', 'DNT');
define('UID_USER_MESSAGE', 'UMSG');
define('UID_GALLERY', 'GAL');
define('UID_NL', 'NL');
define('UID_AUDIO', 'AUD');
define('UID_QUOTE', 'QT');
define('UID_PAYMENT', 'PMT');


//////////////////////////////////////////__UID
define('GALLERY_UID', 'GAL67890RTY78TY');



/////////////////////////////////////////__RAZORPAY_SECRET_KEY
define('RAZORPAY_KEY_TEST_SECRET', 'uiWpezFA8kVqANmunIbfz3hN');
define('RAZORPAY_KEY_TEST_ID',  'rzp_live_F2pXC2B8iPfgA5');

// define('RAZORPAY_KEY_TEST_SECRET', 'rqaB1PDEZvHE7cY6FpJlYzve');
// define('RAZORPAY_KEY_TEST_ID',  'rzp_test_ycN7Tm3OZQF98A');


define('RAZORPAY_KEY_LIVE_SECRET', '');
define('RAZORPAY_KEY_LIVE_ID', '');