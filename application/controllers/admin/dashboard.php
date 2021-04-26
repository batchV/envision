<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	public function index()
	{
		$data['content']="admin/dashboard";
		$this->load->view('_templates/wrapper',$data);
	}
}