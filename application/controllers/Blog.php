<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."core/DesignFrame.php");


class Blog extends DesignFrame {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index(){
        $this->displayInsideMainDesign($this->load->view('blog_main', null, true));
    }

    public function write(){
        /* This is where you write your posts */
        $this->displayInsideMainDesign('WRITE SOMETHING HERE');
    }

    public function latest(){
        /* get the lates blogposts */
        $this->displayInsideMainDesign('latest entries');
    }

    public function category($category=null){
        /* Shows latest categories */
        if(empty($category)){
            $this->index();
        } else {
            $this->displayInsideMainDesign($category);
        }

    }
}
