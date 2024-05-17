<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once (APPPATH . 'controllers/Common.php');


class Admin extends Common
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


    public function login()
    {
        $this->load_login();
    }

    public function admin_login()
    {
        $userName = $this->input->post('userName');
        $password = $this->input->post('password');
        $resp = [
            KEY_STATUS => false,
            KEY_MESSAGE => '',
            KEY_TYPE => ''
        ];
        if (!empty($userName) && !empty($password)) {
            $this->init_model(MODEL_ADMIN);
            $is_admin = $this->Admin_model->is_admin($userName, md5($password));
            $resp[KEY_STATUS] = !empty($is_admin);
            $resp[KEY_TYPE] = !empty($is_admin) ? $is_admin[KEY_TYPE] : '';

            if ($resp[KEY_STATUS]) {

                if ($is_admin[KEY_TYPE] == USER_ADMIN) {

                    $this->session->set_userdata(SES_ADMIN_ID, $is_admin[KEY_UID]);
                    $this->session->set_userdata(SES_ADMIN_NAME, $is_admin[KEY_USER_NAME]);
                    $this->session->set_userdata(SES_TYPE, $is_admin[KEY_TYPE]);

                } else if ($is_admin[KEY_TYPE] == USER_SUB_ADMIN) {

                    $this->session->set_userdata(SES_SUB_ADMIN_ID, $is_admin[KEY_UID]);
                    $this->session->set_userdata(SES_SUB_ADMIN_NAME, $is_admin[KEY_USER_NAME]);
                    $this->session->set_userdata(SES_TYPE, $is_admin[KEY_TYPE]);

                }
            }
        }
        $resp[KEY_MESSAGE] = $resp[KEY_STATUS] ? 'user found' : 'user not found';
        return $this->response($resp);
    }

    public function logout()
    {
        if ($this->session->userdata(SES_TYPE) == USER_ADMIN) {

            $this->session->unset_userdata(SES_ADMIN_ID);
            $this->session->unset_userdata(SES_ADMIN_NAME);
            $this->session->unset_userdata(SES_TYPE);

        } else if ($this->session->userdata(SES_TYPE) == USER_SUB_ADMIN) {

            $this->session->unset_userdata(SES_SUB_ADMIN_ID);
            $this->session->unset_userdata(SES_SUB_ADMIN_NAME);
            $this->session->unset_userdata(SES_TYPE);

        }
        redirect('/admin');
    }

    public function dashboard()
    {
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = [];
        $data['data_header']['title'] = 'Admin | Dashboard';
        $data['data_header']['sidebar']['dashboard'] = true;

        $this->is_auth('admin/dashboard.php', $data);

    }

    public function messages()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['messages_js.php'];
        $data['data_header']['title'] = 'Admin | Dashboard';
        $data['data_header']['sidebar']['dashboard'] = true;
        $data['data_page']['messages'] = $this->Pages_model->get_messages();
        
        $this->is_auth('admin/messages.php', $data);

    }

    public function alerts()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['alerts_js.php'];
        $data['data_header']['title'] = 'Admin | Dashboard';
        $data['data_header']['sidebar']['dashboard'] = true;
        $data['data_page']['alerts'] = $this->Pages_model->get_alert();
        $data['data_page']['action_buttons'] = $this->Pages_model->get_action_buttons();
        $this->is_auth('admin/alerts.php', $data);

    }

    public function infrastructure()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['infrastructure_js.php'];
        $data['data_header']['title'] = 'Admin | Dashboard';
        $data['data_header']['sidebar']['dashboard'] = true;
        $data['data_page']['infrastructure'] = $this->Pages_model->get_infrastructure();
        $this->is_auth('admin/infrastructure.php', $data);

    }

    public function updates()
    {

        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['updates_js.php'];
        $data['data_header']['title'] = 'Admin | Dashboard';
        $data['data_header']['sidebar']['dashboard'] = true;
        $data['data_page']['update_img'] = $this->Pages_model->get_update_img();
        $data['data_page']['announcement'] = $this->Pages_model->get_announcement();
        $this->is_auth('admin/updates.php', $data);


    }
    public function about()
    {

        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['about_js.php'];
        $data['data_header']['title'] = 'Admin | Dashboard';
        $data['data_header']['sidebar']['dashboard'] = true;

        $data['data_page']['about_text'] = $this->Pages_model->get_all_about_text();
        $data['data_page']['about_img'] = $this->Pages_model->get_all_about_img();

        $this->is_auth('admin/about.php', $data);


    }


    public function quality(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['quality_js.php'];
        $data['data_header']['title'] = 'Admin | Dashboard';
        $data['data_header']['sidebar']['dashboard'] = true;

       

        $this->is_auth('admin/quality.php', $data);
    }


    public function is_auth($page, $data)
    {
        if (
            $this->session->userdata(SES_ADMIN_ID) == null &&
            $this->session->userdata(SES_SUB_ADMIN_ID) == null
        ) {
            redirect('/admin');
        } else {
            $this->load_page($page, $data);
        }
    }



}