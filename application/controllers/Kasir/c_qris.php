<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_qris extends CI_Controller
{

    function index()
    {
        $this->data['page'] = '/Kasir/v_qris';
        $this->load->view('index', $this->data);
    }
}
