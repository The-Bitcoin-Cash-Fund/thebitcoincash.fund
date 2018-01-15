<?php

// Get the web server and filesystem base directory
$base_dir = __DIR__;
$protocol = empty($_SERVER['HTTPS']) ? 'http' : 'https';
$domain = $_SERVER['SERVER_NAME'];
$webRoot = str_replace($_SERVER['PHP_SELF'], '', $_SERVER['SCRIPT_FILENAME']);
$subDir = str_replace($webRoot, '', $base_dir);
$base_url_full = "${protocol}://${domain}${subDir}";
$base_url = $subDir;



/****************************
CREATE THE CONFIG ARRAY
*****************************/

return [
  'debug' => true,
  
  // Head meta tag info
  'title_pre'    => '',
  'title_post'   => ' | The Bitcoin Cash Fund',

  // Set the filesystem directory variables
  'fs_base'      => $base_dir . '/',
  'include_dir'  => $base_dir . '/includes/',

  // Set the webserver directory variables
  'base_url'     => $base_url . '/',
  'css_dir'      => $base_url . '/assets/css/',
  'js_dir'       => $base_url . '/assets/js/',
  'img_dir'      => $base_url . '/assets/img/',
  'svg_dir'      => $base_url . '/assets/svg/'
  
];

?>
