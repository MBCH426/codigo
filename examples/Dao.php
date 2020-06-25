<?php



   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;
require_once("ConexionBase.php");


class dao_usuarios
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
	
	public $codigo;
	public $descripcion;
	public $valor;
	public $cantidad;
	public $fechaingreso;
	public $hora;
	public $tipoactivo;
	public $observaciones;
	public $imagen;
	
	function insertar(model_usuarios $post_model)
	{
		$tipodocumento =$post_model->tipodocumento;
	   $documeto =$post_model->documento;
       $nombre     =$post_model->nombre;
       $apellido   =$post_model->apellido;
       $telefono   =$post_model->telefono;
       $direccion  =$post_model->direccion;
	   $tipousuario  =$post_model->tipousuario;
	   $correo  =$post_model->correo;
	   $contrasena =$post_model->contrasena;
	   $confirmarcontrasena =$post_model->confirmarcontrasena;                             

		$query= "INSERT INTO usuarios(TipoDocumento,Documento,Nombre,Apellido,Telefono,Direccion,TipoUsuario,Correo,Contrasena,ConfirmarContrasena) values ('$tipodocumento',$documeto,'$nombre','$apellido',$telefono,'$direccion','$tipousuario','$correo',$contrasena'),md5('$confirmarcontrasena'))";

		$conbsd = new Conexionbasededatos1();
		$con3 = $conbsd->conectar();

		

		if (mysqli_query($con3,$query)) 
		{
			echo "<script>
                alert('Registro correctamente');
                window.location= 'http://localhost:8080/ProyectoSena1/examples/register.php'
                </script>";
		}
		else
		{
			echo "<script>
                alert('Error de Registro');
                window.location= 'http://localhost:8080/ProyectoSena1/examples/register.php'
                </script>";
		}
	}
	
	public function insertar1(model_usuarios $post_model)
	{
		$tipodocumento =$post_model->tipodocumento;
	   $documeto =$post_model->documento;
       $nombre     =$post_model->nombre;
       $apellido   =$post_model->apellido;
       $telefono   =$post_model->telefono;
       $direccion  =$post_model->direccion;
	   $tipousuario  =$post_model->tipousuario;
	   $correo  =$post_model->correo;
	   $contrasena =$post_model->contrasena;
	   $confirmarcontrasena =$post_model->confirmarcontrasena;                             

		$query= "INSERT INTO usuarios(TipoDocumento,Documento,Nombre,Apellido,Telefono,Direccion,TipoUsuario,Correo,Contrasena,ConfirmarContrasena) values ('$tipodocumento',$documeto,'$nombre','$apellido',$telefono,'$direccion','$tipousuario','$correo',md5('$contrasena'),md5('$confirmarcontrasena'))";

		$conbsd = new Conexionbasededatos1();
		$con3 = $conbsd->conectar();

		

		if (mysqli_query($con3,$query)) 
		{
			echo "<script>
                alert('Registro correctamente');
                window.location= 'http://localhost:8080/ProyectoSena1/examples/register.php'
                </script>";
		}
		else
		{
			echo "<script>
                alert('Error de Registro');
                window.location= 'http://localhost:8080/ProyectoSena1/examples/register.php'
                </script>";
		}
	}
	
	public function insertarproducto(model_activos $post_model)
	{
		require_once("ConexionBase.php");
		
       $codigo =$post_model->codigo;
	   $descripcion =$post_model->descripcion;
       $valor     =$post_model->valor;
       $cantidad   =$post_model->cantidad;
       $fechaingreso =$post_model->fechaingreso;
		$hora =$post_model->hora;
	   $tipoactivo  =$post_model->tipoactivo;
	   $observaciones  =$post_model->observaciones;
	   $imagen =$post_model->imagen;
		
		$Nombreimagen = $imagen['name'];
		$tipoimahen = $imagen['type'];
		$urltemp = $imagen['tmp_name'];
		
		$imagenpredeterminada ='img_imagenprede.jpg';
		
		if($Nombreimagen != ''){
			
			$destino = 'imagen/Product/';
			$imagennombre = 'img_'.md5(date('d-m-Y H:m:s'));
			$imagenpredeterminada = $imagennombre.'.jpg';
			$src = $destino.$imagenpredeterminada;
		}
		
		
		
		
		
		$conn = "INSERT INTO activo(CodActivo,Descripcion,Valor_Activo,Cantidad,Fecha_Ingreso,Hora,Tipo_Activo,Observaciones,Imagenes,Estatus) VALUES ($codigo,'$descripcion',$valor,$cantidad,'$fechaingreso','$hora','$tipoactivo','$observaciones','$imagenpredeterminada','Activo')";

             $conex = new Conexionbasededatos1();
		     $conn1 = $conex -> conectar();
		

           if (mysqli_query($conn1,$conn))
               {
			   if($Nombreimagen != ''){
				   move_uploaded_file($urltemp,$src); 
			   }
                echo "<script>
                alert('Producto Guardado');
                window.location= 'http://localhost:8080/ProyectoSena1/examples/registerPruduc.php'
                </script>";
                
			      
               }
               else
               {
				echo "<script>
                alert('Error al Guardar el producto');
                window.location= 'http://localhost:8080/ProyectoSena1/examples/registerPruduc.php'
                </script>";
                }	
	   

            
	}
	
	public function modificarproducto(model_activos $post_model)
	{
		 require_once("ConexionBase.php");
		
		
       $codigo =$post_model->codigo;
	   $descripcion =$post_model->descripcion;
       $valor     =$post_model->valor;
       $cantidad   =$post_model->cantidad;
       $fechaingreso =$post_model->fechaingreso;
		$hora =$post_model->hora;
	   $tipoactivo  =$post_model->tipoactivo;
	   $observaciones  =$post_model->observaciones;
	   $imagen =$post_model->imagen;
		$estatus =$post_model->estatus;

		
		
		$Nombreimagen = $imagen['name'];
		$tipoimahen = $imagen['type'];
		$urltemp = $imagen['tmp_name'];
		
		 
				  
				  $conex = new Conexionbasededatos1();
		          $conn3 = $conex -> conectar();
				  
	              $consultar2= mysqli_query($conn3 ,"SELECT * FROM activo WHERE CodActivo = $codigo");	
	              
	             $columna1 = mysqli_fetch_array($consultar2);
		$imagenpredeterminada = $columna1['Imagenes'];
		
		
		if($Nombreimagen != ''){
			
			$destino = 'imagen/Product/';
			$imagennombre = 'img_'.md5(date('d-m-Y H:m:s'));
			$imagenpredeterminada = $imagennombre.'.jpg';
			$src = $destino.$imagenpredeterminada;
		}
	
         $Actualizar = "UPDATE activo SET CodActivo ='".$codigo."',Descripcion = '".$descripcion."',
                        Valor_Activo = '".$valor."', Cantidad = '".$cantidad."',
						Fecha_Ingreso = '".$fechaingreso."', Hora = '".$hora."',Tipo_Activo = '".$tipoactivo."', Observaciones = '".$observaciones."',Imagenes = '".$imagenpredeterminada."',Estatus = '".$estatus."'
                        WHERE CodActivo = '".$codigo."';";
			
			$conex = new Conexionbasededatos1();
		     $conn2 = $conex -> conectar();
         
         $resultUpdate = mysqli_query($conn2, $Actualizar);
		
          if($Nombreimagen != ''){
				   move_uploaded_file($urltemp,$src);
		  }
		
		
		
         if($Actualizar )
         {
			
		     echo "<script>
            alert('El producto se actualizo con exito');
            window.location= 'tablas.php'
            </script>";
               }
                else
               {
			echo "<script>
            alert('El producto No se pudo actualizar');
            window.location= 'tablas.php'
            </script>";
             }
		 
 
      
 
      $query = "SELECT CodActivo, Descripcion, Cantidad, Fecha_Ingreso, Hora, Tipo_Activo, Observaciones, Imagenes, Estatus FROM activo;";
 
      $result = mysqli_query($conn2, $Actualizar); 
	   
	}
	public function consultar(model_usuarios $post_model)
	{
		$id_usuario =$post_model->id_usuario;

     $conex = new Conexionbasededatos();
       $conn3 = $conex -> conectar();

       $consultar1= mysqli_query($conn3 ,"SELECT * FROM usuarios WHERE id_usuario = $id_usuario");
       while ($columna = mysqli_fetch_array($consultar1))
       {
     
        echo
        "

        </br><center><table width=\"50%\" border = \"1\"></center>
        <tr>

              <td><b><center>ID_Usuario</center></b></td>
              <td><b><center>Nombres</center></b></td>
              <td><b><center>Apelidos</center></b></td>
              <td><b><center>Telefono</center></b></td>
              <td><b><center>Direccion</center></b></td>
			  <td><b><center>Cargo</center></b></td>
              
        </tr>
        <tr>
              <td>".$columna['id_Usuario']."</td>
              <td>".$columna['Nombre']."</td>
              <td>".$columna['Apellido']."</td>
              <td>".$columna['Telefono']."</td>
              <td>".$columna['Direccion']."</td>
			  <td>".$columna['Cargo_Cargo']."</td>
              
        </tr>
        </table>

        ";
       

       }
       

       
       return $consultar1;

	}
	public function eliminarproducto(model_activos $post_model)
	{
		
		
		include "ConexionBase.php";
        $consulta = ConsultarProduc($_GET['CodActivo']);


         function ConsultarProduc($Product)
        {
	
	              require_once("ConexionBase.php");
				   $codigo =$post_model->codigo;
			 
			 if($_POST)
         {
		
			 
			 $eliminar = "DELETE from activo WHERE CodActivo =".$Product."";
			 
				  $conex = new Conexionbasededatos1();
		          $conn3 = $conex -> conectar();
	
	  $resultEliminar = mysqli_query($conn1, $eliminar); 
 
         if($eliminar)
         {
            echo "<strong> El usuario con Identificacion: se elimino con exito</strong>. <br>";
         }
         else	
         {
            echo "No se Elimino el registro. <br>";
         }
			 }
	
}
	
		
	}
	public function listar(model_usuarios $post_model)
	{
	
		$conex = new Conexionbasededatos();
		 $conn3 = $conex -> conectar();
		
	   
		$this -> listar = "select id_Usuario, Nombre, Apellido,Telefono,Direccion,Cargo_Cargo FROM usuarios ";
		
		$resultado1 = mysqli_query($conn3,$this->listar);
		
		echo "<table border='2' ; align=center>";
			echo "<tr>";
			echo "<th>id_Usuario</th>";
			echo "<th>Nombre</th>";
			echo "<th>Apellido</th>";
			echo "<th>Telefono</th>";
		    echo "<th>Direccion</th>";
		    echo "<th>Cargo</th>";
			echo "</tr>";
				
				while ($columna = mysqli_fetch_array($resultado1))
				{
					echo "<tr>";
					echo "<td>" , $columna['id_Usuario'] , "</td><td>" , $columna['Nombre'] , "</td><td>" ,
						$columna['Apellido'] , "</td><td>" , $columna['Telefono'] , "</td><td>" , $columna['Direccion'] , "</td><td>" , $columna['Cargo_Cargo'], "</td>";
					echo "</tr>";
				}
		
		echo "</table>";
		
		mysqli_close($conn3);
		return $this -> listar;

		
			
	}
	
	public function insertar5(model_reserva $post_model)
	{
		require_once("file:///C|/xampp/htdocs/Salon/examples/ConexionDatos.php");
		
       $fecha =$post_model->fecha;
       $hora     =$post_model->hora;
		 $empleado     =$post_model->empleado;
       $identificacion   =$post_model->identificacion;
       $tipo   =$post_model->tipo;
       

            $con1 = "INSERT INTO reserva(Fecha,Hora,Empleado,Usuarios_id_Usuario,Servicio_Tipo_Servicio) VALUES ('$fecha','$hora','$empleado',$identificacion,'$tipo')";

             $conex = new Conexionbasededatos();
		     $conn9 = $conex -> conectar();

           if (mysqli_query($conn9,$con1))
               {
	              echo 'Insertado reserva ';
               }
               else
               {
	              echo 'No insertado Reserva';
                }
	}
	public function consul1(model_usuarios $post_model)
	{
		require_once("file:///C|/xampp/htdocs/Salon/examples/ConexionDatos.php");
		
		$id_usuario =$post_model->id_usuario;

     $conex = new Conexionbasededatos();
       $conn3 = $conex -> conectar();
		
 
		$consultar1= mysqli_query($conn3 ,"SELECT U.id_Usuario, U.Nombre, U.Apellido, U.Telefono, U.Direccion,                                  U.Cargo,
		                 R.Fecha, R.Hora, R.Servicio_Tipo_Servicio FROM usuarios U
						 INNER JOIN reserva R ON U.id_Usuario = R.Usuarios_id_Usuario");
		
       
		$lll=$conn3->consultar1($consultar1);
       while ($columna=$lll->fetch(PDO::FETCH_ASSOC))
       {
     
        echo
        "

        </br><center><table width=\"50%\" border = \"1\"></center>
        <tr>

              <td><b><center>ID_Usuario</center></b></td>
              <td><b><center>Nombres</center></b></td>
              <td><b><center>Apelidos</center></b></td>
              <td><b><center>Telefono</center></b></td>
              <td><b><center>Direccion</center></b></td>
			  <td><b><center>Cargo</center></b></td>
              
        </tr>
        <tr>
              <td>".$columna['id_Usuario']."</td>
              <td>".$columna['Nombre']."</td>
              <td>".$columna['Apellido']."</td>
              <td>".$columna['Telefono']."</td>
              <td>".$columna['Direccion']."</td>
			  <td>".$columna['Cargo']."</td>
			   <td>".$columna['Fecha']."</td>
			    <td>".$columna['Hora']."</td>
				 <td>".$columna['Servicio_Tipo_Servicio']."</td>
              
        </tr>
        </table>

        ";
       

       }
       

       
       return $consultar1;

	}
		
}
?>