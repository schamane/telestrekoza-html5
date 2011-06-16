<?php
	// You can disable the included style quickly from the settings page,
	$options = get_option('theme_options');
	$bodyFont = $options['google_web_font_paragraph'];
	$headerFont = $options['google_web_font_header'];


	if ($options['disable_layout'] == false)	{
		if (!empty($headerFont)) {
			$fontNameFormatted = str_replace(" ", "+", $headerFont);  
			echo '<link href="http://fonts.googleapis.com/css?family='.$fontNameFormatted.'&v1" rel="stylesheet" type="text/css">';
		}
		if (!empty($bodyFont) && $headerFont != $bodyFont) {
			$fontNameFormatted = str_replace(" ", "+", $bodyFont); 
			echo '<link href="http://fonts.googleapis.com/css?family='.$fontNameFormatted.'&v1" rel="stylesheet" type="text/css">';
		} 
?>		

	<style>
		html, body, div, span, object, iframe,
		h1, h2, h3, h4, h5, h6, p, blockquote, pre,
		abbr, address, cite, code, del, dfn, em, img, ins, kbd, q, samp,
		small, strong, sub, sup, var, b, i, dl, dt, dd, ol, ul, li,
		fieldset, form, label, legend,
		table, caption, tbody, tfoot, thead, tr, th, td,
		article, aside, canvas, details, figcaption, figure,
		footer, header, hgroup, menu, nav, section, summary,
		time, mark, audio, video  
		{ 
			font-family: 

			<?php
				if (!empty($bodyFont)) {
					echo '"'.$bodyFont.'", ';
				}
			
				$optionValue =  $options['css_font_stack'];
				
				if ($optionValue == "Microsoft") {
					?>"Segoe UI", Segoe, Tahoma, Geneva, sans-serif;<?php 
				} elseif ($optionValue == "Yahoo") {
					?>Arial, sans-serif;<?php 
				} elseif ($optionValue == "I Love Typography") {
					?>Cambria, Georgia, serif;<?php 
				} elseif ($optionValue == "Jon Tangerine") {
					?>Baskerville, Garamond, Palatino, "Palatino Linotype", "Hoefler Text", "Times New Roman", serif;<?php 
				} elseif ($optionValue == "Sushi And Robots") {
					?>"Hoefler Text", Garamond, Baskerville, "Baskerville Old Face", "Times New Roman", serif;<?php 
				} else {
					?>"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, Tahoma, sans-serif;<?php 
				}
			?> 
		}
		
		<?php if (!empty($headerFont)) { ?>
			h1, h2, h3, h4, h5, h6 {
				font-family: "<?php echo $headerFont ?>";
			}
		<?php } ?>
		
	</style>


		
		
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/wordpress.css">
<?php } ?>	