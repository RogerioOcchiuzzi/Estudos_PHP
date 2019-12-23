<?php 

include("AbstractParent.php");


final class AbstractChild extends AbstractParent{
    
    
    public function printChild(String $textTest){
        
        parent::printParent($textTest);
        
        
    }
    
    
}

$testAbstractClass = new AbstractChild();
$testAbstractClass->printChild("child");
$testAbstractClass->printParent("parent");

?>