<div class="container footer">
  <div class="row">
    <div class="fourcol">
    	<h5>Latest Article</h5>
    	
    	<?php if ( ! dynamic_sidebar( 'First Footer Widget Area' ) ) : ?>
    	<ul>
    		<li><a href="">Default Styling</a></li>
    		<li><a href="">Default Styling</a></li>
    		<li><a href="">Default Styling</a></li>
    		<li><a href="">Default Styling</a></li>
    	</ul>
    	<?php endif; ?>
    </div>
    
    <div class="fourcol">
      <h5>Ressources</h5>
      <?php if ( ! dynamic_sidebar( 'Second Footer Widget Area' ) ) : ?>
      <ul>
    		<li><a href="">Default Styling</a></li>
    		<li><a href="">Default Styling</a></li>
    		<li><a href="">Default Styling</a></li>
    		<li><a href="">Default Styling</a></li>
    	</ul>
    	<?php endif; ?>
    </div>
    
    <div class="fourcol last">
     <h5>Tweets</h5>
     <?php if ( ! dynamic_sidebar( 'Third Footer Widget Area' ) ) : ?>
     <ul>
    		<li><a href="">Default Styling</a></li>
    		<li><a href="">Default Styling</a></li>
    		<li><a href="">Default Styling</a></li>
    		<li><a href="">Default Styling</a></li>
    	</ul>
    	<?php endif; ?>
    </div>
    
  </div>
  
</div><!-- end footer  -->

<div class="container footer2">
  <div class="row">
    <div class="sixcol">
      <p>Copyright <a href="<?php bloginfo('url'); ?>">Nicolas Widart</a> | Proudly powered by <a href="http://www.wordpres.org">Wordpress</a>.
				<!-- Place this tag where you want the +1 button to render -->
<g:plusone size="small" annotation="inline" width="120"></g:plusone></p>
    </div>
    <div class="sixcol last">
     <?php wp_nav_menu (array('menu'=>'Main Navigation Menu')); ?>
    </div>
  </div>
</div><!-- end footer-dark -->

<script src="<?php bloginfo('stylesheet_directory') ?>/library/js/functions.js"></script>
<script type="text/javascript">
	var $container = $('#gallery');
	
	$container.imagesLoaded( function(){
	
			$('#gallery').isotope({
		  // options
		  itemSelector : '.item',
		  layoutMode : 'masonry',
		  masonry : {
		  	columnWidth: $('.item').width() / 8,
		  },
		  resizable : 'false',
			animationEngine : 'jquery',
			animationOptions: {
				duration : 500,
				easing: 'linear',
				queue : false
			}
		});
		
		$('#filters a').click(function(){
		  var selector = $(this).attr('data-filter');
		  $('#gallery').isotope({ filter: selector });
		  
		  //Adding the class
		  
		  var $filterType = $('#filters li.active a').attr('class');
		  $('#filters li').removeClass('active');
  		var $filterType = $(this).attr('class');
			$(this).parent().addClass('active');
			
			if ($filterType == 'all') {
				// assign all li items to the $filteredData var when
				// the 'All' filter option is clicked
				var $filteredData = $data.find('li');
			} 
			else {
				// find all li elements that have our required $filterType
				// values for the data-type element
				var $filteredData = $data.find('li[data-type=' + $filterType + ']');
			}		  
		  return false;
		});
	});

$(window).smartresize(function(){
 $('#gallery').isotope({
    // update columnWidth to a percentage of container width
    masonry: { columnWidth: $('.item').width() / 8 }
  });
});
//hello world
</script>

</body>

</html>