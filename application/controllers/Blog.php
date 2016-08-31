<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {

    // TODO: Find out why /blog/ sometimes comes as a double.

    /**
     * Blog controller
     *
     * This handles defines routes for
     */
    public function index(){
        $this->displayInsideMainDesign($this->load->view('blog_main', null, true));
    }

    public function write(){
        /* This is where you write your posts */
        $this->addScript('/js/blogwrite.js');
        $this->displayInsideMainDesign(
            $this->load->view('blog_write', null, true)
        );
    }

    public function preview_post(){
        // If this is not posted to, show index, this is not really a page we want to visit.
        if(!$_POST){
            $this->index();
        }
        $MDParser = new Parsedown();
        echo $MDParser->text($this->input->post('data'));
        // TODO: error handling
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
