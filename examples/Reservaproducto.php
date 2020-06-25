
<?php
session_start();

 if( $_SESSION['tipodeusuario'] != 'Aprendiz' and $_SESSION['tipodeusuario'] != 'Instructor')
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
	
	$consul=mysqli_query($conn3 ,"select * from activo where CodActivo='".$Product."'");
	 $columnas = mysqli_fetch_array($consul);
	
	$_SESSION['activo']=true;
	$_SESSION['Codigos1']= $columnas['CodActivo'];
	
	return[
					
		$columnas['CodActivo'],
		$columnas['Descripcion'],
		$columnas['Tipo_Activo'],
		$columnas['Imagenes']
	];
	
}

		

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
      </div>
	  </br>
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
              <a class="nav-link" href="tablasUsuario.php">
                <i class="fa fa-cube text-orange"></i>
                <span class="nav-link-text">Ver productos</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Entrada.php">
                <i class="fa fa-calendar text-primary"></i>
                <span class="nav-link-text">Productos reservados</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-cart-plus text-info"></i>
                <span class="nav-link-text">Entrega de pedidos</span>
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
          <div class="card bg-secondary border-0">
           
            <div class="card-body  bg-gradient-primary px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
				  <small><p class="text-white">Completa los siguientes datos para tu solicitud de prestamo de un producto</p></small>
              </div>
              <form  role="form"  method="POST"  action="ingresoprestamo.php" >
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <input class="form-control" <?php echo $consulta[0]?> type="hidden"  name="codigo1">
                  </div>
                </div>
				  
                <div class="form-group text-black">
                  <div class="input-group input-group-merge  input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-edit"></i></span>
                    </div>
                    <input class="form-control text-center" disabled="disabled" <?php echo $consulta[1]?> value="<?php echo $consulta[1]?>" type="text"  name="descripcion1">
                  </div>
                </div>
				  
				  <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input class="form-control text-center" value="<?php
					  echo $fecha
			         ?>" type="" disabled="disabled" name="fechainicio">
                  </div>
                </div>
				  <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fab fa-algolia"></i></span>
                    </div>
                    <input class="form-control text-center" disabled="disabled" value="<?php echo $tiempo?>" type="time"  name="horainicio">
                  </div>
                </div>
				  <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-edit"></i></span>
                    </div>
                    <input class="form-control text-center" disabled="disabled" value="<?php echo $consulta[2]?>" type="text"  name="tipodeproducto">
                  </div>
                </div>
				   <div class="text-center text-muted mb-4">
				  <small><p class="text-white">Ingresa fecha y hora de devolución del producto</p></small>
              </div>
				  <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input class="form-control text-center" value="Fecha devolución" type="date"  name="fechafin">
                  </div>
                </div>
				  <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fab fa-algolia"></i></span>
                    </div>
                    <input class="form-control text-center"  value="Hora devolución" type="time"  name="horafin">
                  </div>
                </div>
				  <div class="form-actions" >
					<center>
					<input  class="btn btn-primary mt-4"  type="submit" name="modificar" value="Modificar Producto"/>
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