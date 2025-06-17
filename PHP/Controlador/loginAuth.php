<?php
if(isset($_POST['btnLogin'])){
    $m = $_POST['mail'];
    $p = md5($_POST['pass']);
    $c = $_POST['code'];

    include "../Modelo/Conexion.php";
    $sql = "SELECT * FROM administrador WHERE admi_Codigo_PK='".$c."'AND admi_correo='".$m."' AND admi_contrasena='".$p."'";
    $result = $conexion->query($sql);
    if($result->num_row>0){
        $admin = $result->fetch_assoc();
        session_start();
        $_SESSION['admin'] = $admin['admi_nombre'];
        header("Location:../indexAdmin.php");
        exit();
    }
    header("Location:../index.html");
}
