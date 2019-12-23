<?php 

include ("InvalidIdException.php");
include ("ExceededMaxAllowedException.php");

function setId(int $numberTest) {
    try {
        if ($numberTest < 0) {
            
            throw new Exception('<br><br>This number cannot be negative.');
            
        }
        if($numberTest == 0){
            
            throw new InvalidIdException('<br><br>This number cannot be zero.');
            
        }
        
        if($numberTest >= 50){
            
            throw new ExceededMaxAllowedException();
            
        }        
        
        echo("Do not catch the error");
        
    } catch (InvalidIdException $e) {
        
        echo $e->getMessage();
        
    } catch (ExceededMaxAllowedException $e) {
        
        echo $e->getMessage();
        
    }catch (Exception $e) {
        //O erro capturado lá em cima
        //é exibido aqui em baixo
        echo $e->getMessage();
        
    }finally {
        
        echo("<br>Finally block<br>");
        
    }
    
    
}

setId(1);
setId(-1);
setId(0);
setId(50);


?>