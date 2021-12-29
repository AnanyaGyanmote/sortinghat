<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include "assets/css/fontstyle.php";
    ?>
    <title>Create Page</title>
</head>
<body>
    
    <div class="form">
        <form method="POST" action="success.php">
            <h1>
                Create Account
            </h1>

            <!--images-->
            
            <div class="image">
                <img src="assets/images/hermoine.jpg" alt="hermoine" class="hermoineImgLeft">
            </div>

            <div class="image">
                <img src="assets/images/hermoine.jpg" alt="hermoine" class="hermoineImgRight">
            </div>

            <div class="image">
                <img src="assets/images/sortingHat.jpg" alt="the sorting hat" id="hat">
            </div>

            <br>

            <div class="black">
                <!--Name-->
                <div class="shadow">
                    <label for="name">
                        Name
                    </label>
                    <br/>
                    <input type="text" name="name" id="name" placeholder="Ex: James Bond" maxlength="50" required="true">
                    
                    <br/>
                    <br/>
                    
                    <label for="username">
                        Username
                    </label>
                    <br/>
                    <input type="text" name="username" id="username" placeholder="Ex: Jamie" required="true" maxlength="20">
                </div>
                
                <br/>
    
                <!--Gender-->
                <div class="gender">
                    <input type="radio" name="gender" value="male" id="male" required="true">
                    <label for="male">
                        Male
                    </label>
    
                    <input type="radio" name="gender" value="female" id="female" required="true">
                    <label for="for-female">
                        Female
                    </label>
    
                    <input type="radio" name="gender" value="other" id="other" required="true">
                    <label for="other">
                        Others
                    </label>
                </div>
    
                <br/>
    
                <!--Age-->
                <div class="shadow">
                    <label for="age">
                        Age
                    </label>
                    <br/>
                    <input type="number" name="age" id="age" placeholder="Age" min="18" required="true">
                </div>
    
                <br/>
                
                <!--Telephone-->
                <div class="shadow">
                    <label for="phone">
                        Phone number
                    </label>
                    <br/>
                    <input type="tel" name="phone" id="phone" placeholder="Ex: +32 123*****9">
                </div>
                
                <br/>
    
                <!--Email-->
                <div class="shadow">
                    <label for="email">
                        Email address
                    </label>
                    <br/>
                    <input type="email" name="email" id="email" placeholder="example@email.com" maxlength="100">
                </div>
    
                <br/>
                
                <!--Password-->
                <div class="shadow">
                    <label for="password">
                        Password
                    </label>
                    <br/>
                    <input type="password" name="password" id="password" placeholder="Password" minlength="8">
                </div>
    
                <br/>
    
                <!--submit-->
                <div class="shadow">
                    <button  type="submit" class="button">
                        Create Account
                    </button>
                </div>
            </div> 
        </form>
    </div>
</body>
</html>