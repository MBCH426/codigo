<?php	

  $alert = '';
  session_start();
  if(!empty($_SESSION['activo']))
  {
   if($_SESSION['tipodeusuario'] == 'Administrador'){
		
		header('location: Admin.php');
	}else{
	   if($_SESSION['tipodeusuario'] == 'Aprendiz'){
			
			header ('location: Usuario.php');
		}else{
			if($_SESSION['tipodeusuario'] == 'Instructor'){
			
			header ('location: Instructor.php');
		}else{
				if($_SESSION['tipodeusuario'] == 'Empleado'){
			
			header ('location: Empleado.php');
				}
			}
		}
   }
	  
  }else{
	  
  if(!empty($_POST)){
	  
	  if(empty($_POST['correo1']) || empty($_POST['contrasena1'])){
		  
		  $alert = 'Ingresa tu usuario y clave';
		  
	  }else{
		  
		  require("ConexionBase.php");

		  $correo = $_POST['correo1'];
		  $password = md5($_POST['contrasena1']); 
               
          $conex = new Conexionbasededatos1();
		  $conn1 = $conex -> conectar();

     $query=mysqli_query($conn1, "SELECT * FROM usuarios WHERE Correo = '$correo' and Contrasena = '$password'");
     $columna = mysqli_num_rows($query);

   if($columna > 0){
	   
	   $datos1 = mysqli_fetch_array($query);
	   
	   
	   $_SESSION['activo']=true;
	   $_SESSION['idusuario']= $datos1['ID'];
	   $_SESSION['nombre']= $datos1['Nombre'];
	   $_SESSION['apellido']= $datos1['Apellido'];
	   $_SESSION['documento']= $datos1['Documento'];
	   $_SESSION['correo']= $datos1['Correo'];
	   $_SESSION['tipodeusuario']= $datos1['TipoUsuario'];
	   
	
	  header('location: Admin.php');
  
	   
  }
  else 
  {
	  $alert = 'Correo o usuario incorrectos';
	  session_destroy();
  }
		  
  }
 }
}

?>	

<!DOCTYPE html>
<html>

<head>
	
  <title>Iniciar Sesion</title>
	
  <link rel="icon" href="../assets/img/brand/Logopagina.PNG" type="image/png">
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
	
</head>

<body class="bg-default">
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
           <div class="form-group mb-0 "  >
               <div class="sidenav-header align-items-center">
		  <a class="imagen-logo1" >
          <img style="width:155px; height:70px;" src="../assets/img/brand/LogoProyecto.PNG" >
        </a>
      </div>
            </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="dashboard.html">
                <img src="../assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <span class="nav-link-inner--text">Inicio</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="register.php" class="nav-link">
              <span class="nav-link-inner--text">Registrarse</span>
            </a>
          </li>
        </ul>
      
      </div>
    </div>
  </nav>
  <div class="main-content">
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
				   <div class="text-muted text-center mt-2 mb-3"><small>Inicia sesión </small></div>
                <small>O inicie sesión con credenciales</small>
              </div>
              <form role="form" method="POST" action="" >
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Correo" type="email" name="correo1">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Contraseña" type="password" name="contrasena1">
                  </div>
                </div>
				  
				  <div class="alert"><center><?php echo(isset($alert)? $alert: '')?></center></div>
		
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Recordar contraseña</span>
                  </label>
                </div>
                <div class="text-center">
					
					<input  class="btn btn-primary mt-4"  type="submit" value="Iniciar sesion" />
					
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="RecuperacionSesion.html" class="text-light"><small>¿Se te olvido la contraseña?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="register.php" class="text-light"><small>Crear una nueva cuenta</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>