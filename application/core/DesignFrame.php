<?php

class DesignFrame extends CI_Controller{

    protected function displayInsideMainDesign($content){
        $this->load->view(
            'main',
            ['content' => $content]
        );
    }

}