<?php
 
class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();
               if(!$this->session->userdata('authid')){
            redirect('sign-in');
        }              
        
    }

    function index()
    {
        $data['_view'] = 'dashboard';
        $this->load->view('layouts/main',$data);
    }
}
