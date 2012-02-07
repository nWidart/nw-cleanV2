<?php
/*
Template Name: Portfolio Single
*/
?>

<?php get_header(); ?>

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
			<?php echo previous_page_not_post(''); ?>
	</div>

	<div class="fourcol">
		<a href="site/portfolio-iso" rel="twipsy" title="Back to Portfolio" alt="Back to Portfolio">
			<div class="back">	
			</div>
		</a>
	</div>
		
	<div class="fourcol last next">
		<?php echo next_page_not_post(''); ?>
	</div>
</div>
</div><!-- end container -->
<?php get_footer(); ?>