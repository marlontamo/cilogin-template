<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 * 
 * @extends CI_Controller
 */
class Product extends CI_Controller {

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
		$this->load->model('product_model','product');
		$this->load->model('store_model','store');
		$this->load->model('user_model','user');
		$this->load->helper('form');
		$this->load->database();
		if($_SESSION['logged_in'] == null){
		 	redirect(base_url('home/login')); 
		 }  
		
		
	}
	
	public function add_product(){
       $data['product_info']= array(
       						'product_id'    =>  $this->input->post('product_id'),
                            'product_title' =>  $this->input->post('product_title'),
                            'product_desc'  =>  $this->input->post('product_desc'),
                            'added_by'      =>  $this->input->post('added_by'),
                            'product_store' =>  $this->input->post('owned_by'),
                            'created_date'  =>  $this->input->post('created_date'),
                            'updated_date'  =>  $this->input->post('updated_date')
        	);




    if($data == null){
      return;
    }else{
    	$result = $this->product->insert($data);
    	if($result == 1){
    		echo "<h1>new product was added</h1>";
    		//redirect('/home/add_product');
    	}else{
    		echo "<h1> the product that you are trying to add was not added please try again later</h1>";
    	}
    }
	}
	public function create()
	{
      
      $this->load->view('user/product/createNewProduct');
      
	}
	
	Public function update($id)
	{
		
		echo $this->home->update($id);
	}
	/*controller function in editing store data*/
	Public function edit($id=null)
	{
	  
	   $data['storeData'] = $this->store->edit($id);
	   $user_name = $this->store->get_user_by_id($data['storeData'][0]->user_id);
	    

       //echo json_encode($data);
         $this->load->view('user/store/storeProfile',$data);
    
	}
	/*controller function in deleting store*/
	public function delete()
	{
		$data = json_decode(file_get_contents("php://input"));   	             
		echo $this->home->delete($data);
		
	}
	/*
	*controller for store api
	*/
	Public function get_data()
	{
		$data = array();
		$data = $this->store->get_data();
		echo json_encode($data);

	}
    public function view( $id)
    {
          $data['storeData'] = $this->store->view($id);
          $this->load->view('user/product/Product_view',$data);
    } 
	public function StoreList(){
        
         $data['information'] = $this->store->get_all_store();
         $this->load->view('user/store/storeList',$data);
         

	}
	public function Logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
   
    public function get_product($id= null){
       
       if($id == null){
           echo "<h1>invalid Id</h1>";
       }else{
       	 $data['storeProducts']= $this->product->view($id);
       	 echo "<pre>";
       	 print_r($data);
       }
    }
    public function get_mystore_product($store_id = null)
    {
              
          $data['stores'] = $this->product->view($store_id);
    	$this->load->view('user/Admin_lte_theme/Admin_lte_header');
    	$this->load->view('user/Admin_lte_theme/Admin_lte_leftsidebar');
        $this->load->view('user/product/Admin_lte_mystore_product_list', $data);
    	$this->load->view('user/Admin_lte_theme/Admin_lte_scripts_footer');
    }
    public function store($id =null)
    {
    	 $store = $this->product->get_storename_by_id($id); 
    	 //var_dump($store);
    }
    public function storeProducts($id = null){
    	 if ($id == null) {
    	 	return;
    	 }else{
    	 	$storeProfile['profile']= $this->store->view($id);
    	 	$storeProfile['products']=$this->product->view($id);
            echo "<pre>";
            print_r($storeProfile);
          }  
    }

}
