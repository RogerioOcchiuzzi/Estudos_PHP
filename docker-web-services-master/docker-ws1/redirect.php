<?php

    $action_value = null;

    if(isset($_GET["action_value"])){
        $action_value = $_GET["action_value"];
    }
    if($action_value == "register"){

        require("register.php");

    }elseif($action_value == "search"){

        require("search_db.php");

    }

?>