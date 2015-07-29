<?php
/**
 * Template Name: Course Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <section class="white">
	<div class="container">
		  <?php get_template_part('templates/content', 'page'); ?>
	</div>
</section>
<?php endwhile; ?>
