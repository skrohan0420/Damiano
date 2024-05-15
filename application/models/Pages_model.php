<?php
defined('BASEPATH') or exit('nothing found');
require_once (APPPATH . 'models/Admin_model.php');

class Pages_model extends Admin_model
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set(field_location);
    }

    public function get_all_banner_text()
    {

        $banner = $this->db
            ->select('*')
            ->from('home_banner_text')
            ->where(['uid' => 'BNR90678546498'])
            ->get();


        $banner = $banner->result_array();
        //$this->prd($banner);
        return isset($banner) ? $banner[0] : [];
    }

    public function get_all_about_text()
    {
        $about = $this->db
            ->select('*')
            ->from('home_about_text')
            ->where(['uid' => 'ABT143276SRHDSH'])
            ->get();


        $about = $about->result_array();
        //$this->prd($banner);
        return isset($about) ? $about[0] : [];
    }

    public function get_all_banner_img()
    {
        $banner = $this->db
            ->select('*')
            ->from('home_banner_img')
            ->get();
        $banner = $banner->result_array();
        //$this->prd($banner);
        return isset($banner) ? $banner : [];
    }
    public function get_all_about_img()
    {
        $banner = $this->db
            ->select('*')
            ->from('home_about_img')
            ->get();
        $banner = $banner->result_array();
        //$this->prd($banner);
        return isset($banner) ? $banner : [];
    }

    public function get_update_img()
    {
        $banner = $this->db
            ->select('*')
            ->from('home_updates_img')
            ->get();
        $banner = $banner->result_array();
        //$this->prd($banner);
        return isset($banner) ? $banner[0] : [];
    }

    public function get_announcement()
    {
        $banner = $this->db
            ->select('*')
            ->from('home_announcement_file')
            ->get();
        $banner = $banner->result_array();
        //$this->prd($banner);
        return isset($banner) ? $banner : [];
    }

    public function update_home_about_img($path, $uid)
    {
        $data = [
            'img_path' => $path
        ];
        $update = $this->db->where(['uid' => $uid])
            ->update('home_about_img', $data);
        return $update;
    }

    public function update_home_update_img($path)
    {

        $data = [
            'img_path' => $path
        ];
        $update = $this->db->where(['uid' => 'UBNH86967F20240511'])
            ->update('home_updates_img', $data);
        return $update;
    }

    public function update_product_img($path, $uid){
        $data = [
            'img_path' => $path
        ];
        $update = $this->db->where(['uid' => $uid])
            ->update('product', $data);
        return $update;
    }

    public function update_product_banner_img($path, $uid){
        $data = [
            'banner_img_path' => $path
        ];
        $update = $this->db->where(['uid' => $uid])
            ->update('product', $data);
        return $update;

    }

    public function update_product($data){
        $insert_data = [
            'name' => $data['product_name'],
            'details' => $data['product_details']
        ];
        $update = $this->db->where(['uid' => $data['product_uid']])
            ->update('product', $insert_data);
        return $update;
    }

    public function update_banner_text($data)
    {
        $update = $this->db->where(['uid' => 'BNR90678546498'])
            ->update('home_banner_text', $data);
        return $update;
    }
    public function update_about_text($data)
    {
        $update = $this->db->where(['uid' => 'ABT143276SRHDSH'])
            ->update('home_about_text', $data);
        return $update;
    }
    public function insert_home_banner_img($path)
    {
        $data = [
            'uid' => $this->generate_uid('BNH'),
            'img_path' => $path
        ];
        $add = $this->db->insert('home_banner_img', $data);
        return $add;
    }

    public function insert_home_announcement_file($path)
    {
        $data = [
            'uid' => $this->generate_uid('BNHU'),
            'path' => $path
        ];
        $add = $this->db->insert('home_announcement_file', $data);
        return $add;
    }

    public function add_infrastructure($path, $title)
    {
        $data = [
            'uid' => $this->generate_uid('INF'),
            'title' => $title,
            'img_path' => $path,
        ];
        $add = $this->db->insert('home_infrastructure', $data);
        return $add;
    }

    public function add_appreciation($path, $title)
    {
        $data = [
            'uid' => $this->generate_uid('APR'),
            'title' => $title,
            'img_path' => $path,
        ];
        $add = $this->db->insert('home_appreciation_img', $data);
        return $add;

    }

    public function save_user_message($data)
    {
        $insert_data = [
            'uid' => $this->generate_uid('MSG'),
            'name' => $data['f_name'] . ' ' . $data['l_name'],
            'email' => $data['email'],
            'phone' => $data['mobile'],
            'message' => $data['msg']
        ];

        $add = $this->db->insert('user_message', $insert_data);
        return $add;
    }

    public function add_new_product($path,$banner_path, $data)
    {
        $insert_data = [
            'uid' => $this->generate_uid('PRD'),
            'name' => $data['product_name'],
            'details' => $data['product_details'],
            'img_path' => $path,
            'banner_img_path' => $banner_path
        ];

        $add = $this->db->insert('product', $insert_data);
        return $add;

    }


    public function get_infrastructure()
    {
        $data = $this->db
            ->select('*')
            ->from('home_infrastructure')
            ->get();
        $data = $data->result_array();
        //$this->prd($banner);
        return isset($data) ? $data : [];
    }

    public function get_product()
    {

        $data = $this->db
            ->select('*')
            ->from('product')
            ->get();
        $data = $data->result_array();
        //$this->prd($banner);
        return isset($data) ? $data : [];

    }

    public function get_appreciation()
    {
        $data = $this->db
            ->select('*')
            ->from('home_appreciation_img')
            ->get();
        $data = $data->result_array();
        //$this->prd($banner);
        return isset($data) ? $data : [];
    }

    public function get_messages()
    {
        $data = $this->db
            ->select('*')
            ->from('user_message')
            ->get();
        $data = $data->result_array();
        //$this->prd($banner);
        return isset($data) ? $data : [];

    }

    public function get_product_by_id($uid)
    {
        $this->db->where('uid', $uid);
        $query = $this->db->get('product');
        $query = $query->result_array();
        return !empty($query) ? $query[0] : [];


    }

    public function delete_banner_img($uid)
    {
        $this->db->where('uid', $uid);
        $this->db->delete('home_banner_img');
        return $this->db->affected_rows() > 0;

    }

    public function delete_announcement_file($uid)
    {
        $this->db->where('uid', $uid);
        $this->db->delete('home_announcement_file');
        return $this->db->affected_rows() > 0;
    }

    public function delete_infrastructure($uid)
    {
        $this->db->where('uid', $uid);
        $this->db->delete('home_infrastructure');
        return $this->db->affected_rows() > 0;
    }

    public function delete_appreciation($uid)
    {
        $this->db->where('uid', $uid);
        $this->db->delete('home_appreciation_img');
        return $this->db->affected_rows() > 0;
    }

    public function delete_product($uid){
        $this->db->where('uid', $uid);
        $this->db->delete('product');
        return $this->db->affected_rows() > 0;
    }


}