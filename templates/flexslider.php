<section class="flexslider">
  <?php if( have_rows('flexslider') ): ?>

    <div class="container">
     <ul class="slides">
      <?php while( have_rows('flexslider') 
        ): the_row(); 

        // vars
        $content = get_sub_field('slider_copy');

      ?>

      <li>
       <?php echo $content; ?>
     </li>

   <?php endwhile; ?>

 </ul>
</div>

</section>
<?php endif; ?>

