<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: stas8
 * Date: 04.02.2017
 * Time: 23:47
 */
class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['sidebar'] = true;
        $data['breadcrumbs'] = $this->load->view('breadcrumbs', '', true);
        $data['content'] = $this->load->view('news', '', true);
        $data['header'] = 'Первая новость';
        $this->load->view('main/index', $data);
    }
}