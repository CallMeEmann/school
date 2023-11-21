<?php

@include 'config.php';

if(isset($_POST['section'])){

   $teacher = $_POST['teacher'];
   $section = $_POST['section'];
   $course = $_POST['course'];
   $course_time = $_POST['course_time'];
   $room= $_POST['room'];

   if (empty($teacher) || empty($section) || empty($course) || empty($course_time)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO section a(teacher, section, course, course_time,room) VALUES('$teacher', '$section', '$course', '$course_time', '$room')";
      $upload = mysqli_query($conn,$insert);
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `section a` WHERE id = $id");
   mysqli_query($conn, "DELETE FROM `section b` WHERE id = $id");
   mysqli_query($conn, "DELETE FROM `section c` WHERE id = $id");
   mysqli_query($conn, "DELETE FROM `section d` WHERE id = $id");
   mysqli_query($conn, "DELETE FROM `section e` WHERE id = $id");
   mysqli_query($conn, "DELETE FROM `section f` WHERE id = $id");
   header('location:section1.php');
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="section1.css">

</head>
<body>
   <div class="video-background">
    <video autoplay loop muted>
      <source src="classroom vid.mp4" type="video/mp4">
    </video>
  </div>
 <H1 style="font-size: 50px;">FIRST SEM</H1>
 <form action="" method="submit">
    <div class="search" style=" margin-left: 50px;"> 
       <div class="search-box">
          <input type="text" placeholder="Type to search.." name="submit">
          <div class="search-icon">
            <i class="fas fa-search"></i>
          </div>
          <div class="cancel-icon">
            <i class="fas fa-times"></i>
          </div>
            <div class="search-data">
          </div>
       </div>
 </form>
 <form action="" method="post">
     <button class="custom-btn btn-12" name="back"><span>okey😊</span><span>back</span></button>
     <button class="custom-btn btn-12" name="logout"><span>bye😊</span><span>logout</span></button>
  </form>

  <form action="" method="post">
     <div class="box" style="margin-left: 0;">
         <?php
         
         $select = mysqli_query($conn, "SELECT * FROM `section a`");

         ?>
         <div class="display"style="margin-right: 20px;">
         <table class="display-table">
            <H2> SECTION A</H2>
            <thead>
            <tr>
               <th>teacher</th>
               <th>section</th>
               <th>course</th>
               <th>course_time</th>
               <th>room</th>
               <th>action</th>
            </tr>
            </thead>
            <?php while($row = mysqli_fetch_assoc($select)){ ?>
            <tr>
               <td><?php echo $row['teacher']; ?></td>
               <td><?php echo $row['section']; ?></td>
               <td><?php echo $row['course']; ?></td>
               <td><?php echo $row['course_time']; ?></td>
               <td><?php echo $row['room']; ?></td>
               <td>
                  <a href="section_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
                  <a href="section1.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
               </td>
            </tr>
         <?php } ?>
         </table><br>
            <a class="customize" href="customize.php">customize</a>
         </div>

         <?php      
         $select = mysqli_query($conn, "SELECT * FROM `section b`");
         ?>
         <div class="display"style="margin-right: 20px;">
         <table class="display-table">
            <H2> SECTION B</H2>
            <thead>
            <tr>
               <th>teacher</th>
               <th>section</th>
               <th>course</th>
               <th>course_time</th>
               <th>room</th>
               <th>action</th>
            </tr>
            </thead>
            <?php while($row = mysqli_fetch_assoc($select)){ ?>
            <tr>
               <td><?php echo $row['teacher']; ?></td>
               <td><?php echo $row['section']; ?></td>
               <td><?php echo $row['course']; ?></td>
               <td><?php echo $row['course_time']; ?></td>
               <td><?php echo $row['room']; ?></td>
               <td>
                  <a href="section_update sB.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
                  <a href="section1.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
               </td>
            </tr>
         <?php } ?>
         </table><br>
            <a class="customize" href="customize sB.php">customize</a>
         </div>

         <?php      
         $select = mysqli_query($conn, "SELECT * FROM `section c`");
         ?>
         <div class="display" style="margin-right: 20px;">
         <table class="display-table">
            <H2> SECTION C</H2>
            <thead>
            <tr>
               <th>teacher</th>
               <th>section</th>
               <th>course</th>
               <th>course_time</th>
               <th>room</th>
               <th>action</th>
            </tr>
            </thead>
            <?php while($row = mysqli_fetch_assoc($select)){ ?>
            <tr>
               <td><?php echo $row['teacher']; ?></td>
               <td><?php echo $row['section']; ?></td>
               <td><?php echo $row['course']; ?></td>
               <td><?php echo $row['course_time']; ?></td>
               <td><?php echo $row['room']; ?></td>
               <td>
                  <a href="section_update sC.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
                  <a href="section1.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
               </td>
            </tr>
         <?php } ?>
         </table><br>
            <a class="customize" href="customize sC.php">customize</a>
         </div>
        <?php
         
         $select = mysqli_query($conn, "SELECT * FROM `section d`");

         ?>
         <div class="display" style="margin-right: 20px;">
         <table class="display-table">
            <H2> SECTION D</H2>
            <thead>
            <tr>
               <th>teacher</th>
               <th>section</th>
               <th>course</th>
               <th>course_time</th>
               <th>room</th>
               <th>action</th>
            </tr>
            </thead>
            <?php while($row = mysqli_fetch_assoc($select)){ ?>
            <tr>
               <td><?php echo $row['teacher']; ?></td>
               <td><?php echo $row['section']; ?></td>
               <td><?php echo $row['course']; ?></td>
               <td><?php echo $row['course_time']; ?></td>
               <td><?php echo $row['room']; ?></td>
               <td>
                  <a href="section_update sD.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
                  <a href="section1.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
               </td>
            </tr>
         <?php } ?>
         </table><br>
            <a class="customize" href="customize sD.php">customize</a>
         </div>
         <?php
         
         $select = mysqli_query($conn, "SELECT * FROM `section e`");

         ?>
         <div class="display" style="margin-right: 20px;">
         <table class="display-table">
            <H2> SECTION E</H2>
            <thead>
            <tr>
               <th>teacher</th>
               <th>section</th>
               <th>course</th>
               <th>course_time</th>
               <th>room</th>
               <th>action</th>
            </tr>
            </thead>
            <?php while($row = mysqli_fetch_assoc($select)){ ?>
            <tr>
               <td><?php echo $row['teacher']; ?></td>
               <td><?php echo $row['section']; ?></td>
               <td><?php echo $row['course']; ?></td>
               <td><?php echo $row['course_time']; ?></td>
               <td><?php echo $row['room']; ?></td>
               <td>
                  <a href="section_update sE.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
                  <a href="section1.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
               </td>
            </tr>
         <?php } ?>
         </table><br>
            <a class="customize" href="customize sE.php">customize</a>
         </div>
         <?php
         
         $select = mysqli_query($conn, "SELECT * FROM `section f`");

         ?>
         <div class="display" style="margin-right: 20px;">
         <table class="display-table">
            <H2> SECTION F</H2>
            <thead>
            <tr>
               <th>teacher</th>
               <th>section</th>
               <th>course</th>
               <th>course_time</th>
               <th>room</th>
               <th>action</th>
            </tr>
            </thead>
            <?php while($row = mysqli_fetch_assoc($select)){ ?>
            <tr>
               <td><?php echo $row['teacher']; ?></td>
               <td><?php echo $row['section']; ?></td>
               <td><?php echo $row['course']; ?></td>
               <td><?php echo $row['course_time']; ?></td>
               <td><?php echo $row['room']; ?></td>
               <td>
                  <a href="section_update sF.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
                  <a href="section1.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
               </td>
            </tr>
         <?php } ?>
         </table><br>
            <a class="customize" href="customize sF.php">customize</a>
         </div>
      </div>
  </form>


</body>
</html>
