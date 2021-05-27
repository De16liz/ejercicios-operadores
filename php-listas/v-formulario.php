
<form action="prueba.php">

  <label for="cars">Choose a car:</label>

  <select id="cars" name="lista">
    <option value= "1">Uno</option>
    <option value= "2">Dos</option>
    <option value="3">Tres</option>
    <option value="4">Cuatro</option>
  </select>

  <input type="submit">
  <input type="text" name="nom">

</form>


<!--Calculadora -->

<form action="prueba.php">
  numero 1 <input type="text" name="valor1"> <br>
  numero 2 <input type="text" name="valor2"> <br>

  <select id="cars" name="operar">
      <option value= "suma">Suma</option>
      <option value= "Resta">Resta</option>
      <option value="multiplica">multiplica</option>
      <option value="Divide">Divide</option>
    </select>

    <input type="submit">

</form>


<!--Números hasta mil -->
<form action="prueba.php">
  
  <select id="cars" name="numeros">

    <?php

      for( $i = 1 ; $i<=1000 ; $i ++){

        echo " <option value= '$i'>$i</option> ";
      }
    ?>
      
  </select>

</form>

<!--Calendario -->

<form action="prueba.php">
  
  <select id="cars" name="an">

    <?php

      for( $i = 1900 ; $i<=2021 ; $i ++){

        echo " <option value= '$i'>$i</option> ";
      }
    ?>
      
  </select>

  <select id="cars" name="mes">

    <?php

      for( $j = 1 ; $j<=12 ; $j ++){

        echo " <option value= '$j'>$j</option> ";
      }
    ?>
      
  </select>

  <select id="cars" name="dia">

    <?php

      for( $l = 1 ; $l<=30 ; $l ++){

        echo " <option value= '$l'>$l</option> ";
      }
    ?>
      
  </select>

</form>