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
 $mail->Subject = '!GRATIS! Premiamos tu fidelidad';
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
                                                             style="background-color: #FFC221; border-radius: 5px; padding: 5px;">¡FELICITACIONES!</b>
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
                                             style="background-color: #F8AE22; border-radius: 5px; font-size: 40px; padding: 5px;">¡TIENES UNA LAVADA GRATIS!</b>
                                         <br>
                                         <p style="font-size: 25px;">¡Premiamos tu fidelidad y por eso, te regalamos la proxima lavada!</p>
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
   echo "<script> alert('Has premiado a un usuario');window.location.replace(document.referrer);
						</script>";
 }
  
} 


?>