<?php

$destino= "barajad89@gmail.com";

$nombre= $_POST["nombre"];

$email= $_POST["email"];

$comentarios= $_POST["comentarios"];

$correo= "Nombre: " . $nombre . "\nE-Mail: " . $email . "\nComentarios: " . $comentarios;



mail($destino, "Catrina Softec Page", $correo);
header("Location:correo.html");

?>