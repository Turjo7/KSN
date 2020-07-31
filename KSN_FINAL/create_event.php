<?php
session_start();

   $servername = "localhost";
   $username = "root";
   $password = "";                    
   $dbname = "ksn";
   
   $event_name=$_POST['event_name'];
   $topic=$_POST['topic'];
   $time=$_POST['appt'];
   $date=$_POST['date'];
   

   $user_id=$_SESSION['user_id'];
   
   try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
     $stmt = "insert into event_creation values(' ','1','$event_name','$time','$date','$topic','$user_id');";
            $conn->exec($stmt);
            echo "<script>window.alert('Event Creation Is Successfull');</script>";
            echo "<script>window.location.assign('expert.php');</script>";
       
   }catch(PDOException $ex){
       
       echo "<script>showalert('Event creation error');</script>";
       
   }



?>