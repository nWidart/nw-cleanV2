<?php
/*
Template Name: Portfolio
*/
?>
<?php get_header(); ?>

<div class="container breadcrump">
  <div class="row">
    <p>You are here: <a href="">Home</a> » Portfolio</p>
  </div>
</div><!-- end breadcrump -->


<div class="container filter">
	<div class="row">
	<h2>Portfolio</h2>
		<ul id="filters">
		  <li class="all"><a href="#" data-filter="*">show all</a></li>
		  <li><a href="#" data-filter=".webdesign" rel="twipsy" title="Only show webdesign related items">Webdesign</a></li>
		  <li><a href="#" data-filter=".logo" rel="twipsy" title="Only show logo related items">Logo design</a></li>
		  <li><a href="#" data-filter=".mobile" rel="twipsy" title="Only show mobile related items">Mobile applications</a></li>
		  <li><a href="#" data-filter=".misc" rel="twipsy" title="Everything else">Miscelaneous</a></li>
		</ul>  </div>
</div><!-- end filter -->

<div class="container hover-image">
  <div class="row" id="gallery">
		<?php
			query_posts("posts_per_page=-1&post_type=page&post_parent=53");
			while (have_posts()) : the_post(); 
			$category = get_post_meta($post->ID, 'Category', true);
		?>
   
		<div class="item element <?php echo $category; ?>">
			
			<figure>
				<a href="<?php echo get_permalink() ?>">
					<?php if (has_post_thumbnail( $post->ID ) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
					
					<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
					
					<?php endif; ?>
					
					
				</a>
			</figure>
		
			<a class="item-title" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
			<div class="item-desc">
					<p><?php echo limit_words(get_the_excerpt(), '40'); ?></p>
			</div>
			<div class="meta"><span class="the-date"><?php the_time('F jS, Y') ?></span></div>
			<a class="btn btn-primary" href="<?php echo get_permalink() ?>" rel="twipsy" title="View more about <?php the_title(); ?>">View more <i class="icon-share-alt icon-white"></i></a>
		</div><!-- end item -->
		<?php endwhile; wp_reset_query(); ?>
		
		
		
		
			
		
  </div><!-- end row -->
</div><!-- end portfolio gallery -->



<?php get_footer(); ?>