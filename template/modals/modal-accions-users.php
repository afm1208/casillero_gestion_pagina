   <!-- Editar rol usuario -->
   <div class="modal fade" id="editrole<?php echo $mostrar['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="1" aria-hidden="true">
       <div class="modal-dialog" id="c-locker">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="1">Actualizar ROL</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <div class="modal-create-locker">
                       <form id="frmupdaterole" name="frmupdaterole" class="form" onsubmit="actualizarrol(<?php echo $mostrar['id']; ?>); return false" action="" method="POST">
                           <div class="row">
                               <div class="col-lg-12 col-sm-6 col-12 mb-4  d-flex justify-content-center">
                                   <div class="profile m-0">
                                       <div class="img-user">
                                           <?php
                                            if ($mostrar['idRol'] == 1) { ?>
                                               <img src="../../resources/img/icon-admin.png" alt="icono admin" title="icono admin" class="w-50 h-50">
                                           <?php
                                            } else  if ($mostrar['idRol'] == 2) { ?>
                                               <img src="../../resources/img/icon-user.PNG" alt="icono usuario" title="icono usuario" class="w-50 h-50">
                                           <?php
                                            }
                                            ?>
                                       </div>
                                       <h2 class="mb-2">Nombre: <?php echo utf8_decode($mostrar['nombre']); ?></h2>

                                       <span class="mb-2">ID: <?php echo utf8_decode($mostrar['numdocumento']); ?></span>

                                       <h3 class="mb-2">ROL: <select value="<?php echo $mostrar['idRol']; ?>" name="upidRol<?php echo $mostrar['id']; ?>" id="upidRol<?php echo $mostrar['id']; ?>">

                                               <?php
                                                if ($mostrar['idRol'] == "1") { ?>
                                                   <option value="1">Admin</option>
                                                   <option value="2">Usuario</option>
                                               <?php
                                                } else   if ($mostrar['idRol'] == "2") { ?>
                                                   <option value="2">Usuario</option>
                                                   <option value="1">Admin</option>
                                               <?php
                                                } ?>
                                           </select></h3>

                                   </div>
                                   <input type="hidden" name="upid<?php echo $mostrar['id']; ?>" id="upid<?php echo $mostrar['id']; ?>" value="<?php echo $mostrar['id']; ?>">
                               </div>

                               <div class="col-lg-12 col-sm-6 col-12 text-center">
                                   <button id="updaterole<?php echo $mostrar['id']; ?>" class="btn-blue">Actualizar Rol</button>
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Editar rol usuario -->



   <!-- Actualizar Usuario -->
   <div class="modal fade" id="edituser<?php echo $mostrar['id']; ?>" data-bs-backdrop=" static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="2" aria-hidden="true">
       <div class="modal-dialog" id="c-locker">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="1">Actualizar Usuario</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <div class="modal-create-locker">
                       <form id="frmupdateuser" name="frmupdateuser" class="form" onsubmit="actualizarusuario(<?php echo $mostrar['id']; ?>); return false" action="" method="POST">
                           <div class="row">
                               <div class="col-lg-12 col-sm-6 col-12 mb-4">
                                   <div class="profile m-0">
                                       <div class="img-user">
                                           <?php
                                            if ($mostrar['idRol'] == 1) { ?>
                                               <img src="../../resources/img/icon-admin.png" alt="icono admin" title="icono admin" class="w-50 h-50">
                                           <?php
                                            } else 
                                        if ($mostrar['idRol'] == 2) { ?>
                                               <img src="../../resources/img/icon-user.PNG" alt="icono usuario" title="icono usuario" class="w-50 h-50">
                                           <?php
                                            }
                                            ?>
                                       </div>
                                   </div>

                               </div>
                               <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                   <label class="inp">
                                       <input type="text" value="<?php echo $mostrar['nombre']; ?>" name="upnombre<?php echo $mostrar['id']; ?>" id="upnombre<?php echo $mostrar['id']; ?>" placeholder="&nbsp;">
                                       <span class="label">Nombre Usuario*</span>
                                   </label>
                               </div>
                               <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                   <label class="inp">
                                       <span class="label2">Tipo Documento</span>
                                       <select value="<?php echo $mostrar['documento']; ?>" name="updocumento<?php echo $mostrar['id']; ?>" id="updocumento<?php echo $mostrar['id']; ?>">
                                           <option value="<?php echo $mostrar['documento']; ?>"><?php echo $mostrar['documento']; ?></option>
                                           <?php
                                            if ($mostrar['documento'] == "Cedula") { ?>
                                               <option value="Pasaporte">Pasaporte</option>
                                               <option value="NIT">NIT</option>
                                           <?php
                                            } else   if ($mostrar['documento'] == "Pasaporte") { ?>
                                               <option value="Cedula">Cedula</option>
                                               <option value="NIT">NIT</option>
                                           <?php
                                            } else   if ($mostrar['documento'] == "NIT") { ?>
                                               <option value="Pasaporte">Pasaporte</option>
                                               <option value="Cedula">Cedula</option>
                                           <?php
                                            } ?>
                                       </select>
                                   </label>
                               </div>
                               <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                   <label class="inp">
                                       <input type="text" value="<?php echo $mostrar['numdocumento']; ?>" name="upnumdocumento<?php echo $mostrar['id']; ?>" id="upnumdocumento<?php echo $mostrar['id']; ?>" placeholder="&nbsp;">
                                       <span class="label">Numero Documento*</span>
                                   </label>
                               </div>
                               <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                   <label class="inp">
                                       <input type="number" value="<?php echo $mostrar['telefono']; ?>" name="uptelefono<?php echo $mostrar['id']; ?>" id="uptelefono<?php echo $mostrar['id']; ?>" placeholder="&nbsp;">
                                       <span class="label">Telefono*</span>
                                   </label>
                               </div>

                               <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                   <label class="inp">
                                       <input type="email" value="<?php echo $mostrar['correo']; ?>" name="upcorreo<?php echo $mostrar['id']; ?>" id="upcorreo<?php echo $mostrar['id']; ?>" placeholder="&nbsp;">
                                       <span class="label">Correo*</span>
                                   </label>
                               </div>

                               <!-- Input hidden con hora -->
                               <input type="hidden" name="upidu<?php echo $mostrar['id']; ?>" id="upidu<?php echo $mostrar['id']; ?>" value="<?php echo $mostrar['id']; ?>">
                               <!-- Input hidden con hora -->

                               <div class="col-lg-6 col-sm-6 col-12 text-center">
                                   <button id="updateuser<?php echo $mostrar['id']; ?>" class="btn-blue">Actualizar Datos</button>
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Actualizar Usuario -->



   <!-- Borrar Usuario -->
   <div class="modal fade" id="deleteuser<?php echo $mostrar['id']; ?>" data-bs-backdrop=" static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="3" aria-hidden="true">
       <div class="modal-dialog" id="c-locker">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="2">Borrar Locker</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <div class="modal-create-locker">
                       <form id="frmdeleteuser" name="frmdeleteuser" class="form" onsubmit="borrarusuario(<?php echo $mostrar['id']; ?>); return false" action="" method="POST">
                           <div class="row">
                               <div class="col-lg-12 col-sm-6 col-12 mb-4">
                                   <div class="container">
                                       <div class="modal-title">
                                           <h1>¿Esta seguro que desea eliminar este usuario?</h1>
                                       </div>
                                       <div class="modal-body">
                                           <div class="row">
                                               <div class="col-lg-12 col-sm-6 col-12 mb-4  d-flex justify-content-center">
                                                   <div class="profile m-0">
                                                       <div class="img-user">
                                                           <?php
                                                            if ($mostrar['idRol'] == 1) { ?>
                                                               <img src="../../resources/img/icon-admin.png" alt="icono admin" title="icono admin" class="w-50 h-50">
                                                           <?php
                                                            } else  if ($mostrar['idRol'] == 2) { ?>
                                                               <img src="../../resources/img/icon-user.PNG" alt="icono usuario" title="icono usuario" class="w-50 h-50">
                                                           <?php
                                                            }
                                                            ?>
                                                       </div>
                                                       <h2><?php echo utf8_decode($mostrar['nombre']); ?></h2>

                                                       <span><?php echo utf8_decode($mostrar['numdocumento']); ?></span>

                                                       <h3><?php echo utf8_decode($mostrar['correo']); ?></h3>
                                                   </div>
                                                   <input type="hidden" name="delu<?php echo $mostrar['id']; ?>" id="delu<?php echo $mostrar['id']; ?>" value="<?php echo $mostrar['id']; ?>">
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-lg-6 col-sm-6 col-12 text-center">
                                           <button id="deleteuser<?php echo $mostrar['id']; ?>" class="btn-green w-75">Si</button>
                                       </div>
                                       <div class="col-lg-6 col-sm-6 col-12 text-center">
                                           <button type="button" class="btn-red w-75" data-bs-dismiss="modal" aria-label="Close">No</button>
                                       </div>
                                   </div>

                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Borrar Usuario -->


