<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_edc extends CI_Controller
{

    function index()
    {
        $this->data['page'] = '/Kasir/v_edc';
        $this->load->view('index', $this->data);
    }
}
