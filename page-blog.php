<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>


<div class="container blog">
<?php 
	//query_posts('&paged='.$paged );
	//if ( have_posts() ) : while ( have_posts() ) : the_post();
	$query = new WP_Query('paged=' . get_query_var( 'paged' ));
	while($query->have_posts()) : $query->the_post();
?>

  <div class="row">
  	<div class="ninecol entrycontent"  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
      // getting the post type 
      $blog_post_type = get_post_meta($post->ID, 'blog_post_type', true);
?>  	
  		<h2 class="<?php echo $blog_post_type; ?>"><a href="<?php echo get_permalink() ?>" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>

  		<?php
      //getting thumbnail meta
  		$thumbnail = get_post_meta($post->ID, 'blog_image', true);
  		

  		if ($thumbnail) {  ?>
  			<img src="<?php echo bloginfo('template_directory'); echo $thumbnail; ?>" alt="<?php the_title(); ?>" class="blog-post-cover-img"/>
  		<?php } ?>
  		<div class="eightcol">
  			<?php the_excerpt(''); ?>
  			<p>
  				<a href="<?php echo get_permalink() ?>">Continue reading →</a>
  			</p>
  			
  		</div>
  		<div class="threecol">
  			<ul>
  				<li>
            <p><i class="icon-tags"></i> <?php the_tags(' ', ', ', ' '); ?></p>
          </li>
  				<li>
  					<p><i class="icon-user"></i> <!-- <span>Author:</span> --> <a href=""><?php echo get_the_author(); ?></a></p>
  				</li>
  				<li>
  					<p><i class="icon-time"></i> <!-- <span>Date:</span> --> <?php the_time('d F, Y'); ?></p>
  				</li>
  				<li>
  					<p><i class="icon-list-alt"></i> <!-- <span>Category:</span> --> <a href=""><?php the_category(', ') ?></a></p>
  				</li>
  				<li>
  					<p><i class="icon-comment"></i> <!-- <span>Comments:</span> --> <a href=""><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></a></p>
  				</li>
  			</ul>
  		</div>
  	

    <?php
    if (($wp_query->current_post + 1) < ($wp_query->post_count)) {
       echo '<div class="seperator"></div>';
    }
    ?>
  	
  	</div>

    <?php get_sidebar(); ?>
    <?php endwhile; ?>
	<?php wp_reset_postdata(); // reset the query ?>
  </div><!-- end row -->  
 
</div><!-- end  -->

<?php get_footer(); ?>