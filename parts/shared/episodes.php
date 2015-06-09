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