<?php
$name = 'App GitHub';
$user_name = 'root';
$email = 'user@example.com';
$password = '';
$parrafo_1 = 'Este es el ejemplo de un párrafo obtenido desde archivo de configuración';

if(file_exists('configuration.php')) {
	include_once('configuration.php');
}
?>