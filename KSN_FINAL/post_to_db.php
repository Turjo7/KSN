<?php 

$servername = "localhost";
$username = "root";
$password = "";                    
$dbname = "ksn";
    

    
    $user_name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['pwd'];
    $user_type=$_POST['user_type'];

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = "insert into users (user_id,admin_id,user_role,user_name,user_email,user_password) 
                values(' ','1','$user_type','$user_name','$email','$pass');";
        $conn->exec($stmt);

        echo "<script>window.alert('User Sign Up Is Successfull');</script>";
        echo "<script>window.location.assign('login.php');</script>";
   
    }catch(PDOException $ex){
   
        echo "<script>showalert('sign up error');</script>";
   
 }

?>