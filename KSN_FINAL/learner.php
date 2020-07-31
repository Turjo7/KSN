<?php
session_start();
if(empty($_SESSION['email'])){
    echo "<script>window.location.assign('login.php');</script>";
}

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
  <link rel="stylesheet" href="css/learner_style.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  <style>
            .flex {
                display: flex;

                background: rgb(227, 240, 250);
                flex-direction: row;
                flex-wrap: wrap;
                width: auto;
                /*margin-left: 80px;*/
            }


            .card {
                font-family: "Candara", sans-serif;
                width: 340px;
                overflow: hidden;
                background: #fff;
                border-radius: 10px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
                display: flex;
                flex-direction: column;
                margin-left: 20px;
                margin-top: 5px;
                margin-left: 70px;

            }

            .card-image img {
                width: 100%;
                height: 160px;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                object-fit: cover;
            }

            .profile-image img {
                z-index: 1;
                width: 120px;
                height: 120px;
                position: relative;
                margin-top: -75px;
                display: block;
                margin-left: auto;
                margin-right: auto;
                border-radius: 100px;
                border: 10px solid #fff;
                transition-duration: 0.4s;
                transition-property: transform;
            }

            .profile-image img:hover {
                transform: scale(1.1);
            }

            .card-content h3 {
                font-size: 25px;
                text-align: center;
                margin: 0;
            }

            .card-content p {
                font-size: 16px;
                text-align: justify;
                padding: 0 20px 5px 20px;
            }

            .buttons {
                text-align: center;
                padding-top: 5px;
                padding-bottom: 30px;
            }

            .buttons a {
                text-decoration: none;
                font-size: 20px;
                color: white;
                padding: 0 14px;
                transition-duration: 0.4s;
                transition-property: transform;
                background-color: orange;
            }

            .buttons a:hover {
                color: #000;
                transform: scale(1.5);
            }
        </style>





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


 <!-- The Modal search ajax-->
 <div class="modal fade" id="searchModal">
            <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
               
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Search Result</h4>
                </div>
                
                <!-- Modal body -->
                <div class="search-body">
                
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                
            </div>
            </div>
        </div>



   <nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top">  
      <div class="container">

        <a class="navbar-brand logo text-uppercase" href="index.php"><!--logo-->
                        KSN
                    </a>
        <ul class="navbar-nav ml-auto navbar-center">
            <li class="nav-item acive">
            <a class="nav-link" href="learner.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="edit_profile_learner.php">Edit Profile</a>
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
       <div> 
   </nav>

<!--ending of header-->



<!--starting of video call section-->
<section >
     <div class=" container call_section" >
        <img src="man1.png" alt="not found" style="height:400px;padding-top:100px;margin-left:380px;">
        <div style="margin-left:400px;">
            <h4 style="color:white">Name : Md.Alam</h4>
            <h4 style="color:white">Job : Student</h4>
            <h4 style="color:white">Email : abc@gmail.com</h4><br>
            <a href="#" class="btn btn-danger p-3 w-5" style=" width:120px;">Event Logs</a>
            <a href="#" class="btn btn-warning p-3" style=" width:150px;">Video call Admin</a>
        </div>

     </div>

</section>
<!--ending of video call  section-->



<!--starting of upcoming event section-->
<section>
      <div class="up" >
           <h2 style=" margin-left: 500px;padding-top:30px;color:white">Upcoming Event</h2>
           <input type="search" placeholder="search" class="search_info" id="search_info"
            style="margin-left: 900px;height:40px;width:250px;color:black;transform:translate(100px,-44px);">
      </div>

      
     <!--Event Profile Testing Code Starts-->
  <?php
            try {
                $conn = new PDO("mysql:host=localhost;dbname=ksn", "root", "");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



                $stmt = "select * from event_creation;";


                $pdostmt = $conn->query($stmt);
                $table = $pdostmt->fetchAll(PDO::FETCH_NUM);

                echo     '<div class="flex">';

                foreach ($table as $row) {

                    // echo     '<div class="flex">';
                    echo '<!--Profile card start-->';
                    echo '<div class="card">';
                    echo    '<div class="card-image">';
                    echo       '<img src="seminar2.jpg" alt="back banner">';
                    echo   '</div>';
                    echo    '<div class="profile-image">';
                    echo       '<img src="seminar3.jpg" alt="Front pic">';
                    echo  '</div>';
                    echo '<div class="card-content">';

                    echo     '<h3>' . $row[2] . '</h3>';
                    echo    '<p>';
                    echo     '<p style="text-align:center;font-size: 15px;">' . $row[5] . '</p>';
                    /*In case bad situation Have to use diplay:inline in this <p></p> tag*/
                    echo   '</p>';
                    echo '</div>';
                    echo  '<div class="buttons">';
                    echo    '<a href="#" class="btn-gradient red small">Confirm</a>';
                    echo    '<a href="#" class="btn-gradient red small" style="margin-left:2px;">Ignore</a>';
                    echo  '</div>';
                    echo '</div>';
                    echo '<!--Profile card finishes-->';
                   // echo '</div>';
                }
                echo '</div>';
            } 
            catch (PDOException $ex) {
                echo "$ex";
            }
            ?>
        

        <!--<div style="transform:translate(700px,-850px);">       
             <span class="container ">
                <div class="row ml-5">
                    <div class="col-lg-4 col-sm-6 col-12 main-section text-center">
                    <div class="">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12 profile-header"></div>
                            </div>
                            <div class="row user-detail">
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <img src="seminar4.jpg" class=" img-thumbnail">
                                    <h5>World Economic and Bangladesh</h5>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> Banani,Dhaka.</p>

                                    <hr>
                                    <a href="#" class="btn btn-success btn-sm">Ignore</a>
                                    <a href="#" class="btn btn-info btn-sm">Confirm</a>

                                    <hr>
                                    <span>Learning is Power.</span>
                                </div>
                            </div>
                            
                    </div>
                    </div>
                </div>
             </span>

        </div> 

        </div> -->

</section>

<!--ending of upcoming event  section-->




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

<!--searching script code-->
<script type="text/javascript">
      $(document).ready(function(){
            $(".search_info").keyup(function(){

               var value=$("#search_info").val();


                //ajax request
                 $.ajax({
                     url:"searchajax.php",
                     type:"post",
                     data:{
                         val : value
                     },
                     success:function(response){
                         $(".search-body").html(response);//adding response in modal body
                         $("#searchModal").modal('show');//display modal

                     }
                 })

            })

      })
</script>

</body>
</html>
