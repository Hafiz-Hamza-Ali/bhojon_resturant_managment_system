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
	public function users(){
		//print_r('1');die();
        $data=array();
		$data['users'] = $this->db->select("*")->from('user')->get()->result(); 
		// echo '<pre>';
		// print_r($data['users']);die();
		// echo '</pre>';
        $this->load->view('themes/super-admin/header.php');
        $this->load->view('themes/super-admin/users/index.php',$data);
    }
    public function create(){
        $data=array();
        $this->load->view('themes/super-admin/header.php');
        $this->load->view('themes/super-admin/store/create.php',$data);
    }
    public function post()
    {
        print_r('jgj');die();
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
       //var_dump('66');die();
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
    public function web_view()
    {
       // print_r('1');die();
        $data=array();
        $data['baller_list'] = $this->db->select('*')->from('tbl_slider')->get()->result(); 
		$data['type']   =  $this->auth_model->type_dropdown();
        $this->load->view('themes/super-admin/header.php');
        $this->load->view('themes/super-admin/web_setting/banner.php',$data);
        
    }
    public function common_view()
    {
        $data['title'] = display('web_setting');
		#-------------------------------#
		//check setting table row if not exists then insert a row
		#-------------------------------#
		$data['websetting'] = $this->db->select("*")->from('common_setting')->get()->row(); 


        $this->load->view('themes/super-admin/header.php');
        $this->load->view('themes/super-admin/web_setting/common.php',$data);
    }
    public function common_create()
	{
		$data['title'] = display('web_setting');
		#-------------------------------#
		$this->form_validation->set_rules('email',display('email'),'max_length[100]|valid_email');
		$this->form_validation->set_rules('phone',display('phone'),'max_length[20]');
		$this->form_validation->set_rules('footer_text',display('footer_text'),'max_length[255]'); 
		#-------------------------------#
		//logo upload
		$logo = $this->fileupload->do_upload(
			'assets/img/',
			'logo'
		);
		// if logo is uploaded then resize the logo
		if ($logo !== false && $logo != null) {
			$this->fileupload->do_resize(
				$logo, 
				168,
				65
			);
		}
		//if logo is not uploaded
		if ($logo === false) {
			$this->session->set_flashdata('exception', display('invalid_logo'));
		}
		
		$footerlogo = $this->fileupload->do_upload(
			'assets/img/',
			'logofooter'
		);
		// if logo is uploaded then resize the logo
		if ($footerlogo !== false && $footerlogo != null) {
			$this->fileupload->do_resize(
				$footerlogo, 
				168,
				65
			);
		}
		//if logo is not uploaded
		if ($footerlogo === false) {
			$this->session->set_flashdata('exception', display('invalid_logo'));
		}


		$data['setting'] = (object)$postData = array(
			'id'          => $this->input->post('id',true),
			'email' 	  => $this->input->post('email',true),
			'phone' 	  => $this->input->post('phone',true),
			'logo' 	      => (!empty($logo)?$logo:$this->input->post('old_logo')),
			'logo_footer' => (!empty($footerlogo)?$footerlogo:$this->input->post('old_footerlogo')),
			'ismembership'=> $this->input->post('membershipenable',true),
			'phone_optional'      => $this->input->post('phone2', false),
			'web_onoff'      => $this->input->post('websiteonoff', false),
			'address' 	  => $this->input->post('address',true),
			'powerbytxt'  => $this->input->post('power_text', false),
			'backgroundcolorqr'  => $this->input->post('headercolor', true),
			'qrheaderfontcolor'  => $this->input->post('headerfontcolor', true)
		); 
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			#if empty $id then insert data
			if (empty($postData['id'])) {
				if ($this->db->insert('common_setting',$postData)) {
					#set success message
					$this->session->set_flashdata('message',display('save_successfully'));
				} else {
					#set exception message
					$this->session->set_flashdata('exception',display('please_try_again'));
				}
			} else {
                
				if ( $this->db->where('id',$postData['id'])->update('common_setting',$postData)) {
					#set success message
					$this->session->set_flashdata('message',display('update_successfully'));
				} else {
					#set exception message
					$this->session->set_flashdata('exception', display('please_try_again'));
				} 
			}
           
			redirect('admin/login/common_view');

		} else { 
			$data['module'] = "dashboard";  
			$data['page']   = "web/web_setting";  
			echo Modules::run('template/layout', $data); 
		} 
	}
    public function profile_setting()
    {
        $data['email']=$this->session->userdata('email');
        $this->load->view('themes/super-admin/reset_profile',$data);
    }
    public function updatePassword()
    {
        $data=$this->input->post();
        $result=$this->db->where('email',$data['email'])->update('common_setting',$data);
        //print_r($result);die();
        $this->load->view('themes/super-admin/reset_profile',$data);
    }
	public function payment_view()
    {
		//print_r('37483');die();
        $data['title'] = display('Payment_Setting');
		#-------------------------------#
		//check setting table row if not exists then insert a row
		#-------------------------------#
		// $this->db->select('payment_method.*,paymentsetup.*');
        // $this->db->from('payment_method');
		// $this->db->join('payment_method','payment_method.payment_method_id=paymentsetup.paymentid','right');
		// //$this->db->where('paymentid=', 3);
		// $query = $this->db->get();
		// $this->db->result();
		
		$data['paypal']=$result=$this->db->select("*")->where('paymentid',3)->from('paymentsetup')->get()->row();
		$data['stripe']=$result=$this->db->select("*")->where('paymentid',9)->from('paymentsetup')->get()->row();
		$data['billzpillz']=$result=$this->db->select("*")->where('paymentid',14)->from('paymentsetup')->get()->row();
		// echo '<pre>';
		// print_r();die();
		// echo '</pre>';
		//$data['websetting'] = $this->db->select("*")->from('common_setting')->get()->row(); 


        $this->load->view('themes/super-admin/header.php');
        $this->load->view('themes/super-admin/web_setting/payment.php',$data);
    }
	public function payment_create()
	{
		$data=$this->input->post();
		//print_r($data);die();
		if($data)
		{
			$datas['marchantid']=$data['marchantid'];
			$datas['password']=$data['password'];
			$datas['status']=$data['status_val'];
			if(!empty($datas['Islive']))
			{
			if($data['Islive']==on){
			$datas['Islive']=1;
			}
		}
			else{
				$datas['Islive']=0;
			}
		}
		//print_r($data['paymentid']);die();
		$result=$this->db->where('paymentid',$data['paymentid'])->update('paymentsetup',$datas);
		// print_r($result);die();
		redirect('admin/login/payment_view');
	}
	public function createmenu(){
		// print_r('kasdjk');die();
		$data['title'] = display('add_menu');
		$this->form_validation->set_rules('menuname',display('menu_name'),'required');
		//$this->form_validation->set_rules('Menuurl',display('menu_url'),'required');
		$this->form_validation->set_rules('status',display('status'),'required');
		if(empty($this->input->post('menuid',true))){
			$parent=0;
			}
		else{
			$parent=$this->input->post('menuid',true);
			}
		$postData = array(
			'menu_name' 	  => $this->input->post('menuname',true),
			'menu_slug' 	  => $this->input->post('Menuurl',true),
			'parentid' 	      => $parent,
			'entrydate' 	  => date('Y-m-d'),
			'isactive' 	      => $this->input->post('status',true)
		);
		
			if ($this->form_validation->run() === true) {
				//print_r('000');die();
					if ($this->db->insert('top_menu',$postData)) {
						#set success message
						//print_r('000');die();
						$this->session->set_flashdata('message',display('save_successfully'));
					} else {
						//print_r('1000');die();
						#set exception message
						$this->session->set_flashdata('exception',display('please_try_again'));
					}
	 
				redirect('admin/login/menusetting');
	
			} else { 
				//print_r('skdfjkdsf');die();
				$this->session->set_flashdata('exception',display('please_try_again'));
				redirect('admin/login/menusetting');
			}
		}
	public function menusetting()
	{
		//print_r('mdnsmd');die();
		$data['title'] = display('menu_setting');
		$data['module'] 	= "dashboard";  
		$data['menu_list'] = $this->db->select('*')->from('top_menu')->get()->result(); 
		
		$data['allmenu']   =  $this->auth_model->allmenu_dropdown();
		
		//print_r($data['allmenu']);die();
		$this->load->view('themes/super-admin/header.php');
		
        $this->load->view('themes/super-admin/web_setting/menu.php',$data);
	}
	public function email_config_setup(){
		$data['title'] = display('email_setting');
		$data['module'] 	= "dashboard";  
		$data['config'] = $this->db->select('*')->from('email_config')->where('email_config_id',1)->get()->row(); 
		// $data['page']   = "web/email_setting";  
		// echo Modules::run('template/layout', $data);
		$this->load->view('themes/super-admin/web_setting/email.php',$data);
	}
	public function email_config_save(){
		$data = array(
			'smtp_port' => $this->input->post('smtp_port',true),
			'smtp_host' => $this->input->post('smtp_host',true),
			'smtp_password' => $this->input->post('smtp_password',true),
			'protocol' => $this->input->post('protocol',true),
			'mailpath' => $this->input->post('mailpath',true),
			'mailtype' => $this->input->post('mailtype',true),
			'sender' => $this->input->post('sender',true),
			'api_key' => trim($this->input->post('api_key',true))
		);

		$check = $this->db->select('*')
		->from('email_config')
		->where('email_config_id',1)
		->get()->row();
		
		if($check){
			$this->db->where('email_config_id',1)->update('email_config',$data);
		}else{
			$this->db->insert('email_config',$data);
		}

		$this->session->set_flashdata('message',display('update_successfully'));
    	redirect("admin/login/email_config_setup");
	}
	public function edits()
	{
		$data=$this->input->get();
       //  print_r($data);die();
        $data['result'] = $this->db->select("*")
		->from('user')
		->where('id', $data['id'])
		->get()
		->row();
		
        //print_r($data['result']);die();
       $this->load->view('themes/super-admin/users/edit', $data);
	}
	public function user_update()
    {
        $data=$this->input->post();
        $this->session->set_flashdata('message', display('save_successfully'));
        $store = $this->Store_model->store($data);
        redirect('admin/view/users');
    }
	public function delete_user()
	{ 
        $data=$this->input->get();
        $data['data'] =  $this->db->delete('user', array('id' => $data['id'])); 
        $this->session->set_flashdata('message', display('deleted successfully.'));
       // print_r('1sadas');die();
        redirect('admin/view/users');
	}
	public function add_banner()
	{
        //print_r('1');die();
		$data['title'] = display('banner_setting');
		#-------------------------------#
		$this->form_validation->set_rules('banner_type',display('banner_type'),'required');
		$this->form_validation->set_rules('width', display('width') ,'required');
		$this->form_validation->set_rules('height', display('height') ,'required');
		$this->form_validation->set_rules('title', display('title') ,'required');
		$this->form_validation->set_rules('subtitle',display('subtitle'),'required');
		$this->form_validation->set_rules('status',display('status'),'required');

		 $width=$this->input->post('width',true);
		 $height=$this->input->post('height',true);
		   //Banner upload
		$banner = $this->fileupload->do_upload(
			'assets/img/banner/',
			'picture'
		);
		// if Banner is uploaded then resize the Banner
		if ($banner !== false && $banner != null) {
			$this->fileupload->do_resize(
				$banner, 
				$width,
				$height
			);
		}
		//if Banner is not uploaded
		if ($banner === false) {
			$this->session->set_flashdata('exception', display('invalid_logo'));
		}
		 
		$postData = array(
	   'Sltypeid'           => $this->input->post('banner_type',true),
	   'title'     		    => $this->input->post('title',true), 
	   'subtitle'           => $this->input->post('subtitle',true),
	   'image'              => $banner,
	   'width'              => $width,
	   'height'             => $height,
	   'slink'     		    => $this->input->post('url',true), 
	   'status'     		=> $this->input->post('status',true)
	  );
		if ($this->form_validation->run() === true) {
				if ($this->db->insert('tbl_slider',$postData)) {
					#set success message
					$this->session->set_flashdata('message',display('save_successfully'));
				} else {
					#set exception message
					$this->session->set_flashdata('exception',display('please_try_again'));
				}
			redirect('admin/login/web_view');

		} else { 
			$this->session->set_flashdata('exception',display('please_try_again'));
			redirect('admin/login/web_view');
		} 
	}
	public function editBanner($id){
		$data['title'] = display('banner_edit');
		$data['intinfo']    = $this->db->select("*")->from('tbl_slider')
		->where('slid',$id) 
		->get()
		->row();
		$data['type']   =  $this->Store_model->type_dropdown();
        $data['module'] 	= "dashboard";    
        $data['page']   = "web/banneredit";
		$this->load->view('dashboard/web/banneredit', $data);   
  
	   }
    public function delete_banner($bannerid = null)
    {
		//print_r($bannerid);die();
		$sliderinfo=$this->db->select('*')->from('tbl_slider')->where('slid',$bannerid)->get()->row();
		unlink($sliderinfo->image);
		if ($this->db->where('slid',$bannerid)
		->delete('tbl_slider')) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect('admin/login/web_view');
    }
	public function subscription_list()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://api.stripe.com/v1/subscriptions',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_POSTFIELDS => 'limit=3',
		CURLOPT_HTTPHEADER => array(
			'Authorization: Basic c2tfdGVzdF9rQzhqSlF2UW5WUU40amdPcmhzZG1pYWYwMG9WQlpadEppOg==',
			'Content-Type: application/x-www-form-urlencoded'
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$data['result']=json_decode($response, true);
		$data['response']=$data['result']['data'];
				$this->load->view('themes/super-admin/subscriptions/list', $data);
	}
	public function payments()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://api.stripe.com/v1/charges',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_POSTFIELDS => 'limit=3',
		CURLOPT_HTTPHEADER => array(
			'Authorization: Basic c2tfdGVzdF9rQzhqSlF2UW5WUU40amdPcmhzZG1pYWYwMG9WQlpadEppOg==',
			'Content-Type: application/x-www-form-urlencoded'
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$data['result']=json_decode($response, true);
		// echo "<pre>";
		// print_r($response);
		// echo "</pre>";
		// die();
		$data['response']=$data['result']['data'];
				$this->load->view('themes/super-admin/subscriptions/payments', $data);
	}
}

?>