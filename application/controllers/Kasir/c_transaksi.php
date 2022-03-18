<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_transaksi extends CI_Controller
{

    function index()
    {
        $this->data['page'] = '/Kasir/v_transaksi';
        $this->load->view('index', $this->data);
    }
}
