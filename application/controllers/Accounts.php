<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends CI_Controller {

		
       public function __construct() {
		
		parent::__construct();

		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('user_model');
		$this->load->model('store_model','store');
		$this->load->helper('form');
		$this->load->library('form_validation');
		  
	    }
		public function create(){
			//$this->load->model('Accounts_model');
				$data['content'] = 'Admin_lte_register';
				$this->load->view('template/maintemplate', $data);
			
			//$this->Accounts_model->register();
		}
		public function login(){
		  $this->load->model('Accounts_model');
				
			$te=$this->Accounts_model->register();
			if($te == 1){
				$this->success();
			}else{
				return "unable to create new account";
			}
		}
		public function get_login(){
			    $data['content'] = 'Admin_lte_login_form';
				$this->load->view('template/maintemplate', $data);

		}
		public function post_login(){
			 $this->load->model('Accounts_model');
			 $username= $this->input->post('username');
             $password = $this->input->post('password');
			$data['user'] = $this->Accounts_model->validate($username, $password);
                 
               //set all data to session
                $_sesyon['user_id']      = (int)$data['user']->users_id;
				$_sesyon['username']     = (string)$data['user']->username;
				$_sesyon['logged_in']    = (bool)true;
				$_sesyon['is_confirmed'] = (bool)$data['user']->is_confirmed;
				$_sesyon['is_admin']     = (bool)$data['user']->is_Admin;
				$this->session->set_userdata($_sesyon); 
                $saved = $this->session->userdata;
				
            if($data['user'] != null && $saved['is_admin'] == 1){
                   redirect('Accounts/admin_interface');
            }else if($data['user'] != null && $saved['is_admin']== 0){
                    redirect('Accounts/success');
            }else{
            	    redirect('Accounts/invalid');
            }
		}
		public function success(){
			$data['content'] = 'pages/login_success';
				$this->load->view('template/maintemplate', $data);
		}
		public function invalid(){
			$data['content'] = 'pages/login_invalid';
				$this->load->view('template/maintemplate', $data);
		}
		public function admin_interface(){

			$data['content'] = 'pages/admin_success';
				$this->load->view('template/maintemplate', $data);
		}

		public function my_profile($user_id=null){
			  
			  $this->load->model('Accounts_model');
              $user_information['user'] = $this->Accounts_model->get_user_by_id($user_id);
             
              if ($user_id == null ||$user_information['user'] <= 0) {

              	echo "<h1>no available records for the user_id # ".$this->uri->segment(3)."</h1>";
              }else{
              	 //var_dump($user_information);
              }
          

		}//my_profile
		public function register_resident(){
			$data['content'] = 'pages/Admin_lte_register_new_resident';
				$this->load->view('template/maintemplate', $data);
		}//register_resident

        public function mainview(){

          //$this->load->view('pages/mainview');
           $data['content'] = 'pages/mainview';
		   $this->load->view('template/maintemplate', $data);
         }
        public function user_profile(){

            $data['content'] = 'pages/user-profile';
            //$data['side'] = 'true';
		   $this->load->view('template/maintemplate', $data);
        }

}
