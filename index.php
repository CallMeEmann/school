<?php

@include 'first year/config.php';

    if(isset($_POST["back"])){
        header('location:year level.php');
    }
    if(isset($_POST["logout"])){
        header('location:login.php');
    }

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
if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `search` WHERE Name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
         <tr>
            <th>teacher</th>
            <th>section</th>
            <th>course</th>
            <th>course_time</th>
            <th>room</th>
         </tr>
         <tr>
               <td><?php echo $row['teacher']; ?></td>
               <td><?php echo $row['section']; ?></td>
               <td><?php echo $row['course']; ?></td>
               <td><?php echo $row['course_time']; ?></td>
               <td><?php echo $row['room']; ?></td>

            </tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}
   }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Navigation page CSS</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css'><link rel="stylesheet" href="./style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="ct" id="t1">
 <div class="ct" id="t2">
   <div class="ct" id="t3">
     <div class="ct" id="t4">
       <div class="ct" id="t5">
         <div class="ct" id="t6">
           <div class="ct" id="t7">
             <div class="ct" id="t8">
               <div class="ct" id="t9">
                  <section>  
                    <ul>
                    <a href="#t1"><li class="icon fa fa-home" id=""></li></a>
                      <a href="#t2"><li  id="" style="font-size:30px; color:#fff;">A</li></a>
                      <a href="#t3"><li id="" style="font-size:30px; color:#fff;">B</li></a>
                      <a href="#t4"><li  id="" style="font-size:30px; color:#fff;">C</li></a>
                      <a href="#t5"><li  id="" style="font-size:30px; color:#fff;">D</li></a>
                      <a href="#t6"><li  id="" style="font-size:30px; color:#fff;">E</li></a>
                      <a href="#t7"><li  id="" style="font-size:30px; color:#fff;">F</li></a>
                      <a href="#t8"><li  id="" style="font-size:30px; color:#fff;">G</li></a>
                      <a href="#t9"><li  id="" style="font-size:30px; color:#fff;">H</li></a>
                    </ul>
                    <form action="" method="post">
                      

                      <div class="page" id="p1">
                        <li class=""><span class="title">

                        </span><span class="hint"></span></li>   
                      </div>
                      <div class="page" id="p2">
                        <li class=""><span class="title">  
                          <div class="box4">
                      <?php
                      
                      $select = mysqli_query($conn, "SELECT * FROM `section a`");

                      ?>
                      <div class="display1" style="margin-right: 20px;">
                      <table class="display-table1">
                          <H2> SECTION A</H2>
                          <thead>
                          <tr>
                            <th>teacher</th>
                            <th>section</th>
                            <th>course</th>
                            <th>course_time</th>
                            <th>room</th>
                          </tr>
                          </thead>
                          <?php while($row = mysqli_fetch_assoc($select)){ ?>
                          <tr>
                            <td><?php echo $row['teacher']; ?></td>
                            <td><?php echo $row['section']; ?></td>
                            <td><?php echo $row['course']; ?></td>
                            <td><?php echo $row['course_time']; ?></td>
                            <td><?php echo $row['room']; ?></td>

                          </tr>
                      <?php } ?>
                      </table><br>
                      </div>
                          </div>
                        </span></li>
                      </div>  
                      <div class="page" id="p3">
                        <li class=""><span class="title">
                          <div class="box4">
                        <?php      
                        $select = mysqli_query($conn, "SELECT * FROM `section b`");
                        ?>
                        <div class="display1" style="margin-right: 20px;">
                        <table class="display-table1">
                            <H2> SECTION B</H2>
                            <thead>
                            <tr>
                              <th>teacher</th>
                              <th>section</th>
                              <th>course</th>
                              <th>course_time</th>
                              <th>room</th>
                            </tr>
                            </thead>
                            <?php while($row = mysqli_fetch_assoc($select)){ ?>
                            <tr>
                              <td><?php echo $row['teacher']; ?></td>
                              <td><?php echo $row['section']; ?></td>
                              <td><?php echo $row['course']; ?></td>
                              <td><?php echo $row['course_time']; ?></td>
                              <td><?php echo $row['room']; ?></td>
                              
                            </tr>
                        <?php } ?>
                        </table><br>
                        </div>
                        </div>
                        </span></li>
                      </div>
                      
                      <div class="page" id="p4">
                      <li class=""><span class="title">
                        <div class="box4">
                        <?php      
                        $select = mysqli_query($conn, "SELECT * FROM `section c`");
                        ?>
                        <div class="display1" style="margin-right: 20px;">
                        <table class="display-table1">
                            <H2> SECTION C</H2>
                            <thead>
                            <tr>
                              <th>teacher</th>
                              <th>section</th>
                              <th>course</th>
                              <th>course_time</th>
                              <th>room</th>

                            </tr>
                            </thead>
                            <?php while($row = mysqli_fetch_assoc($select)){ ?>
                            <tr>
                              <td><?php echo $row['teacher']; ?></td>
                              <td><?php echo $row['section']; ?></td>
                              <td><?php echo $row['course']; ?></td>
                              <td><?php echo $row['course_time']; ?></td>
                              <td><?php echo $row['room']; ?></td>
                            
                            </tr>
                        <?php } ?>
                        </table><br>
                        </div>
                        </div>
                      </span></li>
                      </div>  

                      <div class="page" id="p5">
                      <li class=""><span class="title">
                      <div class="box4">
                      <?php
         
                        $select = mysqli_query($conn, "SELECT * FROM `section d`");

                        ?>
                        <div class="display1" style="margin-right: 20px;">
                        <table class="display-table1">
                            <H2> SECTION D</H2>
                            <thead>
                            <tr>
                              <th>teacher</th>
                              <th>section</th>
                              <th>course</th>
                              <th>course_time</th>
                              <th>room</th>
                            </tr>
                            </thead>
                            <?php while($row = mysqli_fetch_assoc($select)){ ?>
                            <tr>
                              <td><?php echo $row['teacher']; ?></td>
                              <td><?php echo $row['section']; ?></td>
                              <td><?php echo $row['course']; ?></td>
                              <td><?php echo $row['course_time']; ?></td>
                              <td><?php echo $row['room']; ?></td>
                            
                            </tr>
                        <?php } ?>
                        </table><br>
                      </div>
                      </span></li>
                      </div>  

                      <div class="page" id="p6">
                      <li class=""><span class="title">
                      <div class="box4">
                      <?php
         
                        $select = mysqli_query($conn, "SELECT * FROM `section e`");

                        ?>
                        <div class="display1" style="margin-right: 20px;">
                        <table class="display-table1">
                            <H2> SECTION E</H2>
                            <thead>
                            <tr>
                              <th>teacher</th>
                              <th>section</th>
                              <th>course</th>
                              <th>course_time</th>
                              <th>room</th>

                            </tr>
                            </thead>
                            <?php while($row = mysqli_fetch_assoc($select)){ ?>
                            <tr>
                              <td><?php echo $row['teacher']; ?></td>
                              <td><?php echo $row['section']; ?></td>
                              <td><?php echo $row['course']; ?></td>
                              <td><?php echo $row['course_time']; ?></td>
                              <td><?php echo $row['room']; ?></td>
                        
                            </tr>
                        <?php } ?>
                        </table><br>
                      </div>
                      </span></li>
                      </div>  

                      <div class="page" id="p7">
                      <li class=""><span class="title">
                      <div class="box">

                      </div>
                      </span></li>
                      </div>  

                      <div class="page" id="p8">
                      <li class=""><span class="title">
                      <div class="box">

                      </div>
                      </span></li>
                      </div>  

                      <div class="page" id="p9">
                      <li class=""><span class="title">
                      <div class="box">

                      </div>
                      </div>
                      </span></li>
                      </div> 
                      </div> 

                    </form>
                      
                    </section>
                    </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
  </div>
</div>
<script>
      const searchBox = document.querySelector(".search-box");
      const searchBtn = document.querySelector(".search-icon");
      const cancelBtn = document.querySelector(".cancel-icon");
      const searchInput = document.querySelector("input");
      const searchData = document.querySelector(".search-data");
      searchBtn.onclick =()=>{
      searchBox.classList.add("active");
      searchBtn.classList.add("active");
      searchInput.classList.add("active");
      cancelBtn.classList.add("active");
      searchInput.focus();
      if(searchInput.value != ""){
         var values = searchInput.value;
         searchData.classList.remove("active");
         searchData.innerHTML = "You just typed " + "<span style='font-weight: 500;'>" + values + "</span>";
      }else{
         searchData.textContent = "";
      }
}
cancelBtn.onclick =()=>{
      searchBox.classList.remove("active");
      searchBtn.classList.remove("active");
      searchInput.classList.remove("active");
      cancelBtn.classList.remove("active");
      searchData.classList.toggle("active");
      searchInput.value = "";
}
</script>
  
</body>
<style>
  * {
  transition: all 500ms ease-out;
  -webkit-transition: all 500ms ease-out;
}

html, body, section, .page {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  transition: all 1s cubic-bezier(.5, -0.005, 0.2, 1) !important;
  -webkit-transition: all 1s cubic-bezier(.5, -0.005, 0.2, 1) !important;
  color: #fff;
  background: #374046;
  overflow: hidden;
}

section {
  width:400%;  
}

.page {
  position: absolute;
}

#p1 {
  left: 0;
}

#p2 {
  left: 100%;
  background: #FF5722;
}

#p3 {
  left: 200%;
  background: #593C1F;
}

#p4 {
  left: 300%;
  background: #3498db;
}
#p5 {
  left: 300%;
  background: #FF5722;
}
#p6 {
  left: 300%;
  background: #3498db;
}
#p7 {
  left: 300%;
  background: #FF5722;
}
#p8 {
  left: 300%;
  background: #3498db;
}
#p9 {
  left: 300%;
  background: #593C1F;
}

ul {
 position: fixed; 
 z-index: 1;
}
#t1:target .page#p1 {
    transform: translateX(0);
}
#t2:target .page#p2 {
    transform: translateX(-90%);
}
#t3:target .page#p3 {
    transform: translateX(-190%);
}
#t4:target .page#p4 {
    transform: translateX(-290%);
}
#t5:target .page#p5 {
    transform: translateX(-290%);
}
#t6:target .page#p6 {
    transform: translateX(-290%);
}
#t7:target .page#p7 {
    transform: translateX(-290%);
}
#t8:target .page#p8 {
    transform: translateX(-290%);
}
#t9:target .page#p9 {
    transform: translateX(-290%);
}

#t2:target .page#p1, 
#t3:target .page#p1,
#t4:target .page#p1,
#t4:target .page#p1 ,
#t4:target .page#p1 ,
#t4:target .page#p1 {
  background: black;
}



#t2:target #dos {
  transform: scale(1.2) !important;
}

#t3:target #tres {
  transform: scale(1.2) !important;
}

#t4:target #cuatro {
  transform: scale(1.2) !important;
}
#t2:target #dos {
  transform: scale(1.2) !important;
}

#t3:target #tres {
  transform: scale(1.2) !important;
}

#t4:target #apat {
  transform: scale(1.2) !important;
}
#t5:target #lima {
  transform: scale(1.2) !important;
}

#t6:target #alim {
  transform: scale(1.2) !important;
}

#t7:target #pito {
  transform: scale(1.2) !important;
}
#t8:target #walo {
  transform: scale(1.2) !important;
}

#t9:target #siyam {
  transform: scale(1.2) !important;
}


ul {
  position: fixed;
  top: -600px;
  bottom: 0;
  left: 0;
  /*right: 0;*/
  margin: auto;
  height: 280px;
  width: 10%;
  padding: 0;
  text-align: center;
 }

ul li {
  margin: 30px 0;
}

a {
  text-decoration: none;
  font-family: open sans, sans-serif;
}

.title, .hint {
  font-family: open sans, sans-serif;
  display: block;
}

.title {
  font-size: 38px;
}

.hint {
  font-size: 13px;
}

.hint a {
  color: #EFFF06;
  transition: all 250ms easet-out;
}

.hint a:hover {
  color: #FFF;
}

.credit{
	position: absolute;
	bottom: 0;
	width: 100%;
	text-align: center;
	font-size: 10px;
}

.credit a {
	color: #fff
}
</style>
</html>

<style>



.box4{
  font-size: 62.5%;
  overflow-x: hidden;
  --green:#27ae60;
  --black:#333;
  --white:#fff;
  --bg-color:#eee;
  --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
  --border:.1rem solid var(--black);
   padding: 15px;
   margin-left: 260px;
   background-color: #27ae60;
   color: rgb(255, 255, 255);
   display: grid;
   grid-template-columns: repeat(3, 1fr);
   position: absolute;
   top: 50%;
   left: 35%;
   transform: translate(-50%,-50%);
}


H2{
   border-radius: 10px;
   padding: 10px;
   margin-right: 30px;
   background-color: #00000083;
   color: #ffffff;
   display: grid;
   justify-content: center;
   font-size: 30px;
}
 .display1{
  width: 70rem;
  height: 700px;
   border-radius: 10px;
   padding-left: 20px;
   padding-bottom: 25px;
   color: #ffffff;
   background-color: #000000b4;
   margin:2rem 0;
 }
 
 .display1 .display-table1{
    width: 68rem;
 }
 

 .display1 .display-table1 th{
    background: #27ae60;
    padding:1rem;
    font-size: 2rem;
 }
 
 
 .display1 .display-table1 td{
    padding:1rem;
    font-size: 1.5rem;
    border-bottom: var(--border);
 }
 
 .display1 .display-table1 .btn:first-child{
    margin-top: 0;
 }
 
 .display1 .display-table1 .btn:last-child{
    background: crimson;
 }
 
 .display1 .display-table1 .btn:last-child:hover{
    background: var(--black);
 }
 
 
  </style>

  <style>
  body {
}

.video-background {
   position: fixed;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   overflow: hidden;
   z-index: -1;
 }
 
 .video-background video {
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   min-width: 100%;
   min-height: 100%;
   width: auto;
   height: auto;
   z-index: -1;
 }

.customize{
   padding: 15px;
   margin-left: 260px;
   background-color: #27ae60;
   color: rgb(255, 255, 255);
}
.box3{
  
}
h1{
   border-radius: 10px;
   padding: 10px;
   background-color: #00000083;
   color: #ffffff;
   position: absolute;
   top: 0;
   left: 43%;
   
}

a {
   text-decoration: none;
}
 
button {
     margin: 10px;
     background-color: #007BFF;
     border: none;
     border-radius: 5px;
     color: white;
     cursor: pointer;
     font-family: Arial, sans-serif;
     font-size: 16px;
     text-decoration: none;
     display: inline-block;
     transition: background-color 0.3s, border-color 0.3s, box-shadow 0.3s;
 }
 
 button:hover {
     background-color: rgb(250, 121, 0);
     box-shadow: 0 0 20px rgba(255, 253, 253, 0.2);
 }
 
 button:focus {
     outline: none;
     box-shadow: 0 0 10px rgba(0, 36, 155, 0.2);
 }
 
 
 .btn{
    display: block;
    width: 100%;
    cursor: pointer;
    border-radius: .5rem;
    margin-top: 5px;
    font-size: 1.7rem;
    padding:5px 10px;
    background: var(--green);
    color:var(--white);
    text-align: center;
 }
 
 .btn:hover{
    background: var(--black);
 }
 
 .btn-12{
   position: relative;
   margin-right: 10%;
   left: 80%;
   bottom: 60px;
   border:none;
   cursor: pointer;
   box-shadow: none;
   line-height: 42px;
   -webkit-perspective: 230px;
   perspective: 230px;
  }
  .btn-12 span {
   background: rgb(0,172,238);
  background: linear-gradient(0deg, rgba(0,172,238,1) 0%, rgba(2,126,251,1) 100%);
   display: block;
   position: absolute;
   width: 130px;
   height: 40px;
   box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
    7px 7px 20px 0px rgba(0,0,0,.1),
    4px 4px 5px 0px rgba(0,0,0,.1);
   border-radius: 5px;
   margin:0;
   text-align: center;
   -webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
   box-sizing: border-box;
   -webkit-transition: all .3s;
   transition: all .3s;
  }
  .btn-12 span:nth-child(1) {
   box-shadow:
    -7px -7px 20px 0px #fff9,
    -4px -4px 5px 0px #fff9,
    7px 7px 20px 0px #0002,
    4px 4px 5px 0px #0001;
   -webkit-transform: rotateX(90deg);
   -moz-transform: rotateX(90deg);
   transform: rotateX(90deg);
   -webkit-transform-origin: 50% 50% -20px;
   -moz-transform-origin: 50% 50% -20px;
   transform-origin: 50% 50% -20px;
  }
  .btn-12 span:nth-child(2) {
   -webkit-transform: rotateX(0deg);
   -moz-transform: rotateX(0deg);
   transform: rotateX(0deg);
   -webkit-transform-origin: 50% 50% -20px;
   -moz-transform-origin: 50% 50% -20px;
   transform-origin: 50% 50% -20px;
  }
  .btn-12:hover span:nth-child(1) {
   box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
    7px 7px 20px 0px rgba(0,0,0,.1),
    4px 4px 5px 0px rgba(0,0,0,.1);
   -webkit-transform: rotateX(0deg);
   -moz-transform: rotateX(0deg);
   transform: rotateX(0deg);
  }
  .btn-12:hover span:nth-child(2) {
   box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
    7px 7px 20px 0px rgba(0,0,0,.1),
    4px 4px 5px 0px rgba(0,0,0,.1);
   color: transparent;
   -webkit-transform: rotateX(-90deg);
   -moz-transform: rotateX(-90deg);
   transform: rotateX(-90deg);
  

}::selection{
   color: #fff;
   background: #664AFF;
 }
 .search-box{
   position: relative;
   top: 10px;
   height: 60px;
   width: 60px;
   border-radius: 50%;
   box-shadow: 5px 5px 30px rgba(0,0,0,.2);
   transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
 }
 .search-box.active{
   width: 350px;
 }
 .search-box input{
   width: 100%;
   height: 100%;
   border: none;
   border-radius: 50px;
   background: #fff;
   outline: none;
   padding: 0 60px 0 20px;
   font-size: 18px;
   opacity: 0;
   transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
 }
 .search-box input.active{
   opacity: 1;
 }
 .search-box input::placeholder{
   color: #a6a6a6;
 }
 .search-box .search-icon{
   position: absolute;
   right: 0px;
   top: 50%;
   transform: translateY(-50%);
   height: 60px;
   width: 60px;
   background: #fff;
   border-radius: 50%;
   text-align: center;
   line-height: 60px;
   font-size: 22px;
   color: #664AFF;
   cursor: pointer;
   z-index: 1;
   transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
 }
 .search-box .search-icon.active{
   right: 5px;
   height: 50px;
   line-height: 50px;
   width: 50px;
   font-size: 20px;
   background: #664AFF;
   color: #fff;
   transform: translateY(-50%) rotate(360deg);
 }
 .search-box .cancel-icon{
   position: absolute;
   right: 20px;
   top: 50%;
   transform: translateY(-50%);
   font-size: 25px;
   color: #fff;
   cursor: pointer;
   transition: all 0.5s 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
 }
 .search-box .cancel-icon.active{
   right: -40px;
   transform: translateY(-50%) rotate(360deg);
 }
 .search-box .search-data{
   text-align: center;
   padding-top: 7px;
   color: #fff;
   font-size: 18px;
   word-wrap: break-word;
 }
 .search-box .search-data.active{
   display: none;
 }

 
 
  </style>