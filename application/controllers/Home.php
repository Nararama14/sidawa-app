<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
			$data['title'] = "Dasboard | SIDAWA-APP";
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar');
			$this->load->view('home/home_view');
			$this->load->view('template/footer');
	}
}
