<?php
 class Conexionbasededatos1
{
	public $server;
	public $usuario;
	public $contrasena;
	public $BaseDeDatos;
	public $conexion;
	
	

	public function Conexionbasededatos1()
      {
	     $this->server = "Localhost";
	     $this->usuario = "root";
	     $this->contrasena  ="";
	     $this->BaseDeDatos = "proyecto_sena";
	
	     	
		      
      }
	  public function conectar()
      {
	
	     $conexion = mysqli_connect($this->server, $this->usuario, $this->contrasena, $this->BaseDeDatos)or die("Error en la conexion con la base de datos");
		

	        if($conexion)
			{
				echo"";
				
				 
			}else{
				echo"error";
			}

			return $conexion;
		      
      }
}
	
?>