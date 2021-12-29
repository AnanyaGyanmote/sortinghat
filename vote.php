<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include "assets/css/fontstyle.php";
    ?>
    <title>Document</title>
    <link href="assets/css/vote.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="design">

        <?php 
            include "assets/db/index.php";
            include "assets/db/vote.php";
            if ($elements["gender"] == "female")
            {
                ?>
                    <div>
                    <img src="assets/images/girl.jpg" alt="girl" class="image1">
                    </div>
                <?php
            } else if ($elements["gender"] == "male")
            {
                ?>
                    <div>
                    <img src="assets/images/boy.jpg" alt="boy" class="image1">
                    </div>
                <?php
            }else {
                ?>
                    <div >
                    <img src="assets/images/gay.jpg" alt="other" class="image1">
                    </div>
                <?php
            }

            //display the retrieved result on the webpage   
            $items = ["", "Name", "Username", "Gender", "Age"];
            echo $items[0];
            for($index = 1; $index < sizeof($items); $index++){
                ?>
                <div class="user">
                    <?php
                        $ind = strtolower($items[$index]);
                        echo $items[$index] .": " . $elements[$ind];
                    ?>
                </div>
            <?php
            }
            ?>

        <br>
        <form method="post">
        <!-- action="../sorting hat assignment/vote.php" -->
            <span class="radio">
                    <?php
                        $houseSql = "SELECT * FROM houses;";
                        $houseNames = $database->selectQuery($houseSql);
                        foreach($houseNames as $house)
                        {
                            echo '<input type="radio" value="'.$house["house_iD"].'" name="house" id="'.$house["house"].'" required="true" class="house">
                            <label for="'.$house["house"].'">
                                '.$house["house"].'
                            </label>';
                            if($house["house_iD"] % 2 == 0){
                                echo "<br>";
                            }
                        }
                        $houseNumbers = 4;
                    ?>
                    <br>
            </span>
            <button type="submit" name="button" class="button white notWhite" value="nextPerson" id = "button">
                Submit the answer
            </button>
            <br>
            <br>
        </form>
        <div class="result">
            <span style="color:#0f7e9b">POLL!!</span>
            <br>
            <?php
                //houses votes
                $sqlGryffindor = "SELECT number_Of_votes FROM voting WHERE user__Id = $userId && house_id = 1;";
                $GryffindorVotes = (int)$database->selectQuery($sqlGryffindor);
                
                $sqlHufflepuff = "SELECT number_Of_votes FROM voting WHERE user__Id = $userId && house_id = 2;";
                $HufflepuffVotes = (int)$database->selectQuery($sqlHufflepuff);
                
                $sqlRavenclaw = "SELECT number_Of_votes FROM voting WHERE user__Id = $userId && house_id = 3;";
                $RavenclawVotes = (int)$database->selectQuery($sqlRavenclaw);
                
                $sqlSlytherin = "SELECT number_Of_votes FROM voting WHERE user__Id = $userId && house_id = 4;";
                $SlytherinVotes = (int)$database->selectQuery($sqlSlytherin);

                $houses = [$GryffindorVotes, $HufflepuffVotes, $RavenclawVotes, $SlytherinVotes];
                $i = 1;
                $total = 0;
                foreach($houses as $house)
                {
                    if(isset($house))
                    {
                        $total += $house;
                    }
                }

                $GryffindorPercentage = ($GryffindorVotes / $total) * 100;
                $HufflepuffPercentage = ($HufflepuffVotes / $total) * 100;
                $RavenclawPercentage = ($RavenclawVotes / $total) * 100;
                $SlytherinPercentage = ($SlytherinVotes / $total) * 100;
            ?>
                Gryffindor: <?php echo round($GryffindorPercentage, 2); ?>% ;
                Hufflepuff: <?php echo round($HufflepuffPercentage, 2); ?>%
                <br>
                Ravenclaw: <?php echo round($RavenclawPercentage, 2); ?>% ;
                Slytherin: <?php echo round($SlytherinPercentage, 2); ?>%

        </div>
        <span style="color:#0f7e9b;">Choose user</span>
        <br>
        <?php
        //display the link of the pages in URL  
        for($page = 1; $page<= $number_of_page; $page++) {  
            echo '<a href = "vote.php?page=' . $page . '">' . $page . ' </a>';  
        }  
        ?>
    <form action="conclude.php">
        <button type="submit" class="button">
            End Playing
        </button>
    </form>
    </div>
    </body>
    
    <script src="assets/js/script.js" type="text/javascript">
        
    </script>
</html>