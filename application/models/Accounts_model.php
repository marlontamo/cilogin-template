<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accounts_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}
	/*function in inserting new user data in the system*/
	Public function register()
	{
		$data = array( 'users_id' => '',
                          'name' => $this->input->post('name'),
                          'username' => $this->input->post('username'),
                          'email' => $this->input->post('email'),
                          'password' => md5($this->input->post('password')),
                           'date_registered' => (new DateTime('now'))->format('Y-m-d H:i:s')
			                  
			           );
		return $this->db->insert('users',$data);

	}
	/*for login credential validation*/
	 public function validate($username, $password){

	 	$this->db->where('username',$username);
      	$this->db->where('password',md5($password));
      	$this->db->from('users');
      $query = $this->db->get()->row();
        if($query){
          return $query;
        }else{
          return false;
         }
     }
     public function get_user_by_id($id){
         $this->db->where('users_id',$id);
         $this->db->from('users');
         $query = $this->db->get()->row();
        if($query){
          return $query;
        }else{
          return false;
         }
     }
	 
	

}