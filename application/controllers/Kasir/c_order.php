<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_order extends CI_Controller {

	function index()
	{
		$this->data['page'] = '/Kasir/v_order';
		$this->load->view('index',$this->data);
	}

}
