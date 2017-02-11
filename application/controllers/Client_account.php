<?php

/**
 * Created by PhpStorm.
 * User: stas8
 * Date: 11.02.2017
 * Time: 12:53
 */

/**
 * Class Client_account
 */
class Client_account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        $this->load->view('login');
    }

    /**
     * @param $new
     */
    public function contacts($new)
    {

        $this->load->view('register');
    }

    public function session()
    {
        $this->input->post(null, true);

    }
}