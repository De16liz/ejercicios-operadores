
<!-- formulario -->

<form action="prueba2.php" method="GET"><!-- Apertura del formulario -->

    <input type="text" name="v1"><!-- escribr el texto1 -->
    <br><!-- salto de linea -->
    <input type="text" name="v3"><!-- escribr el texto3 -->
    <br><!-- salto de linea -->
    <input type="text" name="v4"><!-- escribr el texto4 -->
    <br><!-- salto de linea -->

    <input type="submit" value="Enviar"><!-- Boton -->

    <select name="v2" ><!-- lista -->

        <?php

            //Inicio de conexion
            $conexion = mysqli_connect( "localhost", "root", "", "traductorn" );

            //construccion de una consulta
            $sql = "SELECT glosario FROM tb_traductor ";
            //echo $sql;
            $resultado =  $conexion->query( $sql );//ejecuta la consulta

            //recorre los datos que arroja la consulta
            while( $fila = mysqli_fetch_array( $resultado ))
            {
                $tmp = $fila[ 'glosario'];//captura la columna
                //imprime items de la lista
                echo "<option value= '$tmp'>$tmp</option>";
            }

        ?>

    </select><!--  termina lista -->

</form><!--cierra formulario -->