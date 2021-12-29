<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php 
    include "assets/css/fontstyle.php";
    ?>
</head>
<body>
    <?php
        include "assets/db/index.php";
        include "assets/db/add.php";
    ?>
        <div class="design" style="font-size: 38px;">
        That is it <?php 
            if(isset($name)){
                echo $name;
            }
        ?>! 
        <br>
        You are done with the game!!
        </div>
    </h1>
</body>
</html>