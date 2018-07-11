<footer>
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
	<!-- <div class="footer-top">
		&nbsp;
	</div> -->
	<p class="copyright"><?= ewd_copyright(2018); ?> Wild Sage MFR | <a href="http://www.evergreenwebdesign.com" target="_blank">Evergreen Web Design</a></p>
</footer>