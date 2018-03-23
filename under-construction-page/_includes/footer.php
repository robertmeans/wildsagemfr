<?php
	function ewd_copyright($startYear) {
		$currentYear = date('Y');
		if ($startYear < $currentYear) {
			$currentYear = date('y');
			return "&copy; $startYear&ndash;$currentYear";
		} else {
			return "&copy; $startYear";
		}
	}
?>
 <footer>
	<div id="left">
		<p>Wild Sage Myofascial Release Therapy, LLC</p>
	</div>
	<div id="center">
		<p><i class="fa fa-map-marker"></i> 1030 Johnson Road, Suite 283, Golden, CO 80401</p>
	</div>
	<div id="right">
		<p><i class="fa fa-phone-square"></i> <a class="tel" tabIndex="-1" href="tel:(303) 887-1984">303.887.1984</a></p>
	</div>
	<div class="copyright"><p><?= ewd_copyright(2018); ?> Wild Sage Myofascial Release Therapy, LLC | <a href="http://www.evergreenwebdesign.com" target="_blank">Evergreen Web Design</a></p></div>
</footer>