	
	<footer>
		<div id="cbFooter">
			<div class="fmenu">
	    			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
	        </div>

			<p>&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
		</div>
	</footer>


	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/doubletaptogo.js"></script>
	<script>
		$( function()
		{
			$( '#nav li:has(ul)' ).doubleTapToGo();
		});
	</script>


	
	
	
	