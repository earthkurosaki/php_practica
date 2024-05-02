<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados Registrados</title>
</head>
<body>
    <h3>Empleados Registrados</h3>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Categoría</th>
            <th>Nómina</th>
        </tr>

        <?php
        include_once 'conecta.php';
       $nombre= $_POST['buscar'];

        $query = "SELECT * FROM empleado WHERE nombre='$nombre'";
        $data = mysqli_query($mysqli, $query);
        $total = mysqli_num_rows($data);

        if($total != 0){
            while($row = mysqli_fetch_assoc($data)){
                echo "<tr> <td>" . $row['id_empleado'] . 
                "</td> <td>" . $row['nombre'] . 
                "</td> <td>" . $row['apellido'] . 
                "</td> <td>" . $row['telefono'] . 
                "</td> <td>" . $row['direccion'] . 
                "</td> <td>" . $row['cargo'] . 
                "</td> <td>" . $row['nomina'] . 
                "</td> </tr>";

            };
        };

        ?>
    </table>
</body>
</html>