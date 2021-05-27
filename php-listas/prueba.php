<?php



   // echo $_GET[ 'nom' ]. $_GET[ "lista" ] * 1000;


  if( $_GET['operar'] == "suma" )
  {
      echo $_GET[ 'valor1' ] + $_GET[ 'valor2' ];
  }


  if( $_GET['operar'] == "Resta" )
  {
      echo $_GET[ 'valor1' ] - $_GET[ 'valor2' ];
  }
  
  if( $_GET['operar'] == "multiplica" )
  {
      echo $_GET[ 'valor1' ] * $_GET[ 'valor2' ];
  }

  if( $_GET['operar'] == "Divide" )
  {
      echo $_GET[ 'valor1' ] / $_GET[ 'valor2' ];
  }


  