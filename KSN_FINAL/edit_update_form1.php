<?php
   session_start();


   $servername = "localhost";
   $username = "root";
   $password = "";                    
   $dbname = "ksn";
   
   $mail=$_SESSION['email'];


 
   if(isset($_POST['submit'])){

    $number=$_POST['number'];
    $job=$_POST['job'];
    $bio=$_POST['bio'];
    $pic=$_POST['pic'];

       try{
        $con=new PDO("mysql:host=localhost;dbname=ksn",'root','');
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $stmt = "UPDATE users set user_number='$number',user_job_title='$job',user_short_bio='$bio',pro_pic='$pic'
                where user_email='$mail'";
        $con->exec($stmt);
     
        echo "<script>window.alert('Profile editing Is Successfull');</script>";
        echo "<script>window.location.assign('learner.php');</script>";
       }
      catch(PDOException $ex){
          echo "<script>window.location.assign('learner.php');</script>";
      }
       
   }


    else if(isset($_POST['update'])){
     
    $pass=$_POST['pswd'];

    $mail=$_SESSION['email'];

    try{
     $con=new PDO("mysql:host=localhost;dbname=ksn",'root','');
     $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     $stmt = "UPDATE users SET user_password='$pass' WHERE user_email='$mail'";
     $con->exec($stmt);

  
     echo "<script>window.alert('Password updating Is Successfull');</script>";
     echo "<script>window.location.assign('learner.php');</script>";
    }
   catch(PDOException $ex){
       echo "<script>window.location.assign('learner.php');</script>";
   }
    
}





?>