<?php
//declaracion de  variables del formulario
$nombre=$_POST['Nombre'];
$email=$_POST['Email'];
$telefono=$_POST['Telefono'];
$mensajes=$_POST['Mensajes'];
$apellido =$_POST['Apellido'];
$direccion =$_POST['Direccion'];

//datos del email.
$destino= 'alejandro.dj098@gmail.com';
$titulo ='S&S solicitud de compras';
$header ='From'.$email;
$msjCorreo ="Nombre: $nombre\n Telefono: $telefono\n E-mail: $email\ Mensajes:\n $mensajes Apellido:\n $apellido Direccio\n $direccion";
if($_POST['submit']){
     if(mail($destino,$titulo,  $msjCorreo,$header)){
         echo "<scrip lenguaje='javascript'>
         alert ('Mensaje enviado, muchas gracias por contactar con nosotros.');
         </script>";
     }else{
         echo 'Fallo el envio';

     }
     
    }
?>
