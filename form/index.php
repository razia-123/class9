<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="css/b.css">
</head>
<body>
<div class="contact-form">
<h1>Say Hello</h1>
<h2>Contact Us</h2>
</div>
<div class="contact-us">
<form id="contact-us" method="post" action="./controllers/postcontrollers.php">

<input type="text" name="name" class="form-control" placeholder="Your name">
<br>
<?php
    echo isset($_SESSION['name_error'])? $_SESSION['name_error']: "";
     echo "<br>";
  
  
    ?>
<input type="text" name="mobile" class="form-control" placeholder="Your mobile number">
<br>

<?php
    echo isset($_SESSION['mobile_error'])? $_SESSION['mobile_error']: "";
     echo "<br>";
  
  
    ?>
<input type="email" name="email" class="form-control" placeholder="Your Email">
<br>
<?php
    echo isset($_SESSION['email_error'])? $_SESSION['email_error']: "";
     echo "<br>";
  
  
    ?>
<input type="password" name="password" class="form-control" placeholder="Your password">
<br>
<?php
    echo isset($_SESSION['password_error'])? $_SESSION['password_error']: "";
     echo "<br>";
  
  
    ?>
    
<textarea name="message" class="form-control" cols="" rows="3" placeholder="Enter
your massege"></textarea>
<br>
<?php
    echo isset($_SESSION['message_error'])? $_SESSION['message_error']: "";
     echo "<br>";
  
  
    ?>
<input type="submit" class="form-control submit" value="SEND MASSEGE">
</form>
</div>
</body>
</html>

<?php
session_unset();
?>

