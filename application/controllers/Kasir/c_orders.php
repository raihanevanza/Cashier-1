<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_orders extends CI_Controller
{

    function index()
    {
        $this->data['page'] = '/Kasir/v_orders';
        $this->load->view('index', $this->data);
    }
}
