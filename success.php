<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include "assets/css/fontstyle.php";
    ?>
    <title>Page Created</title>
</head>
<body>
    <div class="form">
        <?php
            include "assets/db/index.php";
            include "assets/db/add.php";
        ?>
        <h1>
            Your account has successfully been created!!!
        </h1>
        <p>
            You can now start putting people in houses :)
            <br/>
            Have fun!!
        </p>
        <div class="add_people">
            <form action="vote.php">
                <button type="submit" class="button">
                    Put people in house
                </button>
            </form>
        </div>
    </div>
</body>
</html>