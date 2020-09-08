<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {


	function index($id='')
    {
        $session = $this->session->userdata('isLogin');
        if($session == FALSE)
        {
            $data['status']=$id;
            $this->load->view('login/login_view', $data);
        }else
        {
            redirect('dashboard');
        }
    }
}
