<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: stas8
 * Date: 05.02.2017
 * Time: 23:19
 */
class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['content'] = $this->load->view('product', '', true);
        $data['header'] = 'ПЛАНШЕТЫ';
        $this->load->view('main/index', $data);
    }

    public function detail($id = false)
    {
//        $data['sidebar_direct'] = true;
        $data['content'] = $this->load->view('detail', '', true);
        $data['header'] = 'Product name';
        $this->load->view('main/index', $data);
    }
}