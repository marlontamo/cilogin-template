<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('home_model','home');
		$this->load->helper('form');
		if($_SESSION['logged_in'] == null){
		 	redirect(base_url('login')); 
		 }  
		
	}

	Public function index()
	{
		echo"<h1>hi this is home</h1>";
		
	}

	Public function insert()
	{
		
		echo $this->home->insert();
	}
	Public function update($id)
	{
		
		echo $this->home->update($id);
	}
	Public function edit($id)
	{
		$data = $this->home->edit($id);
		echo json_encode($data);

	}
	public function delete()
	{
		$data = json_decode(file_get_contents("php://input"));   	             
		echo $this->home->delete($data);
		
	}
	Public function get_data()
	{
		$data = array();
		$data = $this->home->get_data();
		echo json_encode($data);

	}
	public function test(){
		echo "<h1>working test</h1>";
	}
    public function Add_product(){

    	 $this->load->view('user/Admin_lte_theme/Admin_lte_header');
    	  $this->load->view('user/store/Admin_lte_add_product_to_store');
    	 $this->load->view('user/Admin_lte_theme/Admin_lte_leftsidebar');
    	 $this->load->view('user/Admin_lte_theme/Admin_lte_footer');
    	$this->load->view('user/Admin_lte_theme/Admin_lte_rightsidebar');
    }

     public function login(){

     	 $this->load->view('user/login/Admin_lte_header');
     	 $this->load->view('user/login/Admin_lte_login_form');
     	 $this->load->view('user/login/Admin_lte_footer');
     }
     public function validate(){
     	return;
     }
     public function list_products(){
     	$this->load->view('user/login/Admin_lte_header');
     	echo "<h1>product List:</h1>";
     	$this->load->view('user/login/Admin_lte_footer');
     }
     public function front(){

    	 $this->load->view('user/Admin_lte_theme/Admin_lte_header');
        $this->load->view('user/front_index');
    	$this->load->view('footer');
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
	


/* End of file home.php */
/* Location: ./application/controllers/home.php */
?>