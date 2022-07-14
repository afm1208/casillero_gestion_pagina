   <!-- Actualizar Locker -->
   <div class="modal fade" id="editlocker<?php echo $mostrar['Id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
       <div class="modal-dialog" id="c-locker">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="staticBackdropLabel">Actualizar Locker</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <div class="modal-create-locker">
                       <form id="frmupdatelocker" name="frmupdatelocker" class="form" action="../../php/update-locker.php" method="POST">
                           <div class="row">
                               <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                   <label class="inp">
                                       <input type="text" value="<?php echo $mostrar['compania']; ?>" name="upcompania" placeholder="&nbsp;" required>
                                       <span class="label">Nombre de la compañía*</span>
                                   </label>
                               </div>
                               <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                   <label class="inp">
                                       <input type="text" value="<?php echo $mostrar['locker']; ?>" name="uplocker"  placeholder="&nbsp;" required>
                                       <span class="label">Nombre del locker*</span>
                                   </label>
                               </div>
                               <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                   <label class="inp">
                                       <input type="text" value="<?php echo $mostrar['agencia']; ?>" name="upagencia" placeholder="&nbsp;" required>
                                       <span class="label">Nombre de agencia*</span>
                                   </label>
                               </div>
                               <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                   <label class="inp">
                                       <input type="text" value="<?php echo $mostrar['vfirmware']; ?>" name="upvfirmware"  placeholder="&nbsp;" required>
                                       <span class="label">Versión del firmware*</span>
                                   </label>
                               </div>

                               <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                   <label class="inp">
                                       <input type="text" value="<?php echo $mostrar['vapp']; ?>" name="upvapp"  placeholder="&nbsp;" required>
                                       <span class="label">Versión de la app*</span>
                                   </label>
                               </div>

                               <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                   <label class="inp">
                                       <input type="text" value="<?php echo $mostrar['informacion']; ?>" name="upinformacion"  placeholder="&nbsp;" required>
                                       <span class="label">Información adicional*</span>
                                   </label>
                               </div>
                               <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                   <label class="inp">
                                       <input type="text" value="<?php echo $mostrar['localizacion']; ?>" name="uplocalizacion"  placeholder="&nbsp;"required>
                                       <span class="label">Localización del locker*</span>
                                   </label>
                               </div>
                               <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                   <label class="inp">
                                       <input readonly type="hidden" value="<?php echo $mostrar['slots']; ?>" name="upslots"  placeholder="&nbsp;" required>
                                       <input type="number" value="<?php echo $mostrar['slots']; ?>" name="upslotsmas" placeholder="&nbsp;" required>
                                       <span class="label">Agregar Slots*</span>
                                   </label>
                               </div>
                               <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                   <label class="inp">
                                       <span class="label2">¿Conectado?</span>
                                       <select value="<?php echo $mostrar['conectado']; ?>" name="upconectado" required>
                                           <option value="SI">SI</option>
                                           <option value="NO" selected>NO</option>
                                       </select>
                                   </label>
                               </div>
                               <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                   <label class="inp">
                                       <span class="label2">Tipo*</span>
                                       <select value="<?php echo $mostrar['tipo']; ?>" name="uptipo" required>
                                           <option value="Publico" selected>Publico</option>
                                           <option value="Privado">Privado</option>
                                       </select>
                                   </label>
                               </div>
                               <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                   <label class="inp">
                                       <input type="text" value="<?php echo $mostrar['codigo']; ?>" name="upcodigo" placeholder="&nbsp;" required>
                                       <span class="label">Codigo Privado*</span>
                                   </label>
                               </div>
                               <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                   <label class="inp">
                                       <input type="hidden" value="<?php echo $mostrar['codigo_entrega']; ?>" name="upcodigo_entrega" placeholder="&nbsp;" required>
                                       <span class="label">Codigo entregable*</span>
                                   </label>
                               </div>

                               

                               <!-- Input hidden con hora -->
                               <input type="hidden"  name="upcreado" >
                               <input type="hidden" name="upactualizado"   >
                               <input type="hidden" name="upid" id="upid"  >
                               <!-- Input hidden con hora -->

                               <div class="col-lg-6 col-sm-6 col-12 text-center">
                                   <input type="submit" class="btn btn-primary" value="Actualizar Datos" name="actualizar_datos" >
                                   <input type="hidden" name="Id"  value="<?php echo $mostrar['Id']; ?>">

                                   <!-- <button id="updatelocker<?php echo $mostrar['Id']; ?>" class="btn-blue" >Actualizar Datos</button> -->
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>

       </div>
   </div>
   <!-- Actualizar Locker -->


   <!-- Borrar Locker -->
   <div class="modal fade" id="deletelocker<?php echo $mostrar['Id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
       <div class="modal-dialog" id="c-locker">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="staticBackdropLabel">Borrar Locker</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <div class="modal-create-locker">
                       <form id="frmdeletelocker" name="frmdeletelocker" class="form" onsubmit="borrarlocker(<?php echo $mostrar['Id']; ?>); return false" action="" method="POST">
                           <div class="row">
                               <div class="col-lg-12 col-sm-6 col-12 mb-4">
                                   <div class="container">
                                       <div class="modal-title">
                                           <h1>¿Esta seguro que desea eliminar este casillero?</h1>
                                       </div>
                                       <div class="modal-body">
                                           <div class="row">
                                               <div class="col-lg-12 col-sm-6 col-12 mb-4  d-flex justify-content-center">
                                                   <label>Nombre Locker: </label>
                                                   <p><?php echo $mostrar['locker']; ?></p>
                                                   <input type="hidden" name="lock<?php echo $mostrar['Id']; ?>" id="lock<?php echo $mostrar['Id']; ?>" value="<?php echo $mostrar['locker']; ?>">
                                                   <input type="hidden" name="del<?php echo $mostrar['Id']; ?>" id="del<?php echo $mostrar['Id']; ?>" value="<?php echo $mostrar['Id']; ?>">
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-lg-6 col-sm-6 col-12 text-center">
                                           <button id="deletelocker<?php echo $mostrar['Id']; ?>" class="btn-green w-75">Si</button>
                                       </div>
                                       <div class="col-lg-6 col-sm-6 col-12 text-center">
                                           <button type="button" class="btn-red w-75" data-bs-dismiss="modal" aria-label="Close">No</button>
                                       </div>
                                   </div>

                               </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Borrar Locker -->