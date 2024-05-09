<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'controllers/web/Load.php');


class Activity extends Load
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        redirect('/home');
    }
    public function events()
    {
        $data = PAGE_DATA_WEB;
        $data['data_header']['event'] = true;
        $this->init_model(MODEL_PAGES);
        $data['data_page']['events'] = $this->Pages_model->get_event();
        $this->load_page('web/events.php', $data);
    }
    public function blogs()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        $data['data_header']['blogs'] = true;
        $data['data_page']['blogs'] = $this->Pages_model->get_all_blogs();
        $this->load_page('web/blogs.php', $data);
    }

    public function blog()
    {
        $this->init_model(MODEL_PAGES);
        $blog_id = $this->input->get('blog_id');
        $data = PAGE_DATA_WEB;
        $data['data_page']['blog'] = $this->Pages_model->get_blog($blog_id);
        if(!empty($data['data_page']['blog'])){
            $this->load_page('web/blog.php', $data);
        }else{
            redirect('404_override');
        }
        
    }

    public function save_user_msg(){
        $data = $this->input->post();
        $data['uid'] = $this->generate_uid(UID_USER_MESSAGE);
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->add_user_msg($data);
        redirect('contact-us');

    }

}


?>