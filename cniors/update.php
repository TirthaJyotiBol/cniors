<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Update</title>

    <style>
    div{
        margin-top : 3cm;
        margin-left:4cm;
    }
    .password{
         margin-left : 5px;
         margin-top : 0.61cm;
    }
    </style>

  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<h2>Update</h2>
   <form method="post">
   <div> 
   Name <input id="name" type="text" name="name" class="registrationdetails" placeholder="Enter your Name" required><br>
Branch <input id="branch" type="text" name="branch" class="registrationdetails" placeholder="Enter your Branch" required ><br>
Semester <input id="semester" type="text" name="semester" class="registrationdetails" placeholder="Enter your Semester" required ><br>
PhoneNumber <input id="number" type="text" name="PhoneNumber" class="registrationdetails" placeholder="Enter your Number" required ><br>
Email <input type="mail" id="mail" name="email" class="registrationdetails" placeholder="Enter your Mail" required ><br>
Password <input type="password" id="password" name="password" class="registrationdetails" placeholder="Create your Password" required ><br>
Confirm Password <input id="confirmpassword" type="password" name="confirmpassword" class="registrationdetails" placeholder="Confirm Password" required ><br>
   <button type="submit" value="submit" name="submit">UPDATE</button> <br>
   <a href="display.php">Display</a>
   </div>
   </form> 
  </body>
</html>

<?php
     include 'connection.php';
     
if(isset($_POST['submit']))
{
    $id=$_GET['id'];
    $name =$_POST['name'];
    $password =$_POST['password'];
    $branch =$_POST['branch'];
    $semester=$_POST['semester'];
    $phonenumber=$_POST['PhoneNumber'];
    $email=$_POST['email'];

    $q =" UPDATE `registration` SET id=$id, name='$name',password='$password', branch='$branch',
     semester ='$semester' phone='$phonenumber'  WHERE id=$id ";
    $query = mysqli_query($conn,$q);

    header('location:profile.php');

}

?>