<?php

class Post extends CI_Model{

    public $id = null;
    public $title = null;
    public $content = null;
    public $datetime = null;
//    public $categories = null;
    public $author = null;
    public $url = null;


    public function __construct($id = null)
    {
        if(!empty($id)){
            // Search for id in database
            // load post
        }
        // Do nothing, since we want an empty post.
    }

    public function __get($key)
    {
        return parent::__get($key);
    }

    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getContent(){
        return $this->content;
    }

    public function setContent($content){
        $this->content = $content;
    }

    public function getAuthor(){
        return 'Jan Thomas';
    }

    /**
     * Set author
     * This should only be accessed inside class, should always be the current user.
     */
    protected function setAuthor(){
        $this->author = 1; // I'm number one, I'm number one!
    }

    public function getDateTime(){
        return $this->datetime;
    }

    /**
     * Set date and time of post
     * This should only be accessed inside class, it should be called when saving.
     */
    protected function setDateTime(){
        // TODO: There must be a better way. What about date objects
        $this->datetime = date("Y-m-d H:i:s");
    }

//    TODO: Fix the categories methods. Another model and collection maybe?
//    public function getCategories(){
//        return $this->categories;
//    }
//
//    public function setCategories($categories){
//        // TODO sanitize data to an array
//        $this->categories = $categories;
//    }

    public function getUrl(){
        return $this->url;
    }

    /**
     * Set url
     * This should only be accessed inside class, based on title.
     */
    protected function setUrl(){
        $url = url_title($this->getTitle(), '-', true);
        $this->url = $url;
    }

    public function save(){
        $this->setDateTime();
        $this->setUrl();
        $this->setAuthor();
        if(!empty($this->getId())){
            $this->db->update('posts', $this, array('id' => $this->getId()));
        } else {
            $this->db->insert('posts', $this);
        }
    }

    public static function getById($id){
        // TODO: Load and return myself
        $me = new self();
        if(!empty($id)){
//            $query = $me->db->get('posts', 10);
//            return $me->d
        }
    }

    protected function createByArray(){
        // TODO Implement createByArray function
    }



}