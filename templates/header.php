<header class="banner" role="banner">
  
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <div class="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')">
      
      <?php
        if ( is_page_template('template-sales.php') ) {
            // Returns true when 'template-sales.php' is being used.
          echo "<a href='#purchase' class='header-enrol'><img src='http://wildwellcreative.com/wp-content/uploads/2015/07/header_enrol_btn.png' ></a>";
        } 
      ?>

      <div class="col-xs-12">
        <div class="container">
           <img src="http://wildwellcreative.com/wp-content/themes/sage-master/dist/images/wildwellandcreative.png" class="img-logo" alt="<?php the_title(); ?>">
           <h2>Fearlessly &amp; deliciously create from the heart</h2>
           <?php
             if ( is_page_template('template-course.php') ||  is_page_template('template-welcome.php')) {
               echo "";
             }else{
               echo "<p class='produced-by'>with Claire Baker</p>";
             }

          ?>
           
        </div>
      </div>
      <!--  <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a> -->
    <nav role="navigation">
      <?php
       if ( is_page_template('template-course.php') ||  is_page_template('template-welcome.php')) {
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
      }
      ?>
    </nav>
    </div>
  <?php endif; ?>  

  

</header>
