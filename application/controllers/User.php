<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class content
 method
 * 1->index
 * 2->user_Profile
 * @extends CI_Controller
 */
class User extends CI_Controller {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();

		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('user_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
		 if($_SESSION['logged_in'] == null){
		  	redirect(base_url('login')); 
		  }  
	}
	
	
	public function index() {
		
     echo "<h1>you are viewing index method of user controller and if you're seeing this it means that you are logged in</h1>";
		
	}
	
	
	public function user_profile(){
		//$data = new stdClass();
		$username= $_SESSION['username'];
		$user_id = 2;
		$data['user'] = array ('username'=> $username,
						'user_id' =>$user_id );

		  $this->load->view('user/Admin_lte_theme/Admin_lte_header');
    	  $this->load->view('user/Admin_lte_theme/Admin_lte_user_Profile',$data);
    	  $this->load->view('user/Admin_lte_theme/Admin_lte_leftsidebar');
    	  $this->load->view('user/Admin_lte_theme/Admin_lte_footer');
    	  $this->load->view('user/Admin_lte_theme/Admin_lte_rightsidebar');
	}
	public function user_modify(){

	}
}
