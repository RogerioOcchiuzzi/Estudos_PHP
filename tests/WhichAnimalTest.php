<?php 

include 'WhichAnimal.php';

class Dog implements WhichAnimal{
    
    public function animalAge(int $animalAge): int {
        
        return $animalAge;
        
    }

    public function animalName(String $animalName): String {
        
        return $animalName;
        
    }

    
}

class Cat implements WhichAnimal {
    
    public function animalAge(int $animalAge): int {
        
        return $animalAge;
        
    }

    public function animalName(String $animalName): String {
        
        return $animalName;
        
    }

}

?>