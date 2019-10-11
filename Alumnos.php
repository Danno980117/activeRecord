<?php 

 	class Alumnos{

 		private $connec;
 		public $id;
 		public $nombres;
 		public $apellidos;
 		public $dni;
 		public $sexo;


 		function __construct(){
 			include "DB.php";
 			$this->connec=new DB();
 		}

 		function guardar(){
 			$conexion=$this->connec->conexion;

 			$query="insert into alumnos values(null,?,?,?,?)";

 			if(!($sentencia=$conexion->prepare($query))){
 				echo $conexion->error;
 			}

 			if(!($sentencia->bind_param("ssss",$this->nombres,$this->apellidos,$this->dni,$this->sexo))){
 				echo $conexion->error;
 			}

 			$sentencia->execute();

 		}

 		function buscar(){}

 		function listar(){
 			$conexion=$this->connec->conexion;
 			$query="select nombres, apellidos, dni, sexo from alumnos";
 			$data=$conexion->query($query);
 			while($campo=$data->fetch_assoc()){
 				echo $campo['nombres'], "",
 					$campo['apellidos'], "",
 					$campo['dni'], "",
 					$campo['sexo'];
 			}
 		}

 		function borrar(){}

 		function editar(){}

 		function actualizar(){}


 	} 
 ?>