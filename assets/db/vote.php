<?php

    $database = new Database();
    
    $result = $database->fetchUsers();
    $results_per_page = 1;
    $number_of_result = sizeof($result); 
    $number_of_page = ceil ($number_of_result / $results_per_page); 
    
    
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    } 

    //determine the sql LIMIT starting number for the results on the displaying page  
    $page_first_result = ($page-1) * $results_per_page;   
        
    $resultArray = $database->fetchUserArray($page_first_result,$results_per_page);
    $elements = $resultArray[0];

    $userId = $elements['userId'];
    
    

    $houseId = (int)$_POST['house'];    
    $button = $_POST['button'];

    $checkingSql = "SELECT * FROM voting where User__id = $userId && house_id = $houseId";
    $run = $database->selectQuery($checkingSql);

    if(sizeof($run) == 0)
    {
        $sql = "INSERT INTO voting(user__id, house_id) VALUES ($userId, $houseId);";
        $database->insertQuery($sql);
    }
    else {
        $sql = "SELECT number_Of_votes FROM voting WHERE user__id = $userId && house_id = $houseId;";
        $changeNumberOfVotes = (int)$database->selectQuery($sql) + 1;
        $sqlUpdate = "UPDATE voting
                    SET number_Of_votes = $changeNumberOfVotes
                    WHERE user__id = $userId && house_id = $houseId;";
        $changeVotes = $database->insertQuery($sqlUpdate);
    }

    
?>