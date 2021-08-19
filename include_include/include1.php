<?php

echo 'I am the file include1.php';

if ( $is_include_include ){
  return 'include2.php';  //Returns the name of the file to include

} else {
  echo "\n\nIs not include_include, if you want to include_include send the parameter 'double_include'\n";
  die();
}
