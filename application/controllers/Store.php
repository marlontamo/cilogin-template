<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 * 
 * @extends CI_Controller
 */
class Store extends CI_Controller {

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
		$this->load->model('store_model','store');
		$this->load->model('product_model','product');
		$this->load->helper('form');
		$this->load->database();
		if($_SESSION['logged_in'] == null){
		 	redirect(base_url('login')); 
		 }  
		
	}
	
	
	public function index() {
		//load the form
	 
			 if($this->input->post('mysubmit')){
		         $data['info'] = array( 
				 	                    'store_name' => $this->input->post('store_Name'),
				 	                    'user_id' => $this->input->post('user_Id'),
				 	                    'created_date'=> $this->input->post('created_date'),
		        	                    'updated_date'=> $this->input->post('updated_date'),
		        	                    'address_id'=> $this->input->post('location')
		        	                    );
		            var_dump($data);	 
				       $this->store->insert($data);
				      if($this->db->affected_rows()){
				      	 $data = array();
						$data['info'] = $this->store->get_data();
				      	redirect(base_url('store/storelist'));
				      }else{
				      	 echo'<h1>failed to insert data!!!</h1>';

				      }
		    
			}
    }
	/*controller function  in creating new store*/
	public function create(){
		$this->load->view('user/Admin_lte_theme/Admin_lte_header');
    	$this->load->view('user/Admin_lte_theme/Admin_lte_leftsidebar');
		$this->load->view('user/store/Admin_lte_add_store_form');
		$this->load->view('user/Admin_lte_theme/Admin_lte_scripts_footer');
	}
    /*controller function in updating store*/
	Public function update()
	{    $data['store_id']= $this->input->post('store_id');
	     $data['store_name']= $this->input->post('store_name');
		 $data['user_id']= $this->input->post('user_id');
		 $data['created_date']= $this->input->post('created_date');
		 $data['updated_date']= $this->input->post('updated_date');
		 $data['address_id']= $this->input->post('address_id');
		 $result=$this->store->modify_store($data['store_id'], $data);
		   if($result){
		   	 redirect(base_url('store/storelist'));
		   }else{
              echo"<b>update failed</b>";
		   }
		
	}
	/*controller function in editing store data*/
	Public function edit($id=null)
	{
	  
	   $data['storeData'] = $this->store->edit($id);
	   $user_name['name'] = $this->store->get_username_by_id();
	      echo "<pre>";
	      print_r($user_name['name'][0]->username);
       //echo json_encode($data);
         $this->load->view('user/store/StoreProfile',$data);
    //$data['storeData'][0]->user_id
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
	/*
	* @view is for viewing the store profile
	* @param $id int store Id
	*
	*/
    public function view($id= null)
    {
          $data['storeData'] = $this->store->view($id);
          $this->load->view('user/store/storeProfile',$data);
    }
    /*
	* @modify is for editing  your store profile
	* @param $id int store Id
	*
	*/

    public function modify($id= null)
    {     if($id ==null){
            return;
          }else{
          $data['storeData'] = $this->store->view($id);
          $this->load->view('user/store/storeEditProfile',$data);
          }
    }  
	
	public function get_store($id= null)
	{
		$data['storeData']=$this->store->view_my_stores($id);
		$this->load->view('user/store/storeView',$data);
		;
	}
    

    public function storelist()
    {
        $data['stores'] = $this->store->get_all_store();
    	$this->load->view('user/Admin_lte_theme/Admin_lte_header');
    	$this->load->view('user/Admin_lte_theme/Admin_lte_leftsidebar');
        $this->load->view('user/store/Admin_lte_store_list', $data);
    	$this->load->view('user/Admin_lte_theme/Admin_lte_scripts_footer');
    }
    public function get_my_store($id= null)
    {
		$data['stores']=$this->store->view_my_stores($id);
		
        $this->load->view('user/store/storelist', $data);
    	 
        		 
	}
	public function storedelete($id = null)
	{
        if($id == null){
           return;
        }else{
		$this->store->delete_store($id);
	    }
	}
	public function addstoreproduct($id = null)
	{  
		$store = (int)$this->uri->segment(3);
		$this->session->set_userdata('store_id', $store);
       if($id == null){
          return;
       }else{  
            $store = $this->store->get_storename_by_id($id);
           redirect(base_url('addmyproduct'));
       }	
	}
	public function add_to_store()
	{
		 $data['product_info']= array(
       						'product_id'    =>  $this->input->post('product_id'),
                            'product_title' =>  $this->input->post('product_title'),
                            'product_desc'  =>  $this->input->post('product_desc'),
                            'added_by'      =>  $this->input->post('added_by'),
                            'product_store' =>  $this->input->post('store_id'),
                            'created_date'  =>  $this->input->post('created_date'),
                            'updated_date'  =>  $this->input->post('updated_date')
        	);
	     
      if($data == null){
      return;
    }else{
    	$result = $this->product->insert($data);
    	if($result == 1){
    		echo "<h1>new product was added</h1>";
    		
    	}else{
    		echo "<h1> the product that you are trying to add was not added please try again later</h1>";
    	}
    }
	}


	public function createproduct_for_store()
	{   
		$this->load->view('user/Admin_lte_theme/Admin_lte_header');
    	$this->load->view('user/Admin_lte_theme/Admin_lte_leftsidebar');
		$this->load->view('user/store/Admin_lte_add_product_to_store');
		$this->load->view('user/Admin_lte_theme/Admin_lte_scripts_footer');
	}
	public function get_product_of_my_store($id = null)
	{
          if($id == null){
             return;
          }else{
		  $this->product->get_mystore_product($id);
	      
	}

}
}


