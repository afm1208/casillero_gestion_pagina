   <!-- Actualizar Locker -->
   <div class="modal fade" id="editslot<?php echo $mostrar['num_taquilla']; ?>" data-bs-backdrop="static"
       data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
       <div class="modal-dialog" id="c-locker">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="1">Editar Taquilla N° <?php echo $mostrar['num_taquilla']; ?> -
                       <?php echo $mostrar['nombre_locker']; ?></h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <div class="modal-create-locker">
                       <form id="frmupdatetaquilla" name="frmupdatetaquilla" class="form"
                           onsubmit="editartaquilla(<?php echo $mostrar['num_taquilla']; ?>); return false" action=""
                           method="POST">
                           <div class="container">
                               <div class="row">
                                   <label>Estado</label>
                                   <div class="form-sesion w-100 mb-5">
                                       <select class="w-100 rounded" value="<?php echo $mostrar['estado_locker']; ?>"
                                           name="estadoslot<?php echo $mostrar['num_taquilla']; ?>"
                                           id="estadoslot<?php echo $mostrar['num_taquilla']; ?>">
                                           <?php
                                            if ($mostrar['estado_locker'] == "Disponible") { ?>
                                           <option value="Disponible">Disponible</option>
                                           <option value="Bloqueado">Bloqueado</option>
                                           <?php
                                            } else   if ($mostrar['estado_locker'] == "Bloqueado") { ?>
                                           <option value="Bloqueado">Bloqueado</option>
                                           <option value="Disponible">Disponible</option>
                                           <?php
                                            } ?>
                                       </select>
                                   </div>
                                   <label>Tamaño</label>
                                   <div class="form-sesion w-100 mb-5">
                                       <select class="w-100 rounded" value="<?php echo $mostrar['tamano_locker']; ?>"
                                           name="tamanoslot<?php echo $mostrar['num_taquilla']; ?>"
                                           id="tamanoslot<?php echo $mostrar['num_taquilla']; ?>">
                                           <?php $small = utf8_decode(utf8_encode("Pequeño")); ?>
                                           <?php

                                            if ($mostrar['tamano_locker'] == "Grande") { ?>
                                           <option value="Grande">Grande</option>
                                           <option value="Mediano">Mediano</option>
                                           <option value="Pequeño">Pequeño</option>
                                           <?php
                                            } else   if ($mostrar['tamano_locker'] == "Mediano") { ?>
                                           <option value="Mediano">Mediano</option>
                                           <option value="Grande">Grande</option>
                                           <option value="Pequeño">Pequeño</option>
                                           <?php

                                            } else   if ($small == "Pequeño") { ?>
                                           <option value="Pequeño">Pequeño</option>
                                           <option value="Grande">Grande</option>
                                           <option value="Mediano">Mediano</option>
                                           <?php
                                            } ?>
                                       </select>
                                   </div>
                                   <label>Observaciones</label>
                                   <div class="form-sesion w-100 mb-5">
                                       <textarea class="w-100 rounded p-2" value=""
                                           name="observaciones<?php echo $mostrar['num_taquilla']; ?>"
                                           id="observaciones<?php echo $mostrar['num_taquilla']; ?>" cols="30"
                                           rows="10"><?php echo $mostrar['observacion']; ?></textarea>
                                   </div>
                                   <input type="hidden" value="<?php echo $mostrar['nombre_locker']; ?>"
                                       id="locker<?php echo $mostrar['num_taquilla']; ?>"
                                       name="locker<?php echo $mostrar['num_taquilla']; ?>">
                                   <input type="hidden" value="<?php echo $mostrar['num_taquilla']; ?>"
                                       id="id<?php echo $mostrar['num_taquilla']; ?>"
                                       name="id<?php echo $mostrar['num_taquilla']; ?>">


                                   <div class="col-lg-12 col-sm-6 col-12 text-center">
                                       <button id="updatetaquilla<?php echo $mostrar['num_taquilla']; ?>"
                                           class="btn-blue">Guardar</button>
                                   </div>
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Actualizar Locker -->

   <!-- Crear -->
   <div class="modal fade" id="createparcel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
       aria-labelledby="staticBackdropLabel" aria-hidden="true">
       <div class="modal-dialog" id="c-locker">
           <div class="modal-content">
               <div class="modal-header">

                   <h5 class="modal-title" id="1"> Crear Encomienda </h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <div class="modal-create-locker">
                       <form id="frmcreateparcel" name="frmcreateparcel" class="form"
                           action="../../php/insert-parcel.php" method="POST">
                           <div class="container">
                               <p>Cantidad total de lockers disponibles: <b><?php echo utf8_encode($mostrarpd['num']) ?>
                                   </b></p>
                               <br />
                               <p>Seleccione el tamaño del locker para su encomienda: </p>
                               <div class="my-5">
                                   <form id="frmvalidatelocker" name="frmvalidatelocker" class="form"
                                       action="../../php/insert-parcel.php" method="POST">
                                       <div id="slots">
                                           <div class="row">
                                               <div class="slots-available  col-lg-12 mb-2 rounded-3">


                                                   <?php if ($mostrarpg['num'] == Null) { ?>
                                                   <input type="radio" id="tamanogrande" name="tamanoslot"
                                                       onchange='cambioOpciones1();' value="1" class="btn-check"
                                                       disabled>
                                                   <?php

                                                    } else {
                                                    ?>



                                                   <input type="radio" id="tamanogrande" name="tamanoslot"
                                                       onchange='cambioOpciones1();' value="1" class="btn-check">
                                                   <?php
                                                    } ?>

                                                   <label class="btn btn-outline-primary" for="tamanogrande"> Grande
                                                       (<?php if ($mostrarpg['num'] == Null) {
                                                                                                                            echo "0";
                                                                                                                        } else {
                                                                                                                            echo utf8_encode($mostrarpg['num']);
                                                                                                                        } ?>)</label><br>
                                               </div>
                                               <div class="slots-available  col-lg-7 mb-2 rounded-3">

                                                   <?php if ($mostrarpm['num'] == Null) { ?>
                                                   <input type="radio" id="tamanomediano" name="tamanoslot"
                                                       onchange='cambioOpciones2();' value="2" class="btn-check"
                                                       disabled>
                                                   <?php
                                                    } else {
                                                    ?> <input type="radio" id="tamanomediano" name="tamanoslot"
                                                       onchange='cambioOpciones2();' value="2" class="btn-check">
                                                   <?php
                                                    } ?>
                                                   <label class="btn btn-outline-primary" for="tamanomediano"> Mediano
                                                       (<?php if ($mostrarpm['num'] == Null) {
                                                                                                                            echo "0";
                                                                                                                        } else {
                                                                                                                            echo utf8_encode($mostrarpm['num']);
                                                                                                                        } ?>)</label><br>
                                               </div>
                                               <div class="slots-available  col-lg-5 mb-2 rounded-3">
                                                   <?php if ($mostrarpp['num'] == Null) { ?>
                                                   <input type="radio" id="tamanopequeno" name="tamanoslot"
                                                       onchange='cambioOpciones3();' value="3" class="btn-check"
                                                       disabled>
                                                   <?php

                                                    } else {
                                                    ?>
                                                   <input type="radio" id="tamanopequeno" name="tamanoslot"
                                                       onchange='cambioOpciones3();' value="3" class="btn-check">
                                                   <?php
                                                    } ?>

                                                   <label class="btn btn-outline-primary" for="tamanopequeno"> Pequeño
                                                       (<?php if ($mostrarpp['num'] == Null) {
                                                                                                                            echo "0";
                                                                                                                        } else {
                                                                                                                            echo utf8_encode($mostrarpp['num']);
                                                                                                                        } ?>)</label><br>
                                               </div>
                                           </div>
                                           <!-- <input id="tamano-slot" type="text">
                                           <input id="taquilla-id" name="taquilla-id" type="text"> -->

                                           <div class="input-group">
                                               <span class="input-group-text">Tamaño y taquila</span>
                                               <input type="text" aria-label="First name" class="form-control"
                                                   id="tamano-slot">
                                               <input type="text" aria-label="Last name" class="form-control"
                                                   id="taquilla-id" name="taquilla-id">
                                           </div>
                                       </div>
                                   </form>
                               </div>



                               <div class="row">
                                   <label class="mb-2">Cliente</label>
                                   <div class="container">
                                       <div class="row-fluid">

                                           <select class="selectpicker"  data-show-subtext="true" data-live-search="true"
                                               name="nombre-cliente" id="nombre-cliente" onchange="changeStatus()"
                                               required>

                                               <?php
                                                $consulta = "SELECT * FROM registro_usuarios";
                                                $ejecutar = mysqli_query($conexion, $consulta);
                                                ?>

                                               <option value="Ninguno"></option>
                                               <?php foreach ($ejecutar as $opciones) : ?>
                                               <option
                                                   value="<?php echo $opciones['nombre'] ?>&<?php echo $opciones['correo'] ?>">
                                                   <?php echo $opciones['nombre'] ?>
                                                   <?php echo $opciones['numdocumento']?>
                                               </option>
                                               <?php endforeach ?>


                                           </select>

                                       </div>
                                   </div>

                                   <br>
                                   <br>

                                   <p>

                                       <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                           data-bs-target="#form-new-user" aria-expanded="false"
                                           aria-controls="form-new-user" name="boton-crear-user" id="boton-crear-user">
                                           Nuevo usuario
                                       </button>
                                   </p>

                                   <div class="collapse" id="form-new-user">
                                       <div class="card card-body">
                                           <form name="formulario-new-user-encomienda" method="POST"
                                               action="../../php/registro-usuario.php">
                                               <div class="mb-3">
                                                   <label for="name-new-user" class="form-label">Nombre y
                                                       apeliido</label>
                                                   <input type="text" class="form-control" id="nombre" name="nombre"
                                                       placeholder="Nombres y apeliidos">
                                               </div>
                                               <div class="mb-3">
                                                   <label for="documento-new-user" class="form-label">Documento</label>
                                                   <input type="text" class="form-control" id="numdocumento"
                                                       name="numdocumento" placeholder="Documento">
                                               </div>
                                               <div class="mb-3">
                                                   <label for="celular-new-user" class="form-label">Celular</label>
                                                   <input type="text" class="form-control" id="telefono" name="telefono"
                                                       placeholder="Celular">
                                               </div>
                                               <div class="mb-3">
                                                   <label for="exampleInputEmail1" class="form-label">Email
                                                       address</label>
                                                   <input type="email" class="form-control" id="correo" name="correo"
                                                       placeholder="Email">
                                               </div>
                                               <div class="links row mt-2">
                                                   <div class="col-lg-12 col-md-12 mt-3 text-center">
                                                       <input type="radio" name="tyc" id="tyc" value="si" required>
                                                       Aceptar <a href="create-account.php">Terminos Y Condiciones</a>
                                                   </div>
                                               </div>

                                               <input type="hidden" id="documento" name="documento" value="Cedula">
                                               <input type="hidden" id="contrasena" name="contrasena" value="000000">
                                               <input type="hidden" id="ccontrasena" name="ccontrasena" value="000000">
                                               <input type="hidden" id="locker_registrado" name="locker_registrado"
                                                   value="27">
                                               <input type="hidden" id="idRol" name="idRol" value="2">



                                               <input type="submit" class="btn btn-primary" value="Crear Usuario"
                                                   name="registrarNuevo" data-bs-toggle="modal"
                                                   data-bs-target="#modal-confirmed">
                                           </form>
                                       </div>
                                   </div>
                                
                                   <div class="form-check">
                                       <input class="form-check-input" type="radio" name="pago"
                                           id="pago_realizado" value="pago realizado">
                                       <label class="form-check-label" for="flexRadioDefault1">
                                           Pago realizado
                                       </label>
                                   </div>
                                   <div class="form-check">
                                       <input class="form-check-input" type="radio" name="pago"
                                           id="pago_pendiente" value="pago">
                                       <label class="form-check-label" for="flexRadioDefault2">
                                           Pago pendiente
                                       </label>
                                   </div>



                                   <label class="mb-2 mt-4">Información Adicional</label>

                                   <div class="form-sesion w-100 mb-5">
                                       <textarea class="w-100 rounded p-2" value="" name="info" id="info" cols="10"
                                           rows="2" required></textarea>
                                   </div>

                                   <p>Ingreser el token del usuario</p>
                                   <input type="text" name="codigo_prueba" id="codigo_prueba"
                                       placeholder="Ingrese token" value="" required>

                                   <br><br><br>

                                   <input type="text" value="<?php echo $mostrar['nombre_locker']; ?>"
                                       id="nombre-locker" name="nombre-locker">

                                   <input type="text" name="creado" id="creado" value="<?= $fecha ?>">

                                   <input type="hidden" name="f_reserva" value="<?$fecha?>">

                                   <input type="hidden" name="correo" value="<?$mostrar['correo']?>">

                                   <input type="hidden" name="estado" value="ROPA RECIBIDA">

                                   <div class="col-lg-12 col-sm-6 col-12 text-center">

                                       <button id="createparcel" class="btn-blue">Guardar</button>
                                   </div>
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Crear -->

   <!-- Mostrar historial de taquilla -->

   <!-- <div class="modal fade" id="listlot<?php echo $mostrar['num_taquilla']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     
   </div> -->

   <div class="modal fade" id="listlot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
       aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="Historial_taquillas"> HISTORIAL TAQUILLA
                       <?php echo $mostrar['num_taquilla']; ?> </h5>

               </div>
               <div class="modal-body">
                   <div class="mt-5 px-lg-2 px-sm-1">
                       <div class="row m-0">
                           <div class="col-lg-12">
                               <table id="indexadmin" class="table table-hover table-locker" cellspacing="0"
                                   width="100%">

                                   <thead>
                                       <tr>

                                           <th style="width: 15%">Usuario</th>
                                           <th style="width: 15%">Estado</th>
                                           <th style="width: 15%">Fecha-reservacion</th>
                                           <th style="width: 5%">Codigo_Entrega </th>
                                           <th style="width: 15%">Fecha-entregado</th>
                                           <th style="width: 15%">Fecha-cancelado</th>

                                       </tr>
                                   </thead>

                                   <?php require_once "../../php/mostrar-historial.php";
                                    $sql_1 = "SELECT encomiendas.Id, nombre_cliente, encomiendas.nombre_locker,taquilla,estado_locker, fecha_reserva, codigo_entrega, fecha_entregado, fecha_cancelado , encomiendas.observacion from encomiendas INNER JOIN detalles_locker on encomiendas.nombre_locker = detalles_locker.nombre_locker WHERE detalles_locker.Id_Locker = '$Id'  GROUP BY codigo_entrega order by encomiendas.fecha_reserva DESC";
                                    $result = mysqli_query($conexion, $sql_1);
                                    $total_articulos = mysqli_num_rows($result);
                                    $articulos_por_pagina = 10;
                                    $mostrar['num_taquilla'];
                                    $paginas = ceil($total_articulos / $articulos_por_pagina);
                                    while ($mostrar = mysqli_fetch_array($result)) {
                                    ?>



                                   <?php
                                    }

                                    ?>


                                   <?php require_once "../../php/mostrar-tabla.php";
                                    $result = mysqli_query($conexion, $sql_1);
                                    while ($mostrar = mysqli_fetch_array($result)) {
                                    ?>
                                   <tr>
                                       <td><?php echo $mostrar['nombre_cliente'] ?></td>
                                       <td><?php echo $mostrar['estado_locker'] ?></td>
                                       <td><?php echo $mostrar['fecha_reserva'] ?></td>
                                       <td><?php echo $mostrar['codigo_entrega'] ?></td>
                                       <td><?php echo $mostrar['fecha_entregado'] ?></td>
                                       <td><?php echo $mostrar['fecha_cancelado'] ?></td>


                                   </tr>

                                   <?php
                                    }
                                    ?>
                               </table>

                           </div>
                       </div>
                   </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

               </div>
           </div>
       </div>
   </div>