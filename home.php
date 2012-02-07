<?php get_header(); ?>

<div id="slider">
	<div class="flexslider">
		    <ul class="slides">
	    	<li>
	    		<img src="<?php bloginfo('stylesheet_directory') ?>/library/img/slider/as.jpg" />
	    	</li>
	    	<li>
	    		<img src="<?php bloginfo('stylesheet_directory') ?>/library/img/slider/as.jpg" />
	    	</li>
	    	<li>
	    		<img src="<?php bloginfo('stylesheet_directory') ?>/library/img/slider/as.jpg" />
	    	</li>
	    	<li>
	    		<img src="<?php bloginfo('stylesheet_directory') ?>/library/img/slider/as.jpg" />
	    	</li>
	    	<li>
	    		<img src="<?php bloginfo('stylesheet_directory') ?>/library/img/slider/as.jpg" />
	    	</li>
	    	<li>
	    		<img src="<?php bloginfo('stylesheet_directory') ?>/library/img/slider/as.jpg" />
	    	</li>
		    </ul>
	</div>
</div><!-- end #Slider -->

<div class="container quote">
	<div class="row">
		<div class="quote-top"></div><!-- end quote-top -->
			<p><em>CSS</em>, <em>HTML</em>, <em>Photoshop</em>, <em>Wordpress</em><br />Yes you're right, I'm a <em>webdesigner</em> and I love it!</p>
		<div class="quote-bottom"></div><!-- end quote bottom -->
	</div>
</div><!-- end  quote -->

<div class="container">
  <div class="row">
    <h2>What I can do for you</h2>
    <?php include('library/php/skillset.php'); ?>
  </div>
</div><!-- end skill set -->

<?php get_footer(); ?>