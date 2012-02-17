<?php get_header(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=319866938048613";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
  		<h2 id="title" class="<?php echo $blog_post_type; ?>"><a href="<?php echo $post_url; ?>" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>

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
            <p><i class="icon-comment"></i>
            <span
                  class="livefyre-commentcount"
                  data-lf-site-id="{site_id}"
                  data-lf-article-id="<?php the_ID(); ?>">0 Comments</span> 
            </p>
          </li>
        </ul>
        <a href="https://twitter.com/share" class="twitter-share-button" data-via="nicolaswidart" data-text="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";
fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        
        <!-- Place this tag where you want the +1 button to render -->
        <g:plusone size="tall" annotation="inline" href="<?php the_permalink(); ?>"></g:plusone>

        <!-- Place this render call where appropriate -->
        <script type="text/javascript">
        (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
        </script>

        <div class="fb-like" data-send="false" data-layout="button_count" data-width="50" data-show-faces="true"></div>

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