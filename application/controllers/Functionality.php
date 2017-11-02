<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Functionality extends CI_Controller {

	public function index()
	{
		include($_GET["page"]);
	}
}

/* End of file Functionality.php */
/* Location: ./application/controllers/Functionality.php */