<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<?php 
	$query = new WP_Query('page_id=11&post_type=page');
	while($query->have_posts()) : $query->the_post();
?>

<div class="container markup">
	<div class="row">
		<div class="eightcol">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>

<?php 
	$query2 = new WP_Query('page_id=7&post_type=page');
	while($query2->have_posts()) : $query2->the_post();
?>
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
			<h3>Informations</h3>
			<p>
				Nicolas Widart <br />
				De Croixlaan 45<br />
				1910 Kampenhout<br />
				0498 72 52 73<br />
				Belgium
			</p>
			<h3>Social</h3>
			<ul class="social">
				<li><a href="<?php echo $facebook ?>" class="facebook">Facebook</a></li>
				<li><a href="<?php echo $twitter ?>" class="twitter">Twitter</a></li>
				<li><a href="<?php echo $linkedin ?>" class="linkedin">LinkedIn</a></li>
				<li><a href="<?php echo $dribbble ?>" class="dribbble">Dribbble</a></li>
			</ul>
		</div>
	</div>
</div>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>







<?php get_footer(); ?>