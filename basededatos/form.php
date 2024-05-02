<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Empleados</title>
</head>
<body>
<div class="edicion">
    <h3>Registro de Empleados</h3>
        <div class="reg">
         <div class="form">
           <form action="inserta.php" method="post">
        <div class="grupo">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nom1" required>
            <br>
            <br>
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido"  required>
            <br>
            <br>
            <label for="telefono">Telefono</label>
            <input type="text" id="teléfono" name="telefono"  required>
            <br>
            <br>
            <label for="titulo">Dirección</label>
            <input type="text" id="direccion" name="direccion"  required>
            <br>
            <br>
            <label for="categoria">Cargo</label>
            <select name="categoria" id="categoria">
            <option value="Contador">Contador</option>
            <option value="Maestro">Maestro</option>
            <option value="Conserje">Conserje</option>
            <option value="Portero">Portero</option>  
            </select>
            <br>
            <br>

            <label for="nomina">Nómina</label>
            <input type="text" id="nomina" name="nomina" required>
            <br>
            <br>
            <button type="submit">Registrar Empleado</button>
        </div>
    </form>
</div>
</div>

<br>

<form action="consulta.php" method="post">
<label for="emp">Buscar empleados</label>
    <input type="text" name="buscar" placeholder="Escribe aquí">
    <button type="submit" name="submit">Buscar</button>
</form>
<br>
<br>

<form action="update.php" method="post">
<label for="emp">Actualizar empleados</label>
    <input type="text" name="actualizar" placeholder="Escribe aquí">
    <button type="submit" name="submit">Buscar</button>
</form>
<br>
<br>

    <div class="table">
    <table border = 1>

<tr>
<th>id</th>
<th>nombre</th>
<th>apellido</th>
<th>telefono</th>
<th>direccion</th>
<th>cargo</th>
<th>nomina</th>
</tr>

<?php
    include_once "conecta.php";

    $query = "SELECT * FROM empleado";
    $data = mysqli_query($mysqli, $query);
    $total = mysqli_num_rows($data);

    if ($total != 0){
        while($row = mysqli_fetch_assoc($data)){
    echo "<tr><td>" . $row['id_empleado'] . "</td> <td>" . $row['nombre'] . "</td> <td>" . $row['apellido'] . 
    "</td> <td>" . $row['telefono'] . "</td> <td>" . $row['direccion'] . 
    "</td> <td>" . $row['cargo'] . "</td> <td>" . $row['nomina'] . "</td>" . 
    "<td> <a href='delete.php?rn=$row[id_empleado]'>Borrar</td></tr>";

        }

    }


    ?>
</table>
    </div>
    </div>
</body>
</html>