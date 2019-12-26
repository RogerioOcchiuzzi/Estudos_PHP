<?php

require_once 'ReflectionEditor.php';

class ReflectionArticle{

    function publishNextArticle($editor) {
        $editor->setNextArticle('135523');
        $editor->publish();        
        
    }
}