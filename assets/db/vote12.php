<?php

    //global $i = 0;

    //session_start();
    $database = new Database();
    //$runtimeVal = $_POST['data111'];
   // echo ($runtimeVal)
    $houseId = (int)$_POST['house'];    
    $button = $_POST['button'];

    $users = $database->fetchUsers();
    $sql = "INSERT INTO voting(user__id, house_id) VALUES (1, $houseId);";
    $database->insertQuery($sql);

    $houseSql = "SELECT * FROM HOUSES;";
    $houseLength = $database->selectQuery($houseSql);
    $houseNumbers = 4;


    // var_dump(($users));
    // echo "<br>";
    // var_dump(current($users));
    // echo "<br>";
    // var_dump($houseId);
    // echo "<br>";

        // echo "there we gooooooo: ";
        // echo "<br>";
        // ////var_dump(($users));
        // echo (sizeof($users));

    // $sql1 = "SELECT * FROM voting WHERE user__id = 1 && house_id = 1;";
    // $check = $database->selectQuery($sql1);
    // echo $sql1;
    // echo "<br>";
    // var_dump(sizeof($check));

    //if (isset($_POST['action'])) {
        // if($button == "nextPerson")
        // {
        //     function there() {
        //         $i = $i + 1;
        //     }
        //     echo $i;
        // }
    //}

    if($houseId <= $houseLength && $houseId > 0) {

    }



?>