<div class="threecol last sidebar">
      <ul>
				<form role="search" method="get" id="searchform" action="http://nicolaswidart.com/site/">
					<div>
						<?php get_search_form(); ?>
					</div>
				</form>
			</ul>
			<h3>Welcome on my blog!</h3>
			<p>Welcome, this is the place where I'll talk about web stuff. You'll also find some tricks, latest info about projects I'm working on, and much more.</p>
			<h3>Categories</h3>
			<ul class="ul-list">
				<?php wp_list_cats('sort_column=name&optioncount=0&hierarchical=0Ž&hide_empty=0'.$exclude); ?>
			</ul>
			<h3>Tags</h3>
			<ul class="ul-list">
		<?php
			$arr = wp_tag_cloud(array(
				'smallest'  => 12,                      // font size for the least used tag
				'largest'   => 12,                    // font size for the most used tag
				'unit'      => 'px',                 // font sizing choice (pt, em, px, etc)
				'number'    => 200,                 // maximum number of tags to show
				'format'    => 'array',            // flat, list, or array. flat = spaces between; list = in li tags; array = does not echo results, returns array
				'separator' => '',                      //
				'orderby'   => 'name',           // name = alphabetical by name; count = by popularity
				'order'     => 'RAND',          // starting from A, or starting from highest count
				'exclude'   => '',                      // ID's of tags to exclude, displays all except these
				'include'   => '',                      // ID's of tags to include, displays none except these
				'link'      => 'view',             // view = links to tag view; edit = link to edit tag
				'taxonomy'  => 'post_tag',    // post_tag, link_category, category - create tag clouds of any of these things
				'echo'      => true                 // set to false to return an array, not echo it
			));
			foreach ($arr as $value) {
				$ptr1 = strpos($value,'font-size:');
				$ptr2 = strpos($value,'px');
				$px = round(substr($value,$ptr1+10,$ptr2-$ptr1-10));
				$value = substr($value, 0, $ptr1+10) . $px . substr($value, $ptr2);
				$ptr1 = strpos($value, "class=");
				$value = substr($value, 0, $ptr1+7) . 'color-' . $px . ' ' . substr($value, $ptr1+7);
				echo '<li>' . $value . '</li> ';
			}
		?>
	</ul>
			
    </div><!-- end sidebar -->