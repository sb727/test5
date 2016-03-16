<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginCtrl extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
		$this->load->helper('form');
		$this->load->model('LoginModel');
    }

	public function index()
	{
		$this->load->view('LoginView');
	}

	public function isUser()
	{
		$userid = $this->input->post('userid');
		$password = $this->input->post('password');

		$result = $this->LoginModel->isUser($userid, $password);
		
		if($result){
			//save session information
			$userdata = array(
                   'id'  => $result->id,
                   'userid'     => $result->userid,
                   'logged_in' => TRUE
               );
			$this->session->set_userdata($userdata);

			redirect('homeCtrl', 'location');
		} else {
			redirect('loginCtrl', 'location');
		}
	}
}
