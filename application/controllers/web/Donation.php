<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'controllers/web/Load.php');
include('razorpay/Razorpay.php');
use Razorpay\Api\Api;

class Donation extends Load
{
    function __construct()
    {
        parent::__construct();
    }

    public function add_new_donation()
    {

        $this->init_model(MODEL_PAGES);


        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $pan = $this->input->post('pan');
        $amount = $this->input->post('amount');
        $project_id = $this->input->post('project_id');
        $address = $this->input->post('address');
        $pin = $this->input->post('pin');

        $insert_data = [
            "uid" => $this->generate_uid(UID_DONATION),
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "pan" => $pan,
            "address" => $address,
            "amount" => $amount,
            "pin" => $pin,
            "project_id" => $project_id,
        ];

        $add_new_donation = $this->Pages_model->add_new_donation($insert_data);

        if ($add_new_donation) {
            redirect('donate');

        } else {
            redirect('donate');
        }
    }

}


?>