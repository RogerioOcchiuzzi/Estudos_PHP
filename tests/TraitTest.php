<?php 

include("TraitFile.php");

use Test\traid_file\TraitFile;
use Test\traid_file\TraitFile2;

class TraitTest{
    
    use TraitFile, TraitFile2;
    
    public function __construct(String $instanceIndentificatorConstruct){
        
        $this->traitTestFunction($instanceIndentificatorConstruct);
        $this->traitTestFunction2($instanceIndentificatorConstruct);
        
    }
    
    
}

new TraitTest("instance 1");
new TraitTest("instance 2");


?>