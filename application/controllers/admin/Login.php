<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Login extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model(array(
            'auth_model',
            'Store_model' 
        ));

        
    }
    public function create(){
        $data=array();
        $this->load->view('themes/super-admin/header.php');
        $this->load->view('themes/super-admin/store/create.php',$data);
    }
    public function post()
    {
        //print_r('jgj');die();
        $data=$this->input->post();
        $user_data = $this->auth_model->store($data);
        $user = $this->auth_model->checkUser($data);
        $data['user_id']=$user->id;
        $store = $this->Store_model->store($data);
        $this->session->set_flashdata('message', display('save_successfully'));
        redirect('admin/store/list');
    }
    public function list()
    {
        $data=[];
        $data['data'] = $this->Store_model->getStore();
        $this->load->view('themes/super-admin/store/index', $data);
    }
    public function index()
    {
       
        if($this->session->userdata('isLogIn'))
       
			redirect('admin/dashboard');
		$data['title']    = display('login'); 
        
		#-------------------------------------#
		$this->form_validation->set_rules('email', display('email'), 'required|valid_email|max_length[100]|trim');
		$this->form_validation->set_rules('password', display('password'), 'required|max_length[32]|md5|trim');

        $data['user'] = (object)$userData = array(
			'email' 	 => $this->input->post('email',true),
			'password'   => $this->input->post('password',true),
		);
        
        if(!empty($this->input->post('email'))){
            $user = $this->auth_model->checkUser($userData);
            //print_r($user);die();
            if(!empty($user)){
                //print_r($user->is_admin);die();
            if($this->form_validation->run() && $user->is_admin == 3)
            {
                //print_r('1');die();
                $sData = array(
					'isLogIn' 	  => true,
					'isAdmin' 	  => (($user->is_admin == 3)?true:false),
					'user_type'   => $user->is_admin,
					'id' 		  => $user->id,
					//'client_id'   => $row->client_id,
					'fullname'	  => $user->fullname,
					'user_level'  => $user->user_level,
					'email' 	  => $user->email,
					'image' 	  => $user->image,
					'last_login'  => $user->last_login,
					'last_logout' => $user->last_logout,
					'ip_address'  => $user->ip_address
					);	
					//store date to session 
                   // print_r($sData);die();
					$this->session->set_userdata($sData);
                redirect('admin/dashboard');
            }else{
                
                redirect('admin/login');
            }}
            else{
                redirect('admin/login');
            }
        }
        
        $this->load->view('themes/super-admin/header.php');
        $this->load->view('themes/super-admin/login.php',$data);
    }

    public function changeformat($num) {
            if($num>1000) {
                $x = round($num);
                $x_number_format = number_format($x);
                $x_array = explode(',', $x_number_format);
                $x_parts = array('k', 'm', 'b', 't');
                $x_count_parts = count($x_array) - 1;
                $x_display = $x;
                $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
                $x_display .= $x_parts[$x_count_parts - 1];
                return $x_display;
            }
        return $num;
    }

    public function logout()
	{ 
		//update database status
		$this->auth_model->last_logout();
		//destroy session
		$this->session->sess_destroy();
		redirect('admin/login');
	}
    public function products()
	{ 

       $data=[];
       $pModel=$this->load->model("products_model");
       $data['products']=$this->products_model->getProducts();
       //print_r($data);die();
       //$data=$pModel->getProducts();
     
		$this->load->view('themes/super-admin/products/index', $data);
	}
    public function delete()
	{ 
        $data=$this->input->get();
        $data['data'] = $this->Store_model->delStore($data['id']);
        $this->session->set_flashdata('message', display('save_successfully'));
       // print_r('1sadas');die();
        redirect('admin/store/list');
	}
    public function edit()
	{ 
        $data=$this->input->get();
        // print_r($data);die();
        $data['result'] = $this->Store_model->getStoreById($data['id']);
        //print_r($result->id);die();
       $this->load->view('themes/super-admin/store/edit', $data);
	}
    public function update()
    {
        $data=$this->input->post();
        $this->session->set_flashdata('message', display('save_successfully'));
        $store = $this->Store_model->store($data);
        redirect('admin/store/list');
    }
}

?>