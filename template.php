<?php
if (drupal_is_front_page()) {
    drupal_add_js(drupal_get_path('theme', 'cerap').'/js/jquery.cycle.all.js');
    drupal_add_js(drupal_get_path('theme', 'cerap') . '/js/isotope.pkgd.min.js');
    drupal_add_js(drupal_get_path('theme', 'cerap') . '/js/jquery.fittext.js');
    drupal_add_js(drupal_get_path('theme', 'cerap') . '/js/functions.js');
  }else{
    drupal_add_js(drupal_get_path('theme', 'cerap') . '/js/jcaption.min.js');
    drupal_add_js(drupal_get_path('theme', 'cerap') . '/js/isotope.pkgd.min.js');
    drupal_add_js(drupal_get_path('theme', 'cerap') . '/js/jquery.fittext.js');
    drupal_add_js(drupal_get_path('theme', 'cerap') . '/js/functions-the.js');
  }
; ?>

