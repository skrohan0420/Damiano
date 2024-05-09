<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'controllers/web/Load.php');


class Testimonial extends Load {


    function __construct() {
        parent::__construct();
    }

    public function index(){
        $data = PAGE_DATA_WEB;
        $this->load_page('web/our_volunteer.php',$data);
    }

    public function our_volunteer(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        $data['data_header']['testimonial'] = true;
        $data['data_page']['volunteers'] = $this->Pages_model->get_all_volunteers();
        $this->load_page('web/our_volunteer.php',$data);
    }

    public function our_donor(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        $data['data_header']['testimonial'] = true;
        $data['data_page']['donors'] = $this->Pages_model->get_all_donors();
        $this->load_page('web/our_donor.php',$data);
    } 

}