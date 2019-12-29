<?php
class Test6{
        
    private $param;
    public static $nunberTest1 = 4;
    
    function __construct($param) {
        $this->param = $param;
    }
    
    function print() {
        $number =  $this->param;
        while($number > 0){
            echo $number."<br>";
            $number--;
        }
    }
    
    
    public function getParam() {
        return $this->param;
    }
    
    function printRecursive($value) {
        if($value >= 0){
            
            echo $value."<br>";
            $this->printRecursive($value - 1);
            
        }
    }
    
    function factorial($number) : int {
        if ($number == 0) return 1;
        return $number * $this->factorial($number - 1);
    }
    
    function testPrint($value) : int {
        return $value;
    }
    
    public static function nunberTestFunction1() : int{
        
        echo self::$nunberTest1 ** self::$nunberTest1."<br><br>";
        
        return self::$nunberTest1;
        
    }
    
}