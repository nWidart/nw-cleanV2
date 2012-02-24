<?php get_header(); ?>

<div class="container featured">
	<!-- <div class="row">
		<?php if(function_exists('displayDDSlider')) { echo displayDDSlider(array(name=>"Featured")); } ?>	
	</div> -->
<div id="slider">
	<div class="flexslider">
		<ul class="slides">
		<?php   $query = new WP_Query('page_id=13&post_type=page');
				while($query->have_posts()) : $query->the_post(); ?>
			<?php 
				$featured_images = get_post_meta($post->ID, 'featured_images', true);
				if ($featured_images != "") {
					$images = explode(",", $featured_images);
					foreach ($images as $image) {
						$sliderPart = explode("|", $image);			
			?>					
			<li>
	    		<a href="<?php echo $sliderPart[1]; ?>"><img src="<?php echo bloginfo('template_directory'); ?><?php echo $sliderPart[0];  ?>" /></a>
	    	</li>
			<?php		
					}
				}
			?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); // reset the query ?>
		    </ul>
	</div>
</div><!-- end #Slider -->

</div>

<div class="container quote">
	<div class="row">
		<div class="quote-top"></div><!-- end quote-top -->
			<p><em>CSS</em>, <em>HTML</em>, <em>Photoshop</em>, <em>Wordpress</em><br />Yes you're right, I'm a <em>webdesigner</em> and I love it!</p>
		<div class="quote-bottom"></div><!-- end quote bottom -->
	</div>
</div><!-- end  quote -->

<div class="container">
  <div class="row">
    <?php echo '<h2>' . __('What I can do for you', 'nw-clean') . '</h2>'; ?>
    <?php include('library/php/skillset.php'); ?>
  </div>
</div><!-- end skill set -->
<div class="container">
	<div class="row">
		<h2>What's next?</h2>
		<p>
			You can now check out <a href="/portfolio-iso" rel="twipsy" title="View all projects">my latest projects</a>, or <a href=""  rel="twipsy" title="Go to contact form">send me a message</a>. &#9786;
		</p>
	</div>
</div>

<?php get_footer(); ?>