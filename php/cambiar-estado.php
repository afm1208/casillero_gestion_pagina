<?php

require_once "conexion.php";
$conexion = conexion();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../SMTP/PHPMailer/Exception.php';
require '../SMTP/PHPMailer/PHPMailer.php';
require '../SMTP/PHPMailer/SMTP.php';




if($_GET['Id']){ 
  $ID =$_GET['Id'];
  $correo = $_GET['correo'];
  $sql = "UPDATE encomiendas SET estado = 'Ropa Recibida' where Id = $ID ";
  $result = mysqli_query($conexion, $sql);
 
 
 $mail = new PHPMailer();
 $mail->IsSMTP();
 $mail->Mailer = "smtp";
 
 $mail->SMTPDebug  = 0;  
 $mail->SMTPAuth   = TRUE;
 $mail->SMTPSecure = "tls";
 $mail->Port       = 587;
 $mail->Host       = "smtp.gmail.com";
 $mail->Username   = "info@casillerosinteligentes.com";
 $mail->Password   = "Casille123+";
 
 $mail->IsHTML(true);
 $mail->AddAddress( $correo, "'Clean is good'");
 $mail->SetFrom("info@casillerosinteligentes.com",'Clean is good');
 $mail->AddReplyTo($correo,'Clean is god');
 $mail->Subject = 'OK, Recibimos Tu Ropa.';
 $content = ' <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Chat Para Correo</title>
 </head>
 
 <body style="margin: 0px;padding: 0px; ">
     <style>
         @import url(../fonts/Lato/Lato-Black.ttf);
 
         @font-face {
             font-family: Lato-Black;
             src: url(../fonts/Lato/Lato-Black.ttf)
         }
     </style>
     <table style="background: #ffffff;
          font-family:san-serif;margin:0;max-width:100%;padding:0;width:-webkit-fill-available;
          width:-moz-available;position: relative;border-spacing: 0px;border-collapse: inherit;">
         <tbody>
             <tr>
                 <td>
                     <center>
                         <table style="margin:10px auto;max-width:100%;width:600px; height: 10px;">
                             <tbody>
                                 <tr>
                                     <td style="text-align:center">
                                         <center>
                                             <div class="texto2">
                                                         <b
                                                             style="background-color: #FFC221; border-radius: 5px; padding: 5px;">¡TU ROPA SE ENCUENTRA EN EL LOCKER!</b>
                                                     </b></p>
                                             </div>
                                         </center>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                         <div style="background:#ffffff;border-radius:8px;margin:0px 15px;max-width:100%;width:600px;">
                             <div class="texto 1" style="background-color: rgb(255, 255, 255); width: 100%;">
                                 <p><b style="font-size: 25px;"><b
                                             style="background-color: #F8AE22; border-radius: 5px; font-size: 40px; padding: 5px;">¡TU ROPA ESTA LISTA PARA LAVAR!</b>
                                         <br>
                                         <p style="font-size: 25px;">¡Estamos trabajando para que retires tu ropa limpia!</p>
                                     </b></p>
 
 
 
                             </div>
 
                         </div>
                                                 <div style=" padding: 5px; width:100%">
                                                         <table style="width:100%;margin-top: 3px; " cellspacing=»0″
                                                             cellpadding=»0″>
                                                             <tbody>
                                                                 <tr>
                                                                     <td
                                                                         style="border-right:2px solid #ffffff;border-left: none; text-align:center;width:370px;height:170px;">
 
                                                                         </p> 
                                                                         <a style=" text-decoration: none ; color:
                                                                             black; font-size: 13px; " href="
                                                                             https://casillerosinteligentes.com/">Hecho
                                                                             Con ♥ Clean is good</a>
                                                                     </td>
                                                                 </tr>
                                                             </tbody>
                                                         </table>
                                                     
                                                 </div>
 
 
 
 
 
                                             </tr>
                                         </table>
 
 
 
                                     </td>
                                 </tr>
 
                         </table>
                        
 
 
                     </center>
                 </td>
             </tr>
         </tbody>
     </table>
     <br> <br>
 </body>
 
 </html>';
    
 $mail->MsgHTML($content); 
 if(!$mail->Send()) { 
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=Algo-salio-mal.html\">";
   var_dump($mail);
 } else {
   echo "<meta http-equiv=\"refresh\" content=\"0;URL=Agradecimiento.html\">";
   echo "<script> alert('El estado de la encomienda a cambiado');window.location.replace(document.referrer);
						</script>";
 }
  

} else if ($_GET['Id2']){
  $ID =$_GET['Id2'];
  $correo = $_GET['correo1'];
    $sql = "UPDATE encomiendas SET estado = 'Ropa recogida para lavar ' where Id = $ID ";
    $result = mysqli_query($conexion, $sql);

    $mail = new PHPMailer();
 $mail->IsSMTP();
 $mail->Mailer = "smtp";
 
 $mail->SMTPDebug  = 0;  
 $mail->SMTPAuth   = TRUE;
 $mail->SMTPSecure = "tls";
 $mail->Port       = 587;
 $mail->Host       = "smtp.gmail.com";
 $mail->Username   = "info@casillerosinteligentes.com";
 $mail->Password   = "Casille123+";
 
 $mail->IsHTML(true);
 $mail->AddAddress( $correo, "Clean is god");
 $mail->SetFrom("info@casillerosinteligentes.com",'Clean is god');
 $mail->AddReplyTo($correo,'Clean is god');
 $mail->Subject = ' Tu Ropa se esta lavando.';
 $content = '<!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Chat Para Correo</title>
 </head>
 
 <body style="margin: 0px;padding: 0px; ">
     <style>
         @import url(../fonts/Lato/Lato-Black.ttf);
 
         @font-face {
             font-family: Lato-Black;
             src: url(../fonts/Lato/Lato-Black.ttf)
         }
     </style>
     <table style="background: #ffffff;
          font-family:san-serif;margin:0;max-width:100%;padding:0;width:-webkit-fill-available;
          width:-moz-available;position: relative;border-spacing: 0px;border-collapse: inherit;">
         <tbody>
             <tr>
                 <td>
                     <center>
                         <table style="margin:10px auto;max-width:100%;width:600px; height: 10px;">
                             <tbody>
                                 <tr>
                                     <td style="text-align:center">
                                         <center>
                                             <div class="texto2">
                                                         <b
                                                             style="background-color: #FFC221; border-radius: 5px; padding: 5px;">¡TU ROPA SE ESTA LAVANDO!</b>
                                                     </b></p>
                                             </div>
                                         </center>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                         <div style="background:#ffffff;border-radius:8px;margin:0px 15px;max-width:100%;width:600px;">
                             <div class="texto 1" style="background-color: rgb(255, 255, 255); width: 100%;">
                                 <p><b style="font-size: 25px;"><b
                                             style="background-color:#FFC221; border-radius: 5px; font-size: 40px; padding: 5px;">¡TU ROPA ESTA EN CAMINO!</b>
                                         <br>
                                         <p style="font-size: 25px;">¡Pronto te avisaremos cuando tu ropa este nueva mente en el locker!</p>
                                     </b></p>

                             </div>
                         </div>
                                                 <div style=" padding: 5px; width:100%">
                                                         <table style="width:100%;margin-top: 3px; " cellspacing=»0″
                                                             cellpadding=»0″>
                                                             <tbody>
                                                                 <tr>
                                                                     <td
                                                                         style="border-right:2px solid #ffffff;border-left: none; text-align:center;width:370px;height:170px;">
 
                                                                         </p> 
                                                                         <a style=" text-decoration: none ; color:
                                                                             black; font-size: 13px; " href="
                                                                             https://casillerosinteligentes.com/">Hecho
                                                                             Con ♥ Clean is god</a>
                                                                     </td>
                                                                 </tr>
                                                             </tbody>
                                                         </table>
                                                     
                                                 </div>
                                             </tr>
                                         </table>
                                     </td>
                                 </tr>
 
                         </table>
                     </center>
                 </td>
             </tr>
         </tbody>
     </table>
     <br> <br>
 </body>
 
 </html>
  ';
    
 $mail->MsgHTML($content); 
 if(!$mail->Send()) { 
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=Algo-salio-mal.html\">";
   var_dump($mail);
 } else {
   echo "<meta http-equiv=\"refresh\" content=\"0;URL=Agradecimiento.html\">";
   echo "<script> alert('El estado de la encomienda a cambiado');window.location.replace(document.referrer);
   </script>";
 }

} else if ($_GET['Id3']){
  $ID =$_GET['Id3'];
  $correo = $_GET['correo2'];
  $codigo_user = $_GET['codigo_user'];
    $sql = "UPDATE encomiendas SET estado = 'Ropa limpia entregada' where Id = $ID ";
    $result = mysqli_query($conexion, $sql);

    $mail = new PHPMailer();
 $mail->IsSMTP();
 $mail->Mailer = "smtp";
 
 $mail->SMTPDebug  = 0;  
 $mail->SMTPAuth   = TRUE;
 $mail->SMTPSecure = "tls";
 $mail->Port       = 587;
 $mail->Host       = "smtp.gmail.com";
 $mail->Username   = "info@casillerosinteligentes.com";
 $mail->Password   = "Casille123+";
 
 $mail->IsHTML(true);
 $mail->AddAddress( $correo, "Clean is god");
 $mail->SetFrom("info@casillerosinteligentes.com",'Clean is god');
 $mail->Subject = 'Ropa lista para Retirar';
 $content = '
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Chat Para Correo</title>
 </head>
 
 <body style="margin: 0px;padding: 0px; ">
     <style>
         @import url(../fonts/Lato/Lato-Black.ttf);
 
         @font-face {
             font-family: Lato-Black;
             src: url(../fonts/Lato/Lato-Black.ttf)
         }
     </style>
     <table style="background: #ffffff;
          font-family:san-serif;margin:0;max-width:100%;padding:0;width:-webkit-fill-available;
          width:-moz-available;position: relative;border-spacing: 0px;border-collapse: inherit;">
         <tbody>
             <tr>
                 <td>
                     <center>
                         <table style="margin:10px auto;max-width:100%;width:600px; height: 10px;">
                             <tbody>
                                 <tr>
                                     <td style="text-align:center">
                                         <center>
                                             <div class="texto2">
                                                         <b
                                                             style="background-color: #FFC221; border-radius: 5px; padding: 5px;">¡TU ROPA YA ESTA LIMPIA!</b>
                                                     </b></p>
                                             </div>
                                         </center>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                         <div style="background:#ffffff;border-radius:8px;margin:0px 15px;max-width:100%;width:600px;">
                             <div class="texto 1" style="background-color: rgb(255, 255, 255); width: 100%;">
                                 <p><b style="font-size: 25px;"><b
                                             style="background-color: #FFC221; border-radius: 5px; font-size: 40px; padding: 5px;">¡PUEDES RECOGER TU ROPA LIMPIA EN EL CASILLERO!</b>
                                         <br>
                                         <p style="font-size: 25px;">¡Dirigete al casillero donde dejaste tu ropa y reclamala con el codigo!</p>
                                     </b></p>

                                     
                             </div>
 
                             <hr>
                
                         </div>
                                                 <div style=" padding: 5px; width:100%">
                                                         <table style="width:100%;margin-top: 3px; " cellspacing=»0″
                                                             cellpadding=»0″>
                                                             <tbody>
                                                                 <tr>
                                                                     <td
                                                                         style="border-right:2px solid #ffffff;border-left: none; text-align:center;width:370px;height:170px;">
                                                                         
                                                                         </p> 
                                                                       
                                                                         <H1> '.$codigo_user.'</H1>
                                                                         <hr style="width: 50% ;"> <br>
                                                                        
                                                                         <a style=" text-decoration: none ; color:
                                                                             black; font-size: 13px; " href="
                                                                             https://casillerosinteligentes.com/">Hecho
                                                                             Con ♥ Clean is god</a>
                                                                     </td>
                                                                 </tr>
                                                             </tbody>
                                                         </table>
                                                     
                                                 </div>
                                             </tr>
                                         </table>
                                     </td>
                                 </tr>
 
                         </table>
                     </center>
                 </td>
             </tr>
         </tbody>
     </table>
     <br> <br>
 </body>
 
 </html>
   ';
    
 $mail->MsgHTML($content); 
 if(!$mail->Send()) { 
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=Algo-salio-mal.html\">";
   var_dump($mail);
 } else {
   echo "<meta http-equiv=\"refresh\" content=\"0;URL=Agradecimiento.html\">";
   echo "<script> alert('El estado de la encomienda a cambiado');window.location.replace(document.referrer);
   </script>";
 }
} else if ($_GET['Id4']){
  $ID =$_GET['Id4'];
  $correo = $_GET['correo3'];
    $sql = "UPDATE encomiendas SET estado = 'Ropa limpia recogida' where Id = $ID ";
    $result = mysqli_query($conexion, $sql);
    $mail = new PHPMailer();

 $mail->IsSMTP();
 $mail->Mailer = "smtp";
 
 $mail->SMTPDebug  = 0;  
 $mail->SMTPAuth   = TRUE;
 $mail->SMTPSecure = "tls";
 $mail->Port       = 587;
 $mail->Host       = "smtp.gmail.com";
 $mail->Username   = "info@casillerosinteligentes.com";
 $mail->Password   = "Casille123+";
 
 $mail->IsHTML(true);
 $mail->AddAddress( $correo, "Clean is god");
 $mail->SetFrom("info@casillerosinteligentes.com", 'Clean is god');
 $mail->Subject = ' Fue un gusto Colaborarte! Te esperamos pronto.';
 $content = ' <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Chat Para Correo</title>
 </head>
 
 <body style="margin: 0px;padding: 0px; ">
     <style>
         @import url(../fonts/Lato/Lato-Black.ttf);
 
         @font-face {
             font-family: Lato-Black;
             src: url(../fonts/Lato/Lato-Black.ttf)
         }
     </style>
     <table style="background: #ffffff;
          font-family:san-serif;margin:0;max-width:100%;padding:0;width:-webkit-fill-available;
          width:-moz-available;position: relative;border-spacing: 0px;border-collapse: inherit;">
         <tbody>
             <tr>
                 <td>
                     <center>
                         <table style="margin:10px auto;max-width:100%;width:600px; height: 10px;">
                             <tbody>
                                 <tr>
                                     <td style="text-align:center">
                                         <center>
                                             <div class="texto2">
                                                         <b
                                                             style="background-color: #00ff00; border-radius: 5px; padding: 5px;">TE ESPERAMOS PRONTO</b>
                                                     </b></p>
                                             </div>
                                         </center>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                         <div style="background:#ffffff;border-radius:8px;margin:0px 15px;max-width:100%;width:600px;">
                             <div class="texto 1" style="background-color: rgb(255, 255, 255); width: 100%;">
                                 <p><b style="font-size: 25px;"><b
                                             style="background-color: #00ff00; border-radius: 5px; font-size: 40px; padding: 5px;">¡PUEDES RECOGER TU ROPA LIMPIA EN EL CASILLERO!</b>
                                         <br>
                                         <p style="font-size: 25px;">¡Esperamos tu experiencia haya sido buena!</p>
                                     </b></p>

                             </div>
 
                             <hr>
                         </div>
                                                 <div style=" padding: 5px; width:100%">
                                                         <table style="width:100%;margin-top: 3px; " cellspacing=»0″
                                                             cellpadding=»0″>
                                                             <tbody>
                                                                 <tr>
                                                                     <td
                                                                         style="border-right:2px solid #ffffff;border-left: none; text-align:center;width:370px;height:170px;">
 
                                                                         </p> <br>
                                                                         <hr style="width: 50% ;"> <br>
                                                                         <a style=" text-decoration: none ; color:
                                                                             black; font-size: 13px; " href="
                                                                             https://casillerosinteligentes.com/">Hecho
                                                                             Con ♥ Clean is god</a>
                                                                     </td>
                                                                 </tr>
                                                             </tbody>
                                                         </table>
                                                     
                                                 </div>
                                             </tr>
                                         </table>
                                     </td>
                                 </tr>
 
                         </table>
                     </center>
                 </td>
             </tr>
         </tbody>
     </table>
     <br> <br>
 </body>
 
 </html>
   ';
 $mail->MsgHTML($content); 
 if(!$mail->Send()) { 
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=Algo-salio-mal.html\">";
   var_dump($mail);
 } else {
   echo "<meta http-equiv=\"refresh\" content=\"0;URL=Agradecimiento.html\">";

   echo "<script> alert('El estado de la encomienda a cambiado');window.location.replace(document.referrer);
   </script>";

 }
 } else if ($_GET['Id5']){
    $ID =$_GET['Id5'];
    $correo = $_GET['correo4'];
      $sql = "UPDATE encomiendas SET estado = 'Usuario tardado' where Id = $ID ";
      $result = mysqli_query($conexion, $sql);
      $mail = new PHPMailer();
  
   $mail->IsSMTP();
   $mail->Mailer = "smtp";
   
   $mail->SMTPDebug  = 0;  
   $mail->SMTPAuth   = TRUE;
   $mail->SMTPSecure = "tls";
   $mail->Port       = 587;
   $mail->Host       = "smtp.gmail.com";
   $mail->Username   = "info@casillerosinteligentes.com";
   $mail->Password   = "Casille123+";
   
   $mail->IsHTML(true);
   $mail->AddAddress( $correo, "Clean is god");
   $mail->SetFrom("info@casillerosinteligentes.com", 'Clean is god');
   $mail->Subject = '!RECUERDA! Tienes tu ropa esta lista';
   $content = ' <!DOCTYPE html>
   <html lang="en">
   
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Chat Para Correo</title>
   </head>
   
   <body style="margin: 0px;padding: 0px; ">
       <style>
           @import url(../fonts/Lato/Lato-Black.ttf);
   
           @font-face {
               font-family: Lato-Black;
               src: url(../fonts/Lato/Lato-Black.ttf)
           }
       </style>
       <table style="background: #ffffff;
            font-family:san-serif;margin:0;max-width:100%;padding:0;width:-webkit-fill-available;
            width:-moz-available;position: relative;border-spacing: 0px;border-collapse: inherit;">
           <tbody>
               <tr>
                   <td>
                       <center>
                           <table style="margin:10px auto;max-width:100%;width:600px; height: 10px;">
                               <tbody>
                                   <tr>
                                       <td style="text-align:center">
                                           <center>
                                               <div class="texto2">
                                                           <b
                                                               style="background-color: #00ff00; border-radius: 5px; padding: 5px;">!RECUERDA!</b>
                                                       </b></p>
                                               </div>
                                           </center>
                                       </td>
                                   </tr>
                               </tbody>
                           </table>
                           <div style="background:#ffffff;border-radius:8px;margin:0px 15px;max-width:100%;width:600px;">
                               <div class="texto 1" style="background-color: rgb(255, 255, 255); width: 100%;">
                                   <p><b style="font-size: 25px;"><b
                                               style="background-color: #FFC221; border-radius: 5px; font-size: 40px; padding: 5px;">¡TU ROPA YA SE ENCUENTRA EN EL CASILLERO!</b>
                                           <br>
                                           <p style="font-size: 25px;">Tienes 30 minutos para recoger tu ropa lipia del casillero</p>
                                       </b></p>
  
                               </div>
                           </div>
                                                   <div style=" padding: 5px; width:100%">
                                                           <table style="width:100%;margin-top: 3px; " cellspacing=»0″
                                                               cellpadding=»0″>
                                                               <tbody>
                                                                   <tr>
                                                                       <td
                                                                           style="border-right:2px solid #ffffff;border-left: none; text-align:center;width:370px;height:170px;">
   
                                                                           </p> 
                                                                          
                                                                           <a style=" text-decoration: none ; color:
                                                                               black; font-size: 13px; " href="
                                                                               https://casillerosinteligentes.com/">Hecho
                                                                               Con ♥ Clean is god</a>
                                                                       </td>
                                                                   </tr>
                                                               </tbody>
                                                           </table>
                                                       
                                                   </div>
                                               </tr>
                                           </table>
                                       </td>
                                   </tr>
   
                           </table>
                       </center>
                   </td>
               </tr>
           </tbody>
       </table>
       <br> <br>
   </body>
   
   </html>
     ';
   $mail->MsgHTML($content); 
   if(!$mail->Send()) { 
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=Algo-salio-mal.html\">";
     var_dump($mail);
   } else {
     echo "<meta http-equiv=\"refresh\" content=\"0;URL=Agradecimiento.html\">";
   }
 echo "<script> alert('El estado de la encomienda a cambiado');window.location.replace(document.referrer);
						</script>";

 }


?>