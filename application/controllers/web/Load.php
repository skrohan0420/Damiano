<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'controllers/Common.php');


class Load extends Common {
    function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        $data['data_header']['home'] = true;
        $this->load_page('web/home.php',$data);
    }

    public function contact_us(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        $data['data_header']['contact_us'] = true;
        $this->load_page('web/contact_us.php',$data);
    }

    public function about(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        $data['data_header']['about'] = true;
        $this->load_page('web/about.php',$data);
    }

   




   
}
?>