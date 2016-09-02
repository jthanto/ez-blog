<?php

class PostCollection extends CI_Model
{

//  TODO Rewrite to actually create classes
    protected $posts = [];

    public static function getPosts(){

    }

    public function getFiveLatest(){
        $this->db->select('*')->order_by('datetime DESC')->limit('10');
        $results = $this->db->get('posts')->result();

        // TODO: Move this parsedown stuff to the model, should be done at the same time as the rewrite to classes thing.
        // TODO: Find out if $result is an instance og Post/CI_Model or if it just looks that way.
        $MDParser = new Parsedown();
        foreach($results as $result){
            $result->content = $MDParser->text($result->content);
            $this->posts[] = $result;
        }
        return $this->posts;
    }
}