<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
 <?php include "style.css"?>
    </style>
 <?php include 'links.php'?>

</head>
<body>
                                             <!-- Navigation Bar -->
<div class="navigation-bar">
<p class="navitems" id="awesomelogo"><i id="fa" class="fas fa-head-side-virus"3x></i></p> 
<p class="navitems" id="home"> <a  class="navitem" href="home.php">Home</a></p><hr class="lineinsidenavigation">
<p class="navitems"> <a  class="navitem" href="papers.php">Papers</a></p><hr class="lineinsidenavigation">
<p class="navitems"> <a  class="navitem" href="roadmaps.php">Roadmaps</a></p><hr class="lineinsidenavigation">
<p class="navitems"> <a  class="navitem" href="aboutus.php">AboutUs</a></p><hr class="lineinsidenavigation">
<p class="navitems"> <a class="navitem"  href="consult.php">Consult</a></p><hr class="lineinsidenavigation">
<p class="navitems"> <a id="login-nav" class="navitem"  href="login.php">Login</a></p>
</div>
<hr color="black" height=1cm >
<div class="background">
<i id="loginpagesymbol" class="fas fa-users"></i>


 

                                                <!-- form -->

 <div class="loginform"> 
<p id="loginheading"> LOGIN FORM  </p>
<hr id="loginhorizantalline">
<form id="loginform" action="" method="post">
<i id="loginemailicon" class="fas fa-user-alt"></i> E-mail <input id="loginmail" type="mail" name="email" placeholder="enter registered email" > <br>
<i  id="loginpasswordicon" class="fas fa-lock"></i> Password <input id="loginpassword" type="password" name="password" placeholder="enter your password"><br>
<input class="button" id="loginsubmit" type="submit" placeholder="LOGIN"></input>
<p id="havenotsigned">Not Registered ?<a id="registerlogin" href="signup.php"> Register</a> </p>

<div class="registerplatforms">
<p id="otherplatforms"> Register through other platforms </p>
<hr id="lineunderplatforms">
<i id="instagram" class="fab fa-instagram"></i> Instagram <br>
<i id="facebook" class="fab fa-facebook"></i> Facebook <br>
<i id="google" class="fab fa-google"></i> Google 
</div>

</form>
</div>


                                                        <!-- FOOTER -->
<section class="footer-login">
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
</body>
</html>