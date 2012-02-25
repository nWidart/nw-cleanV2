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
        <div id="tweets">  
        <h6 id="error">There was a problem fetching tweets</h6>
        <h6 id="preload">Currently loading your tweets...</h6>
        </div><!-- end tweets -->
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


<script language="javascript" src="<?php bloginfo('stylesheet_directory') ?>/library/js/shCore.js"></script>
<script language="javascript" src="<?php bloginfo('stylesheet_directory') ?>/library/js/shBrushCss.js"></script>
<script language="javascript" src="<?php bloginfo('stylesheet_directory') ?>/library/js/shBrushXml.js"></script>
<script language="javascript" src="<?php bloginfo('stylesheet_directory') ?>/library/js/shBrushJScript.js"></script>
<script language="javascript" src="<?php bloginfo('stylesheet_directory') ?>/library/js/shBrushPhp.js"></script>
<script language="javascript" src="<?php bloginfo('stylesheet_directory') ?>/library/js/shBrushSql.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27833747-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script language="javascript">
dp.SyntaxHighlighter.ClipboardSwf = '/library/flash/clipboard.swf';
dp.SyntaxHighlighter.HighlightAll('code');
</script>
<script src="<?php bloginfo('stylesheet_directory') ?>/library/js/functions.js"></script>
<script type="text/javascript">
// Flexslider
$('.flexslider').flexslider({
  animation: "fade",
  animationDuration: 1000,
  slideshowSpeed: 5000,
});


// Isotope
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

//End filter script

// ------                                         --------/
//fixing the portfolio single page content if scrolled
// ------                                         --------/

$(document).ready(function () {
  var target = $('.content .last');
  var top = target.offset().top - parseFloat(target.css('marginTop').replace(/auto/, 0));

  $(window).scroll(function (event) {
    // what the y position of the scroll is
    var y = $(this).scrollTop();
    //checking if the content doesnt touch the footer (if it does , not fixed)
    var maxY = ( $('.footer').offset().top ) - ( target.height() );
      // whether that's below the footer
      if (y >= top && y < maxY) {
        // if so, ad the fixed class
        target.addClass('fixed');
      } else {
        // otherwise remove it
        target.removeClass('fixed');
      }
  });
});


// ------                                         --------/
//fixing the portfolio items navigation if scrolled
// ------                                         --------/
// $(document).ready(function () {
//   var target = $('.sub-nav .row');
//   var top = target.offset().top - parseFloat(target.css('marginTop').replace(/auto/, 0));

//   $(window).scroll(function (event) {
//     // what the y position of the scroll is
//     var y = $(this).scrollTop();
//     //checking if the content doesnt touch the footer (if it does , not fixed)
//     var maxY = ( $('.footer').offset().top ) - ( target.height() );
//       // whether that's below the footer
//       if (y >= top && y < maxY) {
//         // if so, ad the fixed class
//         target.addClass('fixed');
//         $('.sub-nav').addClass('fix');
//       } else {
//         // otherwise remove it
//         target.removeClass('fixed');
//         $('.sub-nav').removeClass('fix');
//       }
//   });
// });



</script>

<script type="text/javascript">
// DISQUS COMMENT COUNT SCRIPT

    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'nicolaswidart'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
       var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
</script>
<script
        type="text/javascript"
        data-lf-domain="http://www.nicolaswidart.com"
        src="http://zor.livefyre.com/wjs/v1.0/javascripts/CommentCount.js">
        //LiveFyre Comment Count
</script>
</body>

</html>