<?php

//Form-------------------
  function createForm ( $structure ) {

    $label = '';
    $input = '';

    foreach ( $structure as $key => $arrayNotUsed ) {

      if ( isset ( $structure [$key]['labelText'] ) && isset ( $structure [$key]['labelPos'] ) ) { //LABEL
        $label = '<label for="' . $structure [$key]['input']['id'] . '">' . $structure [$key]['labelText'] . '</label>';

        $structure [$key]['labelPos'] = strtolower ( $structure [$key]['labelPos'] );
        if ( $structure [$key]['labelPos'] === 'start' ) { $input .= $label; }
      }


      $input .= '<input '; //INPUT

      foreach ( $structure[$key]['input'] as $attribute => $value ) {

        $input .= $attribute . '="' . $value . '" ';

      }

      $input .= ' /> ';

      if ( isset ( $structure [$key]['labelPos'] ) ) { //LABEL END
        if ( $structure [$key]['labelPos'] === 'end' ) { $input .= $label; }
      }

      if ( isset ( $structure [$key]['br'] ) ) { $input .= $structure [$key]['br']; } //BR
    }
      
    return $input;

  }
    
//Structure---------------
  $formStructureArray = array (

    'name' => array (
      'labelText' => 'Name: ',
      'labelPos' => 'start',

      'input' => array (
        'type' => 'text',
        'id' => 'name',
        'name' => 'user[name]',
        'value' => '',
        'placeholder' => 'Name (Without numbers)',
        'required' => ''
      ),
      'br' => '<br/><br/>'
    ),

    'male' => array (
      'labelText' => 'Male',
      'labelPos' => 'end',

      'input' => array (
        'type' => 'radio',
        'id' => 'male',
        'name' => 'user[gender]',
        'value' => 'male',
        'required' => ''
      ),
    ),

    'female' => array (
      'labelText' => 'Female',
      'labelPos' => 'end',

      'input' => array (
        'type' => 'radio',
        'id' => 'female',
        'name' => 'user[gender]',
        'value' => 'female',
        'required' => ''
      ),
      'br' => '<br/><br/>'
    ),

    'age' => array (
      'labelText' => 'Age: ',
      'labelPos' => 'start',

      'input' => array (
        'type' => 'number',
        'id' => 'age',
        'name' => 'user[age]',
        'value' => '',
        'placeholder' => 'Age',
        'min' => '0',
        'required' => ''
      ),
      'br' => '<br/><br/>'
    ),

    'email' => array (
      'labelText' => 'Email: ',
      'labelPos' => 'start',
  
      'input' => array (
        'type' => 'email',
        'id' => 'email',
        'name' => 'user[email]',
        'value' => '',
        'placeholder' => 'Email',
        'required'
      )
    )
  );


  echo createForm($formStructureArray);
