<?php

require_once "conexion.php";
$conexion = conexion();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../SMTP/PHPMailer/Exception.php';
require '../SMTP/PHPMailer/PHPMailer.php';
require '../SMTP/PHPMailer/SMTP.php';




if($_GET['ID']){ 
  $ID =$_GET['ID'];
  $correo = "alejandroafm1208@gmail.com" ;
  $sql_estado_locker ="SELECT * FROM casilleros WHERE casilleros.Id = '$ID' ";
  $result = mysqli_query($conexion, $sql_estado_locker);
  $mostrar = mysqli_fetch_array($result);

  $Id_locker = $mostrar['Id'];
  $nombre_locker = $mostrar['locker'];
  $referencia = $mostrar['referencia'];
  $vfware = $mostrar['vfirmware'];
  $vapp = $mostrar['vapp'];
  $ubicacion = $mostrar['localizacion'];
  $taquillas = $mostrar['slots'];
  $codigo = $mostrar['codigo'];
  $bateria = $mostrar['bateria'];
  $conectado =$mostrar['conectado'];
  $estado = $mostrar['estado'];
  

 
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
 $mail->Subject = 'Examen Estado Locker';
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
                                                            style="background-color: #FFC221; border-radius: 5px; padding: 5px;">!Estado Locker!</b>
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
                                            style="background-color: #F8AE22; border-radius: 5px; font-size: 40px; padding: 5px;">¡Autogestion de locker!</b>
                                        <br>
                                        <p style="font-size: 25px;">ID Locker: '.$Id_locker.' ' .$nombre_locker.' </p>
                                    </p>



                            </div>

                            <hr>
                        </div>


                        <!-- Productos -->
                        <table border=" 0" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:8px;margin:0px 15px;max-width:100%;width:630px;
                            ">
                            <tbody>
                                <tr>
                                    <td style="padding: 0px ">
                                        <table style="width:100%">

                                            <tr>
                                                <td>

                                                    <div>
                                                        <div
                                                            style="width: 100%;display: inline-block;border-radius: 8px;">

                                                            <label id="mensaje" style="font-size: 25px;">
                                                                <div style="background-color: #FAFAFA; padding: 20px ;
                                                                    border-radius: 10px;">
                                                                    <p>Locker: '.$nombre_locker.'</p>
                                                                    <p>Referencia: '.$referencia.'</p>
                                                                    <p>Version Sofware: '.$vfware.'</p>
                                                                    <p>Version App: '.$vapp.'</p>
                                                                    <p>Bateria: '.$bateria.'</p>     
                                                                    <p>Codigo de seguridad: '.$codigo.'</p>  
                                                                    <p>Taquillas: '.$taquillas.'</p>  
                                                                    <p>Estado: '.$estado.'</p>
                                                                    <p>Conectado: '.$conectado.'</p>
                                                                    
                                                                     
                                                                </div>
                                                                
                                                                <div style="background-color: #ffffff; padding: 20px ;
                                                                    border-radius: 10px; text-align: left;">
                                                                    <p style="text-align: center; font-size: 35px;  ">
                                                                        <b style="background-color: #FFC221;
                                                                            border-radius: 5px; font-size: 35px;
                                                                            padding: 5px;">Direccion:'.$ubicacion.' </b></p>
                                                                    <p></p>
                                                                </div>

                                                        </label>
                                                    </div>
                                                    <br>
                                                    </div>
                                                </td>

                                                <div>
                                                    <table style="width: 100%;">
                                                        <tbody>
                                                            <tr>
                                                               
                                                                <p
                                                                    style="display: inline-block;width: 100%;text-align:center;margin-bottom: 0px;">

                                                                    <a href="https://wa.link/3kzcyl" target="blank_"
                                                                        style="font-size: 21px;text-decoration: none;color:
                                                        #ffffff;background-color: #FFC221;padding: 12px
                                                        1%;border-radius: 25px;font-weight: 600;width: 70%;margin: 5px
                                                        1%;display: inline-block;" title="">
                                                                        Tengo una pregunta
                                                                    </a>

                                                                </p>
                                                                <p
                                                                    style="display: inline-block;width: 100%;text-align:center;margin-bottom: 0px;">

                                                                    <a href="tel:3232449070" style="font-size: 21px;  text-decoration: none;color:
                                                        #ffffff;background-color: #057EC7;padding: 12px
                                                        1%;border-radius: 25px;font-weight: 600;width: 70%;margin: 5px
                                                        1%;display: inline-block;" title="">
                                                                        Llamar Ahora
                                                                    </a>

                                                                </p>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <br> <br><br>


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
                                                                            Con ♥ Lavanderia</a>
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
                        <!-- Cordialmente -->


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
   echo "<script> alert('El estado del locker se ha enviado al correo de Gestion');window.location.replace(document.referrer);
						</script>";
 }
  

} 

 













?>