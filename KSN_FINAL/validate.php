<?php
   session_start();
   if(isset($_POST['email']) && isset($_POST['password'])){
       $email=$_POST['email'];
       $password=$_POST['password'];
   }
   if(!empty($email) && !empty($password)){
       try{
        $con=new PDO("mysql:host=localhost;dbname=ksn",'root','');
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $stmt="select * from users where user_email='$email' && user_password='$password'";
        $pdostmt=$con->query($stmt);
        $info=$pdostmt->fetchAll(PDO::FETCH_NUM);

        if($pdostmt->rowcount()==1){
          $_SESSION['email']=$email;
          $_SESSION['role']=$info[0][2];

          $_SESSION['user_id']=$info[0][0];
          $user_id=$_SESSION['user_id'];


          $role=$_SESSION['role'];
          if($role=='Expert'){
             echo "<script>window.location.assign('expert.php');</script>";
          }
          else{
            echo "<script>window.location.assign('learner.php');</script>";
          }
        }
        else{
            echo "<script>window.location.assign('login.php?status=invalid');</script>";
        }
       }
      catch(PDOException $ex){
          echo "<script>window.location.assign('login.php?status=dberror');</script>";
      }
       
   }







?>