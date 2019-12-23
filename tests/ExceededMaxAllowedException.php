<?php

class ExceededMaxAllowedException extends Exception {
    
    public function __construct($message = null) {
        
    $message = $message ?: '<br><br>This number cannot be higher than 49.';
    parent::__construct($message);
    
    }
    
}