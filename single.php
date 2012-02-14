<?php get_header(); ?>


<div class="container blog">
  <div class="row">
  <?php 
  if (have_posts()) : while (have_posts()) : the_post();
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
  		<h2 class="<?php echo $blog_post_type; ?>"><a href="<?php echo $post_url; ?>" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>

  		<?php
      //getting thumbnail meta
  		$thumbnail = get_post_meta($post->ID, 'blog_image', true);
  		

  		if ($thumbnail) {  ?>
        <div class="eightcol">
  			<img src="<?php echo bloginfo('template_directory'); echo $thumbnail; ?>" alt="<?php the_title(); ?>" class="blog-post-cover-img"/>
        </div>
  		<?php } ?>
      <div class="threecol meta_info">
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
            <p><i class="icon-comment"></i> <!-- <span>Comments:</span> --> <a href="#disqus_thread">Comments</a></p>
          </li>
        </ul>
      </div><!-- end threecol -->
  		<!-- <div class="eightcol">
  			<?php //the_content(); ?> 			
  		</div> --><!-- end eightcol -->
  	</div>
    <div class="ninecol">
      <?php the_content(); ?> 
    </div>
    
   

    <?php get_sidebar(); ?>
    <?php endwhile; endif; // end of the loop. ?>
    
  </div><!-- end row -->  
 
</div><!-- end  -->
<div class="container" id="comments-container comments">
<div class="row">
      <?php comments_template(); ?>    
</div>
</div><!-- end comments-container -->
<?php get_footer(); ?>