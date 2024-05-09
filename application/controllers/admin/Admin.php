<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'controllers/Common.php');


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
            redirect('/admin/pages/home');
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



    public function gallery()
    {
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['gallery_js.php'];
        $data['data_header']['header_link'] = ['gallery.css'];
        $data['data_header']['title'] = 'Admin | Gallery';
        $data['data_header']['sidebar']['gallery'] = true;

        $this->init_model(MODEL_PAGES);
        $data['data_page']['gallery_img'] = $this->Pages_model->get_gallery_img();


        $this->is_auth('admin/gallery.php', $data);
    }
    public function gallery_img_add()
    {
        if (!empty($_FILES['galary_img'])) {
            $galary_img_data = $this->upload_files('./uploads/galary_img/', 'galary_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $this->init_model(MODEL_PAGES);
            $data['uid'] = $this->generate_uid(UID_GALLERY);
            $data['images'] = '/uploads/galary_img/' . $galary_img_data['file_name'];

            $this->Pages_model->gallery_img_add($data);
        }
        redirect('admin/gallery');
    }

    public function delete_gal_img()
    {
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->gallery_img_delete($this->input->get('gid'));
        redirect('admin/gallery');

    }

    public function delete_project_gal_img(){
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_project_gal_img($this->input->get('gid'));
        redirect('admin/pages/projects/edit?p_id='.$this->input->get('pid'));
    }


    public function causes()
    {
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = [];
        $data['data_header']['header_link'] = [];
        $data['data_header']['title'] = 'Admin | Causes';
        $data['data_header']['sidebar']['causes'] = true;
        $this->init_model(MODEL_PAGES);
        $data['data_page']['causes'] = $this->Pages_model->get_causes();

        $this->is_auth('admin/causes.php', $data);
    }

    public function causes_add()
    {
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = [];
        $data['data_header']['header_link'] = [];
        $data['data_header']['title'] = 'Admin | Add Causes';
        $data['data_header']['sidebar']['causes'] = true;


        $this->is_auth('admin/causes_add.php', $data);
    }

    public function new_project_event(){
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = [];
        $data['data_header']['header_link'] = [];
        $data['data_header']['title'] = 'Admin | Add Causes';
        $data['data_header']['sidebar']['causes'] = true;

        $this->is_auth('admin/pages_project_new_event.php', $data);
    }

    public function add_new_cause()
    {


        if (!empty($_FILES['cause_img'])) {
            $cause_img_data = $this->upload_files('./uploads/cause_img/', 'cause_img', IMG_FILE_TYPES, IMG_FILE_SIZE);

            $cause_img = '/uploads/cause_img/' . $cause_img_data['file_name'];

            $this->init_model(MODEL_PAGES);

            $data = [
                'uid' => $this->generate_uid(UID_CAUSES),
                'title' => $this->input->post('name'),
                'details' => $this->input->post('details'),
                'goal' => $this->input->post('goal'),
                'img' => $cause_img,
            ];
            $this->Pages_model->add_causes($data);
            redirect('admin/causes');
        }
    }

    public function causes_update()
    {
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = [];
        $data['data_header']['header_link'] = [];
        $data['data_header']['title'] = 'Admin | Update Causes';
        $data['data_header']['sidebar']['causes'] = true;
        $this->init_model(MODEL_PAGES);
        $data['data_page']['cause'] = $this->Pages_model->get_causes_by_id($this->input->get('c_id'));


        $this->is_auth('admin/causes_update.php', $data);

    }

    public function update_cause()
    {

        $data = [];

        if (!empty($_FILES['cause_img']['name'][0])) {
            $cause_img_data = $this->upload_files('./uploads/cause_img/', 'cause_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $data['img'] = '/uploads/cause_img/' . $cause_img_data['file_name'];
        }
        $data['title'] = $this->input->post('name');
        $data['details'] = $this->input->post('details');
        $data['goal'] = $this->input->post('goal');
        $data['raised'] = $this->input->post('raised');

        $this->init_model(MODEL_PAGES);
        $this->Pages_model->update_cause($this->input->post('uid'), $data);
        redirect('admin/causes');
    }

    public function delete_cause()
    {

        $uid = $this->input->get('c_id');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_cause($uid);
        redirect('admin/causes');
    }

    public function events()
    {

        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = [];
        $data['data_header']['header_link'] = [];
        $data['data_header']['title'] = 'Admin | Events';
        $data['data_header']['sidebar']['events'] = true;
        $this->init_model(MODEL_PAGES);
        $data['data_page']['events'] = $this->Pages_model->get_event();


        $this->is_auth('admin/events.php', $data);
    }

    public function events_add()
    {

        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = [];
        $data['data_header']['header_link'] = [];
        $data['data_header']['title'] = 'Admin | Add Events';
        $data['data_header']['sidebar']['events'] = true;


        $this->is_auth('admin/events_add.php', $data);
    }

    public function add_new_event()
    {

        if (!empty($_FILES['event_img'])) {
            $cause_img_data = $this->upload_files('./uploads/event_img/', 'event_img', IMG_FILE_TYPES, IMG_FILE_SIZE);

            $cause_img = '/uploads/event_img/' . $cause_img_data['file_name'];

            $data = [
                'uid' => $this->generate_uid(UID_EVENTS),
                'title' => $this->input->post('name'),
                'details' => $this->input->post('details'),
                'img' => $cause_img,
                'date' => $this->input->post('date'),
                'place' => $this->input->post('place')
            ];
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_event($data);
            redirect('admin/events');
        }

    }

    public function events_update()
    {
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = [];
        $data['data_header']['header_link'] = [];
        $data['data_header']['title'] = 'Admin | Edit Events';
        $data['data_header']['sidebar']['events'] = true;
        $this->init_model(MODEL_PAGES);
        $data['data_page']['event'] = $this->Pages_model->get_event_by_id($this->input->get('e_id'));


        $this->is_auth('admin/events_update.php', $data);
    }

    public function update_event()
    {
        $data = [];

        if (!empty($_FILES['event_img']['name'][0])) {
            $event_img = $this->upload_files('./uploads/event_img/', 'event_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $data['img'] = '/uploads/event_img/' . $event_img['file_name'];
        }
        $data['title'] = $this->input->post('name');
        $data['details'] = $this->input->post('details');
        $data['place'] = $this->input->post('place');
        $data['date'] = $this->input->post('date');

        $this->init_model(MODEL_PAGES);
        $this->Pages_model->update_event($this->input->post('uid'), $data);
        redirect('admin/events');

    }


    public function delete_event()
    {
        $uid = $this->input->get('e_id');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_event($uid);
        redirect('admin/events');
    }

    public function rezorpay_webhook()
    {
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->save_webhook_text($this->input->post());
        redirect('donate');


    }

    public function proccess_payment()
    {
        $this->init_model(MODEL_PAGES);


        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $dob = $this->input->post('dob');
        $pan = $this->input->post('pan');
        $amount = $this->input->post('amount');
        $project_id = $this->input->post('project_id');
        $address = $this->input->post('address');
        $pin = $this->input->post('pin');
        $paymentid = $this->input->post('paymentid');

        $insert_data = [
            "uid" => $this->generate_uid(UID_DONATION),
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "date_of_birth" => $dob,
            "pan" => $pan,
            "address" => $address,
            "amount" => $amount,
            "pin" => $pin,
            "project_id" => $project_id,
            "payment_id" => $paymentid
        ];

        $add_new_donation = $this->Pages_model->add_new_donation($insert_data);
        // var_dump($add_new_donation);

        if ($add_new_donation) {
            echo json_encode(["status"=> true, "payment_id" =>$paymentid, "amount" => $amount]);
            return;

        } else {
            return json_encode(["status"=> false, "payment_id" =>""]);
        }
    }
    
    public function payment()
    {
        
       $json_data = file_get_contents('php://input');
        // Decode the JSON data into a PHP array
        $data = json_decode($json_data, true); 

        $payment_id = $data['payload']['payment']['entity']['id'];
        $amount = $data['payload']['payment']['entity']['amount'];
        $currency = $data['payload']['payment']['entity']['currency'];
        $status = $data['payload']['payment']['entity']['status'];
        $method = $data['payload']['payment']['entity']['method'];
        $wallet = $data['payload']['payment']['entity']['wallet'];
        $description = $data['payload']['payment']['entity']['description'];
        $contact = $data['payload']['payment']['entity']['contact'];
        
        $this->init_model(MODEL_PAGES);

        $insert_data = [
            "uid" => $this->generate_uid(UID_PAYMENT),
            "payment_id" => $payment_id,
            "amount" => $amount,
            "currency" => $currency,
            "status" => $status,
            "method" => $method,
            "wallet" => $wallet,
            "description" => $description,
            "contact" => $contact,
        ];

        $add_new_donation = $this->Pages_model->add_new_payment($insert_data);

        if ($add_new_donation) {
            return json_encode(array("status"=> true));

        } else {
            return json_encode(array("status"=> false));
        }
    }


}