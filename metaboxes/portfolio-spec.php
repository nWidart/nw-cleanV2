<?php

$custom_metabox = $simple_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_pf-meta',
	'title' => 'Portfolio meta',
	'types' => array('portfolio'),
	'autosave' => TRUE,
	'template' => get_stylesheet_directory() . '/metaboxes/portfolio-meta.php',
));

/* eof */