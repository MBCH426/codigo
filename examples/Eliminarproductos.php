<?php
session_start();
  if($_SESSION['tipodeusuario'] != 'Administrador' and $_SESSION['tipodeusuario'] != 'Empleado'  )
  {
	  header('location: login.php');
  }


include "ConexionBase.php";
$consulta = ConsultarProduc($_GET['CodActivo']);


function ConsultarProduc($Product)
{
	
	require_once("ConexionBase.php");
				  
				  $conex = new Conexionbasededatos1();
		          $conn3 = $conex -> conectar();
	
	$eliminar = "DELETE from activo WHERE CodActivo =".$Product."";
	
	$resultEliminar = mysqli_query($conn3, $eliminar); 
 
         if($eliminar)
         {
			 echo "<script>
            alert('El producto se elimino con exito');
            window.location= 'tablas.php'
            </script>";
			 
         }
         else	
         {
		    echo "<script>
            alert('El producto No se Elimino');
            window.location= 'tablas.php'
            </script>";
         }
	
}


?>
