<?php
session_start();
  if($_SESSION['tipodeusuario'] != 'Instructor')
  {
	  header('location: login.php');
  }
?>
<!DOCTYPE html>
<html>

<head>
  <title>Usuario</title>
	
  <link rel="icon" href="../assets/img/brand/Logopagina.PNG" type="image/png">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
	<link rel="stylesheet" href="../assets/css/argon1.css" type="text/css">
	
</head>

<body>
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="Instructor.php">
                <i class="fa fa-home text-primary"></i>
                <span class="nav-link-text">Inicio</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tablasInstructor.php">
                <i class="fa fa-cube text-orange"></i>
                <span class="nav-link-text">Ver productos</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tablasReservas.php">
                <i class="fa fa-calendar text-primary"></i>
                <span class="nav-link-text">Productos reservados</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tablasEntregas.php">
                <i class="fas fa-cart-plus text-info"></i>
                <span class="nav-link-text">Entrega de productos</span>
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
           <?php
					  date_default_timezone_set("America/Bogota");
					  $fecha = date('d m Y');
					  $tiempo = date ('H:i:s');
					  echo $fecha;
					  echo ' ';
					  echo $tiempo;
					  ?>
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
<center>
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body" >
         
          <!-- Card stats -->
			
          <div class="row ">
			 <div class="col-xl-3 col-md-6 ">
				 </br>
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="card-title text-uppercase text-muted mb-0">Como reservar tu producto</h4>
						</br>
                      <span class="h5 font-weight-bold mb-0 imagen-usuario"><img src="../examples/imagen/Flecha.png"></span>
                    </div>
                    
                  </div>
                  
                </div>
              </div>
				  </div>
            <div class="col-xl-3 col-md-6 ">
				</br>
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                     
						</br>
                      <span class="h5 font-weight-bold mb-0 ">Ingresa a ver productos escoge el activo que estas buscando y te saldran las opciones a elegir</br></span></br></br>
                    </div>
                    
                  </div>
                  
                </div>
              </div>
				  </div>
            <div class="col-xl-3 col-md-6">
				</br>
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="card-title text-uppercase text-muted mb-0">Entrega del producto</h4>
						</br>
                      <span class="h5 font-weight-bold mb-0 imagen-usuario" ><img src="../examples/imagen/Flecha.png"></span>
                    </div>
                    <div class="col-auto">
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
				</br>
              <div class="card card-stats">
                <!-- Card body -->
				 
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      
						</br>
                      <span class="h5 font-weight-bold mb-0">podrás encontrar tus productos que la empresa esta gestionado para hacer la entrega y puedes ver la fecha para reclamarlo</span></br></br>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
</center>
    <!-- Page content -->

    <div class="container-fluid uno dos mt--6 ">	
      <div class="row ">
        <div class="col-xl-8 ">
          <div class="card ">
            <div class="card-header border-0">
              <div class="row align-items-">
                <div class="col">
                  <h3 class="mb-0">Productos </h3>
                </div>
                <div class="col text-right">
                  <a href="tablasInstructor.php" class="btn btn-sm btn-primary">Ver todo</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Unidades disponibles</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      Portatiles
                    </th>
                    <td>
                      0
                    </td>
                    <td>
                      0
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Televisores
                    </th>
                    <td>
                      0
                    </td>
                    <td>
                      0
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Cables HMDI
                    </th>
                    <td>
                      0
                    </td>
                    <td>
                      0
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Cable UTP
                    </th>
                    <td>
                      0
                    </td>
                    <td>
                      0
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      
      </div>
     
    </div>
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