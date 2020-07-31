<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";                    
$dbname = "ksn";


$val=$_POST['val'];
  

 try{
        $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt ="select * from event_creation where event_topics LIKE '$val%'";
        $pdostmt=$con->query($stmt);
        $table = $pdostmt->fetchAll(PDO::FETCH_NUM);
        
        $response="<table border='0' width='100%'>";
        foreach($table as $row){

            /* $response .="<td><br></td>";           //normal row akare show
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
             $response .="</tr>";*/

             $response .= "<div class='card'>"; //profile card design types showing
             $response .= "<div class='card-image'>";
             $response .= "<img src='seminar1.jpg' alt='back banner'>";
             $response .= "</div>";
             $response .= "<div class='profile-image'>";
             $response .= "<img src='seminar2.jpg' alt='Front pic'>";
             $response .= "</div>";
             $response .= "<div class='card-content'>";
             $response .= " <h3>  $row[2]  </h3>";
             $response .= "<p>";
             $response .= "<p style='text-align:center;font-size: 15px;'>  $row[5]  </p>";
             $response .= "</p>";
             $response .= "</div>";
             $response .= "<div class='buttons'>";
             $response .= "<a href='#' class='btn-gradient red small'>Confirm</a>";
             $response .= "<a href='#' class='btn-gradient red small' style='margin-left:2px;'>Ignore</a>";
             $response .= "</div>";
             $response .= "</div>";

        }
        
        //$response .="</table>";
        $response .="</div>";
        
        echo $response;

       // echo "<script>window.alert('User Sign Up Is Successfull');</script>";
        //echo "<script>window.location.assign('login.php');</script>";
   
    }
    catch(PDOException $ex){
   
        echo "$ex";
   
 }



?>