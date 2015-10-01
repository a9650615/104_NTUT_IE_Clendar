<?
class Site_model extends CI_Model{
   /*
    * 基本網站事項
    */
    
    public $data = array(
        'title' => '資工的悲慘日曆',
        'content'      => '',
        'index' =>'',
        'links' => array()
    );
    
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }
    
    public function load_header(){
        $this->load->view('Fronted/header', $this->data);
    }
    
    public function load_footer(){
        $this->load->view('Fronted/footer', $this->data);
    }
    
}