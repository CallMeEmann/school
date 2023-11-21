<?php

@include 'config.php';

$id = $_GET['edit'];

if(isset($_POST['submit'])){
   $teacher = $_POST['teacher'];
   $section = $_POST['section'];
   $course = $_POST['course'];
   $course_time = $_POST['course_time'];
   $room = $_POST['room'];

   if (empty($teacher) || empty($section) || empty($course) || empty($course_time)){
      $message[] = 'please fill out all';  
   }else{

      $update_data = "UPDATE `section e` SET teacher='$teacher', section='$section', course='$course', course_time='$course_time', room='$room'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         header('location:section1.php');
      }else{
         $message[] = 'please fill out all!'; 
      }
   }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


<div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM `section e` WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update schedule section E</h3>
      <input type="text" class="box" name="teacher" value="<?php echo $row['teacher']; ?>" placeholder="enter the teacher name">
      <input type="text" class="box" name="section" value="<?php echo $row['section']; ?>" placeholder="enter the section">
      <input type="text" class="box" name="course" value="<?php echo $row['course']; ?>" placeholder="enter the section">
      <input type="text" class="box" name="course_time" value="<?php echo $row['course_time']; ?>" placeholder="enter the course_time">
      <input type="text" class="box" name="room" value="<?php echo $row['room']; ?>" placeholder="room">

      <input type="submit" value="submit" name="submit" class="btn">
      <a href="section1.php" class="btn">go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>