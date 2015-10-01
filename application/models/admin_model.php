<?
    class admin_model extends CI_Model{
        
         public $data = array(); 
        
         public function __construct(){
            // Call the CI_Model constructor
            parent::__construct();
            $this->load->model('crypt_model');
            $this->data['data'] = $this;
         }
        
        function output_time_opt(){
            for($x=0;$x<=23;$x++){?>
                <option value="<?=$x*3600?>"><?=$x?>點</option>
            <?}
        }
        
        
    }