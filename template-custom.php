<?php
/**
 * Template Name: Custom Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <p>I am a custom template</p>
<?php endwhile; ?>
