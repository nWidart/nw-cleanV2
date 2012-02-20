<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>

<div class="container markup">
	<?php 
		$queryAbout = new WP_Query('page_id=7&post_type=page');
		while($queryAbout->have_posts()) : $queryAbout->the_post();
	?>
	<div class="row">
		<div class="eightcol">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); // reset the query ?>


		<?php
			// Getting the About info from meta
			$portrait_img = get_post_meta($post->ID, 'portrait_img', true);
			$facebook = get_post_meta($post->ID, 'facebook', true);
			$twitter = get_post_meta($post->ID, 'twitter', true);
			$linkedin = get_post_meta($post->ID, 'linkedin', true);
			$dribbble = get_post_meta($post->ID, 'dribbble', true);
			$cv = get_post_meta($post->ID, 'cvlink', true);
			$cl = get_post_meta($post->ID, 'cllink', true);
		?>
		<div class="fourcol last">
			<img src="<?php 
				echo bloginfo('template_directory');
				echo $portrait_img ?>" alt="<?php the_title(); ?>" class="portrait" 
			/>
		</div>
		
	</div><!-- end row1 -->
	<div class="row">
		<div class="fourcol">
			<h2>Download</h2>
			<ul>
				<li><a href="<?php echo $cv ?>" class="download">Curriculum Vitea</a></li>
				<li><a href="<?php echo $cl ?>" class="download">Cover Letter</a></li>
			</ul>
			
		</div>
		<div class="fourcol last">
			<h2>Find me on &#8230;</h2>
			<ul class="social">
				<li><a href="<?php echo $facebook ?>" class="facebook">Facebook</a></li>
				<li><a href="<?php echo $twitter ?>" class="twitter">Twitter</a></li>
				<li><a href="<?php echo $linkedin ?>" class="linkedin">LinkedIn</a></li>
				<li><a href="<?php echo $dribbble ?>" class="dribbble">Dribbble</a></li>
			</ul>
		</div>
	</div><!-- end row2 -->
</div><!-- end markup -->
<div class="container">
	<div class="row">
		<h2>Design process</h2>
			<ul id="designprocess">
	
				<li>
					<img src="<?php echo bloginfo('template_directory'); ?>/library/img/dp/dp-bulle.png" alt="dp-bulle" width="156" height="117" />
					<a href="" rel="twipsy" title="First stage after recieving the clients demands, ressearch." class="dp-title research">Research</a>
				</li>
				<li>
					<img src="<?php echo bloginfo('template_directory'); ?>/library/img/dp/dp-bulle.png" alt="dp-bulle" width="156" height="117" />
					<a href="" class="dp-title design" rel="twipsy" title="Starting to design, first drafts to mock-ups to the final design.">Design</a>
				</li>
				<li>
					<img src="<?php echo bloginfo('template_directory'); ?>/library/img/dp/dp-bulle.png" alt="dp-bulle" width="156" height="117" />
					<a href="" class="dp-title build" rel="twipsy" title="It's time to start coding the design.">Build</a>
				</li>
				<li>
					<a href="" class="dp-title test" rel="twipsy" title="Testing the design for bugs is a very important stage!">Testing</a>
					<img src="<?php echo bloginfo('template_directory'); ?>/library/img/dp/dp-bulle.png" alt="dp-bulle" width="156" height="117" />
				</li>
				<li>
					<a href="" class="dp-title launch" rel="twipsy" title="When the site's completely bugfree, it launches.">Launch</a>
					<img src="<?php echo bloginfo('template_directory'); ?>/library/img/dp/dp-bulle.png" alt="dp-bulle" width="156" height="117" />
				</li>
				<li>
					<a href="" rel="twipsy" class="dp-title support" title="You'll have support if you've choosen to let me host the site." >Support</a>
					<img src="<?php echo bloginfo('template_directory'); ?>/library/img/dp/dp-bulle-rond.png" alt="dp-bulle" width="117" height="117" />
				</li>
				
			</ul>
	</div><!-- end row3  -->
</div>


<?php get_footer(); ?>