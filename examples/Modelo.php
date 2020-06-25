<?php
class model_usuarios
{
	public $tipodocumento;
	public $documento;
	public $nombre;
	public $apellido;
	public $telefono;
	public $direccion;
	public $tipousuario;
	public $correo;
	public $contrasena;
	public $confirmarcontrasena;
	

	public function model_usuarios     ($tipodocumento,$documento,$nombre,$apellido,$telefono,$direccion,$tipousuario,$correo,$contrasena,$confirmarcontrasena)
	{
		$this->tipodocumento=$tipodocumento;
		$this->documento=$documento;
		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->telefono=$telefono;
		$this->direccion=$direccion;
		$this->tipousuario=$tipousuario;
		$this->correo=$correo;
		$this->contrasena=$contrasena;
		$this->confirmarcontrasena=$confirmarcontrasena;

	}	
	public function settipodocumento($tipodocumento)
	{
		$this->tipodocumento=$tipodocumento;
	}
	public function gettipodocumento()
	{
		return $this->tipodocumento;
	}

	public function setdocumento($documento)
	{
		$this->documento=$documento;
	}
	public function getdocumento()
	{
		return $this->documento;
	}
	public function setnombre($nombre)
	{
		$this->nombre=$nombre;
	}
	public function getnombre()
	{
		return $this->nombre;
	}
	public function setapellido($apellido)
	{
		$this->apellido=$apellido;
	}
	public function getapellido()
	{
		return $this->apellido;
	}
	public function settelefono($telefono)
	{
		$this->telefono=$telefono;
	}
	public function gettelefono()
	{
		return $this->telefono;
	}
	public function setdireccion($direccion)
	{
		$this->direccion=$direccion;
	}
	public function getdireccion()
	{
		return $this->direccion;
	}
	public function settipousuario($tipousuario)
	{
		$this->tipousuario=$tipousuario;
	}
	public function gettipousuario()
	{
		return $this->tipousuario;
	}
	public function setcorreo($correo)
	{
		$this->correo=$correo;
	}
	public function getcorreo()
	{
		return $this->correo;
	}
	public function setcontrasena($contrasena)
	{
		$this->contrasena=$contrasena;
	}
	public function getcontrasena()
	{
		return $this->contrasena;
	}
	
	public function setconfirmarcontrasena($confirmarcontrasena)
	{
		$this->confirmarcontrasena=$confirmarcontrasena;
	}
	public function getconfirmarcontrasena()
	{
		return $this->confirmarcontrasena;
	}
	
	
}


?>