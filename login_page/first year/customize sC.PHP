<?php
    include("config.php");
    if(isset($_POST['submit'])){
      $teacher = $_POST['teacher'];
      $section = $_POST['section'];
      $course = $_POST['course'];
      $course_time = $_POST['course_time'];
      $room = $_POST['room'];
        
        $insert = "insert into `section c`(teacher,section,course,course_time,room) values('$teacher', '$section','$course','$course_time','$room')";                                                                                                                                                                                                                                                               

        $query=mysqli_query($conn, $insert);

        $sql = "SELECT * FROM `section c` WHERE username = '$section '";
        header('location:section1.php');

    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <link rel="stylesheet" href="customize.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
   
<div class="container">

   <div class="admin-product-form-container">

      <form action="" method="post" >
         <h3>customize section C</h3>
         <input type="text" placeholder="add teacher" name="teacher" class="box" required>
         <input type="text" placeholder="add section" name="section" class="box" required >
         <input type="text" placeholder="add course" name="course" class="box" required>
         <input type="text" placeholder="add course time ex(9:00-10:00)" name="course_time" class="box"  required>
         <input type="text" placeholder="room ex(COE room 102)" name="room" class="box"  required>
         <input type="submit" class="btn"  name="submit" value="submit">
         <a href="section1.php" class="btn">go back!</a>
      </form>
        
      </form>

   </div>
</body>
</html>