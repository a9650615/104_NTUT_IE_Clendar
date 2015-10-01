<?
    class crypt_model extends CI_Model{
    
    public $key = '1234';
      function encrypt($data, $key = NULL)
        {
           return $data;
        }
        
        function decrypt($data, $key = NULL)
        {
           return $data;
        }
    }