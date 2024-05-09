<?php
defined('BASEPATH') or exit('nothing found');
require_once(APPPATH . 'models/Admin_model.php');

class Pages_model extends Admin_model
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set(field_location);
    }

    public function get_all_quotes()
    {

        $quotes = $this->db
            ->select('*')
            ->from(TABLE_QUOTES)
            ->get();

        $quotes = $quotes->result_array();
        return isset($quotes) ? $quotes : [];
    }

    public function get_quote_by_id($id)
    {
        // print_r($id);
        // die();
        $quote = $this->db->select('*')
        ->from(TABLE_QUOTES)
        ->where('type_id', $id)
        ->get()
        ->row_array();
        return !empty($quote) ? $quote : [];
    }

    public function update_quote($p_id, $update_data)
    {
        $update = $this->db->where('type_id', $p_id)
            ->update(TABLE_QUOTES, $update_data);
        return $update;
    }

    public function get_all_videos()
    {
        $videos = $this->db
            ->select('*')
            ->from(TABLE_VIDEOS)
            ->get();

        $videos = $videos->result_array();
        return isset($videos) ? $videos : [];
    }


    public function get_about()
    {
        $about = $this->db
            ->select('*')
            ->from(TABLE_ABOUT)
            ->get();
        $about = $about->result_array();
        return isset($about) ? $about : [];

    }

    public function get_about_web()
    {
        $about = $this->db
            ->select('*')
            ->from(TABLE_ABOUT)
            ->get();
        $about = $about->row_array();
        return isset($about) ? $about : [];

    }

    public function get_mission_vision()
    {
        $mission_vision = $this->db
            ->select('*')
            ->from(TABLE_MISSION_VISION)
            ->get();
        $mission_vision = $mission_vision->result_array();
        return isset($mission_vision) ? $mission_vision : [];

    }

    public function add_new_quote($data)
    {
        $add = $this->db->insert(TABLE_QUOTES, $data);
        return $add;
    }

    public function update_quotes($uid, $quote, $quote_author, $quote_img)
    {

        if (empty($quote_img)) {
            $data = [
                'quote' => $quote,
                'quote_by' => $quote_author,
            ];
        } else {
            $data = [
                'quote' => $quote,
                'quote_by' => $quote_author,
                'quote_img' => $quote_img
            ];
        }
        $update = $this->db->where('uid', $uid)
            ->update(TABLE_QUOTES, $data);
        return $update;

    }

    public function update_about_misson_vision($about_title, $about, $mission_title, $mission, $vision_title, $vision, $about_id, $mission_id, $vision_id, $about_img)
    {
        if (empty($about_img)) {
            $about_data = [
                'about_title' => $about_title,
                'about' => $about
            ];
        } else {
            $about_data = [
                'about_title' => $about_title,
                'about' => $about,
                'about_img' => $about_img
            ];
        }
        $update_about = $this->db->where('uid', $about_id)
            ->update(TABLE_ABOUT, $about_data);
        $mission_data = [
            'title' => $mission_title,
            'description' => $mission
        ];
        $update_misson = $this->db->where('uid', $mission_id)
            ->update(TABLE_MISSION_VISION, $mission_data);


        $vision_data = [
            'title' => $vision_title,
            'description' => $vision
        ];
        $update_vision = $this->db->where('uid', $vision_id)
            ->update(TABLE_MISSION_VISION, $vision_data);

        return $update_about && $update_misson && $update_vision;
    }

    public function update_video($uid, $url)
    {
        $data = [
            'path' => $url
        ];
        $update = $this->db->where('uid', $uid)
            ->update(TABLE_VIDEOS, $data);
        return $update;
    }

    public function update_project($p_id, $update_data)
    {
        $update = $this->db->where('uid', $p_id)
            ->update(TABLE_PROJECTS, $update_data);
        return $update;
    }

    public function add_work($work_title, $description, $path)
    {

        $data = [
            'uid' => $this->generate_uid(UID_WORK),
            'title' => $work_title,
            'description' => $description,
            'img' => $path
        ];
        $add = $this->db->insert(TABLE_SERVICES, $data);
        return $add;
    }

    public function get_all_work()
    {
        $work = $this->db
            ->select('*')
            ->from(TABLE_SERVICES)
            ->get();
        $work = $work->result_array();
        return !empty($work) ? $work : [];
    }

    public function delete_service($uid)
    {
        $delete = $this->db->where('uid', $uid)
            ->delete(TABLE_SERVICES);
        return $delete;
    }

    public function delete_project($p_id)
    {
        $delete = $this->db->where('uid', $p_id)
            ->delete(TABLE_PROJECTS);
        return $delete;
    }

    public function add_new_project($data)
    {
        $add = $this->db->insert(TABLE_PROJECTS, $data);
        return $add;
    }

    public function get_all_projects()
    {
        $projects = $this->db
            ->select('*')
            ->from(TABLE_PROJECTS)
            ->get();
        $projects = $projects->result_array();
        return !empty($projects) ? $projects : [];
    }

    public function get_projects_by_id($p_id)
    {
            $project = $this->db->select('*')
            ->from(TABLE_PROJECTS)
            ->where('uid', $p_id)
            ->get()
            ->row_array();
        return !empty($project) ? $project : []; 
        
    }

    public function get_projects_by_id_for_donation($p_id, $for)
    {
        if($for == 'project'){
            $project = $this->db->select('*')
            ->from(TABLE_PROJECTS)
            ->where('uid', $p_id)
            ->get()
            ->row_array();
        return !empty($project) ? $project : []; 
        }else if($for == 'causes'){
            $causes = $this->db->select('*')
            ->from(TABLE_CAUSES)
            ->where('uid', $p_id)
            ->get()
            ->row_array();
        return !empty($causes) ? $causes : []; 
        }else if($for == 'events'){
            $events = $this->db->select('*')
            ->from(TABLE_EVENTS)
            ->where('uid', $p_id)
            ->get()
            ->row_array();
        return !empty($events) ? $events : [];
        }

    }

    public function add_new_donor($data)
    {
        $add = $this->db->insert(TABLE_DONORS, $data);
        return $add;
    }

    public function get_all_donors()
    {
        $donors = $this->db
            ->select('*')
            ->from(TABLE_DONORS)
            ->get();
        $donors = $donors->result_array();
        return !empty($donors) ? $donors : [];
    }

    public function delete_donor($donor_id)
    {
        $delete = $this->db->where('uid', $donor_id)
            ->delete(TABLE_DONORS);
        return $delete;
    }

    // public function get_donor_by_id($donor_id)
    // {

    //     $donors = $this->db->select('*')
    //             ->from(TABLE_DONORS)
    //             ->where('uid', $donor_id)
    //             ->get()
    //             ->row_array();
    //     return !empty($donors) ? $donors : [];

    // }

    public function add_new_volunteer($data)
    {
        $add = $this->db->insert(TABLE_VOLUNTEERS, $data);
        return $add;
    }

    public function get_all_volunteers()
    {
        $volunteers = $this->db
            ->select('*')
            ->from(TABLE_VOLUNTEERS)
            ->get();
        $volunteers = $volunteers->result_array();
        return !empty($volunteers) ? $volunteers : [];
    }

    public function delete_volunteer($volunteer_id)
    {
        $delete = $this->db->where('uid', $volunteer_id)
            ->delete(TABLE_VOLUNTEERS);
        return $delete;
    }

    public function add_new_our_team_member($data)
    {
        $add = $this->db->insert(TABLE_OUR_TEAM, $data);
        return $add;
    }

    public function get_all_our_team_members()
    {
        $our_team = $this->db
            ->select('*')
            ->from(TABLE_OUR_TEAM)
            ->get();
        $our_team = $our_team->result_array();
        return !empty($our_team) ? $our_team : [];
    }

    public function get_all_our_team_board_of_trustees()
    {
        $our_team = $this->db
            ->select('*')
            ->from(TABLE_OUR_TEAM)
            ->where('type', 'board_of_trustees')
            ->or_where('type', 'secretary')
            ->or_where('type', 'treasurer')
            ->get();
        $our_team = $our_team->result_array();
        return !empty($our_team) ? $our_team : [];
    }

    public function get_all_our_team__trustees()
    {
        $our_team = $this->db
            ->select('*')
            ->from(TABLE_OUR_TEAM)
            ->where('type', 'trustees')
            ->get();
        $our_team = $our_team->result_array();
        return !empty($our_team) ? $our_team : [];
    }

    public function delete_our_team_member($our_team_member_id)
    {
        $delete = $this->db->where('uid', $our_team_member_id)
            ->delete(TABLE_OUR_TEAM);
        return $delete;
    }

    public function gallery_img_add($gallery_img_data)
    {

        $insert = $this->db->insert(TABLE_GALLERY, $gallery_img_data);
        return $insert;

    }

    public function add_project_galary_images($data){
        $insert = $this->db->insert('project_images', $data);
        return $insert;
    }

    public function add_project_event($data){
        $insert = $this->db->insert('project_events', $data);
        return $insert;
    }



    public function get_gallery_img()
    {
        $images = $this->db->select('*')
            ->from(TABLE_GALLERY)
            ->get()
            ->result_array();
        return !empty($images) ? $images : [];
    }

    public function gallery_img_delete($uid)
    {
        $delete = $this->db->where('uid', $uid)
            ->delete(TABLE_GALLERY);
        return $delete;
    }

    public function delete_project_gal_img($uid)
    {
        $delete = $this->db->where('uid', $uid)
            ->delete('project_images');
        return $delete;
    }

    public function add_new_blog($data)
    {
        $add = $this->db->insert(TABLE_BLOG, $data);
        return $add;
    }

    public function add_project_images($data){
        $add = $this->db->insert('project_images', $data);
        return $add;
    }
    public function get_all_blogs()
    {
        $blogs = $this->db
            ->select('*')
            ->from(TABLE_BLOG)
            ->get();
        $blogs = $blogs->result_array();
        return !empty($blogs) ? $blogs : [];
    }

    public function delete_blog($blog_id)
    {
        $delete = $this->db->where('uid', $blog_id)
            ->delete(TABLE_BLOG);
        return $delete;
    }

    public function delete_project_event($e_id){
        $delete = $this->db->where('uid', $e_id)
            ->delete('project_events');
        return $delete;
    }

    public function get_blog($blog_id)
    {
        $blog = $this->db
            ->select('*')
            ->from(TABLE_BLOG)
            ->where('uid', $blog_id)
            ->get();
        $blog = $blog->row_array();
        return !empty($blog) ? $blog : [];
    }

    public function get_events_by_id($p_id){
        $events = $this->db
            ->select('*')
            ->from('project_events')
            ->where('p_id', $p_id)
            ->get();
        $events = $events->result_array();
        return !empty($events) ? $events : [];

    }

    public function get_project_event($id){
        $events = $this->db
            ->select('*')
            ->from('project_events')
            ->where('p_id', $id)
            ->get();
        $events = $events->result_array();
        return !empty($events) ? $events : [];
    }

    public function update_blog($blog_id, $update_data)
    {
        $update = $this->db->where('uid', $blog_id)
            ->update(TABLE_BLOG, $update_data);
        return $update;
    }

    public function add_causes($data)
    {
        $add = $this->db->insert(TABLE_CAUSES, $data);
        return $add;
    }

    public function get_causes()
    {
        $causes = $this->db
            ->select('*')
            ->from(TABLE_CAUSES)
            ->get()
            ->result_array();
        return !empty($causes) ? $causes : [];
    }


    public function get_causes_by_id($uid)
    {

        $cause = $this->db->select('*')
            ->from(TABLE_CAUSES)
            ->where('uid', $uid)
            ->get()
            ->result_array();
        return !empty($cause) ? $cause[0] : [];

    }

    public function update_cause($uid, $data)
    {
        $update = $this->db->where('uid', $uid)
            ->update(TABLE_CAUSES, $data);
        return $update;

    }

    public function delete_cause($uid)
    {
        $delete = $this->db->where('uid', $uid)
            ->delete(TABLE_CAUSES);
        return $delete;
    }

    public function add_event($data)
    {
        $event = $this->db->insert(TABLE_EVENTS, $data);
        return $event;
    }
    public function get_event()
    {
        $event = $this->db
            ->select('*')
            ->from(TABLE_EVENTS)
            ->get()
            ->result_array();
        return !empty($event) ? $event : [];
    }

    public function get_event_by_id($uid)
    {
        $event = $this->db->select('*')
            ->from(TABLE_EVENTS)
            ->where('uid', $uid)
            ->get()
            ->result_array();
        return !empty($event) ? $event[0] : [];
    }

    public function get_projects_galary_by_id($p_id){
        $images = $this->db->select('*')
                    ->from('project_images')
                    ->where('p_id', $p_id)
                    ->get()
                    ->result_array();
        return !empty($images) ? $images : [];
    }

    public function update_event($uid, $data)
    {
        $update = $this->db->where('uid', $uid)
            ->update(TABLE_EVENTS, $data);
        return $update;

    }

    public function delete_event($uid)
    {
        $delete = $this->db->where('uid', $uid)
            ->delete(TABLE_EVENTS);
        return $delete;
    }

    public function add_new_donation($data)
    {
        $event = $this->db->insert(TABLE_DONATIONS, $data);
        return true;
    }


    public function add_user_msg($data)
    {
        $data = $this->db->insert(TABLE_USER_MESSAGE, $data);
        return $data;
    }


    public function get_all_message()
    {
        $message = $this->db->select('*')
            ->from(TABLE_USER_MESSAGE)
            ->get()
            ->result_array();
        return !empty($message) ? $message : [];

    }

    public function save_webhook_text($data)
    {
        $data = $this->db->insert('transaction', ['text' => $data]);
        return $data;

    }

    public function add_news_letter($data)
    {
        $data = $this->db->insert(TABLE_NEWS_LETTER, $data);
        return $data;
    }

    public function get_new_letter()
    {
        $data = $this->db->select('*')
            ->from(TABLE_NEWS_LETTER)
            ->get()
            ->result_array();
        return !empty($data) ? $data : [];

    }

    public function add_audio($data, $uid)
    {
        $update = $this->db->where('uid', $uid)
            ->update(TABLE_AUDIO, $data);
        return $update;
    }

    public function get_audio()
    {
        $data = $this->db->select('*')
            ->from(TABLE_AUDIO)
            ->get()
            ->row_array();
        return !empty($data) ? $data : [];

    }
    
     public function get_all_donations() {
    $this->db->select('donations.*, projects.project_title, causes.title as cause_title, events.title as event_title, payment.*');
    $this->db->from('donations');
    $this->db->join('projects', 'projects.uid = donations.project_id', 'left');
    $this->db->join('causes', 'causes.uid = donations.project_id', 'left'); // Assuming cause_id is the correct foreign key
    $this->db->join('events', 'events.uid = donations.project_id', 'left'); // Assuming event_id is the correct foreign key
    $this->db->join('payment', 'payment.payment_id = donations.payment_id', 'left');
    $this->db->where('payment.status', 'authorized'); // Assuming payment_status is the correct field
    $query = $this->db->get();
    $donations = $query->result_array();
    
    return !empty($donations) ? $donations : [];
}


    public function add_new_payment($insert_data)
    {
        $data = $this->db->insert(TABLE_PAYMENT, $insert_data);
        return $data;
    }

}