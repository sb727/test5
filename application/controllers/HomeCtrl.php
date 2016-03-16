<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeCtrl extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('form');
  		$this->load->model('HomeModel');

  		$sess = $this->session->userdata('logged_in');
  		if($sess == False) redirect('loginCtrl', 'location');
    }

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/banner');
		$this->load->view('templates/slide');
		$this->load->view('templates/footer');
	}

	public function showSlide($where)
     {
     	  $hotels = $this->HomeModel->getHotelByDestination($where);  

          echo json_encode($hotels); 
          exit; 
     }

     public function showDetailById($id)
     {
          $hotels = $this->HomeModel->getHotelById($id);  

          echo json_encode($hotels); 
          exit; 
     }

	public function logout()
     {
          $this->session->sess_destroy();

          redirect('loginCtrl', 'location');
     }

	
}
