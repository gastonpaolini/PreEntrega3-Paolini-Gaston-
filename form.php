<?php

$nombre = $_POST["name"];
$apellido = $_POST["surname"];
$email = $_POST["email"];
$tel = $_POST["tel"];

$mensaje = "Este mensaje fue enviado por" . $nombre . ",\r\n";
$mensaje .= "Su e-mail es" . $email . ",\r\n";
$mensaje .= "Mensaje" . $_POST["mensaje"] . ",\r\n";
$mensaje .= "Enviado el " . date("d/m/Y", time());


$para = "gaston_pao@live.com"
$asunto = "Este mail fue enviado desde la WEB"

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:gracias.html")

?>