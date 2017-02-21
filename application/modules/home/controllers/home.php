<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index()
    {
        $this->load->view('home/accueil_view');
    }

}

/* End of file home.php */
/* Location: ./application/modules/home/controllers/home.php */