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
        $data['data_page']['about_img'] = $this->Pages_model->get_all_about_img();
        $data['data_page']['update_img'] = $this->Pages_model->get_update_img();
        $data['data_page']['announcement'] = $this->Pages_model->get_announcement();
        $data['data_page']['infrastructure'] = $this->Pages_model->get_infrastructure();
        $data['data_page']['appreciation'] = $this->Pages_model->get_appreciation();
        $this->is_auth('admin/pages_home.php', $data);

    }
    public function product()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['product_js.php'];
        $data['data_header']['title'] = 'Admin | Pages';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['product'] = true;
        $data['data_page']['product'] = $this->Pages_model->get_product();

        $this->is_auth('admin/product.php', $data);

    }

    public function view_product(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $uid = $this->input->get('uid');
        $data['data_footer']['footer_link'] = ['product_single_js.php'];
        $data['data_header']['title'] = 'Admin | Pages';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['product'] = true;
        $data['data_page']['product'] = $this->Pages_model->get_product_by_id($uid);
        $data['data_page']['features'] = $this->Pages_model->get_product_features_by_id($uid);
        $data['data_page']['product_banner_images'] = $this->Pages_model->get_aproduct_banner_images($uid);

        $this->is_auth('admin/product_single.php', $data);
    } 

    public function product_add()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['product_add_js.php'];
        $data['data_header']['title'] = 'Admin | Pages';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['product'] = true;
        $this->is_auth('admin/product_add.php', $data);

    }

    public function product_feature_add(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['product_feature_add_js.php'];
        $data['data_header']['title'] = 'Admin | Pages';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['product'] = true;
        $this->is_auth('admin/product_feature_add.php', $data);
    }




    public function save_user_message(){
        $data = $this->input->post();
        $this->init_model(MODEL_PAGES);

        //$this->prd($data);
        $this->Pages_model->save_user_message($data);
        redirect('/home');
    }

    public function add_new_product(){
        $data = $this->input->post();
        //$upload_data = $this->upload_files('./uploads/product_img/', 'product_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        $upload_banner_data = $this->upload_files('./uploads/product_banner_img/', 'product_banner_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        //$this->prd($upload_banner_data);
        if ($upload_banner_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_new_product('/uploads/product_banner_img/',$upload_banner_data,$data);
        }
        redirect('/admin/products');
    }

    public function add_new_product_banner(){
        $p_id = $this->input->post('p_id');
        $upload_banner_data = $this->upload_files('./uploads/product_banner_img/', 'product_banner_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        //$this->prd($upload_banner_data);
        if ($upload_banner_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_new_product_banner('/uploads/product_banner_img/'.$upload_banner_data['file_name'],$p_id);
        }
        redirect('admin/pages/view_product?uid='.$p_id);
    }

   



    public function update_product(){
        //$this->prd($_FILES);
        $this->init_model(MODEL_PAGES);

        if(!empty($_FILES['product_img']['name'][0])){
            $upload_data = $this->upload_files('./uploads/product_img/', 'product_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            if($upload_data){
                $this->Pages_model->update_product_img('/uploads/product_img/' . $upload_data['file_name'], $this->input->post('product_uid'));
            }
        }
        if(!empty($_FILES['product_banner_img']['name'][0])){
            $upload_data = $this->upload_files('./uploads/product_banner_img/', 'product_banner_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            if($upload_data){
                $this->Pages_model->update_product_banner_img('/uploads/product_banner_img/' . $upload_data['file_name'], $this->input->post('product_uid'));
            }
        }

        $update = $this->Pages_model->update_product($this->input->post());
        redirect('/admin/products');
    }


    public function add_alert(){
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->add_alert($this->input->post());
        redirect('/admin/alerts');
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
        redirect('/admin/about');
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

    public function add_new_quality_banner(){
        $upload_data = $this->upload_files('./uploads/quality_banner_img/', 'quality_banner_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_new_quality_banner('/uploads/quality_banner_img/' . $upload_data['file_name']);
        }
        redirect('/admin/quality');
    }


    public function upload_announcement_file(){
        $upload_data = $this->upload_files('./uploads/home_announcement_file/', 'home_announcement_file', IMG_FILE_TYPES, IMG_FILE_SIZE);
        //$this->prd($upload_data);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->insert_home_announcement_file('/uploads/home_announcement_file/' . $upload_data['file_name']);
        }
        redirect('/admin/updates');
    }

    public function add_new_about_banner(){

        $upload_data = $this->upload_files('./uploads/about_banner_img/', 'about_banner_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        //$this->prd($upload_data);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_new_about_banner('/uploads/about_banner_img/' . $upload_data['file_name']);
        }
        redirect('/admin/about');
    }

    public function add_new_infrastructure_banner(){

        $upload_data = $this->upload_files('./uploads/infrastructure_banner_img/', 'infrastructure_banner_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        //$this->prd($upload_data);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_new_infrastructure_banner('/uploads/infrastructure_banner_img/' . $upload_data['file_name']);
        }
        redirect('/admin/infrastructure');

    }

    public function add_new_updates_banner(){
        $upload_data = $this->upload_files('./uploads/updates_banner_img/', 'updates_banner_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        //$this->prd($upload_data);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_new_updates_banner('/uploads/updates_banner_img/' . $upload_data['file_name']);
        }
        redirect('/admin/updates');
    }

    public function upload_home_update_img(){
        $upload_data = $this->upload_files('./uploads/home_update_img/', 'home_update_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->update_home_update_img('/uploads/home_update_img/' . $upload_data['file_name']);
        }
        redirect('/admin/updates');
    }

    public function upload_home_about_img()
    {
        $upload_data = $this->upload_files('./uploads/home_about_img/', 'home_about_img', IMG_FILE_TYPES, IMG_FILE_SIZE);

        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $uid = $this->input->get('uid');
            $this->Pages_model->update_home_about_img('/uploads/home_about_img/' . $upload_data['file_name'], $uid);
        }
        redirect('/admin/about');

    }

    public function add_infrastructure(){
        $upload_data = $this->upload_files('./uploads/home_infrastructure_img/', 'home_infrastructure_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_infrastructure('/uploads/home_infrastructure_img/' . $upload_data['file_name'], $this->input->post());
        }
        redirect('/admin/infrastructure');

    }

    public function add_quality(){
        $upload_data = $this->upload_files('./uploads/quality_img/', 'quality_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_quality('/uploads/quality_img/' . $upload_data['file_name'], $this->input->post());
        }
        redirect('/admin/quality');
    }


    public function add_appreciation(){
        $upload_data = $this->upload_files('./uploads/home_appreciation_img/', 'home_appreciation_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_appreciation('/uploads/home_appreciation_img/' . $upload_data['file_name'], $this->input->post('home_appreciation_text'));
        }
        redirect('/admin/home');

    }

    public function add_product_feature(){
        //$this->prd($this->input->post());

        $upload_data = $this->upload_files('./uploads/feature_img/', 'feature_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_product_feature('/uploads/feature_img/' . $upload_data['file_name'], $this->input->post());
        }
        redirect('admin/pages/view_product?uid='.$this->input->post('product_id'));

    }



    public function delete_banner_img()
    {
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_banner_img($uid);

        redirect('/admin/home');
    }

    public function delete_announcement_file(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_announcement_file($uid);

        redirect('/admin/home');
    }

    public function delete_infrastructure(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_infrastructure($uid);
        redirect('/admin/home');
    }

    public function delete_appreciation(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_appreciation($uid);
        redirect('/admin/home');

    }

    public function delete_alert(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_alert($uid);
        redirect('/admin/alerts');
    }

    public function delete_product(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_product($uid);
        redirect('/admin/products');

    }

    public function delete_product_features(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_product_features($uid);
        redirect('/admin/pages/view_product?uid='.$this->input->get('p_id'));
    }

    public function delete_product_banner_img(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_product_banner_img($uid);
        redirect('/admin/pages/view_product?uid='.$this->input->get('p_id'));
    }


    public function delete_about_banner_img(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_about_banner_img($uid);
        redirect('/admin/about');
    }

    public function delete_infrastructure_banner_img(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_infrastructure_banner_img($uid);
        redirect('/admin/infrastructure'); 
    }
    

    public function delete_updates_banner_img(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_updates_banner_img($uid);
        redirect('/admin/updates');
    }

    public function delete_quality(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_quality($uid);
        redirect('/admin/quality');
    }

    public function delete_quality_banner_img(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_quality_banner_img($uid);
        redirect('/admin/quality');
    }

}