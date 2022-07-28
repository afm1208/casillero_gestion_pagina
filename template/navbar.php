<?php
date_default_timezone_set('America/Bogota');
$fecha = date('Y-m-d H:i:s', time());



if ($_SESSION["idRol"] == 1) { ?>

<nav class="navbar-blue" style="background-color: green;">
    <ul>
        <li><label for="btn-menu"><i class="bi bi-list fs-4"></i></label></li>
        <li><a href="index-admin.php"><i class="bi bi-grid-1x2-fill fs-4"></i></a></li>
        <li><a href="users-registered.php"><i class="bi bi-people-fill fs-4"></i></a></li>
        <li><a href="report-lockers.php"><i class="bi bi-file-earmark-bar-graph-fill fs-4"></i></a></li>
        <li><a href="gestion-entrega.php"><i class="bi bi-minecart  fs-4"></i></a></li>
        <li><a href="lavanderia-puntos.php"><i class="bi bi-gift-fill fs-4"></i></a></li>
        <li id="id"><a href="#">ID: <?php echo utf8_decode($row['numdocumento']); ?></a></li>
    </ul>
</nav>

<!-- Crear Locker -->
<div class="modal fade" id="createlocker" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" id="c-locker">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Crear Locker</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-create-locker">
                    <form id="frmcreatelocker" class="form" action="../../php/create-locker.php" method="POST">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                <label class="inp">
                                    <input type="text" name="locker" id="locker" placeholder="&nbsp;" required>
                                    <span class="label">Sucursal</span>
                                </label>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                <label class="inp">
                                    <input type="text" name="referencia" id="referencia" placeholder="&nbsp;" required>
                                    <span class="label">Referencia</span>
                                </label>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                <label class="inp">
                                    <input type="text" name="localizacion" id="localizacion" placeholder="&nbsp;"
                                        required>
                                    <span class="label">Direccion</span>
                                </label>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                <label class="inp">
                                    <input type="number" name="slots" id="slots" placeholder="&nbsp;" required>
                                    <span class="label">N°Taquillas</span>
                                </label>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                <label class="inp">
                                    <input type="text" name="vapp" id="vapp" placeholder="&nbsp;" required>
                                    <span class="label">Version App</span>
                                </label>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                <label class="inp">
                                    <span class="label2">¿Conectado?</span>
                                    <select name="conectado" id="conectado" required>
                                        <option value="SI">SI</option>
                                        <option value="NO" selected>NO</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                <label class="inp">
                                    <span class="label2">Tipo*</span>
                                    <select name="tipo" id="tipo" required>
                                        <option value="Publico" selected>Publico</option>
                                        <option value="Privado">Privado</option>
                                    </select>
                                </label>
                            </div>

                            <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                <label class="inp">
                                    <input type="text" name="codigo" id="codigo" placeholder="&nbsp;" required>
                                    <span class="label">Codigo Privado*</span>
                                </label>
                            </div>

                            <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                <label class="inp">
                                    <input type="text" name="vapp" id="vapp" placeholder="&nbsp;" required>
                                    <span class="label">Versión de la app*</span>
                                </label>
                            </div>

                            <div class="col-lg-6 col-sm-6 col-12 mb-4">
                                <label class="inp">
                                    <input type="text" name="informacion" id="informacion" placeholder="&nbsp;"
                                        required>
                                    <span class="label">Información adicional*</span>
                                </label>
                            </div>



                            <!-- Input hidden con hora -->
                            <input type="hidden" name="creado" id="creado" value="<?= $fecha ?>">
                            <input type="hidden" name="actualizado" id="actualizado" value="<?= $fecha ?>">
                            <input type="hidden" name="compania" id="compania" value="Lavanderia Clean Is Good">
                            <input type="hidden" name="agencia" id="agencia" value="Lavanderia Clean Is Good">
                            <input type="hidden" name="vfirmware" id="vfirmware" value="bt 2.1">
                            <input type="hidden" name="vapp" id="vapp" value="bt 2.1">
                            <!-- Input hidden con hora -->
                            <input type="hidden" name="estado" id="estado" value="Bloqueado">
                            <input type="hidden" name="tamano" id="tamano" value="Mediano">

                            <center>
                                <div class="col-lg-6 col-sm-6 col-12 text-center">
                                    <button id="crearlocker" class="btn-yellow">Crear Locker</button>
                                </div>
                            </center>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Crear Locker -->

<?php
} else  if ($_SESSION["idRol"] == 2) { ?>

<nav class="navbar-blue" style="background-color: green;">
    <ul>
        <li><label for="btn-menu"><i class="bi bi-list fs-4"></i></label></li>
        <li><a href="index-user.php"><i class="bi bi-house-door-fill fs-4"></i></a></li>
        <li><a href="cupon-encomiendas.php"><i class="bi bi-gift-fill fs-4"></i></a></li>
        <li id="id"><a href="">ID: <?php echo utf8_decode($row['numdocumento']); ?></a></li>
    </ul>
</nav>


<?php
   } else  if ($_SESSION["idRol"] == 3) { ?>

<nav class="navbar-blue" style="background-color: green;">
    <ul>
        <li><label for="btn-menu"><i class="bi bi-list fs-4"></i></label></li>
        <li><a href="index-user.php"><i class="bi bi-house-door-fill fs-4"></i></a></li>
        <li id="id"><a href="https://wa.me/3126948305?text=Hola%20solicito%20ayuda">ID:
                <?php echo utf8_decode($row['numdocumento']); ?></a></li>
    </ul>
</nav>
<?php
   }
?>