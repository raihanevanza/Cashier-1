<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_cash extends CI_Controller
{

    function index()
    {
        $this->data['page'] = '/Kasir/v_cash';
        $this->load->view('index', $this->data);
    }
}
