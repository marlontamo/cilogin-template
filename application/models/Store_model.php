<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Store_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('form');
	}
	
	Public function insert($data)
	{    
		
	    return $this->db->insert_batch('store', $data);
		
	}


	Public function edit($id)
	{
		return $this->db->get_where('store',array('store_id'=>$id))->result();
	}
	

	Public function view($id)
	{
		return $this->db->get_where('store',array('store_id'=>$id))->result();
	}

    
    public function get_username_by_id($id)
    {
        
        $this->db->select('username')
		 ->from('users')
		 ->where('user_id',$id);
    	 
    	 return $this->db->get()->result();
    	 
    	
    }
	

	Public function update($id)
	{
		$data = array('code' => $_POST['code'],
					 'price'=> $_POST['price'],
					  'name'=>$_POST['name']);
		$where = array('id'=>$id);
		return $this->db->update('items',$data,$where);

	}

	Public function delete($data)
	{
		
		for ($i=0; $i <count($data) ; $i++) { 
			$this->db->delete('items',array('id' => $data[$i]->id));
		}
		return true;
		
	}
	

	Public function get_data()
	{
		return $this->db->get('store')->result();
	}
     
    //function for getting all store list
    public function get_all_store()
    {
       return $this->db->get('store')->result();
    }
    

    public function view_my_stores($id= null)
    {
         $this->db->select('*');
		 $this->db->from('store');
		 $this->db->where('user_id',$id);

		 $result = $this->db->get()->result_array();
		 if ($id == null) {
		 	return;
		 }else{
       return $result;
	     }
 
	} 
	

	Public function modify_store( $id,$data )
	{
		
		$where = array('store_id'=>$id);
		return $this->db->update('store',$data,$where);

	}
	

	public function delete_store($id)
	{
		$this->db->where('store_id', $id);
        $this->db->delete('store');

	}
	

	public function get_storename_by_id($id)
	{
		$data = $this->db->get_where('store',array('store_id'=>$id))->result();
    	return $data[0]->store_name;
	}
    
}//class end
