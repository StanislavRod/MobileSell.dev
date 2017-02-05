<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: stas8
 * Date: 04.02.2017
 * Time: 21:07
 */
class Feedback extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $data['sidebar'] = true;
        $data['content'] = $this->load->view('feedback', '', true);
        $data['header'] = 'Обратная связь';
        $this->load->view('main/index', $data);
    }
}