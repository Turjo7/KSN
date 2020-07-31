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


<!--starting of partices effect-->
<section id="home">
    <div id="particles-js" >

            <script type="text/javascript" src ="js/particles.js"></script>
            <script type="text/javascript" src ="js/particles.min.js"></script>
            <span class="" >
     
                <a href="signup.php" target="_blank" class="btn btn-danger p-3 w-5" style=" transform:translate(550px,300px);width:120px;">Sign Up</a>
                <a href="login.php" target="_blank" class="btn btn-warning p-3" style=" transform:translate(570px,300px);width:120px;">Log In</a>
            </span>
    </div>
</section>
<!--ending of partices effect-->

<!--starting of about us section-->
<div id="about">
        <div class="row">
                    <div class="col-lg-12">
                        <div class="title text-center pt-5 mb-5">
                            <h3 class="font-weight-bold about_header">About <span class="text-custom"></span></h3>
                        </div>
                    </div>
        </div>
    <div class="container pt-5 pb-5">
        <h4 style="margin-top:70px" class="pb-3">Who We Are</h4>
        <div style="font-size:14px">
            <p>High potential students in Bangladeshi Universities</p>
            <p>aspire to move to the US to pursue higher degrees.</p>
            <p>Lack of reliable information,guidance and training </p>
            <p>makes it difficult for them to get into good universities. </p>
            <p>Professionals who have made it in the US are motivated to share </p>
            <p>their valuable experience, to help them succeed in the US.</p>

            <p> Provide a platform to connect Bangladeshi students with </p>
            <p>experts in the US for guidance to help them achieve their goals.</p>
        </div>
            <span>
            <img style="transform:translate(550px,-370px);width:650px;height:400px"  src="about.jpg" alt="not found">
            </span>
    </div>
    
</div>
<!--ending of about us section-->




<!--starting of experts section-->

<section class="experts" id="experts">
<div class="n1">
        <div class="row">
                    <div class="col-lg-12">
                        <div class="title text-center mb-5">
                            <h3 class="font-weight-bold about_header">Experts <span class="text-custom"></span></h3>
                        </div>
                    </div>
        </div>



    <span class="container ">
    <div class="row ml-1">
        <div class="col-lg-4 col-sm-6 col-12 main-section text-center">
          <div class="">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12 profile-header"></div>
                </div>
                <div class="row user-detail">
                    <div class="col-lg-12 col-sm-12 col-12">
                        <img src="man1.png" class="rounded-circle img-thumbnail">
                        <!--<h5>Dr. Mofizur Rahman</h5>-->

<!--starting expert_name showing using api-->
<?php
            $googleApiUrl = "http://localhost/expert_api/events/read.php";

            $ch_1 = curl_init(); // Initialize a cURL session

            curl_setopt($ch_1, CURLOPT_HEADER, 0); 
            curl_setopt($ch_1, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch_1, CURLOPT_URL, $googleApiUrl);
            curl_setopt($ch_1, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch_1, CURLOPT_VERBOSE, 0);
            curl_setopt($ch_1, CURLOPT_SSL_VERIFYPEER, false);
          /*
            curl_setopt-> Set an option for a cURL transfer
            CURLOPT_HEADER-> Pass headers to the data stream
            CURLOPT_RETURNTRANSFER-> If you set CURLOPT_RETURNTRANSFER to true or 1 then the return value from curl_exec will be the actual result from the successful operation
            CURLOPT_URL-> Provide the URL to use in the request
            CURLOPT_FOLLOWLOCATION-> Follow HTTP 3xx redirects
            CURLOPT_VERBOSE-> Set verbose mode on/off
            CURLOPT_SSL_VERIFYPEER-> Verify the peer's SSL certificate
           */


            $response = curl_exec($ch_1); // curl_exec => Execute the given cURL session.

            curl_close($ch_1);
            $data = json_decode($response);  // json_decode => Takes a JSON encoded string and converts it into a PHP variable.
            //print_r($data);

            echo '<h5>'.$data[0]->user_name.'</h5>'
         ?>
<!--ending expert_name showing using api-->


                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Dhanmondi,Dhaka.</p>

                        <hr>
                        <a href="#" class="btn btn-success btn-sm">Follow</a>
                        <a href="#" class="btn btn-info btn-sm">Send Messege</a>

                        <hr>
<!--starting expert_bio showing using api-->
<?php
            $googleApiUrl = "http://localhost/expert_api/events/read.php";

            $ch_1 = curl_init(); // Initialize a cURL session

            curl_setopt($ch_1, CURLOPT_HEADER, 0); 
            curl_setopt($ch_1, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch_1, CURLOPT_URL, $googleApiUrl);
            curl_setopt($ch_1, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch_1, CURLOPT_VERBOSE, 0);
            curl_setopt($ch_1, CURLOPT_SSL_VERIFYPEER, false);
          /*
            curl_setopt-> Set an option for a cURL transfer
            CURLOPT_HEADER-> Pass headers to the data stream
            CURLOPT_RETURNTRANSFER-> If you set CURLOPT_RETURNTRANSFER to true or 1 then the return value from curl_exec will be the actual result from the successful operation
            CURLOPT_URL-> Provide the URL to use in the request
            CURLOPT_FOLLOWLOCATION-> Follow HTTP 3xx redirects
            CURLOPT_VERBOSE-> Set verbose mode on/off
            CURLOPT_SSL_VERIFYPEER-> Verify the peer's SSL certificate
           */


            $response = curl_exec($ch_1); // curl_exec => Execute the given cURL session.

            curl_close($ch_1);
            $data = json_decode($response);  // json_decode => Takes a JSON encoded string and converts it into a PHP variable.
            //print_r($data);

            echo '<span>'.$data[0]->user_short_bio.'</span>'
         ?>
<!--ending expert_bio showing using api-->

                        <!--<span>Failure is the piller of success.</span>-->
                    </div>
                </div>
                <div class="row user-social-detail">
                    <div class="col-lg-12 col-sm-12 col-12">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
           </div>
      </div>
    </div>
</span>





<span class=" ">
 <div class="nurul">
      <div class="col-lg-4 col-sm-6 col-12 main-section text-center">
          <div class="">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12 profile-header"></div>
                </div>
                <div class="row user-detail">
                    <div class="col-lg-12 col-sm-12 col-12">
                        <img src="man1.png" class="rounded-circle img-thumbnail">
                        <!--<h5>Dr. Nurul Huda</h5>-->
<!--starting expert_name showing using api-->
<?php
            $googleApiUrl = "http://localhost/expert_api/events/read.php";

            $ch_1 = curl_init(); // Initialize a cURL session

            curl_setopt($ch_1, CURLOPT_HEADER, 0); 
            curl_setopt($ch_1, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch_1, CURLOPT_URL, $googleApiUrl);
            curl_setopt($ch_1, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch_1, CURLOPT_VERBOSE, 0);
            curl_setopt($ch_1, CURLOPT_SSL_VERIFYPEER, false);
          /*
            curl_setopt-> Set an option for a cURL transfer
            CURLOPT_HEADER-> Pass headers to the data stream
            CURLOPT_RETURNTRANSFER-> If you set CURLOPT_RETURNTRANSFER to true or 1 then the return value from curl_exec will be the actual result from the successful operation
            CURLOPT_URL-> Provide the URL to use in the request
            CURLOPT_FOLLOWLOCATION-> Follow HTTP 3xx redirects
            CURLOPT_VERBOSE-> Set verbose mode on/off
            CURLOPT_SSL_VERIFYPEER-> Verify the peer's SSL certificate
           */


            $response = curl_exec($ch_1); // curl_exec => Execute the given cURL session.

            curl_close($ch_1);
            $data = json_decode($response);  // json_decode => Takes a JSON encoded string and converts it into a PHP variable.
            //print_r($data);

            echo '<h5>'.$data[1]->user_name.'</h5>'
         ?>
<!--ending expert_name showing using api-->
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>Gulshan,Dhaka.</p>

                        <hr>
                        <a href="#" class="btn btn-success btn-sm">Follow</a>
                        <a href="#" class="btn btn-info btn-sm">Send Messege</a>

                        <hr>
<!--starting expert_bio showing using api-->
<?php
            $googleApiUrl = "http://localhost/expert_api/events/read.php";

            $ch_1 = curl_init(); // Initialize a cURL session

            curl_setopt($ch_1, CURLOPT_HEADER, 0); 
            curl_setopt($ch_1, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch_1, CURLOPT_URL, $googleApiUrl);
            curl_setopt($ch_1, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch_1, CURLOPT_VERBOSE, 0);
            curl_setopt($ch_1, CURLOPT_SSL_VERIFYPEER, false);
          /*
            curl_setopt-> Set an option for a cURL transfer
            CURLOPT_HEADER-> Pass headers to the data stream
            CURLOPT_RETURNTRANSFER-> If you set CURLOPT_RETURNTRANSFER to true or 1 then the return value from curl_exec will be the actual result from the successful operation
            CURLOPT_URL-> Provide the URL to use in the request
            CURLOPT_FOLLOWLOCATION-> Follow HTTP 3xx redirects
            CURLOPT_VERBOSE-> Set verbose mode on/off
            CURLOPT_SSL_VERIFYPEER-> Verify the peer's SSL certificate
           */


            $response = curl_exec($ch_1); // curl_exec => Execute the given cURL session.

            curl_close($ch_1);
            $data = json_decode($response);  // json_decode => Takes a JSON encoded string and converts it into a PHP variable.
            //print_r($data);

            echo '<span>'.$data[1]->user_short_bio.'</span>'
         ?>
<!--ending expert_bio showing using api-->

                        <!--<span>Education is the backbone of a nation.</span>-->
                    </div>
                </div>
                <div class="row user-social-detail">
                    <div class="col-lg-12 col-sm-12 col-12">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
           </div>
      </div>
    </div>
</span>





<span class="  ">
 <div class="kaykobad">
      <div class="col-lg-4 col-sm-6 col-12 main-section text-center">
          <div class="">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12 profile-header"></div>
                </div>
                <div class="row user-detail">
                    <div class="col-lg-12 col-sm-12 col-12">
                        <img src="man1.png" class="rounded-circle img-thumbnail">
                       <!-- <h5>Dr. Kaykobad</h5>-->
 <!--starting expert_name showing using api-->
<?php
            $googleApiUrl = "http://localhost/expert_api/events/read.php";

            $ch_1 = curl_init(); // Initialize a cURL session

            curl_setopt($ch_1, CURLOPT_HEADER, 0); 
            curl_setopt($ch_1, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch_1, CURLOPT_URL, $googleApiUrl);
            curl_setopt($ch_1, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch_1, CURLOPT_VERBOSE, 0);
            curl_setopt($ch_1, CURLOPT_SSL_VERIFYPEER, false);
          /*
            curl_setopt-> Set an option for a cURL transfer
            CURLOPT_HEADER-> Pass headers to the data stream
            CURLOPT_RETURNTRANSFER-> If you set CURLOPT_RETURNTRANSFER to true or 1 then the return value from curl_exec will be the actual result from the successful operation
            CURLOPT_URL-> Provide the URL to use in the request
            CURLOPT_FOLLOWLOCATION-> Follow HTTP 3xx redirects
            CURLOPT_VERBOSE-> Set verbose mode on/off
            CURLOPT_SSL_VERIFYPEER-> Verify the peer's SSL certificate
           */


            $response = curl_exec($ch_1); // curl_exec => Execute the given cURL session.

            curl_close($ch_1);
            $data = json_decode($response);  // json_decode => Takes a JSON encoded string and converts it into a PHP variable.
            //print_r($data);

            echo '<h5>'.$data[2]->user_name.'</h5>'
         ?>
<!--ending expert_name showing using api-->
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Banani,Dhaka.</p>

                        <hr>
                        <a href="#" class="btn btn-success btn-sm">Follow</a>
                        <a href="#" class="btn btn-info btn-sm">Send Messege</a>

                        <hr>
                        <!--starting expert_bio showing using api-->
<?php
            $googleApiUrl = "http://localhost/expert_api/events/read.php";

            $ch_1 = curl_init(); // Initialize a cURL session

            curl_setopt($ch_1, CURLOPT_HEADER, 0); 
            curl_setopt($ch_1, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch_1, CURLOPT_URL, $googleApiUrl);
            curl_setopt($ch_1, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch_1, CURLOPT_VERBOSE, 0);
            curl_setopt($ch_1, CURLOPT_SSL_VERIFYPEER, false);
          /*
            curl_setopt-> Set an option for a cURL transfer
            CURLOPT_HEADER-> Pass headers to the data stream
            CURLOPT_RETURNTRANSFER-> If you set CURLOPT_RETURNTRANSFER to true or 1 then the return value from curl_exec will be the actual result from the successful operation
            CURLOPT_URL-> Provide the URL to use in the request
            CURLOPT_FOLLOWLOCATION-> Follow HTTP 3xx redirects
            CURLOPT_VERBOSE-> Set verbose mode on/off
            CURLOPT_SSL_VERIFYPEER-> Verify the peer's SSL certificate
           */


            $response = curl_exec($ch_1); // curl_exec => Execute the given cURL session.

            curl_close($ch_1);
            $data = json_decode($response);  // json_decode => Takes a JSON encoded string and converts it into a PHP variable.
            //print_r($data);

            echo '<span>'.$data[2]->user_short_bio.'</span>'
         ?>
<!--ending expert_bio showing using api-->

                        <!--<span>Learning is fun.</span>-->
                    </div>
                </div>
                <div class="row user-social-detail">
                    <div class="col-lg-12 col-sm-12 col-12">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
           </div>
      </div>
    </div>
</span>
</div>
<section>
<!--ending of experts section-->


<!--starting of contact us section-->
<section >
<div class="nupa" id="contact">
            <div class="row ">
                    <div class="col-lg-12">
                        <div class="title text-center mb-5">
                            <h3 class="font-weight-bold about_header mt-5">Contact Us <span class="text-custom"></span></h3>
                            <p>Feel free to contact with us. Send us your queries.</p>
                        </div>
                    </div>
          </div>
   
        <div class=" con">
        
        <form action="contact.php" method="POST">

          
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
            </div>
            <div class="form-group">
                <label for="pwd">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
            </div>
            <div class="form-group">
                <label for="comment">Message</label>
                <textarea class="form-control" rows="5" id="comment" name="message"></textarea>
           </div>
            <div class="form-group form-check">
            </div>
            <button type="submit" style="width:200px;" class="btn btn-success">Send</button>

       
        </form>
        </div>
        <img src="contact.jpg" style="width:700px;height:400px;margin-left:40px;margin-bottom:35px;margin-top:15px;" alt="not found">
</div>
<section>

<!--ending of contact us section-->


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




<!--starting of partices javascript-->
<script>
    
    particlesJS('particles-js',
    
    {
        "particles": {
        "number": {
            "value": 100,
            "density": {
            "enable": true,
            "value_area": 800
            }
        },
        "color": {
            "value": "#fff"
        },
        "shape": {
            "type": "polygon",
            "stroke": {
            "width": 0,
            "color": "#000000"
            },
            "polygon": {
            "nb_sides": 5
            },
            "image": {
            "src": "img/github.svg",
            "width": 100,
            "height": 100
            }
        },
        "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
            "enable": false,
            "speed": 1,
            "opacity_min": 0.1,
            "sync": false
            }
        },
        "size": {
            "value": 4,
            "random": true,
            "anim": {
            "enable": false,
            "speed": 40,
            "size_min": 0.1,
            "sync": false
            }
        },
        "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
        },
        "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "attract": {
            "enable": false,
            "rotateX": 600,
            "rotateY": 1200
            }
        }
        },
        "interactivity": {
        "detect_on": "window",
        "events": {
            "onhover": {
            "enable": false,
            "mode": "repulse"
            },
            "onclick": {
            "enable": true,
            "mode": "push"
            },
            "resize": true
        },
        "modes": {
            "grab": {
            "distance": 400,
            "line_linked": {
                "opacity": 1
            }
            },
            "bubble": {
            "distance": 400,
            "size": 40,
            "duration": 2,
            "opacity": 8,
            "speed": 3
            },
            "repulse": {
            "distance": 200
            },
            "push": {
            "particles_nb": 4
            },
            "remove": {
            "particles_nb": 2
            }
        }
        },
        "retina_detect": true,
        "config_demo": {
        "hide_card": false,
        "background_color": "#b61924",
        "background_image": "",
        "background_position": "50% 50%",
        "background_repeat": "no-repeat",
        "background_size": "cover"
        }
    }

    );

</script>
<!--ending of partices javascript-->
</body>
</html>
