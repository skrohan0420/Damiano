<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'controllers/web/Load.php');


class Projects extends Load {


    function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->init_model(MODEL_PAGES);
        $id = $this->input->get('id');
        $data = PAGE_DATA_WEB;
        $data['data_header']['header_link'] = ['projects.css'];
        $data['data_header']['project'] = true;
        // $data['data_page']['quotes'] = $this->Pages_model->get_all_quotes();
        $data['data_page']['project'] = $this->Pages_model->get_projects_by_id($id);
        $data['data_page']['events'] = $this->Pages_model->get_project_event($id);
        $data['data_page']['gallery_img'] = $this->Pages_model->get_projects_galary_by_id($id);
        $data['data_page']['quote'] = $this->Pages_model->get_quote_by_id($id);

        if(!empty($data['data_page']['project'])){
            $this->load_page('web/project.php',$data);
        }else{
            redirect('404_override');
        }

        
    }

}