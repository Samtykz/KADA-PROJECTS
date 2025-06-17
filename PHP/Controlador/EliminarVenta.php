<?php
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE from venta where vent_codigo_PK=$id");
    if ($sql==1) {
        echo '<div>La venta se ha eliminado correctamente</div>';
        header("location:../../Vista/Read/viVentas.php");
    } else {
        echo '<div>Error al eliminar el producto</div>';
    }
}
