
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
    <link href="styles.css" rel="stylesheet" />
    
<!----START style for drap an drop---->
<style>
#div1 {width:350px;height:70px;padding:10px;border:1px solid #aaaaaa;}
</style>

<script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
</script>
<!----END style for drap an drop---->
  </head>

  <body>

<!--- START nav -->
<?php include_once('navigation.php'); ?>
<!--- END nav -->

		<br>
		<br>
		<br>
		<br>
		<br>
		
		<div class="content">
		<h1 align="center" style="text">Design Custom Flash Drives</h1>
        <br>
		<br>
		<br>
		<br>
		<br>
		<br>
        
<div align="center">        
<p align="center">Drag and Drop your Image here:</p>
<div align="center" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
</div>       
        
        <br>
		<br>
		<br>
        
<div align="center">
<p>Select Material</p>
<form action="action_page.php">
  <select name="matss">
    <option value="plastic">Plastic</option>
    <option value="steel">Steel</option>
    <option value="shckprf">Shock-Resistant</option>
    <option value="gold">Gold</option>
  </select>
  <br><br>
</form>
<p>Select Storage</p>
<form action="action_page.php">
  <select name="cars">
    <option value="1">1GB</option>
    <option value="2">2GB</option>
    <option value="4">4GB</option>
    <option value="8">8GB</option>
	<option value="16">16GB</option>
	<option value="32">32GB</option>
	<option value="64">64GB</option>
	<option value="128">128GB</option>
  </select>
  <br><br>
</form>
</div>       
        
        </br>
		</br>
		</br>
	<div align="center">
		<p>Enter Email:</p>
		<input type="text" name="email">
	</div
  <form>
	<div align="center">
		Enter Quantity:
		<br/>
		<input type="text" name="quant">
	</div>
	<div align="center">Enter custom Text:
		<br/>
		<input type="text" name="custom text">
		<br/>
	</div>
	<div align="center">
		<br/>
		<br/>
		<textarea name="details" >
			Enter additional details here... 
		</textarea>
	<br/>
      <input type="button" name="button" id="button" value="Submit">
      <br>
    </div>
  </form>
      


	
 </br>
		</br></br>
		</br></br>
		</br></br>
		</br>
  </div> <!-- end of content div -->
<!-- START of footer ----------------xxxxxxxxxxxxxxxxxx----------------------xxxxxxxxxxxxxxxxxx--->
<?php include_once('footer.php'); ?>
<!-- END of footer   ----------------xxxxxxxxxxxxxxxxxx----------------------xxxxxxxxxxxxxxxxxx--->	



    <div align="center">
      
      <!-- Bootstrap core JavaScript
    ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
      <script src="../../dist/js/bootstrap.min.js"></script>
      
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </div>
  </body>
</html>
