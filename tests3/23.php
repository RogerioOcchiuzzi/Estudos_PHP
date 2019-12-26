<?php

class test{

    public $test1 = "test1";
    public $test3;
    public static $test4;
    public const TEST2 = "TEST2";

    public function __construct($test3){

        $this->test3 = $test3;
        self::$test4 = "test4";

        //var_dump($this->$test1);//error: Undefined variable
        var_dump($this->$test3);
       //var_dump(self::$test3);//Error: Access to undeclared static property: test::$test3 
        var_dump(self::$test4);
        //var_dump($this->TEST2);//error: Undefined property: test::$TEST2
        var_dump(self::TEST2);
    }
}

new test("test3");