<?php require_once "config.php"; ?>

<!DOCTYPE html>
<html>

<head>
	<title>Registro</title>

	<?php require_once FOLDER_TEMPLATE . "head.php" ?>
	
</head>


<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="img-principal text-center">
					<img src="resources/img/casillero-sur1.png" alt="logo casilleros inteligentes" title="logo casilleros inteligentes">
				</div>
				<form id="frmRegistro" class="form"  action="php/registro.php" method="POST">
					<div class="form-sesion">
						<div class="col-lg-12">
							<h4>Registro De Usuario</h4>
						</div>
						<div class="col-lg-12">
							<input type="text" name="nombre" id="nombre" placeholder="Nombre Y Apellido" required>
						</div>
						<div class="col-lg-12">
							<select name="documento" id="documento" required>
								<option value="">Seleccione</option>
								<option value="Cedula">Cedula</option>
								<option value="Pasaporte">Pasaporte</option>
								<option value="NIT">NIT</option>
							</select>
						</div>
						<div class="col-lg-12">
							<input type="number" name="numdocumento" id="numdocumento" placeholder="Ingrese numero documento" required>
						</div>
						<div class="col-lg-12">
							<input type="number" name="telefono" id="telefono" placeholder="Teléfono" required>
						</div>
						<div class="col-lg-12">
							<input type="email" name="correo" id="correo" placeholder="Email" required>
						</div>
						<div class="col-lg-12">
							<input type="text" name="contrasena" id="contrasena" placeholder="Contraseña" required>
						</div>
						<div class="col-lg-12">
							<input type="text" name="ccontrasena" id="ccontrasena" placeholder="Confirme Contraseña"required>
						</div>
						<div class="col-lg-12">
							<select name="locker_registrado" id="locker_registrado" required>
								<option value="27">CASILLERO SUR</option>
							</select>
						</div>
						<div class="col-lg-12">
							<input type="hidden" name="idRol" id="idRol" value="2">
						</div>
					</div>
					<div class="links row mt-2">
						<div class="col-lg-12 col-md-12 mt-3 text-center">
							<input type="radio" name="tyc" id="tyc" value="si" required> Aceptar <a href="create-account.php" data-bs-toggle="modal" data-bs-target="#exampleModal">Terminos Y Condiciones</a>
						</div>
					</div>
					<div class="col-lg-12 text-center">
						
						<input type="submit" class="form-control" value="registrarNuevo" name="registrarNuevo"   data-bs-toggle="modal" data-bs-target="#modal-confirmed" >
					</div>

				</form>
				<div class="links row mt-2">
					<div class="col-lg-12 col-md-12 mt-3 text-center">¿Ya Estas Registrado? <a href="index.php">Ingresar</a></div>
				</div>



				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header">
								<div class="col-lg-12">
									<img src="resources/img/icon-notification.png" alt="icono notificacion" title="icono notificacion">
									<h2>Terminos Y Condiciones</h2>
									<button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
							</div>
							<div class="modal-body px-5 py-2">
								<div class="container">
									<center> <img src="resources/img/logo-casilleros-large.png" alt=""></center>
								</div>
								<p>Estos Términos de Uso constituyen un acuerdo entre el usuario del servicio Casilleros Inteligentes y Casilleros Inteligentes , relacionado con los servicios ofrecidos para la gestión de pedidos en casilleros inteligentes. Los términos y condiciones adicionales se publicarán en el sitio web automáticamente y se incorporarán expresamente a estos Términos de uso como referencia. Los usuarios de los servicios de Casilleros Inteligentes aceptan y acuerdan estar sujetos a este acuerdo, reconociendo esta aceptación al utilizar el servicio. Los usuarios que no estén de acuerdo con los Términos de uso detallados aquí y sus cambios futuros no podrán acceder ni utilizar los servicios de Casilleros Inteligentes. Solo los usuarios mayores de 18 años pueden crear/registrar una cuenta para usar los servicios de Casilleros Inteligentes.
									<br>
									<br>
									<b>Servicio</b>
									<br>
									El sistema Casilleros Inteligentes consta de una plataforma que aloja un software el cual se ejecuta en la nube, en la que se registra la información de los usuarios finales, administradores y transacciones realizadas en el casillero inteligente para futuras consultas por parte del administrador del sistema que se encuentre acreditado. Además, cuenta con un sistema tecnológico de IoT (Internet de las cosas) dentro del casillero metálico y una aplicación para que el destinatario pueda recibir notificaciones relacionadas con la entrega de pedidos en el armario inteligente y también recibir la clave virtual para su retiro. Para utilizar el sistema, el usuario debe descargar, instalar y registrar la aplicación Casilleros Inteligentes, disponible de forma gratuita a través de la página web <a href="https://casillerosinteligentes.com/" target="_blank">www.casillerosinteligentes.com</a> Casilleros Inteligentes es un fabricante de tecnología utilizada en casilleros inteligentes, donde los pedidos se reciben y depositan. Tan pronto como el paquete se deposita en el casillero, el sistema envía una notificación al destinatario a través de la aplicación móvil de Casilleros Inteligentes y al correo electrónico que registró la persona que hace uso del servicio. Con esta notificación, el destinatario es informado de la llegada del pedido y recibe una clave virtual única que será utilizada para el retiro.
									<br>
									<br>
									<b>Registro de usuario</b>
									<br>
									El registro de usuario se realizará a través de la aplicación Casilleros Inteligentes. Durante el primer acceso, el usuario debe informar los siguientes datos: Correo electrónico, contraseña, confirmar contraseña, nombre completo, número de identidad y número celular. El sistema enviará un mensaje al correo electrónico proporcionado, para confirmar y completar el registro. Una vez finalizado el registro, los usuarios obtendrán un número ID único con el que podrán recibir las encomiendas en el casillero inteligente que se hayan registrado. Para usos adicionales de los servicios de casilleros inteligentes de Casilleros Inteligentes en otros segmentos de mercado, se deberá ingresar los datos de una tarjeta de crédito/débito para el pago correspondiente. El usuario debe proporcionar datos verdaderos, actualizados y completos, siendo responsable de la veracidad de la información y de su actualización, cuando sea necesario. Los datos de la tarjeta de crédito del usuario serán almacenados por el proveedor de servicios responsable de la transacción financiera, el cual verificará la identidad para proceder al cobro de montos, monitorear el fraude y gestionar cualquier ocurrencia antes, durante y después del período de uso, además de proteger la privacidad de los consumidores de tarjetas de crédito.
									<br> 
									<br>
									<b>Reglas de uso</b>
									<br>
									Para utilizar el servicio, el usuario debe seguir las instrucciones disponibles en el casillero inteligente y página web, también conocer las restricciones sobre los tipos de materiales a recibir y / o depositar en el casillero. El equipo no debe utilizarse para ninguna transacción prohibida por la ley. Está estrictamente prohibido guardar artículos peligrosos o ilegales en el casillero. El administrador del sistema podrá eliminar los artículos prohibidos y deberá comunicarse con las autoridades policiales si la situación lo requiere. Además, el administrador del sistema podrá abrir las puertas del casillero en caso de emergencia, como en caso de amenaza de bomba, mal olor o en caso de sospecha de presencia de materiales controlados. Tan pronto como se realiza un pedido en el casillero, el usuario del sistema Casilleros Inteligentes será notificado de la entrega a través de la aplicación Casilleros Inteligentes y el correo electrónico. El usuario debe retirar el pedido del casillero dentro de un tiempo establecido por el contratante del servicio de casillero inteligente y el tiempo asignado para recolección será definido por dicho contratante. Si el pedido no es retirado por el usuario final dentro del plazo estipulado, el contratante se comunicará con el usuario que está haciendo uso del casillero para que le autorice retirar el paquete, resguardarlo bajo su responsabilidad y dejar el casillero disponible para otros usuarios. En este caso, el usuario podrá abonar importes extra por gastos de almacenamiento, que serán cobrados al momento de recolección del paquete. El usuario declara ser consciente de que no podrá autorizar a terceros a utilizar el casillero inteligente en su nombre o con su número de ID.
									<br>
									<br>
									<b>Restricciones de pedidos</b>
									<br>
									El usuario se compromete a no poner dentro del casillero artículos inflamables, perecederos, de alto valor, congelados, armas de fuego o artículos robados. El usuario tampoco debe depositar los siguientes elementos en el casillero:

								<ul>
									<b>1.</b> Sustancia explosiva, radiactiva, perecedera, fétida, nauseabunda, corrosiva, nociva o fácilmente inflamable, cuyo transporte constituye un peligro o puede dañar otro objeto;
								</ul>
								<ul>
									<b>2.</b> Cocaína, opio, morfina, otros estupefacientes y sustancias prohibidas;
								</ul>
								<ul>
									<b>3.</b> Animal vivo;
								</ul>
								<ul>
									<b>4.</b> Planta viva;
								</ul>
								<ul>
									<b>5.</b> Animales muertos, huesos y cenizas de animales;
								</ul>
								<ul>
									<b>6.</b> Objetos cuya circulación en el país, exportación o importación, esté prohibida por acto de autoridad competente;
								</ul>
								<ul>
									<b>7.</b> Moneda de valor actual;
								</ul>
								<ul>
									<b>8.</b> Sustancias que, manipuladas o transportadas, constituyen un peligro o pueden causar daños;
								</ul>
								<ul>
									<b>9.</b> Estupefacientes y sustancias psicotrópicas (que provocan alucinaciones y delirio);
								</ul>
								<ul>
									<b>10.</b> Objetos que atenten contra la seguridad nacional;
								</ul>
								<ul>
									<b>11.</b> Armas o municiones;
								</ul>
								<ul>
									<b>12.</b> Restos humanos;
								</ul>
								<ul>
									<b>13.</b> Contenido clasificado como peligroso según se especifica en las reglamentaciones nacionales de transporte aéreo o terrestre;
								</ul>
								<ul>
									<b>14.</b> Cualquier otro bien o producto prohibido por la ley ecuatoriana o protegido por la legislación ambiental;
								</ul>
								<ul>
									<b>15.</b> Material biológico;
								</ul>
								<ul>
									<b>16.</b> Líquidos inflamables.
								</ul>
								<br>
								<br>
								<b>Actualización de los términos de uso</b>
								<br>
								Casilleros Inteligentes se reserva el derecho de corregir cualquier error, inexactitud u omisión en los Términos de Uso publicados y de cambiar o actualizar la información, siempre con el objetivo de mejorar los servicios ofrecidos, en cualquier momento, sin previo aviso. Las nuevas modificaciones entrarán en vigor tan pronto como se publiquen las Condiciones de Uso en el sitio web, teniendo el usuario la posibilidad de manifestar su oposición a las nuevas Condiciones, siempre que lo haga por escrito, a través del sitio web de Casilleros Inteligentes, lo que dará lugar a la cancelación de su registro hasta solucionar las diferencias manifestadas con las políticas de uso.
								<br>
								<br>
								<b>Limitación de tamaños de pedidos</b>
								<br>
								Los casilleros inteligentes de Casilleros Inteligentes tienen diferentes tamaños de espacios. Al solicitar una entrega en el casillero de Casilleros Inteligentes, el usuario debe verificar que el tamaño del paquete del pedido esté dentro del límite máximo de 43x41x56 cm (Alto x Ancho x Fondo). Antes de hacer uso del servicio de casillero inteligente se debe verificar las limitaciones del tamaño del paquete.
								<br>
								<br>
								<b>Limitación de espacios disponibles</b>
								<br>
								En el caso de falta de espacios disponibles para recepción de paquetería en los casilleros inteligentes, la persona/tienda responsable de entrega deberá comunicarse con el servicio al cliente de Casilleros Inteligentes para notificar sobre esta situación. El servicio al cliente le indicará los pasos a seguir para resolver este inconveniente.
								<br>
								<br>
								<b>Limitación de responsabilidad</b>
								<br>
								Casilleros Inteligentes , sus directores, gerentes, empleados o agentes no serán responsables de ningún daño directo, indirecto, accidental, especial o punitivo, incluyendo lucro cesante, pérdida de datos u otros daños derivados del uso de los servicios de Casilleros Inteligentes.
								<br>
								<br>
								<b>Canal de contacto</b>
								<br>
								Los usuarios podrán contactar con Casilleros Inteligentes a través de la dirección electrónica info@casillerosinteligentes.com y a través del número telefónico que estará publicado en la página web en https://casillerosinteligentes.com en caso de que quieran reportar fallas, problemas, defectos en algunos equipos, registrar ocurrencias, dar sugerencias de mejoras y críticas o compartir sus experiencias con los servicios de Casilleros Inteligentes.
								<br>
								<br>
								<b>Política de privacidad</b>
								<br>
								El usuario del sistema Casilleros Inteligentes acepta y está de acuerdo con esta Política de Privacidad para la obtención, uso y almacenamiento de los datos e información recopilados por Casilleros Inteligentes que, junto con las Condiciones de Uso, conforman el acuerdo completo entre el usuario y Casilleros Inteligentes (Casilleros Inteligentes) Toda la información personal recopilada se utilizará para ayudar al usuario a tener una experiencia productiva y agradable en nuestra plataforma y servicio. Garantizar la confidencialidad de los datos personales recopilados en nuestra aplicación es muy importante para Casilleros Inteligentes. Toda la información personal relacionada con los usuarios de la aplicación Casilleros Inteligentes será tratada de acuerdo con la Ley de Protección de Datos Personales establecidas en la Republica de Colombia. La información personal recopilada puede incluir nombre, correo electrónico, número de teléfono celular, dirección, cédula de identidad y/u otros datos. El uso de la aplicación Casilleros Inteligentes implica la aceptación de esta Política de Privacidad. Casilleros Inteligentes se reserva el derecho de cambiar este acuerdo sin previo aviso. Por ello, recomendamos que consultes nuestra política de privacidad con regularidad, para que estés siempre actualizado. Toda la información recopilada se almacena en un entorno seguro de servicios en la nube, en Ecuador o en otros países, Casilleros Inteligentes garantiza la confidencialidad absoluta de los datos personales de cada usuario registrados en la aplicación y cuyo acceso está limitado solamente a personas autorizadas por Casilleros Inteligentes
								<br>
								<br>
								<i>© 2022, Casilleros Inteligentes.</i>
								</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="modal fade" id="modal-confirmed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header">
								<div class="col-lg-12">
									<img src="resources/img/icon-notification.png" alt="icono notificacion" title="icono notificacion">
									<h2>USUARIO CREADO</h2>
									<button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
							</div>
							<div class="modal-body px-5 py-2">
								<div class="container">
									<p>Ya puedes iniciar sesion con el correo y contraseña</p>
									<center> <img src="resources/img/good.png" alt=""></center>
								</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<?php require_once FOLDER_TEMPLATE . "scripts.php" ?>

</body>

</html>