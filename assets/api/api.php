<?php

    include "../db/index.php";

    $database = new Database();

    $users = json_encode($database->fetchUsers());
    echo ($users);