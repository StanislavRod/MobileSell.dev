<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_items extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['content'] = $this->load->view('cart_items', '', true);
        $data['header'] = 'Корзина';
        $data['sidebar'] = false;
        $this->load->view('main/index', $data);
    }
}