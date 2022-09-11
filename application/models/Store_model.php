<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Store_model extends CI_Model {

    public function store($store){

   // print_r($store);die();
   if(empty($store['id']))
   {
   $billinfo=array(
    'store_name'	        =>	$store['name'],
    // 'number'	            =>	$store['number'],
    // 'address'	    =>	$store['address'],
     'user_id'	    =>	$store['user_id'],
    // 'status'		=>  1,
    );
    
    $data=$this->db->insert('store',$billinfo);
    }
    else{
        $billinfo=array(
            'store_name'	        =>	$store['name'],
            // 'number'	    =>	$store['number'],
            // 'Address'	    =>	$store['address'],
            // 'status'		=>  1,
            );
            $data=$this->db->select("*")
            ->from('store')
            ->where('id',$store['id'])
            ->update('store',$billinfo);
         
    }
    return $data;
    }
    public function getStore(){
        $datas=$this->db->select("*")
    ->from('store')
    ->get()
    ->result_array();
    return $datas;
         }
         public function getStoreById($id){
         $datas= $this->db->select("*")
			->from('store')
			->where('id', $id)
			->get()
			->row();
			;
			return $datas;
         }
    public function delStore($id){
        $this->db->delete('store', array('id' => $id)); 
        return true;
    }     
	public function checkUser($data = array())
	{
		//print_r($data);
		$datas= $this->db->select("
				user.id, 
				CONCAT_WS(' ', user.firstname, user.lastname) AS fullname,
				user.email, 
				user.image, 
				user.last_login,
				user.last_logout, 
				user.ip_address,
				user.counter, 
				user.status, 
				user.is_admin, 
				IF (user.is_admin=1, 'Admin', 'User') as user_level
			")
			->from('user')
			->where('email', $data['email'])
			//->where('password', md5($data['password']))
			->get()
			->row();
			;
			//print_r($datas->result_array());die();
			//print_r($datas);die();
			return $datas;
	}




}
 