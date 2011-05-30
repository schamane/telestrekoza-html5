		</div>
	</div> <!--! end of #container -->

	<!-- JavaScript at the bottom for fast page loading -->
	
	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
	<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery-1.6.min.js">\x3C/script>')</script>


	<?php
		// You can disable the included style quickly from the settings page,
		$options = get_option('theme_options');
		if ($options['yahoo_media_player'])	{
	?>
		<script src="http://mediaplayer.yahoo.com/js"></script>	
	<?php } ?>

	<!-- scripts concatenated and minified via ant build script-->
	<script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
	<!-- end scripts-->

	<!-- Configure Google Analytics in the Theme Settings in the WP administration interface. -->
	<?php
		$opt = get_option('theme_options');
		$ga_tracker = $opt['ga_tracker']; 
		if (!is_null($ga_tracker) && !empty($ga_tracker)) { ?>
		<script>
		    var _gaq=[["_setAccount","<?php echo $opt['ga_tracker']; ?>"],["_trackPageview"],["_trackPageLoadTime"]];
		    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
		    s.parentNode.insertBefore(g,s)}(document,"script"));
		</script>
	<?php } ?>
</body>
</html>