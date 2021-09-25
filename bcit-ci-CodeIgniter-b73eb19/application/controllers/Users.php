<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function User()
	{

		$this->load->helper('sample');
		test();

		$this->load->helper('array');
		show();

		$this->load->model('UserModel','Model');
		$data['users']=$this->Model->getUserData();
		$this->load->view('Users/userlist',$data);
	}
}
?>