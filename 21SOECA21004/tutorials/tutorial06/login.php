<?php

  session_start();  


  if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
  {
       $username = $_POST['username'];
       $password = $_POST['password'];


       if(isset($_SESSION['username']))   // Checking whether the session is already there or not
       {
            $valuser=$_SESSION['username'];
            $valpass=$_SESSION['password'];
			
			//$username='jemini@gmail.com';
			//$password=123456;
            
            if(($username == $valuser)  && ($password == $valpass))
            {

                header("location:index.php");    //  On Successful Login redirects to index.php

            }
            else
            {
                echo '<script type="text/javascript"> alert("Invalid Username Or Password");</script>';        
            }
        }
        else
        {
            header("location:registration.php");                 
        }
      
}
 ?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

  <title>Login</title>
  
  
</head>

<body> 

  <div class="text-center">
        <form style="max-width:480px;margin:auto; border: 4px solid #0a0101;background-color: rgb(229, 255, 196);" method="post" action="login.php">
        <h1 class="h3 mb-3 font-wight-normal">Login</h1>
       username:
        <input type="text" id="username" class="form-control" placeholder="username" name="username"></br></br>
        
        <label class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" name="password" ></br></br>
		<a href="registration.php">Register</a>
        <button class="btn btn-ig btn-primary" type="submit" name="login" text-align="center">Login</button>

        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->

</body>

</html>