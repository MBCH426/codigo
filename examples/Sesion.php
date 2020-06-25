<?php	

  $alert = '';
  if(!empty($_POST)){
	  
	  if(empty($_POST['correo1']) || empty($_POST['contrasena1'])){
		  echo "<script>
            alert('Ingrese su clave o usuario');
            window.location= 'login.php'
            </script>";
	  }else{
		  
		  require("ConexionBase.php");

		  $correo=$_POST['correo1'];
		  $password=md5($_POST['contrasena1']); 
               
          $conex = new Conexionbasededatos1();
		  $conn1 = $conex -> conectar();

     $query=mysqli_query($conn1, "SELECT * FROM usuarios WHERE Correo = '$correo' and Contrasena = '$password'");
     $columna = mysqli_num_rows($query);

   if($columna > 0){
	   
	   $datos1 = mysqli_fetch_array($query);
	   
	   session_start();
	   $_SESSION['activo']=true;
	   $_SESSION['idusuario']= $datos1['ID'];
	   $_SESSION['nombre']= $datos1['Nombre'];
	   $_SESSION['apellido']= $datos1['Apellido'];
	   $_SESSION['correo']= $datos1['Correo'];
	   $_SESSION['tipodeusuario']= $datos1['TipoUsuario'];
	   
	   header('location: Usuario.php/');
	   
  }
  else 
  {
      echo "<script>
      alert('Correo o usuario incorrectos');
      window.location= 'login.php'
      </script>";
	  session_destroy();
  }
		  
 }
}

?>	