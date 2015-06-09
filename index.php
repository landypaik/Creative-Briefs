<?php

/**

 * The main template file

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query.

 * E.g., it puts together the home page when no home.php file 

 *

 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()

 *

 * @package 	WordPress

 * @subpackage 	Starkers

 * @since 		Starkers 4.0

 */

?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div id="full_width">

<div id="container">

<?php if ( have_posts() ): ?>

	

<ol>

<?php while ( have_posts() ) : the_post(); ?>



<div class="oneBox">

<?php if ( has_post_thumbnail() ) : ?>

			<?php if ( get_field('audio_url') ) : ?>

			<audio class="home_audio" controls preload="none">

			<source src="<?php the_field('audio_url') ?>" type="audio/mpeg">

			</audio>

			<?php endif; ?>

			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(array(1500,1500)); ?></a>

<!--put title-->

		<?php endif; ?>



</div>



<?php endwhile; ?>

</ol>

<?php else: ?>

<h2>No posts to display</h2>

<?php endif; ?>



</div>

</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>