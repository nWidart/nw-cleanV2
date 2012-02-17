<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>


<div class="container blog">
  <div class="row">
  <?php 
  query_posts('&paged='.$paged );
  if ( have_posts() ) : while ( have_posts() ) : the_post();
  //$query = new WP_Query('paged=' . get_query_var( 'paged' ));
  //$query = new WP_Query('posts_per_page=20');
  //while($query->have_posts()) : $query->the_post();
?>
  	<div class="ninecol entrycontent"  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
      // getting the post type 
      $blog_post_type = get_post_meta($post->ID, 'blog_post_type', true);
      $post_url = get_permalink();
      // if link type get the url

      if ($blog_post_type == "link") {
        $blog_post_link = get_post_meta($post->ID, 'blog_post_link', true);
        //override the post url to the link
        $post_url = $blog_post_link;
      }
?>  	
  		<h2 id="title" class="<?php echo $blog_post_type; ?>"><a href="<?php echo $post_url; ?>" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>

  		<?php
      //getting thumbnail meta
  		$thumbnail = get_post_meta($post->ID, 'blog_image', true);
  		

  		if ($thumbnail) {  ?>
  			<img src="<?php echo bloginfo('template_directory'); echo $thumbnail; ?>" alt="<?php the_title(); ?>" class="blog-post-cover-img"/>
  		<?php } ?>
  		<div class="eightcol">
  			<?php the_excerpt(''); ?>
  			<p>
  				<a href="<?php echo $post_url; ?>">Continue reading →</a>
  			</p>
  			
  		</div>
  		<div class="threecol">
  			<ul>
  				<li>
            <p><i class="icon-tags"></i> <?php the_tags(' ', ', ', ' '); ?></p>
          </li>
  				<li>
  					<p><i class="icon-user"></i> <a href="<?php echo get_the_author_link(); ?>"><?php echo get_the_author(); ?></a></p>
  				</li>
  				<li>
  					<p><i class="icon-time"></i> <?php the_time('d F, Y'); ?></p>
  				</li>
  				<li>
  					<p><i class="icon-list-alt"></i> <a href=""><?php the_category(', ') ?></a></p>
  				</li>
  				<li>
  					<p>
              <i class="icon-comment"></i> 
              <a href="<?php the_permalink(); ?>#disqus_thread"><?php comments_number( 'no responses', 'one response', '% responses' ); ?></a>
            </p>
  				</li>
  			</ul>
  		</div>
  	

    <?php
    if (($wp_query->current_post + 1) < ($wp_query->post_count)) {
       echo '<div class="seperator"></div>';
    }
    ?>
  	
  	</div>
    
   

    
    <?php endwhile; endif; ?>
	<?php wp_reset_postdata(); // reset the query ?>
  <?php get_sidebar(); ?>
  <div class="ninecol">
    <?php 
      if(function_exists('wp_paginate')) {
      wp_paginate();
      }
    ?>
  </div>
     
    
  </div><!-- end row -->  
 
</div><!-- end  -->

<?php get_footer(); ?>