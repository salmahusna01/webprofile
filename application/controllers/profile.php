<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {

    public function index()
    {
        $this->load->view('profile');
    }
    public function miguel() {
        $this->load->view('pages/miguel');
    }

    public function resume() {
        $this->load->view('pages/resume');
    }
    
    public function portofolio() {
        $this->load->view('pages/portofolio');
    }

}
