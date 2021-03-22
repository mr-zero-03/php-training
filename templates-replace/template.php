<?php  
  $templateName = "hello";
  $stringTemplate = file_get_contents ( $templateName . '.template' );
  
  
  echo "THE HARD WAY:\n\n";
  function templateReplace( $stringReplace, $variablesReplace ){
    
    function changeKeys( $key ){
      return strtoupper( "%$key%" );
    }
    
    $keysChanged = array_map( "changeKeys", array_keys($variablesReplace) );
    
    //print_r( array_combine( $keysChanged, $variablesReplace ) );
    
    return strtr ( $stringReplace, array_combine($keysChanged, $variablesReplace) );
    
  }
  
  
  $variablesReplace = array(
    'name' => 'Santiago',  //%NAME%
    'nick-name' => 'MrZero03',  //%NICK-NAME%
    'template-name' => $templateName,  //%TEMPLATE-NAME%
  );
  
  echo templateReplace( $stringTemplate, $variablesReplace );


  //-----------------Or, if the array with the variables is organized is too easy:--------------------------
  
  echo "\n\n\n\nTHE EASY WAY:\n\n";
  $variablesReplaceEasy = array(
    '%NAME%' => 'Santiago',
    '%NICK-NAME%' => 'MrZero03',
    '%TEMPLATE-NAME%' => $templateName,
  );

  echo strtr( $stringTemplate, $variablesReplaceEasy );

?>
