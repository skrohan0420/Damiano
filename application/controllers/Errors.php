<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'controllers/Common.php');
class Errors extends Common
{

    public function __construct()
    {
        parent::__construct();
    }

    public function custom_404()
    {
        if (current_url() == base_url()) {
            redirect('/home');
        }else{
            $data = PAGE_DATA_WEB;
            $this->output->set_status_header('404');
            $this->load_page('errors/custom_404',  $data);
        }
    }
}
?>