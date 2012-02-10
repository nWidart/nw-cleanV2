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
  	<div class="ninecol entrycontent">
  	<?php // ??post_class(); ?>
  		<h2 class="post"><a href="<?php echo get_permalink() ?>" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2

  		<?php
  		$thumbnail = get_post_meta($post->ID, 'blog_image', true);
  		echo $thumbnail;

  		if (get_post_meta($post->ID, 'thumbnail', true)) {  ?>
  			<img src="<?php echo get_post_meta($post->ID, 'thumbnail', true); ?>" alt="img1" class="blog-post-cover-img"/>
  		<?php } ?>
  		<div class="eightcol">
  			<!-- <p>
  				First, I believe that this nation should commit itself to achieving the goal, before this decade is out, of landing a man on the moon and returning him safely to the earth. No single space project in this period will be more impressive to mankind, or more important for the long-range exploration of space; and none will be so difficult or expensive to accomplish.
  			</p> -->
  			<?php the_excerpt(''); ?>
  			<p>
  				<a href="">Continue reading →</a>
  			</p>
  			
  		</div>
  		<div class="threecol">
  			<ul>
  				<li>
  					<p><span>Tags:</span> <a href="">Design</a>, <a href="">Html</a>, <a href="">Wordpress</a></p>
  				</li>
  				<li>
  					<p><span>Author:</span> <a href="">Nicolas</a></p>
  				</li>
  				<li>
  					<p><span>Date:</span> <a href="">23 september, 2012</a></p>
  				</li>
  				<li>
  					<p><span>Category:</span> <a href="">Articles</a></p>
  				</li>
  				<li>
  					<p><span>Comments:</span> <a href="">2</a></p>
  				</li>
  			</ul>
  		</div>
  	
  	<div class="seperator"></div>	
  	</div>

    <div class="threecol last sidebar">
      <ul>
				<form role="search" method="get" id="searchform" action="http://nicolaswidart.com/site/">
					<div>
						<input type="text" value="" name="s" id="s" class="search-input" placeholder="Type something you want to find"/>
						<!-- <input type="submit" id="searchsubmit" value="Go" class="search-go"/> -->
					</div>
				</form>
			</ul>
			<h3>Welcome on my blog!</h3>
			<p>First, I believe that this nation should commit itself to achieving the goal, before this decade is out, of landing a man on the moon and returning him safely to the earth.</p>
			<h3>Categories</h3>
			<ul class="ul-list">
				<li><a href="">Technology</a></li>
				<li><a href="">Tips & tricks</a>
					<ul>
						<li><a href="">Html & Css</a></li>
						<li><a href="">Wordpress</a></li>
						<li><a href="">jQuery</a></li>
						<li><a href="">PHP</a></li>
					</ul>
				</li>
				<li><a href="">Uncategorized</a></li>
			</ul>
			
			
    </div><!-- end sidebar -->
    <?php endwhile; ?>
	<?php wp_reset_postdata(); // reset the query ?>
  </div><!-- end row -->  
 
</div><!-- end  -->

<?php get_footer(); ?>