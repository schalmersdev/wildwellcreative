<?php
/**
 * Template Name: Welcome Template
 */
?>


<?php while (have_posts()) : the_post(); ?>
	
	<?php get_template_part('templates/page', 'header'); ?>

	<section class="pink">
		
		<div class="container">
			<!-- <p>Welcome Emily</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, commodi similique eius cum cumque. Rem, praesentium, accusamus optio aliquid perspiciatis aspernatur temporibus unde repudiandae inventore asperiores nemo alias necessitatibus consequuntur.</p> -->
			<?php the_field('welcome_intro'); ?>
		</div>
		
	</section>


	<img src="http://wildwellcreative.com/wp-content/themes/sage-master/dist/images/clare-about-mobile.jpg" class="img-responsive visible-xs-block" alt="Claire">
	<section class="welcome-claire" >
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6">

					<!-- <h2>Fearlessley &amp; Deliciously create from the heart</h2> -->
						<h2><?php the_field('welcome_highlight'); ?></h2>
					
				</div>
			</div>
		</div>
	</section>


	<section class="aqua">
			
		<div class="container wysiwyg">

			<?php the_field('welcome_social'); ?>

		
		</div>
	</section>


	<?php if( have_rows('welcome_promos') ): ?>
	<section class="white">
		
		<div class="container">
			<div class="row">
			<?php while( have_rows('welcome_promos') 
					): the_row(); 

				// vars
				$content = get_sub_field('welcome_promo');

				?>

			  	<div class="col-xs-12 col-md-4">
			  		<img class="img-responsive" src="<?php echo $content; ?>">
			  	</div>

			<?php endwhile; ?>

			</div>
		</div>
		
	</section>
	<?php endif; ?>
	

<?php endwhile; ?>

