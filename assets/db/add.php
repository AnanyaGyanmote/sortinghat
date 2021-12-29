<?php

    $database = new Database();
    $name = $_POST['name'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $age = (int)$_POST['age'];
    $phone = (int)$_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    $sql = "CALL insert_data_in_users_table('$name', '$username', '$gender', '$age', '$phone', '$email', '$password');";
    $database->insertQuery($sql);
?>