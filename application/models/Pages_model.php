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
    public function get_all_about_imag(){
        $banner = $this->db
            ->select('*')
            ->from('home_about_img')
            ->get();
        $banner = $banner->result_array();
        //$this->prd($banner);
        return isset($banner) ? $banner : [];
    }

    public function update_home_about_img($path, $uid){
        $data = [
            'img_path' => $path
        ];
        $update = $this->db->where(['uid' => $uid])
                        ->update('home_about_img', $data);
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

    public function delete_banner_img($uid)
    {
        $this->db->where('uid', $uid);
        $this->db->delete('home_banner_img');
        return $this->db->affected_rows() > 0;

    }

}