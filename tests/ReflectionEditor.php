<?php

class ReflectionEditor {
 
    private $name;
    public $articleId;
 
    function __construct($name) {
        $this->name = $name;
    }
 
    public function setNextArticle($articleId) {
        $this->articleId = $articleId;
    }

    function getEditorName() {
        return $this->name;
    }
 
    public function publish() {
        // publish logic goes here
        echo ("HERE\n");
        return true;
    }
 
}