<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kasir extends CI_Controller {

	function index()
	{
		$this->data['page'] = '/Kasir/v_dashboard';
		$this->load->view('index',$this->data);
	}
}
