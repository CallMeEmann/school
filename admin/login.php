

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
    <div class="box">
        <h2>COLLEGE OF ENGINEERING-PLSP</h2>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form method="post">
                    <h1 style="font-size: 35px;">Create Account</h1>
                    <p>please make you'r account</p>
                    
                    <input type="email" placeholder="email" name="email" id="email" required />
                    <input type="text" placeholder="fullname" name="fullname" id="fullname" required />
                    <input type="password" placeholder="Password" name="password" id="password" required/>
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="" method="post">
                    <h1>Sign in</h1>
                    <div>
                    <div class="img">
                    <a href="https://www.facebook.com/PLSPCOESC"><img src="pic/291809191_113252248104181_7299213919004557395_n-removebg-preview.png" style="width: 80px;height: 80px;margin-right: 10px;"></a>
                    <a href="https://www.facebook.com/PLSPOfficialFBPage"><img src="pic/285143979_583614463369120_1268553432523587912_n-removebg-preview.png" style="width: 70px;padding-bottom: 6px;"></a>
                    </div>
                    </div>
                    <span>PLSP FB PAGE</span>
                    <input type="text" placeholder="email" name="email"/>
                    <input type="password" placeholder="Password" name="password" />
                    
                    <a href="forgotpass.php" class="btn"> forgot password? </a>
                    

                    <button type="submit" value="login" name="login" >Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>If you all ready done in Sign up please click here to Login</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Ma'am And Sir</h1>
                        <p>If you don't have an Account please Sign up here</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="particles-js"></div>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
 
</body>
<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>

<?php
    include_once("database.php");
    
 
    if (isset($_POST["login"])) {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $sql = "SELECT * FROM admin WHERE email='$email' and password = '$password'";
        $result = $conn->query($sql);
    
        if ($result->num_rows == 1) {
            $_SESSION['email'] = $email;
            header("Location: year level.php");
        }else{  
            ?>
            <script>
            
            swal({
                title: "sorry 😔",
                text: "Invalid username or password!!",
                icon: "error",
                button: "okey",
              });
            </script>

            <?php
        }     
            
        $conn->close();
}

?>
</html>

<?php
    include("database.php");
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $fullname = $_POST['fullname'];
        $password = $_POST['password'];
        
        $insert = "insert into admin( email,fullname,password) values('$email','$fullname','$password')";                                                                                                                                                                                                                                                               

        $query=mysqli_query($conn, $insert);

        $sql = "SELECT * FROM admin WHERE username = '$username'";
     
        if($query){

            ?>
            <script>
            
            swal({
                title: "success",
                text: "you have an account!",
                icon: "success",
                button: "Done",
              });
            </script>

            <?php
        }
    }
    

?>