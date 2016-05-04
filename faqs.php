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

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		<link href="styles.css" rel="stylesheet" />
		<style>
			.content{
				margin-right: auto;
				margin-left: auto;
				max-width: 960px;
				width: 96%;
			}
			.link{
				margin: 10px;
			}
			.answers{
				background-color: #F0F0F0;
				padding: 5px 15px;
			}
			h3{
				margin-top: 80px;
			}
			h4{
				margin-top: 40px;
			}
			h4 a{
				color: black;
				text-decoration: none;
			}
			h4 a:hover{
				text-decoration: none;
				color: inherit;
			}
		</style>
  </head>

  <body>
    <!-- php Navigation Bar -->
		<?php include_once('navigation.php'); ?>
		<br><br>
		<div class="content">
			<h3>Frequently Asked Questions</h3>
			
			<ul>
						
				<?php 
					
					include('connect.php');
					$result = $db -> prepare('SELECT * FROM faqs');
					$result -> bindParam(':id', $id);
					$result -> bindParam(':answers', $answers);
					$result -> bindParam(':questions', $questions);
					$result -> execute();
					for($i = 0; $row = $result -> fetch(); $i++)
					{
				?>
						<li class='link' ><a href='<?php echo "#".$i; ?>'><?php echo $row['questions'] ?></a></li>
					<!-- close connections to database -->
					<?php $db = null; } ?>

			</ul>
			
			<?php 
				
				include('connect.php');
				$result = $db -> prepare('SELECT * FROM faqs');
				$result -> bindParam(':id', $id);
				$result -> bindParam(':answers', $answers);
				$result -> bindParam(':questions', $questions);
				$result -> execute();
				for($i = 0; $row = $result -> fetch(); $i++)
				{
				
			?>
			<h4 style='margin-top: 50px'><a id='<?php echo $i; ?>'><?php echo $row['questions']; ?></a></h4>
			<p class='answers'>
				<?php echo $row['answers']; ?>
			</p>
				<!-- close connections to database -->
				<?php $db = null; } ?>
    </div>

		<?php include 'footer.php'; ?>
	



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
