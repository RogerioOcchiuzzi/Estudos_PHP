<?php 

namespace Test\traid_file;

trait TraitFile {
    
    public function traitTestFunction(String $instanceIndentificator) {
        
        echo("trait : $instanceIndentificator <br>");
        
    }
}

trait TraitFile2 {
    
    public function traitTestFunction2(String $instanceIndentificator) {
        
        echo("trait 2  : $instanceIndentificator <br>");
        
    }
}


?>