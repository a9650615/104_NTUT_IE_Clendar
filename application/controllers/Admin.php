<?
    class Admin extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
            date_default_timezone_set('Asia/Taipei');
            $this->load->helper('url');
            $this->load->model('site_model');
            $this->load->model('clander_model');
            $this->load->model('crypt_model');
            $this->load->model('admin_model');
            $this->load->database();
            $this->site_model->data['index'] = 'admin/';
            $this->site_model->data['links'] = array(
                                                 array(base_url().'admin/add','新增')
                                                ); 
        }
        
        public function add(){
            $this->site_model->load_header();
            $this->load->view('Admin/add', $this->admin_model->data);
            $this->site_model->load_footer();
        }
        
        public function post($type, $id = null){
            $data = $this->input->post('data');
            if($type=='add'){
               $data['ID'] = md5(uniqid(time()+rand(), true));
               $data['Date'] = strtotime($data['Date']);
               $this->db->insert('itinerary',$data);
               redirect('/admin/add');
            }
            if($type=='change'){
                $data['ID'] = md5(uniqid(time()+rand(), true));
                $data['Date'] = strtotime($data['Date']);
                $this->db->update('itinerary',$data);
                redirect('/admin/');
            }
            //print_r($data);
            
        }
        
        public function manage($time = NULL){
             $this->data['data'] = $this->db->query('Select * From itinerary where Date="'.(strtotime($time)).'" order by Time asc')->result_array();
             $this->index($time);
        }
        
        public function index($time = NULL){
            echo $time;
            if($time == NULL)
            $this->data['data'] = $this->db->query('Select * From itinerary order by Date desc limit 10')->result_array();
            $this->data['mode'] = 'Admin';
            $this->site_model->load_header();
            $this->load->view('Admin/manage', $this->data);
            $this->load->view('Fronted/table', $this->data);
            $this->site_model->load_footer();
        }
        
        public function change($id = NULL){
            $this->site_model->load_header();
            $this->admin_model->data['ID'] = $id;
            $this->admin_model->data['sql'] = $this->db->get_where('itinerary',array('ID'=>$id))->result();
            $this->load->view('Admin/add', $this->admin_model->data);
            $this->site_model->load_footer();
        }
        
        public function delete($id = NULL){
            $this->db->delete('itinerary', array('ID' => $id));
            redirect('/admin/');
        }
        
    }