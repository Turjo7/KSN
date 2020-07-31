
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
  <script src="https://www.google.com/recaptcha/api.js?render=6LeMfP8UAAAAAPmMA8tzGiZnmhe9Ek2GDQUtkTXP"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login_style.css">
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
   <nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top">  
      <div class="container">

        <a class="navbar-brand logo text-uppercase" href="index.php"><!--logo-->
                        KSN
                    </a>
        <ul class="navbar-nav ml-auto navbar-center">
            <li class="nav-item acive">
            <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#experts">Experts</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Us</a>
            </li>
        </ul>
       <div> 
   </nav>

<!--ending of header-->





<!--starting of signin section-->
<section>
        <div class="login">
            <img src="login.jpg" alt="not found" style="width:1350px;">

        </div>

   </section>



   <div class="balance">
   <div class="box">
    <div class="header">
	<!--h1 class="header-text">Log-in</h1-->
	<h2 class="active" style="text-align: center;"> Sign In </h2>
          
      <i> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSoW8SSdxTzsANljINSq1tTLcpl83wRt-pprc55Z-_pyomIvxpA" id="icon" alt="User Icon" style="padding-left:85px;"></i>
      
    </div>

    <form class="login-Form" action="validate.php" method="POST">

      <div class="email-input">
        <input type="email" name="email" value="" placeholder="abe@gmail.com" style="text-align: center">
      </div>

      <div class="password-input">
        <input type="password" name="password" value="" placeholder="password" style="text-align: center">
      </div>

      <div class="login-btn">
        <button type="submit" name="button">Log In</button>
      </div>

    </form>
	   <script>
      function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6LeMfP8UAAAAAPmMA8tzGiZnmhe9Ek2GDQUtkTXP', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
          });
        });
      }
  </script>

    <div class="choose">
      
      <p>
       <a class="underlineHover" href="forgot.php">Forgot Password?</a> | <a class="underlineHover" href="signup.php">Sign Up</a>
      </p>
    </div>


  </div>
  </div>

<!--ending of signin section-->


<!--starting of footer section-->
<section>
        <div class="footer" style="margin-top:202px;">
        <img src="footer.png" class="footer_image"> 

            
            <div class="social-icons">
                <a href="#"><img src="fb.png" style="width:66px;height:60px;"></a>
                <a href="#"><img src="youtube.png"  style="width:70px;height:67px;"></a>
                <a href="#"><img src="ld.png"  style="width:70px;height:67px;"></a>
		
		    </div>
	           
	    </div>
<section>

<!--ending of footer section-->
<?php
   $status="";
   if(isset($_GET['status'])){
     $status=$_GET['status'];

     if($status=='invalid'){
       ?>
       <script>window.alert('invalid username or password');</script>
       <?php
     }
     else if($status=='dberror'){
       ?>
       <script>window.alert('database connection error');</script>
       <?php
     }
     else if($status=='logout'){
       ?>
       <script>window.alert('successfully logged out');</script>
       <?php
     }
   }


?>

</body>
</html>
