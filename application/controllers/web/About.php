<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'controllers/web/Load.php');


class About extends Load
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = PAGE_DATA_WEB;
        $this->load_page('web/our_team.php', $data);
    }

    public function our_team()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        $data['data_header']['about'] = true;
        $data['data_page']['our_team_board_of_trustees'] = $this->Pages_model->get_all_our_team_board_of_trustees();
        $data['data_page']['our_team_trustees'] = $this->Pages_model->get_all_our_team__trustees();

        $this->load_page('web/our_team.php', $data);
    }

    public function mission_and_vision()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        $data['data_header']['about'] = true;
        $data['data_page']['about'] = $this->Pages_model->get_about_web();
        $data['data_page']['mission_vision'] = $this->Pages_model->get_mission_vision();
        $data['data_page']['quotes'] = $this->Pages_model->get_all_quotes();
        $this->load_page('web/mission_and_vision.php', $data);

    }

    public function faq()
    {
        $data = PAGE_DATA_WEB;
        $data['data_header']['about'] = true;
        $this->load_page('web/faq.php', $data);
    }

    public function annual_report()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        $data['data_header']['about'] = true;
        $data['data_page']['quotes'] = $this->Pages_model->get_all_quotes();
        $this->load_page('web/annual_report.php', $data);
    }

    public function gallery()
    {
        $data = PAGE_DATA_WEB;
        $this->init_model(MODEL_PAGES);
        $data['data_header']['gallery'] = true;
        $data['data_page']['gallery_img'] = $this->Pages_model->get_gallery_img();
        $projects = $this->Pages_model->get_all_projects();
        if($projects){
            foreach($projects as $key => $val){
                $projects[$key]['project_images'] = $this->Pages_model->get_projects_galary_by_id($val['uid']);
            }
        }

        $data['data_page']['projects'] =  $projects;

        $this->load_page('web/gallery.php',$data);
    }

}


?>