<header>
	
	
	<div id="cbHeader">
	
		<a href="<?php echo home_url( '/' ); ?>">
			<img id="cblogo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="<?php bloginfo( 'name' ); ?>">
		</a>

		<div class="mainNav">  
    		<?php wp_nav_menu( $args ); ?>
        </div>
	

	<!-- 	<?php get_search_form(); ?>
		<h4><?php bloginfo( 'description' ); ?></h4>
	
	<?php dynamic_sidebar('sample-widget'); ?> --> <!-- FOR EXAMPLE -->

	
		<!-- <nav class="primary_nav"><? wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'primary' )); ?></nav> -->
		<!-- <nav class="secondary_nav"><? wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'secondary' )); ?></nav> 
		<? wp_nav_menu( array( 'theme_location' => 'meta', 'menu_class' => 'meta' )); ?> -->
	</div>
</header>
