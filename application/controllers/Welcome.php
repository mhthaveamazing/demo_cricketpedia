<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
                parent::__construct();
                // Your own constructor code
                $this->load->model('Pedia_model');
                
        }

 	public function index(){
 	   if($this->session->userdata("logged_in") == 1){
 	     redirect('Login/switching');
 	   }else {
 	     $this->load->view('login');
 	   }
 	   
 	 }

	public function dashboard(){
		$this->load->view('user/dashboard');
	}
	public function add_url(){
		$this->load->view('user/add_url');	
	}
	public function view_url(){
		$data['url_data'] = $this->Pedia_model->get_url_data();
		$this->load->view('user/view_url',$data);
	}
	public function create_link(){
		$this->Pedia_model->create_link();
	}

}
?>