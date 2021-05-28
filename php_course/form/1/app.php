<?php

  if( !(filter_has_var(INPUT_POST, 'nombre') && ( strlen(filter_input(INPUT_POST, 'nombre')) > 0 ) ) )
  {
      echo "El nombre es obligatorio <br>";
  }
  else {
      echo "NOMBRE: ". $_POST['nombre'] ."<br>";
  }


  if(isset($_POST['apellido']) && trim($_POST['apellido']) != "")
  {
      echo "APELLIDO: ". $_POST['apellido'] ."<br>";
  }
  else{
      echo "El apellido es obligatorio  <br>";
  }

  if (isset($_POST['terminos_y_condiciones'])){
      echo "Has aceptados los terminos y condiciones";
  }
  else{
      echo "No existes - <br>";
  }

  if(isset($_POST['ciudades'])){
      foreach ($_POST['ciudades'] as $cuidad){
          echo $cuidad ."<br>";
      }
  }
  else{
      echo "No le intereso viajas". "<br>";
  }

  if(isset($_POST['sexo'])){
      echo "Sexo: ". $_POST['sexo'];
  }else{
      echo "Sin genero";
  }
  ?>

  <pre>
      <?php
         print_r($_POST);
      ?>
  </pre>

