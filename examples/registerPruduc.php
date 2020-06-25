<?php
session_start();



?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
	<link rel="stylesheet" href="../assets/css/argon1.css" type="text/css">
	
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
		  <a class="imagen-logo" ></br>
          <img src="../assets/img/brand/LogoProyecto.PNG" >
        </a>
	  </div></br>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="Admin.php">
                <i class="fa fa-home text-primary"></i>
                <span class="nav-link-text">Inicio</span>
              </a>
            </li>
			  <li class="nav-item">
              <a class="nav-link active" href="registerAdmin.php">
                <i class="fas fa-users text-black"></i>
                <span class="nav-link-text">Registro de usuarios</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tablasEmpleado.php">
                <i class="fa fa-cube text-orange"></i>
                <span class="nav-link-text">Productos</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="EntradaEmpleado.php">
                <i class="fa fa-calendar text-primary"></i>
                <span class="nav-link-text">Entrada de productos</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-calendar text-yellow"></i>
                <span class="nav-link-text">Saldas de productos</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-cart-plus text-info"></i>
                <span class="nav-link-text">Prestamos pendientes</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
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
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
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
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
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
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
         
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
               
              </div>
            </div>
            
            </div>
			
		
          </div>
        </div>
      </div>

<div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
		  
        <div class="col-lg-6 col-md-8">
			</br>
          <div class="card bg-secondary border-0">
           
            <div class="card-body  bg-gradient-primary px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
				  <small><p class="text-white">Regístro de productos</p></small>
              </div>
              <form  role="form"  method="POST"  action="Ingresar.php" enctype="multipart/form-data" >
                 <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                    </div>
                    <input class="form-control" placeholder="Código" type="number"  name="codigo">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-edit"></i></span>
                    </div>
                    <input class="form-control" placeholder="Descripción" type="text"  name="descripcion">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></i></span>
                    </div>
                    <input class="form-control" placeholder="Valor" type="number"  name="valor">
                  </div>
                </div>
				<div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-hashtag"></i></i></span>
                    </div>
                    <input class="form-control" placeholder="Cantidad" type="number"  name="cantidad">
                  </div>
                </div>
				  <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input class="form-control" placeholder="Fecha ingreso" type="date"  name="fechaingreso">
                  </div>
                </div>
				  <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fab fa-algolia"></i></span>
                    </div>
                    <input class="form-control" placeholder="Hora" type="time"  name="hora">
                  </div>
                </div>
			  
				  <div class="form-group">
                  <select  class="form-control" tipe="text"  name="tipodeproducto"  
		 placeholder="Tipo de Documento" required>
		<?php
		require_once("ConexionBase.php");
											
	   $conex = new Conexionbasededatos1();
       $conn3 = $conex -> conectar();
											
	   $consult1= mysqli_query($conn3 ,"SELECT Tipo_Activo FROM tipo_activo  ORDER BY IdTipoActivo ");
       while ($columna = mysqli_fetch_array($consult1))
       {
		    
		  echo '<option value='. $columna['Tipo_Activo'].' > '.$columna['Tipo_Activo'].' </option>';
				 
	   }
       
      ?>								
	</select>
                </div>
			   <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-edit"></i></span>
                    </div>
                    <input class="form-control" placeholder="Observaciones" type="text"  name="observaciones">
                  </div>
                </div>
				  
			  
			  <div class="photo text-white">

       <div class="btn btn-primary ">
		   <label for="foto" >Imagen</label>
        <input type="file" name="imagen" id="imagen">
				</div>
        <div id="form_alert"></div>
         </div>
			 
   
                <div class="form-actions" >
					<center>
					<input  class="btn btn-primary mt-4"  type="submit" name="guardar" value="Guardar Producto"/>
			</center>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



    </div>
    <!-- Page content -->
   
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>