<?php
/**
 * Template Name: Forms Template
 */
?>



<?php while (have_posts()) : the_post(); ?>
	<section class="aqua">
		<div class="container">
			 <?php get_template_part('templates/page', 'header'); ?>
	  		<?php get_template_part('templates/content', 'page'); ?>
		</div>
	</section>
<?php endwhile; ?>


