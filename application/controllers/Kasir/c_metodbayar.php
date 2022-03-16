<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_metodbayar extends CI_Controller {

	function index()
	{
		$this->data['page'] = '/Kasir/v_metodbayar';
		$this->load->view('index',$this->data);
	}
}
