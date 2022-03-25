<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_detailorders extends CI_Controller
{

    function index()
    {
        $this->data['page'] = '/Kasir/v_detailorders';
        $this->load->view('index', $this->data);
    }
}
