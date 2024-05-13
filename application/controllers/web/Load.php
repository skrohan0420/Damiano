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
        $data['data_page']['banner_text'] = $this->Pages_model->get_all_banner_text();
        $data['data_page']['banner_images'] = $this->Pages_model->get_all_banner_img();
        $data['data_page']['about_text'] = $this->Pages_model->get_all_about_text();
        $data['data_page']['about_img'] = $this->Pages_model->get_all_about_img();
        $data['data_page']['update_img'] = $this->Pages_model->get_update_img();
        $data['data_page']['announcement'] = $this->Pages_model->get_announcement();
        $data['data_page']['infrastructure'] = $this->Pages_model->get_infrastructure();
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