<?php
require_once 'config.php';

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = trim($_POST["username"]);

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        } mysqli_stmt_close($stmt);
    }

    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST['password']);
    }
    
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Please confirm password.';     
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
        }
    }
    
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            if(mysqli_stmt_execute($stmt)){
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        } mysqli_stmt_close($stmt);
    } mysqli_close($link);
}
?>
 
<html>
    <head>
        <!-- Insert code for Title Icon and other descriptions for the website -->
        <title>LogIn</title>
        <!-- Site Description -->
        <meta name="Description" content="An automated reservation syster for the Audio/Visual Services rendered by the Sacred Heart College of Lucena, Inc. developed by Richard Alphege A. Ravalo, RL" charset="UTF-8">
        <!-- Responsive site code -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
        <!-- Site Icon here -->
        <link rel="icon" href="images/262_files.ico" type="image/x-icon">
        <link rel="stylesheet" href="styles/php.css">
    </head>
    
    <!-- Body Section Starts Here -->
    <body background="images/bgimage_1.png" id="bodybg" style="margin-top: 35px;">
        <div class="wrapper">
            <h2>Sign Up</h2>
            <p>Please fill this form to create an account.</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label>Username</label>
                        <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                        <span class="help-block"><?php echo $username_err; ?></span>
                    </div>

                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                        <span class="help-block"><?php echo $password_err; ?></span>
                    </div>

                    <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                        <span class="help-block"><?php echo $confirm_password_err; ?></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <input type="reset" class="btn btn-default" value="Reset">
                    </div>
                    <p>Already have an account? <a href="login.php">Login here</a>.</p>
                </form>
            </div>    

        <!-- Slideshow container -->
        <div class="slideshow-container">
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <img src="images/slide/img01.JPG" style="border-radius: 25px 25px 25px 25px; width:100%;">
                <div class="text">Viewing Room 1</div>
            </div>
            <div class="mySlides fade">
                <img src="images/slide/img02.JPG" style="border-radius: 25px 25px 25px 25px; width:100%;">
                <div class="text">Viewing Room 2</div>
            </div>
            <div class="mySlides fade">
                <img src="images/slide/img03.JPG" style="border-radius: 25px 25px 25px 25px; width:100%;">
                <div class="text">Viewing Room 3</div>
            </div>
            <div class="mySlides fade">
                <img src="images/slide/img04.JPG" style="border-radius: 25px 25px 25px 25px; width:100%;">
                <div class="text">Viewing Room 4</div>
            </div>
            <div class="mySlides fade">
                <img src="images/slide/img05.JPG" style="border-radius: 25px 25px 25px 25px; width:100%;">
                <div class="text">Viewing Room 5</div>
            </div>
            <div class="mySlides fade">
                <img src="images/slide/img06.JPG" style="border-radius: 25px 25px 25px 25px; width:100%;">
                <div class="text">Viewing Room 6</div>
            </div>
            
            <div class="mySlides fade">
                <img src="images/slide/img07.JPG" style="border-radius: 25px 25px 25px 25px; width:100%;">
                <div class="text">Viewing Room 7</div>
            </div>
        </div>
    <br>
        <!-- The dots/circles -->
        <div style="text-align:center;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
        </div>
        <!-- Javascript for Image Slider -->
        <script src="scripts/main.js"></script>
</body>
</html>