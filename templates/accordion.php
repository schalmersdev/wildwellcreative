<?php
	$counter = 0; 
?>
<?php if( have_rows('accordion') ): ?>
	<section class="accordion-container">

		<div class="container">

			<?php the_field('accordion_introduction'); ?>

			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				

				<?php while( have_rows('accordion') 
					): the_row(); 

						// vars

				$id = 'heading' . $counter;
				$collapseid = 'collapse' . $counter;
				$header = get_sub_field('accordion_title');
				$subheader = get_sub_field('accordion_sub_title');
				$content = get_sub_field('accordion_copy');
				$additionalcontent = get_sub_field('accordion_highlight_area');
				$additionalimage = get_sub_field('accordion_highlight_area_image');

				?>

				<div class="panel-heading" role="tab" id="<?php echo $id; ?>">
					<h4 class="panel-title">
						<a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $collapseid; ?>" aria-expanded="true" aria-controls="<?php echo $collapseid; ?>">
							<?php echo $header; ?>
							<p><?php echo $subheader; ?></p>
						</a>
					</h4>
					
				</div>


				<div id="<?php echo $collapseid; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="<?php echo $id; ?>">
					<div class="panel-body">
						<?php echo $content; ?>

						<?php 
						    if($additionalcontent != ''){
								if($additionalimage != ''){
									echo "<div class='row panel-additional-wrapper'><div class='panel-additional col-md-6'>" . $additionalcontent . "</div><div class='panel-additional-image visible-lg-block visible-md-block'><img class='img-responsive' src='" . $additionalimage . "' /></div></div>";
								}else{
									echo "<div class='panel-additional'>" . $additionalcontent . "</div>";
								}
							}
						?>

					</div>
				</div>



				<?php
				$counter++; 
				?>

			<?php endwhile; ?>


			<div class='row panel-additional-wrapper'><div class='panel-additional col-md-6'> <?php the_field('accordion_post_content') ?> </div><div class='panel-additional-image visible-lg-block visible-md-block'><img class='img-responsive' src='<?php the_field('accordion_post_image') ?>' /></div></div>

		</div>
	</div>

</section>
<?php endif; ?>