<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<html>
	<head>
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>MasK</title>
    <link rel="icon" class="responsive-img circle face z-depth-10" href="Pics/Mask.jpg" type="image/jpg" sizes="32x32">
    
   </head>
   
    <body  background="orange lighten-4">
	        <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
      <script type="text/javascript" src="js/script.js"></script>
      <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper amber darken-1">
			
			<div class="show-on-medium-and-up name right"> <span class="white-text flow-text text-lighten-1 center">
				<h4><br> <b class= "black-text">Mask</b> 
				<br> Welcome :- </h4>
			</span></div>
			
			<ul class="right ">
				<li><a class="waves-effect waves-yellow modal-trigger" href="feed.php">Home</a></li>  
				<li><a class="waves-effect waves-yellow modal-trigger" href="Home.html">Sign-out</a></li>
			</ul>
			<div class="left-align" id="me">
			<a href ="HomePage.html"><img src="Pics/Mask.jpg" id="meFace"alt="me" class="responsive-img circle face z-depth-10"/></div></a>
				</div>
	</nav>
<div class="row">
            <div class="col l3 m5 grey lighten-2 sideBar z-depth-2 hide-on-small-only">
            <div class="nameBox left-align">
                                <h5 class="black-text"></h5>

            </div>
             <div class="center-align" id="me">
             <img src="Pics/Mask.jpg" id="meFace"alt="me" class="responsive-img circle face z-depth-10"/>
             <h4>Notifications</h4>

           </div>
           <div class= "left-align">
                           <br>

           <h6><span class="black-text text-accent-2">Your most recent post now has   <?php echo $likes?> 4  likes.</span></h6>
           <h6><span class="black-text text-accent-2">You have   <?php echo $followers?> 12  followers.</span></h6>

         </div>
           <div class = "center-align">



           </div>

        </div>
		
           
           
           </div>   
			   
			   
	<!---Profile-->
	  <div class="col l9 m7 s0 right">
          
        <div class="section z-depth-2  lighten-1">
          <div class="container1 lighten-1">
			  <ul class="tabs tab-profile z-depth-1  orange">
                      <li class="tab col s3"><a class="black-text waves-effect waves-light active" href="#UpdateStatus"> Update Status</a>
                      </li>
                      <li class="tab col s3"><a class="black-text waves-effect waves-light" href="#AddPhotos"> Add Photos</a>
                      </li>
                      <li class="tab col s3"><a class="black-text waves-effect waves-light" href="#AddVideo"> Add Video</a>
                      </li>                      
                    </ul>
                     <div id="UpdateStatus" class="tab-content col s12  grey lighten-4">
                      <div class="row">
                        <div class="col s2">
                          <img src="Pics/Mask.jpg" alt="" class="circle responsive-img center face1">
                        </div>
                        <div class="input-field col s10">
							<form action="status.php" id="status" method="post">
                          <textarea name="post" id="textarea" row="2" class="materialize-textarea"></textarea>
                          <label for="textarea" class="">What's on your mind?</label>
							
                        </div>
                      </div>
                     <div class="row">
                        <div class="col s12 m6 share-icons">
                          <a href="#"><i class="mdi-image-camera-alt"></i></a>
                          <a href="#"><i class="mdi-action-account-circle"></i></a>
                          <a href="#"><i class="mdi-hardware-keyboard-alt"></i></a>
                          <a href="#"><i class="mdi-communication-location-on"></i></a>
                        </div>
                        <div class="col s12 m6 right-align">
                           <!-- Dropdown Trigger -->
                            <button type="submit" name="submit" class="btn orange right waves-effect waves-light white-text">Post</button>
                            </form>
                        </div>
                      </div>
                      </div>
                    
			   <!-- AddPhotos -->
                    <div id="AddPhotos" class="tab-content col s12 grey lighten-4 ">
                      <div class="row">
                        <div class="col s2">
                          <img src="Pics/Mask.jpg" alt="" class="circle responsive-img face1">
                        </div>
                        <div class="input-field col s10">
                          <textarea id="textarea" row="2" class="materialize-textarea"></textarea>
                          <label for="textarea" class="">Share your favorites photos!</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col s12 m6 share-icons">
                          <a href="#"><i class="mdi-image-camera-alt"></i></a>
                          <a href="#"><i class="mdi-action-account-circle"></i></a>
                          <a href="#"><i class="mdi-hardware-keyboard-alt"></i></a>
                          <a href="#"><i class="mdi-communication-location-on"></i></a>
                        </div>
                        <div class="col s12 m6 right-align">
                           <!-- Dropdown Trigger -->
                          

                            <a class="waves-effect waves-light btn orange  right-align">Upload</a>
                        </div>
                      </div>
                    </div>
                   
                    
                   <!-- AddVideos -->
                    <div id="AddVideo" class="tab-content col s12 grey lighten-4 ">
                      <div class="row">
                        <div class="col s2">
                          <img src="Pics/Mask.jpg" alt="" class="circle responsive-img face1">
                        </div>
                        <div class="input-field col s10">
                          <textarea id="textarea" row="2" class="materialize-textarea"></textarea>
                          <label for="textarea" class="">Share your favorites videos!</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col s12 m6 share-icons">
                          <a href="#"><i class="mdi-image-camera-alt"></i></a>
                          <a href="#"><i class="mdi-action-account-circle"></i></a>
                          <a href="#"><i class="mdi-hardware-keyboard-alt"></i></a>
                          <a href="#"><i class="mdi-communication-location-on"></i></a>
                        </div>
                        <div class="col s12 m6 right-align">
                         

                            <a class="waves-effect waves-light btn orange"><i class="mdi-maps-rate-review left"></i>Upload</a>
                        </div>
                      </div>
                    </div>
                    </div>
			  </div>
			  </div>
					</div>
                <script type="text/javascript">
    $(document).ready(function(){
      $('.parallax').parallax();
    });
    </script>
        
                

</html>