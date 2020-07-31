<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";                    
$dbname = "ksn";


$user_id=$_SESSION['user_id'];
  

 try{
        $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt ="select * from event_creation where user_id='$user_id';";
        $pdostmt=$con->query($stmt);
        $table = $pdostmt->fetchAll(PDO::FETCH_NUM);
        
        $response="<table border='0' width='100%'>";
        foreach($table as $row){

             $response .="<td><br></td>";
             $response .="<tr>";
             $response .="<td>Event Name:</td><td>".$row[2]."</td>";  
             $response .="</tr>";


             $response .="<tr>";
             $response .="<td>Event Time:</td><td>".$row[3]."</td>";  
             $response .="</tr>";


             $response .="<tr>";
             $response .="<td>Event Date:</td><td>".$row[4]."</td>";  
             $response .="</tr>";

             
             $response .="<tr>";
             $response .="<td>Event Topics:</td><td>".$row[5]."</td>"; 
             //$response .="<td style='color:blue';>Event Topics:</td><td>".$row[5]."</td>";  
             $response .="</tr>";

        }
        //$response .="<hr>";
        $response .="</table>";
        
        echo $response;

       // echo "<script>window.alert('User Sign Up Is Successfull');</script>";
        //echo "<script>window.location.assign('login.php');</script>";
   
    }
    catch(PDOException $ex){
   
        echo "$ex";
   
 }



?>