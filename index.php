<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include "assets/css/fontstyle.php";
    ?>
    <title>Document</title>
</head>

<body>
    <div class="form">
        
        <div>
            <h1>
                
                    Welcome to SORTING HAT!!
                
            </h1>
            
            <br>

            <!-- image -->
            <div class="image">
                <img src="assets/images/sortingHat.jpg" alt="the sorting hat" id="hat">
            </div>
            
            <br>

            <p class="introduction">        
                
                <!--Introduction-->
                <h2>
                    
                        Introduction:
                
                </h2>
                <h4>
                    In the beginning you will have to choose between putting people in a house or adding a user to the game.
                    <br>
                    Putting people in houses: 
                    <br>
                    You will be shown the profiles and information of people added to the game and you will be asked to choose a house which you think suits them the best.
                    <br>
                    Adding user to the game: 
                    <br>
                    You can add a user to the game by filling out a form from which, data will be taken and be used to help you pick a house for the user displayed. 
                </h4>
            </p>
        </div>

        <form action="form.php">
            
            <!-- Add person button -->
            <div>
                <button type="submit" class="button">
                    Add Person
                </button>
            </div>
        </form>
        
        <form action="vote.php">
            <!-- put people in house button -->
            <div>
                <button type="submit" class="button">
                    Put people in house
                </button>
            </div>
        </form>
    
    </div>
</body>
</html>