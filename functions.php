<?php

function newtheme_files() {
  wp_enqueue_style('newtheme_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts',  'newtheme_files');