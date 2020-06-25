<?php
session_start();
  if($_SESSION['tipodeusuario'] != 'Aprendiz')
  {
	  header('location: login.php');
  }
?>
<!DOCTYPE html>
<html>

<head>
  <title>Usuario</title>
 
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
            <li >
              <a class="nav-link " href="Admin.php">
                <i class="fa fa-home text-primary"></i>
                <span class="nav-link-text">Inicio</span>
              </a>
            </li>
            <li >
              <a class="nav-link" href="tablasUsuario.php">
                <i class="fa fa-cube text-orange"></i>
                <span class="nav-link-text">Ver productos</span>
              </a>
            </li>
            <li >
              <a class="nav-link" href="tablasReservas.php">
                <i class="fa fa-calendar text-primary"></i>
                <span class="nav-link-text">Productos reservados</span>
              </a>
            </li>
            <li >
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
<center>
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body" >
          <div class="row ">
			 <div class="col-xl-3 col-md-6 ">
				 </br>
              <div class="card card-stats">
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
                  <a href="tablasUsuario.php" class="btn btn-sm btn-primary">Ver todo</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
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
                      Mouse
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
</body>
</html>