<?php require '_includes/head.php'; ?>

<body>
<div id="top-of-page"></div>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i> top of page</a>

<?php require "_includes/navigation.php" ?>

<div id="contact-page" class="cf">
<section id="location" class="cf">

	<div class="overlay" onClick="style.pointerEvents='none'"><!-- prevent wheel zoom over map --></div>
	<div id="map"></div>

	<div class="location">
		<p><span class="sm-gone"><i class="fa fa-map-marker"></i></span><a class="loc" tabIndex="-1" href="https://goo.gl/maps/LBPkD5D2WUG2" target="_blank">1030 Johnson Road<span class="sm-gone">, </span><br class="lg-gone">Golden, CO 80401</a></p>
		<p><span class="sm-gone"><i class="fa fa-phone-square"></i></span><a class="loc" href="tel:(303)%20887-1984">303.887.1984</a></p>
	</div>

</section><!-- #location -->
<img src="_images/divider.png" alt="divider">
<section id="contact" class="cf">
	
	<div id="contact-form">
		<div class="left-side">
			<h2>Contact</h2>
			<p>1030 Johnson Road</p>
			<p>Suite 283</p>
			<p>Golden, CO 80401</p>
			<p>&nbsp;</p>
			<p>Phone: 303.887.1984</p>
			<!-- <p>Fax: 303.973.9358</p> -->
		</div>
		<div class="right-side">
			<?php require('_includes/contact-form-processing.php'); ?>  
	    </div>
	</div>

</section><!-- #contact -->
</div><!-- #contact-page -->

<?php require "_includes/footer.php" ?>

<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>