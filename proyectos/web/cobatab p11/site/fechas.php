<?php
include "admin/conexion.php";
$fecha_de = $_POST['fecha_de'];
$fecha_a  = $_POST['fecha_a'];
$sql = "SELECT id_noticias, titulo, descripcion, fecha, imagen FROM noticias WHERE fecha >= '$fecha_de 00:00:00'AND fecha <= '$fecha_a 23:59:59'";
$rs = mysqli_query($conexion, $sql);
?>

<?php if ($fila = mysqli_fetch_row($rs)) { ?>
    <ul class="cards">
        <?php
        while ($fila = $rs->fetch_assoc()) { ?>
            <li class="cards_item">
                <div class="card">
                    <center>
                        <div class="card_image"><img src="admin/<?php echo $fila['imagen']; ?>" style="height: 300px; width: 345px; "></div>
                        <div class="card_content">
                            <time><?php $newDate = date("d-m-y", strtotime($fila["fecha"]));
                                    echo $newDate ?></time>
                            <h5 class="mb-0 text-center "><b><?php echo $fila['titulo']; ?></b></h5>
                            <p class="card_text"><?php echo substr($fila['descripcion'], 0, 148); ?>...</p>
                            <a href="noticias-com-view.php?noticias=<?php echo $fila['id_noticias']; ?>"><button type="button" class="btn mb-20 btn-danger btn-block">Ver Mas <i class='fa-solid fa-trash-can'></i></button></a>
                        </div>
                    </center>
                </div>
            </li>
        <?php } ?>
    </ul>
<?php mysqli_free_result($rs);
} else { ?>
    <h1>
        <p class="heading-1">No Se encontraron los resultado</p>
    </h1>
    <br><br>
<?php } ?>