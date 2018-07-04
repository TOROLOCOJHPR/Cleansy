
<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
echo $_POST['nombre'];
	if(isset($_POST['mail'])){
		include ("correo/php/envioCorreo.php");
		$email = new email('www.cleansy.mx',"contacto.cleansy@gmail.com","nousMercadotecnia");
		$email->agregar('jesusparra07hp@gmail.com',"humberto parra");
					
		if ($email->enviar('Cleansy-contacto',$contenido_html)){
						
				$mensaje= 'Mensaje enviado';
						
		}else{
					   
		   $mensaje= 'El mensaje no se pudo enviar';
		   echo $email->ErrorInfo;
		}
	}
?>