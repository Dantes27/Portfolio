<?php
    $consulta="SELECT * FROM ie8_panel";
    $resultado= $conexion->query($consulta) or die (mysqli_error($conexion));
    $fila=$resultado->fetch_assoc()
?>
<div>
    <div>
        <img src="admin/<?php echo $fila['img_preloader']; ?>" alt="logo cobatab 11">
        <span class="brand__slogan"><?php echo $fila['nombre_plantel']; ?></span>
    </div>
</div>