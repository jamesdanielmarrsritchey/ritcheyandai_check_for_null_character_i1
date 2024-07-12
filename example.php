<?php
$location = realpath(dirname(__FILE__));
require_once $location . '/function.php';
$string = "Hello\0World\0";
$return = findNullCharacterPositions($string);
var_dump($return);