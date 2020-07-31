<?php 
//session_start();

use PHPMailer\PHPMailer\PHPMailer;
$serveraddr = "localhost";
$username = "root";
$password = "";
$dbname = "ksn";

if(isset($_POST['forgot'])){
    $forgot=$_POST['forgot'];

}
if(!empty($forgot)){
     try{
        $con = new PDO("mysql:host=localhost;dbname=ksn", 'root', '');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = "select * from users where user_email='$forgot'";
        $pdostmt = $con->query($stmt);
        $info = $pdostmt->fetchAll(PDO::FETCH_NUM);

        if($pdostmt->rowcount()==1){
            $name="Password Reset";
            $email=$forgot;//fogotten email id keeping here
            $subject="Password Reset Confirmation From KSN";
            $random_number=rand(1000, 9000);//php random # generation
            $body="Your Temporary Password Is: .$random_number.";


            $conn = new PDO("mysql:host=$serveraddr;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = "UPDATE users SET user_password='$random_number' WHERE user_email='$forgot'";
            $conn->exec($stmt);


            require_once "PHPMailer/PHPMailer.php";
            require_once "PHPMailer/SMTP.php";
            require_once "PHPMailer/Exception.php";

            $mail = new PHPMailer();//object creation

            //SMTP Settings
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "ksnwork8@gmail.com";
            $mail->Password = 'Ksn123456';
            $mail->Port = 465; //587 for TLS
            $mail->SMTPSecure = "ssl"; //tls

            //Email Settings
            $mail->isHTML(true);
            $mail->setFrom($email, $name);
            $mail->addAddress($forgot);
            $mail->Subject = $subject;
            $mail->Body = $body;

            if ($mail->send()) {
                $status = "success";
                $response = "Email is sent!";
            } else {
                $status = "failed";
                $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
            }

            exit(json_encode(array("status" => $status, "response" => $response)));
            echo "<script>window.alert('Your Password Reset Successfully, Check Your Email');</script>";
        }
        else{
            echo "<script>window.alert('Your Password Reset Successfully, Check Your Email');</script>";
            echo "<script>window.location.assign('login.php');</script>";
        }

     }
     catch(PDOException $ex){
        echo "<script>window.location.assign('login.php?status=dberror');</script>";

     }

}
?>