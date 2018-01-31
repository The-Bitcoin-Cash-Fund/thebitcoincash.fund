<?php
// Get the web server and filesystem base directory
$base_dir = __DIR__;
$protocol = empty($_SERVER['HTTPS']) ? 'http' : 'https';
$domain = $_SERVER['SERVER_NAME'];

$phpSelf = $_SERVER['PHP_SELF'];
$scriptFilename = $_SERVER['SCRIPT_FILENAME'];
$webRoot = str_replace($phpSelf, '', $scriptFilename);

$subDir = str_replace($webRoot, '', $base_dir);
$baseUrlFull = "${protocol}://${domain}${subDir}";
$base_url = $subDir;

$pathWithoutBase = str_replace($base_url, '', $phpSelf);
$array = explode('/', $pathWithoutBase);

if ($array[1] == 'index.php') {
  $currentPage = 'home';  
} else {
  $currentPage = $array[1];
}


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
  'svg_dir'      => $base_url . '/assets/svg/',

  // Get the current root directoy (minus base_url)
  'current_page' => $currentPage
];

?>
