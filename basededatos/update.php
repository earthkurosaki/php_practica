<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Empleados</title>
</head>
<body>
<!-- Codigo PHP -->
<?php
include_once 'conecta.php'; 
$id = $_POST['actualizar'];

$query = "SELECT * FROM empleado WHERE id_empleado='$id'";
$data = mysqli_query($mysqli, $query);
$total = mysqli_num_rows($data);

if($total > 0) {
    $row = mysqli_fetch_assoc($data);
    $nombre= $row['nombre'];
    $apellido= $row['apellido'];
    $telefono= $row['telefono']; 
    $direccion= $row['direccion']; 
    $cargo= $row['cargo']; 
    $nomina= $row['nomina'];  
}
?>

<!-- Formulario para editar -->
<div class="container">
    <h1>Modificar empleados</h1>
    <form action="actualiza.php" method="post">
        <div class="form-group">
            <label for="id">Id:</label>
            <input type="text" id="id" name="id" value="<?php echo $id?>"> 
        </div> <br>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $nombre?>">
        </div> <br>
        <div class="form-group">
            <label for="apellido">Apellido: </label>
            <input type="text" id="apellido" name="apellido" rows="5" value="<?php echo $apellido?>"></input>
        </div> <br>
        <div class="form-group">
            <label for="edad">Teléfono: </label>
            <input type="text" id="telefono" name="telefono" value="<?php echo $telefono?>"></input>
        </div> <br>
        <div class="form-group">
            <label for="nacionalidad">Dirección:</label>
            <input type="text" id="direccion" name="direccion" rows="5" value="<?php echo $direccion?>"></input>
        </div> <br>
        <div class="form-group">
            <label for="genero">Cargo:</label>
            <input type="text" id="cargo" name="cargo" rows="5" value="<?php echo $cargo?>"></input>
        </div> <br>
        <div class="form-group">
            <label for="modnacer">Nómina: </label>
            <input type="text" id="nomina" name="nomina" rows="5" value="<?php echo $nomina?>"></input>
        </div> <br>
        
        <button type="submit" name="update">Editar</button>
    </form>
</div>

</body>
</html>