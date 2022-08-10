<?php
defined('BASEPATH') or exit('No direct script access allowed');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Login extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model(array(
            'auth_model' 
        ));
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
            
            if($this->form_validation->run() && $user->num_rows() > 0 && $user->row()->is_admin == 3)
            {
                $sData = array(
					'isLogIn' 	  => true,
					'isAdmin' 	  => (($user->row()->is_admin == 3)?true:false),
					'user_type'   => $user->row()->is_admin,
					'id' 		  => $user->row()->id,
					'client_id'   => @$row->client_id,
					'fullname'	  => $user->row()->fullname,
					'user_level'  => $user->row()->user_level,
					'email' 	  => $user->row()->email,
					'image' 	  => $user->row()->image,
					'last_login'  => $user->row()->last_login,
					'last_logout' => $user->row()->last_logout,
					'ip_address'  => $user->row()->ip_address
					);	
					//store date to session 
					$this->session->set_userdata($sData);
                redirect('admin/dashboard');
            }else{
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
}

?>