<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: stas8
 * Date: 05.02.2017
 * Time: 20:08
 */
class Output extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function view($view = FALSE, $data = FALSE)
    {
        if ($view) {
            $data['output'] = $this->load->view($view, $data, TRUE);
        }
        $this->load->view('main/index', $data);
    }

    public function output($output = FALSE)
    {

        $this->load->view('main/index', $output);
    }
}