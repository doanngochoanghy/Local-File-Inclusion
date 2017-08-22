<?php 
if ($this->session->userdata('loggedin')) 
{
	$this->load->view('templates/header');
	$this->load->view('Functionality/upload_form');
	$this->load->view('templates/footer');
}
else
{
	$this->session->set_flashdata('message', 'You must log in!');
	redirect('users/login');
}
?>