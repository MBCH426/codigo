
<!DOCTYPE html>
<html>

<head>
	
  <title>Registrar</title>
	
  <link rel="icon" href="../assets/img/brand/Logopagina.PNG" type="image/png">
 <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
	<link rel="stylesheet" href="../assets/css/argon1.css" type="text/css">
	
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
     
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            
			  <div class="form-group mb-0 "  >
               <div class="sidenav-header align-items-center">
		  <a class="imagen-logo1" >
          <img style="width:155px; height:70px;" src="../assets/img/brand/LogoProyecto.PNG" >
        </a>
      </div>
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
            <a href="login.php" class="nav-link">
              <span class="nav-link-inner--text">Iniciar sesion</span>
            </a>
          </li>
        </ul>
        <hr class="d-lg-none" />
        
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
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
				  <div class="text-muted text-center mt-2 mb-4"><small>Registrarme</small></div>
                <small>O regístrate con credenciales</small>
              </div>
              <form  role="form"  method="POST"  action="Ingresar.php" >
                <div class="form-group">
                  
					<select  class="form-control" tipe="text"  name="tipodedocumento"  
		 placeholder="Tipo de Documento" required>
		<?php
		require_once("ConexionBase.php");
											
	   $conex = new Conexionbasededatos1();
       $conn3 = $conex -> conectar();
											
	   $consult1= mysqli_query($conn3 ,"SELECT NombreDocumento FROM tipo_documento");
       while ($columna = mysqli_fetch_array($consult1))
       {
		    
		  echo '<option value='. $columna['NombreDocumento'].' > '.$columna['NombreDocumento'].' </option>';
				 
	   }
       
      ?>								
	</select>
				  </div>
					
                
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-edit"></i></span>
                    </div>
                    <input class="form-control" placeholder="Documento" type="number"  name="documento">
                  </div>
                </div>
				   
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-address-book"></i></i></span>
                    </div>
                    <input class="form-control" placeholder="Nombre" type="text"  name="nombre">
                  </div>
                </div>
				  <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                    </div>
                    <input class="form-control" placeholder="Apellido" type="text"  name="apellido">
                  </div>
                </div>
				  <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone-square-alt"></i></span>
                    </div>
                    <input class="form-control" placeholder="Telefono" type="number"  name="telefono">
                  </div>
                </div>
				  <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                    </div>
                    <input class="form-control" placeholder="Direccion" type="text"  name="direccion">
                  </div>
                </div>
				
				 <div class="form-group">
                  
					<select  class="form-control" tipe="text"  name="tipodeusuario"  
		 placeholder="Tipo de Documento" required>
		<?php
		require_once("ConexionBase.php");
											
	   $conex = new Conexionbasededatos1();
       $conn3 = $conex -> conectar();
											
	   $consult1= mysqli_query($conn3 ,"SELECT NombreUsuario FROM tipo_usuario where IdTipousuario = 4 || IdTipousuario = 2");
       while ($columna = mysqli_fetch_array($consult1))
       {
		    
		  echo '<option value='. $columna['NombreUsuario'].' > '.$columna['NombreUsuario'].' </option>';
				 
	   }
       
      ?>								
	</select>
			    </div>
				
				  <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Correo" type="email"  name="correo">
                  </div>
                </div>
				  <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Contraseña" type="password"  name="contrasena">
                  </div>
                </div>
				  <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Confirmar Contraseña" type="password"  name="confirmarcontrasena">
                  </div>
                </div>
                <div class="row my-4">
                  <div class="col-12">
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id="customCheckRegister" type="checkbox" required>
                      <label class="custom-control-label" for="customCheckRegister">
                        <span class="text-muted">Estoy de acuerdo con la <a href="#!">Politica de privacidad</a></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-actions" >
					<center>
					<input  class="btn btn-primary mt-4"  type="submit" name="registrar1" value="Registrar"/>
					</center>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>