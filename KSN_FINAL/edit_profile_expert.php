<?php
session_start();
if(empty($_SESSION['email'])){
    echo "<script>window.location.assign('login.php');</script>";
}else{ // Use this else, otherwise Endof file exception will occur

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Knowledge Sharing Platform</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/expert_style.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body  data-spy="scroll" data-target=".navbar" data-offset="50"> 
<!--starting of header-->
    <!--<div class="header fixed-top">
       <div class="d-flex bg-secondary p-3 ">  
            <div class="p-2 mr-auto"><a href="index.php" class="text-decoration-none text-white">KSN<a></div>
            <div class="p-2  "><a href="#" class="text-decoration-none text-white">Home<a></div>
            <div class="p-2 "><a href="#" class="text-decoration-none text-white">About Us<a></div>
            <div class="p-2 "><a href="#" class="text-decoration-none text-white">Experts<a></div>
            <div class="p-2 "><a href="#" class="text-decoration-none text-white">Contact Us<a></div>
       </div>
   </div>-->
   <section>
   <nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top">  
      <div class="container">

        <a class="navbar-brand logo text-uppercase" href="index.php"><!--logo-->
                        KSN
                    </a>
        <ul class="navbar-nav ml-auto navbar-center">
            <li class="nav-item acive">
            <a class="nav-link" href="expert.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="edit_profile_expert.php">Edit Profile</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#about">Message</a>
            </li>
           

                  <!-- Dropdown -->
                  <?php
                  try {
                    $conn = new PDO("mysql:host=localhost;dbname=ksn", "root", "");
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
                    $stmt = "select event_name from event_creation ORDER BY event_id DESC LIMIT 5;";
                    $pdostmt = $conn->query($stmt);
                    $table = $pdostmt->fetchAll(PDO::FETCH_NUM);
                     //echo print_r($table);
                     echo '<li class="nav-item dropdown">';
                     echo '<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Notification</a>';

                     
                     echo '<div class="dropdown-menu" style="background-color:orange;">';
                    foreach ($table as $row) {
                      
                        echo   '<a class="dropdown-item" href="#">'.$row[0].'</a><hr>';
                        //echo   '<a class="dropdown-item" href="#">'.$row[1].'</a><hr>';
                       // echo   '<a class="dropdown-item" href="#">'.$row[2].'</a>';

                    }
                        echo '</div>';
                        echo '</li>';
                    
                }
                    catch (PDOException $ex) {
                        echo "$ex";
                    }
                    
                 ?>
            
            <li class="nav-item">
            <a class="nav-link" href="#contact">My Events</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="logout.php">Log Out</a>
            </li>
        </ul>
       <section> 
   </nav>
   </section>
<!--ending of header-->



<!--starting of edit profile section-->

<section>
        <div class="">
            
            <img src="edit.jpg" alt="not found" style="width:1350px;height:800px;">

        </div>

   </section>
<!--edit profile-->
<section style="margin-top:100px;">
<div class="container">
  <h2 style="margin-left:400px;margin-bottom:50px;">Edit Profile</h2>
  <form action="edit_update_form.php" method="POST">
    <div class="form-group">
      <label for="nmbr">User Number:</label>
      <input type="number" class="form-control" id="number" placeholder="Enter number" name="number">
    </div>
    <div class="form-group">
      <label for="job">User Job Title:</label>
      <input type="text" class="form-control" id="job" placeholder="Enter job title" name="job">
    </div>
    <div class="form-group">
      <label for="bio">User Short Bio:</label>
      <input type="text" class="form-control" id="bio" placeholder="Enter bio" name="bio">
    </div>
    <div class="form-group">
      <label for="pic">Profile Picture:</label>
      <input type="file" class="form-control" id="pic" placeholder="picture" name="pic">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>
</section>



<!--update password-->
<section style="margin-top:70px;">
<div class="container">
  <h2 style="margin-left:400px;margin-bottom:50px;">Update Password</h2>
  <form action="edit_update_form.php" method="POST">
  <div class="form-group">
      <label for="pwd">Update Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <button type="submit" class="btn btn-primary" style="margin-bottom:80px;" name="update">Update</button>
  </form>
</div>
</section>
<!--ending of edit profile section-->



<!--starting of footer section-->
<section>
        <div class="footer">
        <img src="footer.png" class="footer_image"> 

            
            <div class="social-icons">
                <a href="#"><img src="fb.png" style="width:66px;height:60px;"></a>
                <a href="#"><img src="youtube.png"  style="width:70px;height:67px;"></a>
                <a href="#"><img src="ld.png"  style="width:70px;height:67px;"></a>
		
		    </div>
	           
	    </div>
<section>

<!--ending of footer section-->


</body>
</html>
// Put this clouser to avoid end of file exception
<?php

   }
   
   ?>