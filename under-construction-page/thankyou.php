<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ABC Company</title>
	<!-- <link rel="icon" type="image/ico" href="_images/favicon.ico"> -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="styles.css?<?php echo time(); ?>">	

</head>
<body onload="document.forms[0].name.focus();">
<div id="wrapper">
<header>
	<h1>ABC Company</h1>
	<img src="_images/under-construction.png" alt="Under Construction">
</header>

<section id="success">
	<h2>Your message was sent successfully!</h2>
	<p><a href="/">Back to homepage</a></p>
</section>

<?php include '_includes/footer.php' ?>
</div><!-- #wrapper -->

<script type="text/javascript" src="_scripts/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>