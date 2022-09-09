<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store_model extends CI_Model {
 
	// public function create($data = array())
	// {
	// 	return $this->db->insert('module', $data);
	// }

	public function read()
	{
		return $this->db->select('*')
			->from('module')
			->get()
			->result();
	}
    public function create($data)
	{
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cendolka_bhojon";
        $date=date('Y-m-d');
      //  print_r($date);die();
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $food=$data['foodname'];
        $user_id=$data['user_id'];
        $sql = "INSERT INTO store (store_name,user_id,created_at)
        VALUES ( '$food',$user_id,$date)";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        // print_r($data['foodname']);die();
		// $cdv = array(
        //     'store_name'            =>  $data['foodname'],
        //     'user_id'          =>  $data['user_id'],
        //   ); 
        //    $this->db->insert('store',$cdv);
           return true;
	}
	public function get_store($id = null)
	{
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cendolka_bhojon";
        $date=date('Y-m-d');
      //  print_r($date);die();
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM store WHERE id=$id";
$result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//       echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//     }
//   } else {
//     echo "0 results";
//   }
//   $conn->close();

	}

	public function update($data = array())
	{
		return $this->db->where('id', $data["id"])
			->update("module", $data);
	}

	public function delete($id = null)
	{
		$this->db->where('id', $id)
			->delete("module");
		$this->db->where('fk_module_id', $id)
			->delete("module_permission");
		return true;
	}

	public function delete_by_directory($directory = null)
	{
		$row = $this->db->select('id')->from('module')->where('directory', $directory)->get();
		if ($row->num_rows() > 0) {
			$id = $row->row()->id;
			$this->db->where('id', $id)
				->delete("module");
			$this->db->where('fk_module_id', $id)
				->delete("module_permission");
			return true;
		} else {
			return false;
		}
	}
 
	public function dropdown()
	{
		$data = $this->db->select('id,name')
			->from("module")
			->where('status', 1)
			->order_by('name','asc')
			->get()
			->result();
		$list = array();
		if (!empty($data)) {
			foreach($data as $value)
				$list[$value->id] = $value->name;
			return $list;
		} else {
			return false; 
		}
	}
 

}
