<?php
/*
Template Name: Portfolio Single
*/
?>

<?php get_header(); ?>
<?php the_post(); ?>

<div class="container breadcrump">
  <div class="row">
    <?php 
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		}
	?>
  </div>
</div><!-- end breadcrump -->


<div class="container sub-nav">
<div class="row">
	<div class="fourcol prev">
			<?php echo previous_page_not_post('','',''); ?>
	</div>

	<div class="fourcol back">
		<a href="site/portfolio-iso" title="Back to Portfolio" alt="Back to Portfolio">
			<span></span>
		</a>
	</div>
		
	<div class="fourcol last next">
		<?php echo next_page_not_post('','',''); ?>
	</div>
</div>
</div><!-- end container -->

<div class="container">
	<div class="row">
		<div class="sevencol">
			<?php 
				$portfolioCF = get_post_meta($post->ID, 'portfolio_images', true);
				if ($portfolioCF != "") {
					$images = explode(",", $portfolioCF);
					foreach ($images as $image) {
			?>			
				<img src="<?php 
						echo bloginfo('template_directory');
						echo $images[0]; ?>" alt="<?php the_title(); ?>" />
			<?php
					}
				}
			?>

		</div>
		<div class="fivecol last">
			<?php the_title(); ?>
		</div>	
	</div>
	
</div>



<?php get_footer(); ?>