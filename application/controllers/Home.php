<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('Home/Welcome');
		$this->load->view('templates/footer');
			}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */