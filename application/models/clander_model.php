<?
class Clander_model extends CI_Model{
   /*
    * 行事曆
    */
    
    public $data = array(
    );
    
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->model('crypt_model');
        $this->load->database();
    }
    
    public function load_time( $time = NULL){
        
        $this->data['now'] = time();
        
        if($time)
        $this->data['time'] = $time;
        else 
        $this->data['time'] = $this->data['now'];
        
        $this->data['year'] = date('Y',$this->data['time']);
        $this->data['month'] = date('m',$this->data['time']);
        $this->data['day'] = date('d',$this->data['time']);
        
        $this->data['m_t'] = mktime(0,0,0,$this->data['month'],1,$this->data['year']);
        $this->data['l_m_t'] = mktime(0,0,0,$this->data['month']-1,1,$this->data['year']);
        $this->data['l_a'] = date('t', $this->data['l_m_t']);// 上個月全日
        $this->data['space'] = date('w',$this->data['m_t']);
        $this->data['all_date'] = date('t', $this->data['m_t']);
    }
    
    public function next_c(){
        return $this->crypt_model->encrypt($this->data['m_t']+86400*$this->data['all_date']);
    }
    
    public function last_c(){
        return $this->crypt_model->encrypt($this->data['m_t']-86400*$this->data['l_a']);
    }
    
    public function ouput_clendar(){
        $this->data['method'] = $this;
        $this->data['table_output'] = '<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">行事曆</div>
  <div class="panel-body">
    <table class="table ct">
        <thead>
          <tr>
           <td>星期日</td><td>星期一</td><td>星期二</td><td>星期三</td><td>星期四</td><td>星期五</td><td>星期六</td>
          </tr>
        </thead>
      </table>
  ';
        //$this->data['table_output'] = '<table><tr><td>星期日</td><td>星期一</td><td>星期二</td><td>星期三</td><td>星期四</td><td>星期五</td><td>星期六</td></tr></table>';
        $this->data['table_output'] .= '<div class="btn-group btn-group-justified" role="group" aria-label="">';
        for($d = 1;$d <= $this->data['space']-1; $d++){
            $this->data['table_output'].="<div class='col-sm-12 btn btn-default'></div>";
        };
        
        /*判斷今天*/
        if($this->data['year']==date('Y')&&$this->data['month']==date('m')){
            $tod = true;
        }
        else
            $tod = false;
        
        for($d ;$d <= 35; $d++){
           
            if($d<$this->data['all_date']+$this->data['space']){
            $this->data['table_output'].="<a href='".base_url().'clendar/active/'.$this->data['year'].'-'.$this->data['month'].'-'.($d-$this->data['space']+1)."' class='col-sm-12 btn ".($tod==true&&($d-$this->data['space']+1)==date('d')?'btn-primary':'btn-default')."'>".($d-$this->data['space']+1);
                    $num_rows = $this->db->get_where('itinerary', array('Date'=>strtotime($this->data['year'].'-'.$this->data['month'].'-'.($d-$this->data['space']+1))))->num_rows();
                   
                
            $this->data['table_output'].='<p class="imp_">'.$num_rows.'</p><p>行程</p></a>';
            }
            else
            $this->data['table_output'].="<div class='col-sm-12 btn btn-default'></div>"; 
            
            if($d%7==0)
                 $this->data['table_output'].='</div><div class="btn-group btn-group-justified" role="group" aria-label="">';
        };
        $this->data['table_output'] .= '</div></div>';
    }
    
    
    /*
     * 活動
     */
    
    function get_actives( $url = NULL ){
        $this->load->database();
        if($url){
            $Date = strtotime($url);
            $data = $this->db->get_where('itinerary', array( 'Date'=>$Date))->result_array();
        }else{
            
        }
        $data = array('data' => $data,'url' => $url);
       $this->load->view('Fronted/table',$data);
        
    }
    
}