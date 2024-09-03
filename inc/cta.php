<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Rehab Panther
 */

function get_inline_cta($atts) {
  ob_start();
  get_template_part('/cta/inline-cta');
  return ob_get_clean();
}
add_shortcode('inline-cta', 'get_inline_cta');

function get_form($atts) {
  ob_start();
  get_template_part('form');
  return ob_get_clean();
}
add_shortcode('form', 'get_form');
