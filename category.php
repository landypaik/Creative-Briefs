<?php

/**

 * The template for displaying Category Archive pages

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



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/episodes' ) ); ?>


</ol>

<?php else: ?>

<h2>No posts to display</h2>

<?php endif; ?>



</div>

</div>



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>