<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_payment extends CI_Controller
{

    function index()
    {
        $this->data['page'] = '/Kasir/v_payment';
        $this->load->view('index', $this->data);
    }
}
