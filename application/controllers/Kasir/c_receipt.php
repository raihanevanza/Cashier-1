<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_receipt extends CI_Controller
{

    function index()
    {
        $this->data['page'] = '/Kasir/v_receipt';
        $this->load->view('index', $this->data);
    }
}
