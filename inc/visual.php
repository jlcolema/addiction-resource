<?php

/**

 * Custom functions that act independently of the theme templates

 *

 * Eventually, some of the functionality here could be replaced by core features

 *

 * @package Rehab Panther

 */

// Add Custom Quicktags to Text Editor

function quick_jump_quicktags() {



  if ( wp_script_is( 'quicktags' ) ) { ?>

    <script type="text/javascript">

      QTags.addButton( 'h2_tag', 'h2 quick jump', '<h2><span id="XXXXXXXXXXXXXX" class="jump-anchor"></span>', '</h2>', '', '', 1 );

      QTags.addButton( 'ul_tag', 'Column List', '<ul class="list2">', '</ul>', '', '', 1 );
	  
	    QTags.addButton( 'ul_tag2', '2 Column List', '<ul class="columnList2">', '</ul>', '', '', 2 );
      QTags.addButton( 'ul_tag3', '3 Column List', '<ul class="columnList3">', '</ul>', '', '', 3 );
      QTags.addButton( 'ul_tag4', '4 Column List', '<ul class="columnList4">', '</ul>', '', '', 4 );

      QTags.addButton( 'h2_first', 'h2 First Element', '<h2 class="first-element">', '</h2>', '', '', 1 );

      QTags.addButton( 'p_first', 'p First Element', '<p class="first-element">', '</p>', '', '', 1 );
      QTags.addButton( 'div_location', 'Location Info', '<div class="location-info"><p>Location and contact information:</p>', '</div>', '', '', 1 );

      QTags.addButton( 'content_button_1', 'Content Btn 1', '<a class="btn btn-md btnContent" href="/url-here/">Button Text', '</a>', '', '', 1 );

    </script>

  <?php }



}

add_action( 'admin_print_footer_scripts', 'quick_jump_quicktags' );

