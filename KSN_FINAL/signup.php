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
  <link rel="stylesheet" href="css/signup_style.css">
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
            <a class="nav-link" href="index.php">Home</a>
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





<!--starting of signup section-->

   <section>
        <div class="signup">
            <img src="sign.jpg" alt="not found" style="width:1350px;">

        </div>

   </section>






    <section class="create_form">
        <div class="nupa">
            <div class="row ">
                    <div class="col-lg-12">
                        <div class="title text-center">
                            <h3 class="font-weight-bold about_header m-5 " >Create an Account<span class="text-custom"></span></h3>
                            
                        </div>
                    </div>
            </div>
   
         <div class=" con">
        
           <form action="post_to_db.php" method="POST">

          
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Password" name="pwd">
                </div>
                <div class="form-group">
                    <label for="user">User Type</label>
                   
                   <select id="user_type" name="user_type">
                     <option value="Learner">Learner</option>
                     <option value="Expert">Expert</option>
                   </select>

                </div>
                <button type="submit" style="width:200px;" name="expert" class="btn btn-success">Sign Up</button>
                

       
            </form>
         </div>
        
        </div>
    <section>

<!--ending of signup section-->


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


</body>
</html>
