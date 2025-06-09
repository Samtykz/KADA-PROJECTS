<?php
include "../../Modelo/Conexion.php";

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombrepro"]) && !empty($_POST["preciopro"]) && !empty($_POST["unidadmedida"]) && !empty($_POST["stockpro"]) && !empty($_POST["materialpro"]) && !empty($_POST["descripcionpro"]) && !empty($_POST["categoriapro"]) && !empty($_POST["proveedorpro"])) {

        $nombrepro = $_POST['nombrepro'];
        $preciopro = $_POST['preciopro'];
        $unidadmedida = $_POST['unidadmedida'];
        $stockpro = $_POST['stockpro'];
        $materialpro = $_POST['materialpro'];
        $descripcionpro = $_POST['descripcionpro'];
        $categoriapro = $_POST['categoriapro'];
        $proveedorpro = $_POST['proveedorpro'];

        $sql = $conexion->query("INSERT INTO producto (prod_Nombre, prod_PrecioVenta, prod_UnidadMedida, prod_Stock, prod_Material, prod_Descripcion, id_Categoria_FK, documentoProveedor_FK)
        VALUES ('$nombrepro', '$preciopro', '$unidadmedida', '$stockpro', '$materialpro', '$descripcionpro', '$categoriapro', '$proveedorpro')");

        if ($sql === TRUE) {
            echo "<div class='alert alert-success'>El producto se ha registrado correctamente</div>";
            header("Location: ../../Vista/Read/productos.php");
        } else {
            echo "<div class='alert alert-danger'>Error al registrar el producto: " . $conexion->error . "</div>";
        }

    } else {
        echo "<div class='alert alert-warning'>Algún campo está vacío</div>";
    }
}
?>

