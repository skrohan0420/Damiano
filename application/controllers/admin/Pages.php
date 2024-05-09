<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'controllers/admin/Admin.php');


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
            redirect('/admin/pages/home');
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
        $data['data_page']['quotes'] = $this->Pages_model->get_all_quotes();
        $data['data_page']['videos'] = $this->Pages_model->get_all_videos();
        $data['data_page']['audio'] = $this->Pages_model->get_audio();
        $data['data_page']['about'] = $this->Pages_model->get_about();
        $data['data_page']['mission_vision'] = $this->Pages_model->get_mission_vision();
        $data['data_page']['services'] = $this->Pages_model->get_all_work();

        $this->is_auth('admin/pages_home.php', $data);

    }

    /**PROJECTS*/
    public function projects()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['projects_js.php'];
        $data['data_header']['header_link'] = [];
        $data['data_header']['title'] = 'Admin | Projects';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['projects'] = true;
        $data['data_page']['projects'] = $this->Pages_model->get_all_projects();

        $this->is_auth('admin/pages_projetcs.php', $data);

    }

    public function message(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = [];
        $data['data_header']['header_link'] = [];
        $data['data_header']['title'] = 'Admin | Projects';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['messsage'] = true;
        $data['data_page']['messages'] = $this->Pages_model->get_all_message();
        $data['data_page']['news_letter'] = $this->Pages_model->get_new_letter();

        $this->is_auth('admin/pages_messsage.php', $data);
    }

    public function projects_add()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['projects_js.php'];
        $data['data_header']['header_link'] = ['projects.css'];
        $data['data_header']['title'] = 'Admin | Add Project';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['projects'] = true;


        $this->is_auth('admin/pages_projetcs_add.php', $data);
    }

    public function projects_update()
    {
        $p_id = $this->input->get('p_id');

        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['projects_js.php'];
        $data['data_header']['header_link'] = ['projects.css'];
        $data['data_header']['title'] = 'Admin | Edit Project';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['projects'] = true;
        $data['data_page']['project'] = $this->Pages_model->get_projects_by_id($p_id);
        $data['data_page']['events']  = $this->Pages_model->get_events_by_id($p_id);
        $data['data_page']['galary_img'] = $this->Pages_model->get_projects_galary_by_id($p_id);
        $data['data_page']['quote'] = $this->Pages_model->get_quote_by_id($p_id);
        
        $this->is_auth('admin/pages_projetcs_update.php', $data);
    }

    public function add_new_project()
    {
        $project_title = $this->input->post('project_title');
        $project_cover_details = $this->input->post('project_cover_details');
        $project_page_title = $this->input->post('project_page_title');
        $project_page_video = $this->input->post('project_page_video');
        $project_page_description = $this->input->post('project_page_description');
        $project_page_quote = $this->input->post('quote');
        $project_page_quoteBy = $this->input->post('quote_author');

        $project_logo_data = $this->upload_files('./uploads/project_logo/', 'project_logo', IMG_FILE_TYPES, IMG_FILE_SIZE);
        $project_img_data = $this->upload_files('./uploads/project_img/', 'project_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        $project_quote_data = $this->upload_files('./uploads/quotes_img/', 'quote_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        $galary_img_data = $this->upload_files('./uploads/project_galary_img/', 'galary_img', IMG_FILE_TYPES, IMG_FILE_SIZE);

        $project_img = '/uploads/project_img/' . $project_img_data['file_name'];
        $project_logo = '/uploads/project_logo/' . $project_logo_data['file_name'];
        $project_quote_img = '/uploads/quotes_img/' . $project_quote_data['file_name'];

        $this->init_model(MODEL_PAGES);
        $project_id = $this->generate_uid(UID_PROJECT);
        $insert_data = [
            "uid" => $project_id,
            "project_title" => $project_title,
            "project_cover_details" => $project_cover_details,  
            "project_page_video" => $project_page_video,
            "project_img" => $project_img,
            "project_logo" => $project_logo,
        ];
        $insert_quote = [
            "uid" => $this->generate_uid(UID_QUOTE),
            "type_id" => $this->generate_uid(UID_QUOTE),
            "quote" => $project_page_quote,
            "quote_by" => $project_page_quoteBy,
            "quote_img" => $project_quote_img,
            "position" => "bottom",
            "type" => "project",
            "type_id" => $project_id,
        ];

        
        if(isset($galary_img_data['file_name'])){
            $galary_img_arr = [];
                $galary_img_arr['uid'] = $this->generate_uid('PRG');
                $galary_img_arr['p_id'] = $insert_data['uid'];
                $galary_img_arr['image'] = '/uploads/project_galary_img/'.$galary_img_data['file_name'];
                $this->Pages_model->add_project_images($galary_img_arr);

        }else{
            foreach($galary_img_data as $key => $val){
                $galary_img_arr = [];
                $galary_img_arr['uid'] = $this->generate_uid('PRG');
                $galary_img_arr['p_id'] = $insert_data['uid'];
                $galary_img_arr['image'] = '/uploads/project_galary_img/'.$val['file_name'];
                $this->Pages_model->add_project_images($galary_img_arr);
            }
        }



        $add_new_project = $this->Pages_model->add_new_project($insert_data);
        if ($add_new_project) {
            $add_new_project = $this->Pages_model->add_new_quote($insert_quote);
            if ($add_new_project) {
                redirect('admin/pages/projects');
            }
        }
        
    }

    public function delete_project_event(){
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_project_event($this->input->get('e_id'));
        redirect('admin/pages/projects/edit?p_id='.$this->input->get('p_id'));
    }

    public function update_project()
    {
        $p_id = $this->input->get('p_id');
        $project_title = $this->input->post('project_title');
        $project_cover_details = $this->input->post('project_cover_details');
        $project_page_title = $this->input->post('project_page_title');
        $project_page_video = $this->input->post('project_page_video');
        $project_page_description = $this->input->post('project_page_description');
        $project_page_quote = $this->input->post('quote');
        $project_page_quoteBy = $this->input->post('quote_author');

        $this->init_model(MODEL_PAGES);
        $update_data = [
            "project_title" => $project_title,
            "project_cover_details" => $project_cover_details,
            "project_page_title" => $project_page_title,
            "project_page_video" => $project_page_video,
            "project_page_description" => $project_page_description,
        ];

        $update_quote = [
            "quote" => $project_page_quote,
            "quote_by" => $project_page_quoteBy,
        ];
        if (!empty($_FILES['quote_img']['name'][0])) {
            $quote_data = $this->upload_files('./uploads/quotes_img/', 'quote_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $update_quote['quote_img'] = '/uploads/quotes_img/' . $quote_data['file_name'];
        }
        if (!empty($_FILES['project_logo']['name'][0])) {
            $project_logo_data = $this->upload_files('./uploads/project_logo/', 'project_logo', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $update_data['project_logo'] = '/uploads/project_logo/' . $project_logo_data['file_name'];
        }
        if (!empty($_FILES['project_img']['name'][0])) {
            $project_img_data = $this->upload_files('./uploads/project_img/', 'project_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $update_data['project_img'] = '/uploads/project_img/' . $project_img_data['file_name'];
        }
        if (!empty($_FILES['project_galary_img']['name'][0])) {
            foreach($_FILES['project_galary_img']['name'] as $key => $val){
                $galary_img_data = $this->upload_files('./uploads/project_galary_img/', 'project_galary_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
                $galary_data['image'] = '/uploads/project_galary_img/'. $galary_img_data['file_name'];
                $galary_data['uid'] = $this->generate_uid('PRG');
                $galary_data['p_id'] = $p_id;

                $this->Pages_model->add_project_galary_images($galary_data);
            }


           
        }

        $this->Pages_model->update_project($p_id, $update_data);
        $this->Pages_model->update_quote($p_id, $update_quote);
        redirect('admin/pages/projects/edit?p_id=' . $p_id);

    }

    public function delete_project()
    {
        $this->init_model(MODEL_PAGES);
        $p_id = $this->input->get('p_id');
        $this->Pages_model->delete_project($p_id);
        redirect('admin/pages/projects');
    }

    /**DONORS*/
    public function donors()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['donor_js.php'];
        $data['data_header']['header_link'] = [];
        $data['data_header']['title'] = 'Admin | Donors';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['donors'] = true;
        $data['data_page']['donors'] = $this->Pages_model->get_all_donors();

        $this->is_auth('admin/pages_donors.php', $data);

    }

    public function donors_add()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['donor_js.php'];
        $data['data_header']['header_link'] = [];
        $data['data_header']['title'] = 'Admin | Donors';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['donors'] = true;
        $this->is_auth('admin/pages_donors_add.php', $data);

    }
    public function add_new_donor()
    {
        $this->init_model(MODEL_PAGES);

        $donor_name = $this->input->post('name');
        $about_donor = $this->input->post('donor_about');
        $donor_img = '';
        if (!empty($_FILES['donor_img']['name'])) {
            $donor_image_data = $this->upload_files('./uploads/donor_img/', 'donor_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $donor_img = '/uploads/donor_img/' . $donor_image_data['file_name'];
        }

        $insert_data = [
            "uid" => $this->generate_uid(UID_DONOR),
            "name" => $donor_name,
            "doner_about" => $about_donor,
            "img" => $donor_img,
        ];

        $add_new_donor = $this->Pages_model->add_new_donor($insert_data);

        if ($add_new_donor) {
            redirect('admin/pages/donors');
        }
    }

    public function delete_donor()
    {
        $this->init_model(MODEL_PAGES);
        $donor_id = $this->input->get('donor_id');
        $this->Pages_model->delete_donor($donor_id);
        redirect('admin/pages/donors');
    }

    /**VOLUNTEERS*/
    public function volunteers()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['volunteer_js.php'];
        $data['data_header']['header_link'] = [];
        $data['data_header']['title'] = 'Admin | Volunteers';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['volunteers'] = true;
        $data['data_page']['volunteers'] = $this->Pages_model->get_all_volunteers();

        $this->is_auth('admin/pages_volunteers.php', $data);

    }

    public function volunteers_add()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['volunteer_js.php'];
        $data['data_header']['header_link'] = [];
        $data['data_header']['title'] = 'Admin | Volunteers';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['Volunteers'] = true;
        $this->is_auth('admin/pages_volunteers_add.php', $data);

    }

    public function add_new_volunteer()
    {
        $this->init_model(MODEL_PAGES);

        $volunteer_name = $this->input->post('name');
        $volunteer_about = $this->input->post('volunteer_about');
        $volunteer_img = '';
        if (!empty($_FILES['volunteers_img']['name'])){
            $donor_image_data = $this->upload_files('./uploads/volunteers_img/', 'volunteers_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $volunteer_img = '/uploads/volunteers_img/' . $donor_image_data['file_name'];
        }

        $insert_data = [
            "uid" => $this->generate_uid(UID_VOLUNTEER),
            "name" => $volunteer_name,
            "volunteer_about" => $volunteer_about,
            "img" => $volunteer_img,
        ];

        $add_new_volunteer = $this->Pages_model->add_new_volunteer($insert_data);

        if ($add_new_volunteer) {
            redirect('admin/pages/volunteers');
        }
    }

    public function delete_volunteer(){
        $this->init_model(MODEL_PAGES);
        $volunteer_id = $this->input->get('volunteer_id');
        $this->Pages_model->delete_volunteer($volunteer_id);
        redirect('admin/pages/volunteers');
    }

    /**ABOUT*/
    public function update_about()
    {
        $about_title = $this->input->post('about_title');
        $about = $this->input->post('about');
        $mission_title = $this->input->post('mission_title');
        $mission = $this->input->post('mission');
        $vision_title = $this->input->post('vision_title');
        $vision = $this->input->post('vision');
        $about_id = $this->input->post('about_id');
        $mission_id = $this->input->post('mission_id');
        $vision_id = $this->input->post('vision_id');

        $this->init_model(MODEL_PAGES);

        if (empty($_FILES['about_img']['name'][0])) {
            $this->Pages_model->update_about_misson_vision($about_title, $about, $mission_title, $mission, $vision_title, $vision, $about_id, $mission_id, $vision_id, '');
        } else {
            $upload_data = $this->upload_files('./uploads/about_img/', 'about_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $this->Pages_model->update_about_misson_vision($about_title, $about, $mission_title, $mission, $vision_title, $vision, $about_id, $mission_id, $vision_id, '/uploads/about_img/' . $upload_data['file_name']);
        }
        redirect('/admin/pages/home');

    }

    /**QUOTE*/
    public function update_quotes()
    {
        $uid = $this->input->post('uid');
        $quote = $this->input->post('quote');
        $quote_author = $this->input->post('quote_author');

        $this->init_model(MODEL_PAGES);

        if (empty($_FILES['quote_img']['name'][0])) {
            $this->Pages_model->update_quotes($uid, $quote, $quote_author, '');
        } else {
            $upload_data = $this->upload_files('./uploads/quotes_img/', 'quote_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $this->Pages_model->update_quotes($uid, $quote, $quote_author, '/uploads/quotes_img/' . $upload_data['file_name']);
        }
        redirect('/admin/pages/home');
    }
    
    /**VIDEO*/
    public function update_video()
    {
        $uid = $this->input->post('uid');
        $url = $this->input->post('url');

        if (!empty($uid) && !empty($url)) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->update_video($uid, $url);
        }
        redirect('/admin/pages/home');

    }

    /**SERVICES*/
    public function delete_service()
    {
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_service($uid);
        redirect('/admin/pages/home');
    }

    public function add_work()
    {
        $work_title = $this->input->post('work_title');
        $description = $this->input->post('description');

        if (!empty($_FILES['work_img']['name'][0])) {
            $this->init_model(MODEL_PAGES);
            $upload_data = $this->upload_files('./uploads/work_img/', 'work_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $this->Pages_model->add_work($work_title, $description, '/uploads/work_img/' . $upload_data['file_name']);
        }
        redirect('/admin/pages/home');

    }

    /**OUR TEAM*/
    public function our_team()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = [];
        $data['data_header']['header_link'] = [];
        $data['data_header']['title'] = 'Admin | Our Team';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['our_team'] = true;
        $data['data_page']['our_team'] = $this->Pages_model->get_all_our_team_members();

        $this->is_auth('admin/pages_our_team.php', $data);

    }

    public function our_team_add()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['our_team_js.php'];
        $data['data_header']['header_link'] = [];
        $data['data_header']['title'] = 'Admin | Our Team';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['our_team'] = true;
        // $data['data_page']['donors'] = $this->Pages_model->get_all_donors();

        $this->is_auth('admin/pages_our_team_add.php', $data);

    }

    public function add_new_our_team_member()
    {
        $this->init_model(MODEL_PAGES);

        $member_name = $this->input->post('name');
        $about_member = $this->input->post('about_member');
        $member_type = $this->input->post('member_type');
        $member_img = '';
        if (!empty($_FILES['member_img']['name'])){
            $donor_image_data = $this->upload_files('./uploads/our_team_img/', 'member_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $member_img = '/uploads/our_team_img/' . $donor_image_data['file_name'];
        }

        $insert_data = [
            "uid" => $this->generate_uid(UID_OUR_TEAM),
            "name" => $member_name,
            "about_member" => $about_member,
            "img" => $member_img,
            "type" => $member_type,
        ];

        $add_new_member = $this->Pages_model->add_new_our_team_member($insert_data);

        if ($add_new_member) {
            redirect('admin/pages/our_team');
        }
    }

    public function delete_our_team_member(){
        $this->init_model(MODEL_PAGES);
        $our_team_member_id = $this->input->get('our_team_member_id');
        $this->Pages_model->delete_our_team_member($our_team_member_id);
        redirect('admin/pages/our/team');
    }

    /**BLOGS*/
    public function blog_add()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['blog_js.php'];
        $data['data_header']['header_link'] = [];
        $data['data_header']['title'] = 'Admin | Add  Blog';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['blog'] = true;
        // $data['data_page']['our_team'] = $this->Pages_model->get_all_our_team_members();

        $this->is_auth('admin/blog_add.php', $data);
    }

    public function blog()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['blog_js.php'];
        $data['data_header']['header_link'] = [];
        $data['data_header']['title'] = 'Admin | Blog';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['blog'] = true;
        $data['data_page']['blogs'] = $this->Pages_model->get_all_blogs();

        $this->is_auth('admin/blog.php', $data);
    }

    public function add_new_blog()
    {
        $this->init_model(MODEL_PAGES);

        $blog_title = $this->input->post('title');
        $description = $this->input->post('description');
        $description2 = $this->input->post('description2');
        $blog_img = '';
        $blog_img2 = '';
        if (!empty($_FILES['blog_img']['name'])){
            $blog_image_data = $this->upload_files('./uploads/blog_img/', 'blog_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $blog_img = '/uploads/blog_img/' . $blog_image_data['file_name'];
        }
        if (!empty($_FILES['blog_img2']['name'])){
            $blog_image_data = $this->upload_files('./uploads/blog_img/', 'blog_img2', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $blog_img2 = '/uploads/blog_img/' . $blog_image_data['file_name'];
        }

        $insert_data = [
            "uid" => $this->generate_uid(UID_BLOG),
            "title" => $blog_title,
            "description" => $description,
            "description2" => $description2,
            "img" => $blog_img,
            "img2" => $blog_img2,
        ];

        $add_new_blog = $this->Pages_model->add_new_blog($insert_data);

        if ($add_new_blog) {
            redirect('admin/blog');
        }
    }

    public function delete_blog(){
        $this->init_model(MODEL_PAGES);
        $blog_id = $this->input->get('blog_id');
        $this->Pages_model->delete_blog($blog_id);
        redirect('admin/blog');
    }


    public function add_project_event(){

        if($_FILES['event_img']['name'][0]){
            $event_img_data = $this->upload_files('./uploads/project_event_img/', 'event_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $event_img = '/uploads/project_event_img/' . $event_img_data['file_name'];
            $data = [
                "uid"  => $this->generate_uid('PREV'),
                "p_id" => $this->input->get('p_id'),
                'title'=> $this->input->POST('event_title'),
                'details'=> $this->input->post('event_details'),
                'img'=>$event_img
            ];
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_project_event($data);
            redirect('admin/pages/projects/edit?p_id='.$this->input->get('p_id'));
        }

    }


    public function blog_update()
    {
        $blog_id = $this->input->get('blog_id');

        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['blog_js.php'];
        $data['data_header']['header_link'] = [];
        $data['data_header']['title'] = 'Admin | Update  Blog';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['blog'] = true;
        $data['data_page']['blog'] = $this->Pages_model->get_blog($blog_id);


        $this->is_auth('admin/blog_update.php', $data);
    }

    public function update_blog()
    {
        $blog_id = $this->input->get('blog_id');
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $description2 = $this->input->post('description2');

        $this->init_model(MODEL_PAGES);
        $update_data = [
            "title" => $title,
            "description" => $description,
            "description2" => $description2,
        ];
        if (!empty($_FILES['blog_img']['name'][0])) {
            $blog_img_data = $this->upload_files('./uploads/blog_img/', 'blog_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $update_data['img'] = '/uploads/blog_img/' . $blog_img_data['file_name'];
        }
        if (!empty($_FILES['blog_img2']['name'][0])) {
            $blog_img_data = $this->upload_files('./uploads/blog_img/', 'blog_img2', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $update_data['img2'] = '/uploads/blog_img/' . $blog_img_data['file_name'];
        }
        $this->Pages_model->update_blog($blog_id, $update_data);
        redirect('admin/blog');

    }

    public function add_news_letter()
    {
        $this->init_model(MODEL_PAGES);

        $email = $this->input->post('email');

        $insert_data = [
            "uid" => $this->generate_uid(UID_NL),
            "email" => $email,
        ];

        $add_news_letter = $this->Pages_model->add_news_letter($insert_data);

        if ($add_news_letter) {
            redirect('/home');
        }
    }


    public function do_upload() 
    {
        $this->init_model(MODEL_PAGES);

        $uid = $this->input->post('uid');

        $config['upload_path'] = './uploads/mp3/';
        $config['allowed_types'] = 'mp3|wav|ogg|m4a';
        $config['max_size'] = 100000; 

        if (!file_exists($config['upload_path'])) {
			mkdir($config['upload_path'], 0777, true);
		}

        $this->load->library('upload', $config);

        if (!empty($_FILES['audio']['name'])) {
            $_FILES['userfile']['name'] 	= $_FILES['audio']['name'];
			$_FILES['userfile']['type'] 	= $_FILES['audio']['type'];
			$_FILES['userfile']['tmp_name'] = $_FILES['audio']['tmp_name'];
			$_FILES['userfile']['error'] 	= $_FILES['audio']['error'];
			$_FILES['userfile']['size'] 	= $_FILES['audio']['size'];

			$this->upload->initialize($config);
			$this->upload->do_upload('userfile');

			$audio_data = $this->upload->data();
            $audio_path = '/uploads/mp3/' . $audio_data['file_name'];

            $insert_data = [
                "path" => $audio_path,
                "type" => 'audio',
            ];
    
            $add_audio = $this->Pages_model->add_audio($insert_data, $uid);
    
            if ($add_audio) {
                redirect('admin/pages/home');
            }
           
        } else {
            $error = array('error' => $this->upload->display_errors());
            redirect('admin/pages/home', $error);
        }
    }
    
    /**DONATION*/
    public function donation()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['home_js.php'];
        $data['data_header']['header_link'] = [];
        $data['data_header']['title'] = 'Admin | Pages';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['donation'] = true;
        $data['data_page']['payments'] = $this->Pages_model->get_all_donations();
        //  $this->prd($data['data_page']['payments']);
        $this->is_auth('admin/donation.php', $data);

    }
    
}