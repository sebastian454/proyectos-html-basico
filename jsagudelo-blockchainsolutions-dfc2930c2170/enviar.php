<?php
$destino= "blockchainsolutions2009@gmail.com";
$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$email= $_POST["email"];
$telefono= $_POST["telefono"];
$mensaje= $_POST["mensaje"];

$contenido = "Nombre: " .$nombre . "\nCorreo: " . $correo . "\ntelefono: " . $telefono . "\nMensaje: " . $mensaje;
mail($destino, "Contacto", $contenido);
header("Location:index.html");


?>

<form action="enviar.php" method="post">
  <div class="container">

  <div class="row">

    <div class="input-field col s12 m4 l4">
      <input id="first_name" type="text" class="validate" name="nombre" required>
      <label for="first_name">Nombres</label>
    </div>


      <div class="input-field col s12 m4 l4">
        <input id="celular" type="text" class="validate" name="correo" required>
        <label for="celular">Celular</label>
      </div>

      <div class="input-field col s12 m4 l4">
        <input id="email" type="email" class="validate" name="email" required>
        <label for="email">Email</label>
      </div>




    <div class="input-field col s12">
       <textarea id="textarea1" class="materialize-textarea" name="mensaje" required ></textarea>
       <label for="textarea1">Asunto</label>
     </div>

    <div class="row">
      <div class="center input-field col s12 m12 l12">
        <input class="center waves-effect waves-light btn indigo" type="submit" name="button">

        </button>

      </div>

    </div>

  </div>

</div>
</form>
