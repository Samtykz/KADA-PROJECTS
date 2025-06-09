<?php 
include "../../Modelo/Conexion.php";

if (!empty($_POST["btnagregar"])) {
   if (!empty($_POST["nombreCategoria"])) {
        // Recuperar datos del formulario
       $namecategoria = $_POST["nombreCategoria"];

       // Insertar datos en la base de datos
       $sql=$conexion->query("INSERT INTO productocategoria(nombreCategoria)
       values('$namecategoria')");
         if ($sql==1) {
        echo "<div class='alert alert-success'>La categoría se ha registrado correctamente</div>";
        header("location:../../Vista/Read/categorias.php");
       } /*else{
        echo "<div class='alert alert-danger'>Error al registrar la categoría</div>";
       }*/

   }    
}
?>