<?php
session_start();

 if( $_SESSION['tipodeusuario'] != 'Empleado'  )
  {
	  header('location: login.php');
  }

?>
<!DOCTYPE html>
<html>

<head>
	
  <title>Tablas</title>
  <link rel="icon" href="../assets/img/brand/Logopagina.PNG" type="image/png">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
	<link rel="stylesheet" href="../assets/css/argon1.css" type="text/css">
	
</head>
 
<body>
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <div class="sidenav-header  align-items-center">
		  <a class="imagen-logo" ></br>
          <img src="../assets/img/brand/LogoProyecto.PNG" >
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
              <a class="nav-link" href="tablas.php">
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
      <div class="container-fluid ">
        <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
          
          <?php
					  date_default_timezone_set("America/Bogota");
					  $fecha = date('d m Y');
					  $tiempo = date ('H:i:s');
					  echo $fecha;
					  echo ' ';
					  echo $tiempo;
		?>
          <ul class="navbar-nav align-items-center  ml-md-auto ">
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
                    <span class="mb-0 text-sm  font-weight-bold">
					  <?php
				    echo $_SESSION['nombre'];
				    echo ' ';
					echo  $_SESSION['apellido'] ;
				?> 
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
      </div>
    </nav>
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
       
        </div>
      </div>
    </div>
	  </br>  </br>
    <div class="container-fluid  mt--6">
      <div class="row cuatro1">
        <div class="col">
          <div class="card">
			  <center></br>
			  <h1 >Entrada de productos</h1></center>
			  <did class="Tabla-proyecto ">  
			
				  <?php
				  require_once("ConexionBase.php");
				  
				  $conex = new Conexionbasededatos1();
		          $conn3 = $conex -> conectar();
				  
	   $consultar2= mysqli_query($conn3 ,"SELECT count(*)  FROM activo");	
	   $columna1 = mysqli_fetch_array($consultar2);
	   $total= $columna1['count(*)'];
				
				  
	   $Paginas = 4;
				  
		if(empty($_GET['pagina'])){
			$pagina=1;
		}else{
			$pagina = $_GET['pagina'];
		}
				  
		$desde =($pagina-1) * $Paginas;
		$totalpaginas = ceil($total / $Paginas);
				  
		
	   $consultar1= mysqli_query($conn3 ,"SELECT CodActivo, Descripcion, Valor_Activo,Cantidad,Fecha_Ingreso,Tipo_Activo,Imagenes FROM activo  order by Fecha_Ingreso desc limit $desde,$Paginas
	    
	   ");

		echo "<table class='table' align=center>";
		  echo "<thead class='thead-light'> ";
			echo "<tr>";
			echo "<th scope='col-auto' class='sort'>Codigo</th>";
			echo "<th scope='col-auto' class='sort'>Descripcion</th>";
			echo "<th scope='col-auto' class='sort'>Valor</th>";
			echo "<th scope='col-auto' class='sort'>Cantidad</th>";
		    echo "<th scope='col-auto' class='sort'>Fecha Ingreso</th>";
		    echo "<th scope='col-auto' class='sort'>Tipo de producto</th>";
		    echo "<th scope='col-auto' class='sort'>Imagenes</th>";
			echo "</tr>";   
			  
			echo "</thead>";	
				while ($columna = mysqli_fetch_array($consultar1))
				{
					
					if($columna['Imagenes'] != 'img_imagenprede.jpg'){
						$imagenes = 'imagen/Product/'.$columna['Imagenes'];
						
					}else{
						$imagenes ='imagen/'.$columna['Imagenes'];
					}
			
					echo "<tr  class='table' align=center>";
					echo "<td >" , $columna['CodActivo'] , "</td><td>" , $columna['Descripcion'] , "</td><td>" ,
						'$ '.$columna['Valor_Activo'] , "</td><td >" , $columna['Cantidad'] , "</td><td>" , $columna['Fecha_Ingreso'] , "</td><td>" , $columna['Tipo_Activo'],"</td><td class='imagen-producto'> <img src='$imagenes' alt='".$columna['Descripcion']."'>","</td>";
					
					echo "</tr>";
		
					echo "<html>";
					 echo '
               <div class="modal fade" id="ventana2">
				 <div class="modal-dialog">
				   <div class="modal-content">
				      <div class="modal-header">
					     
						  <form  role="form"  method="POST"  action="Eliminarproductos.php" enctype="multipart/form-data" >
						  <button type="button" class="close " data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
                 <h3 ><center>Seguro deseas Eliminar el producto</center></h3>
                <div class="modal-footer">
						
						<div class="form-actions" >
							
					<input  class="btn btn-primary mt-4 ven2"  type="submit" data-dismiss="modal" value="Cerrar"/>
					<input  class="btn btn-primary mt-4 ven1"  type="submit" name="eliminar" value="Eliminar producto"/>
			
                </div>
					</div>
			  	
					  </form>
						 </div>
						 </div>
						 </div>
						 </div>
						 ';
					
					print "</html>";
				}
		
		echo "</table>";
				  ?>
				  
				  <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
					
                  <li class="page-item "> <a class="page-link" href="?pagina = <?php echo $pagina-1; ?>" tabindex="-1"> <em class="fas fa-angle-left"></em> <span class="sr-only">Previous</span> </a> </li>
					
                 
					<?php
					
				
					
					   for ($i=1; $i <= $totalpaginas; $i++){
						   if($i == $pagina){
							   
							   echo '<li class="page-item active ">
                           <a class="page-link" href=""> '.$i.'</a>
                           </li>';
						   }else{
						   echo '<li class="page-item ">
                           <a class="page-link" href=" ?pagina= '.$i.' "> '.$i.'</a>
                           </li>';
						   }
						  
					   }
					?>
					
					 <li class="page-item"> <a class="page-link" href="?pagina = <?php echo ($pagina + 1); ?>"> <em class="fas fa-angle-right"></em> <span class="sr-only">Next</span> </a> </li>
                 
                </ul>
              </nav>
            </div>
		</did>
	  
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>