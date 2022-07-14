<!-- 
<?php
$inc = include("conexion.php");
if ($inc) {
    $consulta = "SELECT nombre_cliente, estado_locker, fecha_reserva, codigo_entrega, fecha_entregado, fecha_cancelado, observacion from encomiendas INNER JOIN detalles_locker on encomiendas.nombre_locker = detalles_locker.nombre_locker order by fecha_reserva desc";
    $resultado_historial = mysqli_query($conexion, $consulta);
    if ($resultado_historial == true ){
        while($row = $resultado_historial->fetch_array()){
         $nombre_cliente = $row['nombre_cliente'];
            $estado_locker = $row['estado_locker'];
            $fecha_reserva = $row['fecha_reserva'];
            $codigo_entrega = $row['codigo_entrega'];
            $fecha_entregado = $row['fecha_entregado'];
            $fecha_cancelado = $row['fecha_cancelado'];
            
            ?> 
            <div>
                <h2><?php echo $nombre_cliente  ?></h2>
                <div>
                    <p>
                        <b> Nombre: </b> <?php echo $nombre_cliente ?><br>
                        <b> Estado: </b> <?php echo $estado_locker <br>
                        <b> Fecha_creacion: </b> <?php echo $fecha_reserva ?> <br>
                        <b> Codigo_entrega:  </b> < <br>
                        <b> Fecha_entregado: </b> <br>
                        <b> fecha_retirado: </b> <br>
                    </p>
                </div>
            </div>
            <?php
        }   
}
}
?>  