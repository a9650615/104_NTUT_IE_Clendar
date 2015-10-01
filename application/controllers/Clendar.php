<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clendar extends CI_Controller {
    
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        date_default_timezone_set('Asia/Taipei');
        $this->load->helper('url');
        $this->load->model('site_model');
        $this->load->model('clander_model');
        $this->load->model('crypt_model');
    }
    
	public function index()
	{
        
        $this->site_model->load_header();
        $this->clander_model->load_time();
        $this->clander_model->ouput_clendar();
        $this->load->view('Fronted/clander', $this->clander_model->data);
        $this->site_model->load_footer();
		//$this->load->view('welcome_message');
	}
    
    public function getime($time = NULL)
	{
        
        $this->site_model->load_header();
        $this->clander_model->load_time($this->crypt_model->decrypt($time));
        $this->clander_model->ouput_clendar();
        $this->load->view('Fronted/clander', $this->clander_model->data);
        $this->site_model->load_footer();
		//$this->load->view('welcome_message');
	}
    
    public function active($url = NULL){
        $this->site_model->load_header();
        $this->clander_model->get_actives($url);
        $this->site_model->load_footer();
    }
    
    public function itinerary($ID = NULL){
        $this->load->database();
        $data = $this->db->get_where('itinerary',array('ID'=>$ID))->result();
        $data = $data[0];
        $this->site_model->load_header();
        $this->load->view('Fronted/thing',$data);
        $this->site_model->load_footer();
    }

}
