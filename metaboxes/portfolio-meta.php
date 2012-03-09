<div class="my_meta_control"> 

	<label>Portfolio images</label>
	<p>
		<?php $mb->the_field('projects_img'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		<span>Enter url using this path : /library/projects_img/,</span>
	</p>
	<label>Project URL</label>
	<p>
		<?php $mb->the_field('project_url'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		<span>Enter the project URL with http://</span>
	</p>
	<h4>Documents</h4>
 
<a style="float:right; margin:0 10px;" href="#" class="dodelete-docs button">Remove All</a>
 
<p>Add documents to the library by entering in a title,
URL and selecting a level of access. Upload new documents
using the "Add Media" box.</p>
 <?php global $wpalchemy_media_access; ?>
<?php while($mb->have_fields_and_multi('docs')): ?>
<?php $mb->the_group_open(); ?>
 
    <?php $mb->the_field('title'); ?>
    <label>Title and URL</label>
    <p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></p>
 
    <?php $mb->the_field('link'); ?>
    <p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></p>
 
    <?php $mb->the_field('access'); ?>
    <p>
        <a href="#" class="dodelete button">Remove Document</a>
    </p>
 
<?php $mb->the_group_close(); ?>
<?php endwhile; ?>
 
<p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-docs button">Add Document</a></p>
 
    
</div>