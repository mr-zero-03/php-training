<?php

//Call this file with php double_include.php. If you want to make the double include you have to send as a parameter 'double_include'

$is_include_include = false;
if ( isset( $argv[1] ) && $argv[1] === 'double_include' ) {
  $is_include_include = true;
}

include ( include ('include1.php') );  //Double include to include what the include1.php returns
