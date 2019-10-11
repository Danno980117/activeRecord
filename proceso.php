<?php 
	include "Alumnos.php";

	$objAl=new Alumnos();
	extract($_POST);
	$objAl->nombres=$name;
	$objAl->apellidos=$lname;
	$objAl->dni=$dni;
	$objAl->sexo=$sexo;

	$objAl->guardar();
 ?>