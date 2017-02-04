<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: stas8
 * Date: 04.02.2017
 * Time: 21:21
 */
class Menu_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Menu()
    {
        return $this->__getMenu();
    }

    private function __getMenu()
    {

        $name = $this->db->where('active', '1')->get('menu');

        return $name;
    }


}