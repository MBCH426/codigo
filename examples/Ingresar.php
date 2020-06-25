
<?php

session_start();

require("Dao.php");
require("Modelo.php");
require("ModeloProducto.php");


$registrar1='';
$registrar2='';
$inicio='';
$guardar='';
$modificar='';
$eliminar='';
$prestamo='';


 

if(isset($_POST['registrar1']))$registrar1=$_POST['registrar1'];
if(isset($_POST['registrar2']))$registrar2=$_POST['registrar2'];
if(isset($_POST['inicio']))$inicio=$_POST['inicio'];
if(isset($_POST['guardar']))$guardar=$_POST['guardar'];
if(isset($_POST['modificar']))$modificar=$_POST['modificar'];
if(isset($_POST['eliminar']))$eliminar=$_POST['eliminar'];

if(isset($_POST['prestamo']))$prestamo=$_POST[$prestamo];

	
    

 if($registrar2 )
 {
	 

	   $tipodocumento =$_POST['tipodedocumento'];
	   $documento =$_POST['documento'];
       $nombre     =$_POST['nombre'];
       $apellido   =$_POST['apellido'];
       $telefono   =$_POST['telefono'];
       $direccion =$_POST['direccion'];
	    $tipousuario =$_POST['tipodeusuario'];
	    $correo =$_POST['correo'];
	    $contrasena =$_POST['contrasena'];
	    $confirmarcontrasena =$_POST['confirmarcontrasena'];
	 
	   $mod_usuario = new model_usuarios($tipodocumento,$documento,$nombre,$apellido,$telefono,$direccion,$tipousuario,$correo,$contrasena,$confirmarcontrasena); 
       $s = new dao_usuarios();
       $l = $s -> insertar1($mod_usuario);
	 
 }

if($guardar )
 {
	 

	   $codigo =$_POST['codigo'];
	   $descripcion =$_POST['descripcion'];
       $valor     =$_POST['valor'];
       $cantidad   =$_POST['cantidad'];
       $fechaingreso   =$_POST['fechaingreso'];
	   $hora =$_POST['hora'];
	    $tipoactivo =$_POST['tipodeproducto'];
	    $observaciones =$_POST['observaciones'];
	    $imagen =$_FILES['imagen'];
	    $estatus='';
	
		if($tipoactivo == 'Tipo'  ){
			
			echo "<script>
                alert('No seleccionó Tipo de Activo');
                window.location= 'http://localhost:8080/ProyectoSena1/examples/registerPruduc.php'
                </script>";
		}else{
	    
	 
	   $mod_producto = new model_activos($codigo,$descripcion,$valor,$cantidad,$fechaingreso,$hora,$tipoactivo,$observaciones,$imagen,$estatus); 
       $jj = new dao_usuarios();
       $mm = $jj -> insertarproducto($mod_producto);
		}
	 
 }
if($modificar)
 {
	 

	   $codigo =$_POST['codigo'];
	   $descripcion =$_POST['descripcion'];
       $valor     =$_POST['valor'];
       $cantidad   =$_POST['cantidad'];
       $fechaingreso   =$_POST['fechaingreso'];
	   $hora =$_POST['hora'];
	    $tipoactivo =$_POST['tipodeproducto'];
	    $observaciones =$_POST['observaciones'];
	    $imagen =$_FILES['imagen'];
	   $estatus =$_POST['estatus'];
	    
	 
	   $mod_producto = new model_activos($codigo,$descripcion,$valor,$cantidad,$fechaingreso,$hora,$tipoactivo,$observaciones,$imagen,$estatus); 
       $jl = new dao_usuarios();
       $mr = $jl -> modificarproducto($mod_producto);
	 
 }
if($prestamo)
 {
	 

	   $codigo =$_POST['codigo'];
	   $descripcion =$_POST['descripcion'];
       $fechaingreso   =$_POST['fechainicio'];
	   $hora =$_POST['horainicio'];
	    $tipoactivo =$_POST['tipodeproducto'];
       $fechaingreso   =$_POST['fechafin'];
	   $hora =$_POST['horafin'];
	 
	   $mod_producto = new model_activos($codigo,$descripcion,$valor,$cantidad,$fechaingreso,$hora,$tipoactivo,$observaciones,$imagen); 
       $jl = new dao_usuarios();
       $mr = $jl -> modificarproducto($mod_producto);
	 
 }


if($registrar1 )
 {
	 

	   $tipodocumento =$_POST['tipodedocumento'];
	   $documento =$_POST['documento'];
       $nombre     =$_POST['nombre'];
       $apellido   =$_POST['apellido'];
       $telefono   =$_POST['telefono'];
       $direccion =$_POST['direccion'];
	   $tipousuario =$_POST['tipodeusuario'];
	    $correo =$_POST['correo'];
	    $contrasena =$_POST['contrasena'];
	    $confirmarcontrasena =$_POST['confirmarcontrasena'];
	 
	   $mod_usuario = new model_usuarios($tipodocumento,$documento,$nombre,$apellido,$telefono,$direccion,$tipousuario,$correo,$contrasena,$confirmarcontrasena); 
       $s = new dao_usuarios();
       $l = $s -> insertar($mod_usuario);
	 
 }

    
	 
?>
	