<?php
/*
* Login class contents:
*->methods:
* 1->Registration
* 2->Login
* 3->Logout
* soon:
* 4->forgot_pass 
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 * @extends CI_Controller
 */
class Login_ctrl extends CI_Controller {

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
		$this->load->model('store_model','store');
		$this->load->helper('form');
		$this->load->library('form_validation');
		// if($_SESSION['logged_in'] == null){
		//   	redirect(base_url('login')); 
	 //  }  
	}
	
	
	public function index() {
		$data['stores'] = $this->store->get_all_store();
		//echo "<pre>";
		//print_r($data); 
        $this->load->view('user/Admin_lte_theme/Admin_lte_header');
        $this->load->view('user/front_index',$data);
    	$this->load->view('footer');
		
	}
	
	/**
	 * register function.
	 * 
	 * @access public
	 * @return void
	 */
	public function register() {
		
		// create the data object
		$data = new stdClass();
		
		
		
		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[users.username]', array('is_unique' => 'This username already exists. Please choose another one.'));
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');
		
		if ($this->form_validation->run() === false) {
			
			// validation not ok, send validation errors to the view
			$this->load->view('header');
			$this->load->view('user/register/register', $data);
			$this->load->view('footer');
			
		} else {
			
			// set variables from the form
			$username = $this->input->post('username');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			
			if ($this->user_model->create_user($username, $email, $password)) {
				
				// user creation ok
				$this->load->view('header');
				$this->load->view('user/register/register_success', $data);
				$this->load->view('footer');
				
			} else {
				
				// user creation failed, this should never happen
				$data->error = 'There was a problem creating your new account. Please try again.';
				
				// send error to the view
				$this->load->view('header');
				$this->load->view('user/register/register', $data);
				$this->load->view('footer');
				
			}
			
		}
		
	}
		
	/**
	 * login function.
	 * 
	 * @access public
	 * @return void
	 */
	public function login() {
		
		
		// create the data object
		$data = new stdClass();
		
		// load form helper and validation library
		
		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == false) {
			
		$content['content']='Admin_lte_login_form';
		$this->load->view('template/maintemplate', $content);

			// validation not ok, send validation errors to the view
	     /*$this->load->view('user/login/Admin_lte_header');
     	 $this->load->view('user/login/Admin_lte_login_form');
     	 $this->load->view('user/login/Admin_lte_footer');*/
			
		} else {
			
			// set variables from the form
			$username = $this->input->post('username');
			$password = $this->input->post('password');


			
			if ($this->user_model->resolve_user_login($username, $password)) {
				
				$user_id = $this->user_model->get_user_id_from_username($username);
				$user    = $this->user_model->get_user($user_id);
				
				// set session user datas
                 
				$_SESSION['user_id']      = (int)$user->user_id;
				$_SESSION['username']     = (string)$user->username;
				$_SESSION['logged_in']    = (bool)true;
				$_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
				$_SESSION['is_admin']     = (bool)$user->is_admin;
				
				// user login ok
				// $this->load->view('header');
				// $this->load->view('user/login/login_success', $data);
				
				// $this->load->view('footer');
				redirect(base_url('profile'));
			} else {
				
				// login failed
				$data->error = 'Wrong username or password.';
				 
				// send error to the view
		        $this->load->view('user/login/Admin_lte_header');
     	        $this->load->view('user/login/Admin_lte_login_form', $data);
     	        $this->load->view('user/login/Admin_lte_footer');
				
			}
	}
}/*end login method*/
	/**
	 * logout function.
	 * 
	 * @access public
	 * @return void
	 */
	public function logout() {
		$this->session->sess_destroy();
        redirect(base_url('login'));
	}
	
	public function contact(){
		$this->load->view('user/login/Admin_lte_header');
		echo "<div class='row'><div class='col-md-4'></div>
    <div class='center-block text-center col-md-4'>
      <h1>Hello World</h1>
    </div><div class='col-md-4'></div>
  </div>";
		$this->load->view('user/login/Admin_lte_footer');
	}
	public function mainview(){
		$data['content'] = 'test';
		$this->load->view('template/maintemplate', $data);
	}
	public function login2(){
		$data['content'] = 'Admin_lte_login_form';
		$this->load->view('template/maintemplate', $data);
	}
	public function create(){
		$data['content'] = 'Admin_lte_register';
		$this->load->view('template/maintemplate', $data);
	}
}


