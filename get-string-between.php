<?php

/*
  This code is not by me, is from (as far I know):
  http://www.justin-cook.com/2006/03/31/php-parse-a-string-between-two-strings/
*/

  function get_string_between( $string, $start, $end ){
    $startPos = strpos( $string, $start );

    if ( $startPos === false ) { return ( false ); } //No exists

    $startPos += strlen( $start );
    $lengthString = strpos($string, $end, $startPos) - $startPos;
    
    return substr ($string, $startPos, $lengthString);
  }

  $fullstring = 'I\'m going to parse this string, I want the word <this>dog</this>, but not the others';
  $parsed = get_string_between ( $fullstring, '<this>', '</this>' );

  echo $parsed . "\n"; // (result = dog)
