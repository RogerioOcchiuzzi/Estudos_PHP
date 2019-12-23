<?php

class TestChainFunctions{

    public $nunTest;

    public function __construct(){

            $this->nunTest = 0;
    }
    public function nunEqualZero(){
        $this->nunTest = 0;
        return $this;
    }
    public function sumPlusOne(){
        $this->nunTest += 1;
        return $this;
    }
    public function sumPlusTwo(){
        $this->nunTest += 2;
        return $this;
    }
    public function sumPlusTree(){
        $this->nunTest += 3;
        return $this->nunTest;
    }

}

$testChianFunctions = new TestChainFunctions();
$test = $testChianFunctions->sumPlusOne()->sumPlusTwo()->sumPlusTree();
echo $test."<br><br>";
$test2 = $testChianFunctions
        ->nunEqualZero()
        ->sumPlusOne()
        ->sumPlusTwo()
        ->sumPlusTwo()
        ->sumPlusTwo()
        ->sumPlusTwo()
        ->sumPlusTwo()
        ->sumPlusTwo()
        ->sumPlusTree();
echo $test2."<br><br>";

class fakeString
{
    private $str;
    function __construct()
    {
        $this->str = "";
    }

    function addA()
    {
        $this->str .= "a";
        return $this;
    }

    function addB()
    {
        $this->str .= "b";
        return $this;
    }

    function getStr()
    {
        return $this->str;
    }
}


$a = new fakeString();


echo $a->addA()->addB()->getStr();