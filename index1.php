<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="user"){
      header('Location: index1.php?err=2');
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Custom Flash Drives</title>
    
    <!-- Bootstrap core CSS -->
    <link href="bootstrapStuff/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
  
<!--- START nav -->
<?php include_once('navigation.php'); ?>
<!--- END nav -->
<?php
   include('session.php');
?>
<?php echo $login_session; ?>
<br/>
<p style=" float:right "><?php echo $_SESSION['sess_username'];?></p><br/>
<p><a style="padding:10px; float:right "href = "logout.php">Sign Out</a></p>  
</br></br></br>

    <h1 style="text-align: center; font-family: serif;"><strong>Customizible Flash Drives</strong></h1>
    </br></br></br>
    
  <div align="center">
  
  <button onclick="location.href='custom.php'">
    Design a Custom Flash Drive</button>
     
  <button onclick="location.href='preDesigned.php'">
     PreDesigned Flash Drives</button>
  
  </div>
  
  </body>
    
 
    
	
<!-- START of slider ----------------xxxxxxxxxxxxxxxxxx----------------------xxxxxxxxxxxxxxxxxx--->
<?php include_once('slider.php'); ?>
<!-- END of slider   ----------------xxxxxxxxxxxxxxxxxx----------------------xxxxxxxxxxxxxxxxxx--->

<!-- START of footer ----------------xxxxxxxxxxxxxxxxxx----------------------xxxxxxxxxxxxxxxxxx--->
<?php include_once('footer.php'); ?>
<!-- END of footer   ----------------xxxxxxxxxxxxxxxxxx----------------------xxxxxxxxxxxxxxxxxx--->

    <!-- Bootstrap core JavaScript /////////THIS IS FROM BOOTSTRAP
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
