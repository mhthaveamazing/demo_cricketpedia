<?php
class Pedia_model extends CI_Model{
 function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function create_link(){
    	$data=$this->input->post();
        if($data['select_hash']== "MD2"){
        $hashed=md2($data['input_link']);    
        }elseif ($data['select_hash']== "MD3") {
            $hashed=md3($data['input_link']);
        }elseif ($data['select_hash']== "MD5") {
            $hashed=md5($data['input_link']);
        }elseif ($data['select_hash']== "SHA1") {
            $hashed=sha1($data['input_link']);
        }elseif ($data['select_hash']== "GHOST") {
            $hashed=ghost($data['input_link']);
        }elseif ($data['select_hash']== "WHIRLPOOL") {
            $hashed=whirlpool($data['input_link']);
        }else{
            $hashed="Incorrect Hash Type";
        }
		$this->db->where('hash_used',$data['select_hash']);
    	$this->db->where('hashed_link',$hashed);
    	$check_data=$this->db->get('links_database');
    	if($check_data->num_rows() < 1){
	    	$arr=array(
	    		'name'           =>$data['name'],
	    		'purpose'        =>$data['purpose'],
	    		'input_link'     =>$data['input_link'],
                'hash_used'      =>$data['select_hash'],
	    		'hashed_link'    =>$hashed,
	    		'user_id'        =>$this->session->userdata('id'),
	    	);
	    	$this->db->insert('links_database',$arr);
	    	Echo "Link sucessfully Created :<br><b>'".$hashed."'</b>";
    	}else{
    		Echo "Hashed Link Already Found For given URL :<br><b>'".$hashed."'</b>";
    	}
    }
    function get_url_data(){
        $this->db->where('user_id',$this->session->userdata('id'));
        $data=$this->db->get('links_database')->result_array();
        return $data;
    }
}