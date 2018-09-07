<?php
	include('connect.php');

	$iterador=10;

	$nombre='';
	$descripcion='';
	$precio='';
	$imagen='';

	if(isset($_POST['nombre'])){
		$nombre = $_POST['nombre'];
	}
	if(isset($_POST['descripcion'])){
		$descripcion = $_POST['descripcion'];
	}
	if(isset($_POST['precio'])){
		$precio = $_POST['precio'];
	}
	if(isset($_POST['imagen'])){
		$imagen = $_POST['imagen'];
	}

	$sqlInsert = "INSERT into carrocompras(nombre,descripcion,precio,imagen) VALUES ('$nombre', '$descripcion', '$precio','$imagen')";

	if (mysqli_query($enlace, $sqlInsert)) {
		echo 1;
	}

	else{
		echo 0;
	}
?>