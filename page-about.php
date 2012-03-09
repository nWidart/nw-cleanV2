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
			$cv = get_post_meta($post->ID, 'cvlink', true);
			$cl = get_post_meta($post->ID, 'cllink', true);
			/* ------------------------------------------------------------------------------------------------------------------------
			 * getting info form the options page
			 */
			$facebook = of_get_option('facebookid');
			$twitter = of_get_option('twitterid');
			$linkedin = of_get_option('linkedinid');
			$dribbble = of_get_option('dribbbleid');
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
				<?php if ( $facebook ) : ?><li><a href="<?php echo $facebook ?>" class="facebook">Facebook</a></li><?php endif; ?>
				<?php if ( $twitter ) : ?><li><a href="<?php echo $twitter ?>" class="twitter">Twitter</a></li><?php endif; ?>
				<?php if ( $linkedin ) : ?><li><a href="<?php echo $linkedin ?>" class="linkedin">LinkedIn</a></li><?php endif; ?>
				<?php if ( $dribbble ) : ?><li><a href="<?php echo $dribbble ?>" class="dribbble">Dribbble</a></li><?php endif; ?>
			</ul>
		</div>
	</div><!-- end row2 -->
</div><!-- end markup -->
<?php get_template_part('designprocess'); ?>


<?php get_footer(); ?>