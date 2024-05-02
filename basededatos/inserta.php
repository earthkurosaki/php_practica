<?php

include 'conecta.php';

$nombre= $_POST['nom1'];
$apellido= $_POST['apellido'];
$telefono= $_POST['telefono'];
$direccion= $_POST['direccion'];
$categoria= $_POST['categoria'];
$nomina= $_POST['nomina'];


$sqlinsert = "INSERT INTO empleado VALUES (0, '$nombre','$apellido', '$telefono', '$direccion', '$categoria', '$nomina');";

mysqli_query($mysqli, $sqlinsert);

header("location:./form.php?insert=success");



?>