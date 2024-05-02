<?php

include_once 'conecta.php';
$id = $_POST['id_empleado'];

if(isset($_POST['update'])){

    $id = $_POST['id_empleado'];

    $query = "UPDATE empleado SET nombre='$_POST[nombre]', apellido='$_POST[apellido]', telefono='$_POST[telefono]', direccion='$_POST[direccion]', cargo='$_POST[cargo]', nomina='$_POST[nomina]' where id_empleado='$_POST[id]'";
    mysqli_query($mysqli, $query);
   
}

header("location: ./form.php?insert=success");

?>