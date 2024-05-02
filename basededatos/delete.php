<?php
include_once 'conecta.php';

$id = $_GET['rn'];
$query = "DELETE FROM empleado WHERE id_empleado = '$id'";

$data = mysqli_query($mysqli, $query);
header("location: ./form.php?insert=success");
?>