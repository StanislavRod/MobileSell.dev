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


    public function view($view = false, $output = FALSE)
    {
        $this->load->view($view, $output);
    }


}