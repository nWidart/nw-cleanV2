<?php
//A check list
function check_list( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="check_list">', do_shortcode($content));
	return $content;
	
}
add_shortcode('check_list', 'check_list');


//an arrow list
function arrow_list( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="arrow_list">', do_shortcode($content));
	return $content;
	
}
add_shortcode('arrow_list', 'arrow_list');


//seperator
function divider( $atts, $content = null ) {
   return '<div class="p-seperator"></div>';
}
add_shortcode('divider', 'divider');



//button
	

function button( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'link'      => '#',
        'style'		  => 'no',
    ), $atts));
	
	if ($style == 'link') {	
	$out = "<a href=\""  .$link. "\"><div class=\"button visit\"><span class=\"icn_link\"></span>" .do_shortcode($content). "</div></a>";
   } else {
   	$out = "<a href=\""  .$link. "\"><div class=\"button visit\">" .do_shortcode($content). "</div></a>";
   }
   
   
    return $out;
}
add_shortcode('button', 'button');


// Help Note
function note_shortcode( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'type'	=> '',
	), $atts));
	
		
	switch ($type) {
    case "help":
        $span = '<span class="help"></span>';
        break;
    case "warning":
        $span = '<span class="warning"></span>';
        break;
}

   return '<div class="note">' .$span .'' . do_shortcode($content). '</div>';
}
add_shortcode('note', 'note_shortcode');


?>