<?php


  $correo2=$_POST['correo2'];
    
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

   require 'PHPMailer/src/Exception.php';
   require 'PHPMailer/src/PHPMailer.php';
   require 'PHPMailer/src/SMTP.php';
 
   $correo = new PHPMailer(true);

try {
   
    $correo->SMTPDebug = 0;                     
    $correo->isSMTP();                                            
    $correo->Host       = 'smtp.gmail.com';                   
    $correo->SMTPAuth   = true;                                   
    $correo->Username   = 'csoftware77@gmail.com';                     
    $correo->Password   = 'Sena123456';                               
    $correo->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;       
    $correo->Port       = 587;                                    
   
    $correo->setFrom('csoftware77@gmail.com', 'Software Company');
    $correo->addAddress($correo2);     
      

    $correo->isHTML(true);
	$correo->CharSet = 'UTF-8';
    $correo->Subject = 'Solicitud cambio de contraseña ';
    $correo->Body    = 'Hola, como esta te enviamos un correo para realizar el cambio de contraseña<br>Por favor ingresa al siguiente link para cambiar tu contraseña:<br>http://localhost:8080/proyectosena1/examples/CambioClave.php
	<br>
	<br>
	Software Company
	'; 
	 $correo->addAttachment('imagen/Firma/Logo.png');
	
	

    $correo->send();
	echo "<script>
            alert('Mensaje enviado, Revisa tu correo');
            window.location= 'login.php'
            </script>";
} catch (Exception $e) {
	echo "<script>
            alert('Mensaje no enviado');
            window.location= 'recuperacionSesion.html'
            </script>";
   
}
?>