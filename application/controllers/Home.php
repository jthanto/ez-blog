<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * This is the controller for the main landing page
 */
class Home extends MY_Controller {

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $this->displayInsideMainDesign($this->load->view('home_view', null, true ));
    }
}
