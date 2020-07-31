<?php 


 $servername = "localhost";
 $username = "root";
 $password = "";                    
 $dbname = "ksn";
     
 
     
     $user_name=$_POST['name'];
     $email=$_POST['email'];
     $message=$_POST['message'];
    
 
     try{
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
         $stmt = "insert into contact_us values('1',' ','$user_name','$email','$message');";
         $conn->exec($stmt);
 
         echo "<script>window.alert('Message sending Is Successfull');</script>";
         echo "<script>window.location.assign('index.php');</script>";
    
     }
     catch(PDOException $ex){
    
         echo "<script>showalert('error');</script>";
    
    }

?>