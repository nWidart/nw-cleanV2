<?php get_header(); ?>

<div class="container breadcrump">
  <div class="row">
    <?php 
    if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb('<p id="breadcrumbs">','</p>');
    }
  ?>
  </div>
</div><!-- end breadcrump -->
<div class="container blog">
  <div class="row">
    <div class="ninecol entrycontent">
        <h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?' ); ?></h2>
        <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.' ); ?></p>
        <?php get_search_form(); ?>
         <?php smart404_suggestions() ?>
    </div>

    

 
  <?php get_sidebar(); ?>
  <div class="ninecol pagination">
    <?php
      // Option 1 : Page numbers.
      if(function_exists('wp_paginate')) {
      wp_paginate();
      }
    ?>
    <?php 
    // Option 2: Next posts / previous posts link 
    //posts_nav_link(); ?>
  </div><!-- end pagination -->
     
    
  </div><!-- end row -->  
 
</div><!-- end  -->

<?php get_footer(); ?>