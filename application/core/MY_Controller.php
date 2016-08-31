<?php

/**
 * This controller extends CI_Controller and should always be used in ez-blog application.
 */
class MY_Controller extends CI_Controller{

    private $scripts = [];

    /**
     * Display inside main design
     *
     * This method is for displaying content inside the regular design for this blog.
     *
     * @param $content string HTML-view for displaying inside content. See views/main.php for the template.
     */
    protected function displayInsideMainDesign($content){
        $this->load->view(
            'main',
            [
                'content' => $content,
                'scripts' => $this->scripts
            ]
        );
    }

    /**
     * Add script
     *
     * Add script path to this display, typically js goes here.
     */
    protected function addScript($scriptPath){
        if(is_array($scriptPath)) {
            array_merge($this->scripts, $scriptPath);
        } else if(is_string($scriptPath)){
            $this->scripts[] = $scriptPath;
        }
        // TODO error handling
    }

}