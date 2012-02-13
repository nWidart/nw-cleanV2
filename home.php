<?php get_header(); ?>

<div class="container featured">
	<div class="row">
		<?php if(function_exists('displayDDSlider')) { echo displayDDSlider(array(name=>"Featured")); } ?>	
	</div>

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
    <h2>What I can do for you</h2>
    <?php include('library/php/skillset.php'); ?>
  </div>
</div><!-- end skill set -->

<?php get_footer(); ?>