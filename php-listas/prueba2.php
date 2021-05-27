<?php

  $a = $_GET[ 'v1'];//primer variable
  $b = $_GET[ 'v3']; //segunda variable
  $c = $_GET[ 'v4'];//primer variable

  //COnexion
$conexion = mysqli_connect( "localhost", "root", "", "traductorn" );
//entra sql que se va a ejecutar
$sql = " INSERT INTO tb_idioma( idioma, glosario, termino, fecha)";

$sql .= " VALUES '$a', '$b', '$c' ) ";//continuacion de  la linea
//echo $sql;

$resultado =  $conexion->query( $sql );//ejecuta la consulta

if( mysqli_affected_rows( $conexion ) > 0)
{
    echo "Se añadio idioma nuevo";
}
else{
    echo "No se añadio idioma nuevo";
}

?>