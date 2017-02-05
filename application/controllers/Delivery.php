<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: stas8
 * Date: 04.02.2017
 * Time: 23:16
 */
class Delivery extends CI_Controller
{
    public function _construct()
    {
        parent::_construct();
    }

    public function index()
    {
        $data['sidebar'] = true;
        $data['content'] = $this->load->view('delivery', '', true);
        $data['header'] = 'Доставка';
        $data['breadcrumbs'] = $this->load->view('breadcrumbs', '', true);
        $this->load->view('main/index', $data);
    }
}