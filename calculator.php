<?php

//Menu
function menu(){
  printf ("CALCULADORA\n");
  printf ("\n1.Sumar\n");
  printf ("2.Restar\n");
  printf ("3.Multiplicar\n");
  printf ("4.Dividir\n");
  printf ("5.Potencia\n");
  printf ("6.Raiz\n");
  printf ("7.Salir\n");
  $option = readline("\nDigite su opcion:\n");

  return( $option );
}

//Sumar
function sumar() {
  $d1 = readline("Ingrese un sumando: ");
  $d2 = readline("Ingrese otro sumando: ");

  $r = $d1 + $d2;
  printf("El resultado es: %d", $r);
}

//Restar
function restar() {
  $d1 = readline("Ingrese el minuendo: ");
  $d2 = readline("Ingrese el sustraendo: ");

  $r = $d1 - $d2;
  printf("El resultado es: %d", $r);
}

//Multiplicar
function multiplicar() {
  $d1 = readline("Ingrese un factor: ");
  $d2 = readline("Ingrese otro factor: ");

  $r = $d1 * $d2;
  printf("El resultado es: %d", $r);
}

//Dividir
function dividir() {
  $d1 = readline("Ingrese el dividendo: ");
  $d2 = readline("Ingrese el divisor: ");

  if ( $d2 == 0 ){
    printf("Syntax error");
  } else {
    $r = $d1 / $d2;
    printf("El resultado es: %d", $r);	
  }
}

//Potenciar
function potencia() {
  $d1 = readline("Ingrese la base: ");
  $d2 = readline("Ingrese el exponente: ");

  $d3=$d1;
  for ( $d4=1; $d4 < $d2; $d4++ ) {
    $d3=$d3*$d1;
  }
  printf("El resultado es: %d", $d3);
}

//Radicar
function radicar() {
  printf("Introduzca el radicando: ");

  $d1 = sqrt ( $d1 );
  printf("El resultado es: %f", $d1);
}

//Salir
function salir(){
	exit ( 0 );
}


function validar( $option ){
  switch( $option ){
    case 1:
      sumar();
    break;
    case 2:
      restar();
    break;
    case 3:
      multiplicar();
    break;
    case 4:
      dividir();
    break;
    case 5:
      potencia();
    break;
    case 6:
      radicar();
    break;
    case 7:
      salir();
    break;
    default:
      printf ("\n\nOpcion invalida");
  }
}

$option = menu();
validar( $option );
