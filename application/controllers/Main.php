<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
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
        $this->load->view('main/index');
//        $this->load->view('sidebar');
        $this->load->view('footer',$menu);
    }
}