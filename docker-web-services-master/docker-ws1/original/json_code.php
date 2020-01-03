
<?php

header('Content_Type: application/json');

class Address{

    public $street = "";
    public $city = "";
    public $state = "";

    function __construct($street, $city, $state){
        
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;

    }

}
class Student{

    public $first_name = "";
    public $last_name = "";
    public $age = 0;
    public $enrolled = false;
    public $married = null;
    public $address;
    public $phone;

    function __construct($first_name, $last_name,
    $age, $enrolled, $married, $street, $city,
    $state, $ph_home, $ph_mobile){
        
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->enrolled = $enrolled;
        $this->married = $married;
        $this->address = new Address($street, $city, $state);
        $this->phone = array("home" => $ph_home,
        "mobile" => $ph_mobile);

    }

}

$dale_cooper = new Student("Dale", "Cooper", 35, true, null,
        "123 Main St", "seattle", "WA", "4125551212", "4125551212");

echo "<html><br /><br />";

$dale_data = json_encode($dale_cooper);

require_once("mysqli_connect.php");

if(mysqli_connect_errno()){

    printf("Connect failure: %s \n", mysqli_connect_error());
    exit();

}

$query = "SELECT * FROM students WHERE students_id IN (1,2)";

$student_array = array();

if($result = $dbc->query($query)){


    while($obj = $result-> fetch_object()){

        printf("%s %s %s %s %s %s %s %s <br />", $obj->first_name, $obj->last_name,
        $obj->email, $obj->street, $obj->city, $obj->state,
        $obj->zip, $obj->phone, $obj->birth_date, 
        $obj->sex, $obj->date_entered, $obj->launch_cost,
        $obj->student_id);

//         $temp_student = new StudentDB($obj->first_name, $obj->last_name,
//         $obj->email, $obj->street, $obj->city, $obj->state,
//         $obj->zip, $obj->phone, $obj->birth_date, 
//         $obj->sex, $obj->date_entered, $obj->launch_cost,
//         $obj->student_id);

        $student_array[] = $temp_student;

    }

    echo "<br /><br />";

    echo '{"students":[';

    var_dump(json_encode($student_array));

    echo ']}';

    $result->close;

}else{
    echo "query failure";
    var_dump($dbc->query($query));
}


?>