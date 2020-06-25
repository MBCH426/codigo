<?php	

session_start();


        
include "ConexionBase.php";

 
       $fechafin   =$_POST['fechafin'];
	   $horafin =$_POST['horafin'];

date_default_timezone_set("America/Bogota");
					  $fechainicio = date('d m Y');
					  $horainicio = date ('H:i:s');
		
require_once("ConexionBase.php");

		$conn = "INSERT INTO reserva_usuario (CodActivo,Fecha_Inicio,Hora_Inicio,Fecha_Fin,Hora_Fin,Documento) VALUES (".$_SESSION['Codigos1'].",'$fechainicio','$horainicio','$fechafin','$horafin', ".$_SESSION['documento'].")";

      

             $conex = new Conexionbasededatos1();
		     $conn1 = $conex -> conectar();

		

           if (mysqli_query($conn1,$conn))
               {
			   
			    $Actualizar = "UPDATE activo SET Estatus = 'Prestado' WHERE CodActivo = ".$_SESSION['Codigos1'].";";

                $resultUpdate = mysqli_query($conn1, $Actualizar);
			   
                echo "<script>
                alert('Prestamo del Producto Guardado');
                window.location= 'http://localhost:8080/ProyectoSena1/examples/tablasUsuario.php'
                </script>";
                
			      
               }
               else
               {
				echo "<script>
                alert('Error al gestionar el prestamo del producto');
                window.location= 'http://localhost:8080/ProyectoSena1/examples/tablasUsuario.php'
                </script>";
                }	


    
       
?>
