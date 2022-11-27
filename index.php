<?php
// config
require_once 'config.php';

// views
require_once SOURCE_BASE . 'partials/header.php';

$method = strtolower($_SERVER['REQUEST_METHOD']);
echo $method;

$rpath = str_replace('/image-uploader/', '', CURRENT_URI);
// echo $rpath;

if ($rpath === '') {
  $rpath = 'home';
}


require_once SOURCE_BASE . "controllers/{$rpath}.php";
$fn = "\\controller\\{$rpath}\\{$method}";
$fn();

require_once SOURCE_BASE . 'partials/footer.php';
