﻿<?php
require ('class.phpmailer.php');
include("class.smtp.php");

class Email  extends PHPMailer{

    //datos de remitente
    var $tu_email;
    var $tu_nombre;
    var $tu_password;

    /**
 * Constructor de clase
 */
    public function __construct($tu_nombre,$tu_email,$tu_password)
    {
      //configuracion general
     $this->IsSMTP(); // protocolo de transferencia de correo
     $this->Host = 'tls://smtp.gmail.com:587';  // Servidor GMAIL
     $this->Port = 587; //puerto
     $this->SMTPAuth = true; // Habilitar la autenticación SMTP
     $this->Username = $this->tu_email=$tu_email;
     $this->Password = $this->tu_password=$tu_password;
     $this->SMTPSecure = 'tls';  //habilita la encriptacion SSL
     //remitente
     $this->From = $this->tu_email;
     $this->FromName = $this->tu_nombre=$tu_nombre;
	   $this->CharSet='UTF8';
    }

    /**
 * Metodo encargado del envio del e-mail
 */
    public function enviar($asunto , $contenido)
    {
      //$this->AddAddress($para,$nombre );  // Correo y nombre a quien se envia
	   //$this->addCC("harold-c-m@hotmail.com",'Harold Campo Morales');
	   //$this->addBCC("harold-c-m@hotmail.com",'Harold Campo Morales'); 
       $this->WordWrap = 50; // Ajuste de texto
       $this->IsHTML(true); //establece formato HTML para el contenido
       $this->Subject =$asunto;
       $this->Body    =  $contenido; //contenido con etiquetas HTML
       $this->AltBody =  strip_tags($contenido); //Contenido para servidores que no aceptan HTML
	   //$this->addAttachment("archivoadjunto.pdf",'Prueba 1.pdf');
	   //$this->addAttachment("archivoadjunto.pdf",'Prueba 2.pdf');
       //envio de e-mail y retorno de resultado
       return $this->Send() ;
   }
   public function agregar($correo,$nombre = ''){
	   $this->addAddress($correo,$nombre);
	}

}//--> fin clase
	
// $contenido_html = "<div><strong>Email:</strong></div>".
//                   "<div>".$_POST["email"]."</div>".
//                   "<div><strong>Nombre:</strong></div>".
//                   "<div>".$_POST["nombre"]."</div>".
//                   "<div><strong>Teléfono:</strong></div>".
//                   "<div>".$_POST["telefono"]."</div>".
//                   "<div><strong>Asunto:</strong></div>".
//                   "<div>".$_POST["asunto"]."</div>".
//                   "<div><strong>Comentario:</strong></div>".
//                   "<div>".$_POST["comentarios"]."</div>";
$contenido_html = "<div><strong>Email:</strong></div>";
?>