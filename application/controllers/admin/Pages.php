<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once (APPPATH . 'controllers/admin/Admin.php');


class Pages extends Admin
{


    function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        if (
            $this->session->userdata(SES_ADMIN_ID) == null &&
            $this->session->userdata(SES_SUB_ADMIN_ID) == null
        ) {
            redirect('/admin/login');
        } else {
            redirect('/admin/home');
        }
    }

    /**HOME*/
    public function home()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['home_js.php'];
        $data['data_header']['header_link'] = ['home.css'];
        $data['data_header']['title'] = 'Admin | Pages';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['home'] = true;
        $data['data_page']['banner_text'] = $this->Pages_model->get_all_banner_text();
        $data['data_page']['banner_images'] = $this->Pages_model->get_all_banner_img();
        $data['data_page']['about_text'] = $this->Pages_model->get_all_about_text();
        $data['data_page']['about_img'] = $this->Pages_model->get_all_about_imag();
        $this->is_auth('admin/pages_home.php', $data);

    }


    public function update_banner_text()
    {
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->update_banner_text($this->input->post());
        redirect('/admin/home');
    }
    public function update_about_text()
    {
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->update_about_text($this->input->post());
        redirect('/admin/home');
    }

    public function upload_home_banner_img()
    {
        $upload_data = $this->upload_files('./uploads/home_banner_img/', 'home_banner_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->insert_home_banner_img('/uploads/home_banner_img/' . $upload_data['file_name']);
        }
        redirect('/admin/home');
    }

    public function upload_home_about_img()
    {
        $upload_data = $this->upload_files('./uploads/home_about_img/', 'home_about_img', IMG_FILE_TYPES, IMG_FILE_SIZE);

        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $uid = $this->input->get('uid');
            $this->Pages_model->update_home_about_img('/uploads/home_about_img/' . $upload_data['file_name'], $uid);
        }
        redirect('/admin/home');

    }


    public function delete_banner_img()
    {
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_banner_img($uid);

        redirect('/admin/home');
    }

}