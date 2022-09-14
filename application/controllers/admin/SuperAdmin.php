<?php
defined('BASEPATH') or exit('No direct script access allowed');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class SuperAdmin extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model(array(
            'home_model' 
        ));
        if (! $this->session->userdata('isLogIn'))
			redirect('admin/login');
    }
    public function index()
    {
        //print_r('1');die();
        $data['ordernum']= $this->home_model->countorder();
		$data["totalorder"]  =$this->changeformat($data['ordernum']);
        $data['totalstore']= $this->home_model->countstore();
        $data['totalproduct']= $this->home_model->countproduct();
        $data['sumearn']= $this->home_model->sumearn();
        $data['sum']= $data['sumearn']->totalamount;
        //print_r($data['sumearn']->totalamount);die();
        $this->load->view('themes/super-admin/header.php');
        $this->load->view('themes/super-admin/index.php',$data);
    }
    public function post()
    {
        print_r('1');die();
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
}

?>