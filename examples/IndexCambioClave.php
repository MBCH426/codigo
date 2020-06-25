<?php
  require_once("ConexionBase.php");
  
  $correo3 = $_POST['correo3'];
  $contrasena3 = $_POST['contrasena9'];
  $contrasena4 =$_POST['contrasena8'];

	  
	  $conex = new Conexionbasededatos1();
       $conn3 = $conex -> conectar();

       $consultar1= mysqli_query($conn3, "SELECT Correo FROM usuarios where Correo = '$correo3' ");


       $columna = mysqli_fetch_array($consultar1);
		   
		   if($columna){
			   
			   if($columna['Correo'] == $correo3){
			   
			   if($contrasena3 == $contrasena4){
		  
		  $Actualizar = "UPDATE usuarios SET Contrasena = md5($contrasena3),
                        ConfirmarContrasena = md5($contrasena4)
                        WHERE Correo = '$correo3' ";
		  
		  $conex = new Conexionbasededatos1();
          $conn3 = $conex -> conectar();
	  
	  
		  $resultUpdate = mysqli_query($conn3, $Actualizar); 
 
         if($Actualizar)
         {
		    echo "<script>
            alert('Cambio de contraseña exitoso');
            window.location= 'login.php'
            </script>";
         }
         else
         {
			echo "<script>
            alert('No se pudo cambiar la contraseña');
            window.location= 'CambioClave.php'
            </script>";
		 }
		  
	  }else{
				   
			echo "<script>
            alert('Las contrasenas no son iguales');
            window.location= 'CambioClave.php'
            </script>";	
	  }
		   }
			   
		   }else{
			   
			echo "<script>
            alert('Correo sin registrar');
            window.location= 'CambioClave.php'
            </script>";
		   }

		   
	 

	 
 



 
 
        
 
      
 
      


?>