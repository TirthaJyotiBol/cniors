<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp_cniors</title>
    <style>
   <?php include 'style.css' ?>
    </style>
     <?php include 'links.php'?>
</head>
<body>

                                                <!-- navigation bar  -->
<div class="background">
<div class="navigation-bar">
<p class="navitems" id="awesomelogo"><i id="fa" class="fas fa-head-side-virus"3x></i></p> 
<p class="navitems" title="Homepage" id="home"> <a  class="navitem" href="home.php">Home</a></p><hr class="lineinsidenavigation">
<p class="navitems"> <a  class="navitem" href="papers.php">Papers</a></p><hr class="lineinsidenavigation">
<p class="navitems"> <a  class="navitem" href="roadmaps.php">Roadmaps</a></p><hr class="lineinsidenavigation">
<p class="navitems"> <a  class="navitem" href="aboutus.php">AboutUs</a></p><hr class="lineinsidenavigation">
<p class="navitems"> <a class="navitem"  href="consult.php">Consult</a></p><hr class="lineinsidenavigation">
<p class="navitems"> <a id="login-nav" class="navitem"  href="login.php">Login</a></p>
<p class="navitems"> <p id="clock">  </p>  </p>
</div>
<hr color="black" height=1cm >



                                                        <!-- SignUp-Form -->

<i id="registration-icon" class="fas fa-user"></i>
<form action="" method="post" class="signupform">
<div class="flexboxonesignup">
<p id="image-in-registration-form" > <img id="imageinregistrationform" src="https://cdn.pixabay.com/photo/2014/05/02/21/50/laptop-336378_960_720.jpg" alt="image"> </p>
</div>
<hr id="horizon-in-between-flex">

<div class="flexboxtwosignup">
<h2 id="signupheading" >SIGN UP</h2> <br>
Name <input id="name" type="text" name="name" class="registrationdetails" placeholder="Enter your Name" ><br>
Branch <input id="branch" type="text" name="branch" class="registrationdetails" placeholder="Enter your Branch" ><br>
Semester <input id="semester" type="text" name="semester" class="registrationdetails" placeholder="Enter your Semester" ><br>
PhoneNumber <input id="number" type="text" name="PhoneNumber" class="registrationdetails" placeholder="Enter your Number" ><br>
Email <input type="mail" id="mail" name="email" class="registrationdetails" placeholder="Enter your Mail" ><br>
Password <input type="password" id="password" name="password" class="registrationdetails" placeholder="Create your Password" ><br>
Confirm Password <input id="confirmpassword" type="password" name="confirm-password" class="registrationdetails" placeholder="Confirm Password" ><br>
<input type="submit" id="register" class="registrationdetails" placeholder="REGISTER" name="submit">
</div>
</form>

                                                        
                                                        <!-- footer -->

<section class="footer-signup">
<div class="contacts">
    <p id="contactus" class="footeroneitems">ContactUs</p> <br>
    <p id="email" class="contactusitems"><i id="emailicon" class="fas fa-envelope"></i> <a class="contactwriting"href="tjstyles555@gmail.com">Email</a></p> 
    <p id="github" class="contactusitems"><i id="githubicon" class="fab fa-github"></i> <a class="contactwriting"href="tjstyles555@gmail.com">Git-Hub</a></p>
    <p id="discord" class="contactusitems"> <i id="discordicon" class="fab fa-discord"></i><a class="contactwriting"href="tjstyles555@gmail.com">Discord-Server </a></p>
</div>  
<div class="about"> 
    <p class="aboutus" ><a id="aboutus" href="aboutus.php">AboutUs</a></p> <br>
    <p class="detailsaboutus">CNIORS is a student's coterie that helps students in many ways. <br> TO KNOW MORE SEE THE <a id="detailaboutus" href="aboutus.php">AboutUs section</a>   </p>
</div>
<div class="signup">
    <p id="signup">SignUp</p> <br>
    <p id="signupdescription">you sign into our page to get the best service  <p id="sign"><i id="idofloginicon" class="fas fa-sign-in-alt"></i><a id="signupphp" href="login.php">SIGN UP</a></p>  </p>
</div>

</section>

<section class="copyright">
    <p id=>@_all rights reserved under Cniors23@gmail.com </p>
</div>
    </div>
</body>
</html>