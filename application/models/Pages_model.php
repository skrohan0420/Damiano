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

    public function get_aproduct_banner_images($p_id)
    {
        $data = $this->db
            ->select('*')
            ->from('product_banner_img')
            ->where(['product_id' => $p_id])
            ->get();


        $data = $data->result_array();
        //$this->prd($banner);
        return isset($data) ? $data : [];
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

    public function get_infrastructure_banner()
    {
        $banner = $this->db
            ->select('*')
            ->from('infrastructure_page_banner')
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

    public function update_product_img($path, $uid)
    {
        $data = [
            'img_path' => $path
        ];
        $update = $this->db->where(['uid' => $uid])
            ->update('product', $data);
        return $update;
    }

    public function update_product_banner_img($path, $uid)
    {
        $data = [
            'banner_img_path' => $path
        ];
        $update = $this->db->where(['uid' => $uid])
            ->update('product', $data);
        return $update;

    }

    public function update_product($data)
    {
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

    public function add_product_feature($path, $data)
    {
        //$this->prd($data);
        $insert_data = [
            'uid' => $this->generate_uid('FTR'),
            'product_id' => $data['product_id'],
            'title' => $data['title'],
            'details' => $data['details'],
            'img_path' => $path
        ];
        $add = $this->db->insert('features', $insert_data);
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

    public function add_new_infrastructure_banner($path)
    {
        $data = [
            'uid' => $this->generate_uid('INBN'),
            'img_path' => $path
        ];
        $add = $this->db->insert('infrastructure_page_banner', $data);
        return $add;
    }


    public function add_infrastructure($path, $data)
    {
        $data_insert = [
            'uid' => $this->generate_uid('INF'),
            'title' => $data['home_infrastructure_text'],
            'details' => $data['home_infrastructure_details'],
            'img_path' => $path,
        ];
        $add = $this->db->insert('home_infrastructure', $data_insert);
        return $add;
    }

    public function add_quality($path, $data)
    {
        $data_insert = [
            'uid' => $this->generate_uid('QLT'),
            'title' => $data['quality_text'],
            'description' => $data['quality_details'],
            'img_path' => $path,
        ];
        $add = $this->db->insert('quality', $data_insert);
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

    public function add_new_flyer($path){
        $data = [
            'uid' => $this->generate_uid('FLY'),
            'img_path' => $path,
        ];
        $add = $this->db->insert('flyers', $data);
        return $add;
    }

    public function get_flyer(){
        $data = $this->db
            ->select('*')
            ->from('flyers')
            ->get();
        $data = $data->result_array();
        //$this->prd($banner);
        return isset($data) ? $data : [];
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

    public function add_new_product($path, $banner_data, $data)
    {
        $insert_data = [
            'uid' => $this->generate_uid('PRD'),
            'name' => $data['product_name'],
            'details' => $data['product_details'],
        ];

        if (!empty($banner_data)) {
            foreach ($banner_data as $index => $item) {
                $banner_insert_data = [
                    'uid' => $this->generate_uid('PRBN'),
                    'product_id' => $insert_data['uid'],
                    'img_path' => $path . $item['file_name']
                ];
                $this->db->insert('product_banner_img', $banner_insert_data);
            }
        }

        $add = $this->db->insert('product', $insert_data);
        return $add;

    }

    public function add_new_product_banner($path, $p_id)
    {
        $banner_insert_data = [
            'uid' => $this->generate_uid('PRBN'),
            'product_id' => $p_id,
            'img_path' => $path
        ];
        $this->db->insert('product_banner_img', $banner_insert_data);
    }

    public function add_new_about_banner($path)
    {
        $banner_insert_data = [
            'uid' => $this->generate_uid('ABBN'),
            'img_path' => $path
        ];
        $this->db->insert('about_page_banner', $banner_insert_data);
    }

    public function add_new_updates_banner($path)
    {
        $banner_insert_data = [
            'uid' => $this->generate_uid('UPBN'),
            'img_path' => $path
        ];
        $this->db->insert('update_page_banner', $banner_insert_data);
    }

    public function add_new_quality_banner($path)
    {
        $banner_insert_data = [
            'uid' => $this->generate_uid('QTBN'),
            'img_path' => $path
        ];
        $this->db->insert('quality_banner', $banner_insert_data);

    }

    public function get_quality_banner()
    {
        $data = $this->db
            ->select('*')
            ->from('quality_banner')
            ->get();
        $data = $data->result_array();
        //$this->prd($banner);
        return isset($data) ? $data : [];
    }

    public function add_alert($data)
    {
        $insert_data = [
            'uid' => $this->generate_uid('ALT'),
            'message' => $data['message'],
        ];
        $this->db->insert('alerts', $insert_data);
    }

    public function get_alert()
    {
        $data = $this->db
            ->select('*')
            ->from('alerts')
            ->get();
        $data = $data->result_array();
        //$this->prd($banner);
        return isset($data) ? $data : [];
    }

    public function get_quality()
    {
        $data = $this->db
            ->select('*')
            ->from('quality')
            ->get();
        $data = $data->result_array();
        //$this->prd($banner);
        return isset($data) ? $data : [];
    }

    public function get_updates_banner()
    {
        $data = $this->db
            ->select('*')
            ->from('update_page_banner')
            ->get();
        $data = $data->result_array();
        //$this->prd($banner);
        return isset($data) ? $data : [];
    }

    public function get_about_banners()
    {
        $data = $this->db
            ->select('*')
            ->from('about_page_banner')
            ->get();
        $data = $data->result_array();
        //$this->prd($banner);
        return isset($data) ? $data : [];
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

    public function get_action_buttons()
    {
        $data = $this->db
            ->select('*')
            ->from('action_buttons')
            ->get();
        $data = $data->result_array();
        //$this->prd($banner);
        return isset($data) ? $data[0] : [];

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

    public function get_product_features_by_id($uid)
    {
        $this->db->where('product_id', $uid);
        $query = $this->db->get('features');
        $query = $query->result_array();
        return !empty($query) ? $query : [];


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

    public function delete_product($uid)
    {
        $this->db->where('uid', $uid);
        $this->db->delete('product');
        return $this->db->affected_rows() > 0;
    }

    public function delete_product_features($uid)
    {
        $this->db->where('uid', $uid);
        $this->db->delete('features');
        return $this->db->affected_rows() > 0;

    }

    public function delete_alert($uid)
    {
        $this->db->where('uid', $uid);
        $this->db->delete('alerts');
        return $this->db->affected_rows() > 0;
    }


    public function delete_product_banner_img($uid)
    {
        $this->db->where('uid', $uid);
        $this->db->delete('product_banner_img');
        return $this->db->affected_rows() > 0;
    }

    public function delete_about_banner_img($uid)
    {
        $this->db->where('uid', $uid);
        $this->db->delete('about_page_banner');
        return $this->db->affected_rows() > 0;
    }

    public function delete_infrastructure_banner_img($uid)
    {
        $this->db->where('uid', $uid);
        $this->db->delete('infrastructure_page_banner');
        return $this->db->affected_rows() > 0;
    }

    public function delete_updates_banner_img($uid)
    {
        $this->db->where('uid', $uid);
        $this->db->delete('update_page_banner');
        return $this->db->affected_rows() > 0;

    }

    public function delete_quality($uid)
    {
        $this->db->where('uid', $uid);
        $this->db->delete('quality');
        return $this->db->affected_rows() > 0;
    }

    public function delete_quality_banner_img($uid)
    {
        $this->db->where('uid', $uid);
        $this->db->delete('quality_banner');
        return $this->db->affected_rows() > 0;
    }

    public function delete_flyer_img($uid){

        $this->db->where('uid', $uid);
        $this->db->delete('flyers');
        return $this->db->affected_rows() > 0;
    }

}