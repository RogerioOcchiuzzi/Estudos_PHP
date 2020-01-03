<?php
class StudentDB{

    public $first_name = "";
    public $last_name = "";
    public $phone = "";
    public $student_id;

    function __construct($first_name, $last_name,
    $phone, $student_id){

     $this->first_name = $first_name;
     $this->last_name = $last_name;
     $this->phone = $phone;
     $this->student_id = $student_id;

    }

}
?>