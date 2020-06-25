<?php
session_start();
if($_SESSION['tipodeusuario'] != 'Administrador')
  {
	  header('location: login.php');
  }

?>
<!DOCTYPE html>
<html>

<head>
	
  <title>Registro</title>
	
  <link rel="icon" href="../assets/img/brand/Logopagina.PNG" type="image/png">
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
	<link rel="stylesheet" href="../assets/css/argon1.css" type="text/css">
	
</head>

<body>
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <div class="sidenav-header  align-items-center">
		  <a class="imagen-logo" ></br>
          <img src="../assets/img/brand/LogoProyecto.PNG">
        </a>
      </div>
	  </br>
      <div class="navbar-inner">
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " href="Admin.php">
                <i class="fa fa-home text-primary"></i>
                <span class="nav-link-text">Inicio</span>
              </a>
            </li>
			  <li class="nav-item">
              <a class="nav-link " href="registerAdmin.php">
                <i class="fas fa-users text-black"></i>
                <span class="nav-link-text">Registro de usuarios</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tablas.php">
                <i class="fa fa-cube text-orange"></i>
                <span class="nav-link-text">Productos</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Entrada.php">
                <i class="fa fa-calendar text-primary"></i>
                <span class="nav-link-text">Entrada de productos</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.html">
                <i class="fa fa-calendar text-yellow"></i>
                <span class="nav-link-text">Salidas de productos</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Productosprestados.php">
                <i class="fas fa-cart-plus text-info"></i>
                <span class="nav-link-text">Prestamos pendientes</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="upgrade.html">
                <i class="fas fa-chart-bar text-dark"></i>
                <span class="nav-link-text">Reportes</span>
              </a>
            </li>
          </ul>  
        </div>
      </div>
    </div>
  </nav>
  
  <div class="main-content" id="panel">
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
 
          <form class="navbar-search navbar-search-light text-white form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0" >
              <?php
					  date_default_timezone_set("America/Bogota");
					  $fecha = date('d m Y');
					  $tiempo = date ('H:i:s');
					  echo $fecha;
					  echo ' ';
					  echo $tiempo;
					  ?>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <ul class="navbar-nav align-items-center  ml-md-auto ">
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
					  
                    
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
					   <?php
				    echo $_SESSION['nombre'];
				    echo ' ';
					echo  $_SESSION['apellido'] ;
				?>  
					  </span>
                  </div>
                </div>
				
				<div class="media align-items-center">
                  
                  <div class="media-body  ml-2  d-none d-lg-block">
				   
				 </span>
                  </div>
                </div>
				
              </a>
            </li>
		<div class="nav-item dropdown ">
	    <a class="nav-link" href="Salir.php" role="button"  aria-haspopup="true" aria-expanded="false" data-toggle="tooltip" data-original-title="Salir">
                <i class="fa fa-power-off"></i>
              </a>
	  </div>
          </ul>
	  <div class="nav-item dropdown text-white">
	<?php
					  echo $_SESSION['tipodeusuario'];
					?>
        </div>
      </div>
    </nav>
    <div class="header bg-primary pb-6">
		</br>
      <div class="container-fluid">
        <div class="header-body">
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>

<div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border-0">
            
            <div class="card-body  bg-gradient-primary px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
				  <div class="text-muted text-center mt-2 mb-4"><small><p class="text-white">Registrarme</p></small></div>
				  <small><p class="text-white">O regístrate con credenciales</p></small>
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
					
						<select  class="form-control" placeholder="Tipo de Usuario" type="text"  name="tipodeusuario" required>
		<?php
		require_once("ConexionBase.php");
											
	   $conex = new Conexionbasededatos1();
       $conn3 = $conex -> conectar();
											
	   $consult1= mysqli_query($conn3 ,"SELECT NombreUsuario FROM tipo_usuario");
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
                <div class="row my-4 ">
                  <div class="col-12 " >
                    <div class="custom-control  custom-control-alternative custom-checkbox">
                      <input class="custom-control-input " id="customCheckRegister" type="checkbox" required>
                      <label class="custom-control-label"  for="customCheckRegister">
                        <span class="text-muted text-white">Estoy de acuerdo con la <a class="text-white" href="#!" >Politica de privacidad</a></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-actions" >
					<center>
					<input  class="btn btn-primary mt-4"  type="submit" name="registrar2" value="Registrar"/>
			</center>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</body>

</html>