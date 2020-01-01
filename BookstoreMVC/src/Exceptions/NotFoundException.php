<?php

namespace Bookstore\Exceptions;

use Exception;

class NotFoundException extends Exception {

    public function __contruct(string $message): string{

            echo $message;

    }
    
}