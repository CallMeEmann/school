<?Php
    if(isset($_POST["submit1"])){
        header('location:first year/section.php');
    }
    if(isset($_POST["submit2"])){
        header('location:second year/section.php');
    }
    if(isset($_POST["submit3"])){
        header('location:third year/section.php');
    }
    if(isset($_POST["submit4"])){
        header('location:fourth year/section.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College of Engineering</title>
    <link rel="stylesheet" href="year level.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <form action="" method="post">
                <h1>College of Engineering</h1>
                <div class="box1">
                    <button class="" name="submit1">1ST YEAR</button> 
                    <button class="" name="submit2">2ND YEAR</button>
                    <button class=""name="submit3">3RD YEAR</button>
                    <button class="" name="submit4">4TH YEAR</button>
                </div>
				<a href="logout.php" class="btn btn-warning" style=" margin-left: 220px; ,">
					Logout
				</a>
            </form>
            
        </div>
        
    </div>
    <div id="particles-js"></div>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    

</body>
</html>