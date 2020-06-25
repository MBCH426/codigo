<?php
class model_activos
{
	public $codigo;
	public $descripcion;
	public $valor;
	public $cantidad;
    public $fechaingreso;
	public $hora;
	public $tipoactivo;
	public $observaciones;
	public $imagen;
	public $estatus;
	

	public function model_activos     ($codigo,$descripcion,$valor,$cantidad,$fechaingreso,$hora,$tipoactivo,$observaciones,$imagen,$estatus)
	{
		$this->codigo=$codigo;
		$this->descripcion=$descripcion;
		$this->valor=$valor;
		$this->cantidad=$cantidad;
	    $this->fechaingreso=$fechaingreso;
		$this->hora=$hora;
		$this->tipoactivo=$tipoactivo;
		$this->observaciones=$observaciones;
		$this->imagen=$imagen;
		$this->estatus=$estatus;
		

	}	
	public function setcodigo($codigo)
	{
		$this->codigo=$codigo;
	}
	public function getcodigo()
	{
		return $this->codigo;
	}

	public function setdescripcion($descripcion)
	{
		$this->descripcion=$descripcion;
	}
	public function getdescripcion()
	{
		return $this->descripcion;
	}
	public function setvalor($valor)
	{
		$this->valor=$valor;
	}
	public function getvalor()
	{
		return $this->valor;
	}
	public function setcantidad($cantidad)
	{
		$this->cantidad=$cantidad;
	}
	public function getcantidad()
	{
		return $this->cantidad;
	}
	public function setfechaingreso($fechaingreso)
	{
		$this->fechaingreso=$fechaingreso;
	}
	public function getfechaingreso()
	{
		return $this->fechaingreso;
	}
    public function sethora($hora)
	{
		$this->hora=$hora;
	}
	public function gethora()
	{
		return $this->hora;
	}

	public function settipoactivo($tipoactivo)
	{
		$this->tipoactivo=$tipoactivo;
	}
	public function gettipoactivo()
	{
		return $this->tipoactivo;
	}
	public function setobservaciones($observaciones)
	{
		$this->observaciones=$observaciones;
	}
	public function getobservaciones()
	{
		return $this->observaciones;
	}
	public function setimagen($imagen)
	{
		$this->imagen=$imagen;
	}
	public function getimagen()
	{
		return $this->imagen;
	}
	public function setestatus($estatus)
	{
		$this->estatus=$estatus;
	}
	public function getestatus()
	{
		return $this->estatus;
	}
	
}


?>