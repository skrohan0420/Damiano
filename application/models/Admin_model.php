<?php 
defined('BASEPATH') or exit('nothing found');
require_once(APPPATH . 'models/Common_model.php');

class Admin_model extends Common_model {

    public function __construct(){
        parent::__construct();
        date_default_timezone_set(field_location);  
    }


    public function is_admin($email, $password){
        $admin = $this->db
                        ->select('user_name,uid, type')
                        ->from(TABLE_USER)
                        ->where('user_name', $email)
                        ->where('password', $password)
                        ->get();

        $admin = $admin->result_array();

        return isset($admin[0]) ? $admin[0]: [];

    }

}

?>