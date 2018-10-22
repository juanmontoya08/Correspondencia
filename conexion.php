<?php

$mysqli= new mysqli('192.168.20.5','correspondencia_cisp','kDVzc2oq8fzym3oV','correspondencia_cisp');
	if($mysqli->connect_error) {
		die('Error en la conexión' . $mysqli->connect_error);
	}

?>