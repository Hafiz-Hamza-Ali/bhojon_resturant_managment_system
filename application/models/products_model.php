<?php

class products_model extends CI_Model
{

   public function getProducts()
   {
   $table='products';
    // {
    //     $Type = $data['customer_email'];
    //     $Password = $data['password'];
        $this->db->select("*");
        $this->db->where('status', 1);
        $query = $this->db->get($table)->result_array();
        $num_rows = $this->db->count_all_results();
        //print_r($query);die();
		// $this->db->where('customer_email', $data['customer_email']);
        // $this->db->where("(password = '" . $Password . "' OR customer_info.password =  '" . md5($Password) . "')", NULL, TRUE);
       
        if ($num_rows > 0)
        {
			return $query;
        }
        else
        {
            return FALSE;
        }
    }
}
