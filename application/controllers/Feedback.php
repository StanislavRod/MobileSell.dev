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
        $menu['name'] = $this->Menu_model->Menu()->result_array();

        foreach ($menu['name'] as $key => $n) {

            if ($this->uri->segment(1) == $n['name']) {
                $menu['name'][$key]['active'] = 'class="active"';

            } else {
                $menu['name'][$key]['active'] = '';

            }
        }
        $this->load->view('header', $menu);
        $this->load->view('feedback');
//        $this->load->view('sidebar');
        $this->load->view('footer',$menu);
    }
}