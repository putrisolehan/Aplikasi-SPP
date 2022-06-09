<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MLogin');
	}

	public function index()
	{
		if (isset($_POST['btn_login'])){
				$id_login = $_POST['id_login'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$level = $_POST['level'];
				$notif = $this->MLogin->GoLogin($id_login,$username,$password,$level);
				if($notif){
					$this->load->library('session');
					$this->session->set_userdata('Login','OnLogin');
					redirect(site_url('Welcome'));
				}			
				else{
					$this->load->library('session');
					$this->session->unset_userdata('Login');
					redirect(site_url('Login'));
				}
			}

		$this->load->view('VLogin');
	}

}