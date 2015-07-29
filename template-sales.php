<?php
/**
 * Template Name: Sales Template
 */
?>




<?php get_template_part('templates/page', 'header'); ?>



<section class="pink">
	<div class="container">
		<?php the_field('sales_section_1'); ?>
	</div>
</section>

<section class="white">
	<div class="container">
		<?php the_field('sales_section_2'); ?>
	</div>
</section>

<section class="pink">
	<div class="container">
		<?php the_field('sales_section_3'); ?>
	</div>
</section>



<?php get_template_part('templates/flexslider'); ?>

<?php get_template_part('templates/accordion'); ?>


<?php if( have_rows('testimonials') ): ?>
	<section class="testimonials">
		<div class="container">
			<div class="row">
				<?php while( have_rows('testimonials') 
					): the_row(); 

				// vars
				$content = get_sub_field('testimonials_copy');

				?>

				<div class="col-md-4 testimonial">
					<?php echo $content; ?>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php get_template_part('templates/quote-pink'); ?>

<?php if( have_rows('experts') ): ?>
<section class="experts">
	<div class="container-fluid">
		<?php the_field('experts_header'); ?>
		<div class="row">
		<?php while( have_rows('experts') 
					): the_row(); 

			// vars
			$content = get_sub_field('experts_copy');

			?>
			<div class="col-md-6 col-lg-3 expert">
				<?php echo $content; ?>
			</div>
		<?php endwhile; ?>
		</div>
	</div>
</section>
<?php endif; ?>

<?php get_template_part('templates/quote-aqua'); ?>



<section class="white">
	<div class="container">
		<?php the_field('sales_section_4'); ?>
	</div>
</section>

<section class="aqua">
	<div class="container">
		<?php the_field('sales_section_5'); ?>
	</div>
</section>



<section class="purchase" id="purchase">

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php the_field('sales_purchase_copy'); ?>
			</div>
			<div class="col-md-6 text-right">

				<?php 

				$image = get_field('sales_purchase_image');

				if( !empty($image) ): ?>

				<img class="img-responsive img-offset hidden-xs hidden-sm" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>
		</div>
	</div>
</div>

</section>
