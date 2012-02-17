<div class="threecol last sidebar">
      <ul>
				<form role="search" method="get" id="searchform" action="http://nicolaswidart.com/site/">
					<div>
						<input type="text" value="" name="s" id="s" class="search-input" placeholder="Type something you want to find"/>
						<!-- <input type="submit" id="searchsubmit" value="Go" class="search-go"/> -->
					</div>
				</form>
			</ul>
			<h3>Welcome on my blog!</h3>
			<p>First, I believe that this nation should commit itself to achieving the goal, before this decade is out, of landing a man on the moon and returning him safely to the earth.</p>
			<h3>Categories</h3>
			<ul class="ul-list">
				<?php wp_list_cats('sort_column=name&optioncount=0&hierarchical=0Ž&hide_empty=0'.$exclude); ?>
			</ul>
			
			
    </div><!-- end sidebar -->