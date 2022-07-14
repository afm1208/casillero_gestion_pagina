<?php

if ($_SESSION["idRol"] == 1) { ?>

    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <label for="btn-menu"><i class="bi bi-x-circle-fill"></i></label>
            <div class="date-user">
                <div class="img-user">
                    <img src="../../resources/img/icon-admin.png" alt="icon-user" title="icon-user">
                </div>
                <h2><?php echo utf8_decode($row['nombre']); ?></h2>
                <p>Id de Usuario</p>
                <span><?php echo utf8_decode($row['numdocumento']); ?></span>
                <hr class="m-1">
                <a href="edit-user-admin.php"><i class="bi bi-person-badge"></i> Info de cuenta</a>
                <a href="#"><i class="bi bi-grid-3x3-gap-fill"></i> Mi Casillero</a>
                <a href="#"><i class="bi bi-building"></i> Conócenos</a>
                <a href="#"><i class="bi bi-box2-heart"></i> Guía Usuario</a>

            </div>
            <center> <a class="btn-yellow2" href="../../php/logout.php"><i class="bi bi-box-arrow-left"></i> Cerrar Sesión</a></center>

        </div>
    </div>




    <?php
} else {
    if ($_SESSION["idRol"] == 2) { ?>

        <input type="checkbox" id="btn-menu">
        <div class="container-menu">
            <div class="cont-menu">
                <label for="btn-menu"><i class="bi bi-x-circle-fill"></i></label>
                <div class="date-user">
                    <div class="img-user">
                        <img src="../../resources/img/icon-admin.png" alt="icon-user" title="icon-user">
                    </div>
                    <h2><?php echo utf8_decode($row['nombre']); ?></h2>
                    <p>Id de Usuario</p>
                    <span><?php echo utf8_decode($row['numdocumento']); ?></span>
                    <hr class="m-1">
                    <a href="info-cuenta.php"><i class="bi bi-person-badge"></i> Info de cuenta</a>
                    <a href="#"><i class="bi bi-shield-fill-exclamation">Ayuda</i></a>
                    

                </div>
                <center> <a class="btn-yellow2" href="../../php/logout.php"><i class="bi bi-box-arrow-left"></i> Cerrar Sesión</a></center>

            </div>
        </div>
<?php
    }
}

?>