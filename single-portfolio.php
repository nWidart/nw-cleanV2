<?php
/*
Template Name: Portfolio Single post
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
</div><!-- end container  -->

<div class="container content">

	<div class="row">
		<div class="sixcol">
			<?php 
				$mb = get_post_meta($post->ID, $custom_metabox->get_the_id(), true);
				// $portfolioCF = mb['projects_img'];
				echo $mb['projects_img'];
				if ($portfolioCF != "") {
					$images = explode(",", $portfolioCF);
					foreach ($images as $image) {
			?>

				<img src="<?php 
						echo bloginfo('template_directory');
						echo $image; ?>" alt="<?php the_title(); ?>" />
			<?php
					
					}
				}
			?>

		</div>
		
		<div class="sixcol last">
			<?php
					global $custom_metabox; 
					// get the meta data for the current post
					$custom_metabox->the_meta('project_url');
					
					print_r($custom_metabox) ;
				?>
			<h2><?php the_title(); ?></h2>
		
			<div class="the_content"><?php the_content(); ?></div>
				
			
			<?php 
				$projectUrl = get_post_meta($post->ID, 'project_url', true); 
				if ($projectUrl != "") {
			?>
				<a href="<?php echo get_post_meta($post->ID, 'project_url', true); ?>" class="btn btn-primary" rel="twipsy" title="Visit: <?php the_title(); ?>">Visit the website <i class="icon-share-alt icon-white"></i></a>
			<?php		
				} else {
			?>
				<a class="btn btn-primary disabled">Visit the website <i class="icon-share-alt icon-white"></i></a>
			<?php	
				}
			?>
			
			

		</div>
		
	</div>
	
</div>



<?php get_footer(); ?>