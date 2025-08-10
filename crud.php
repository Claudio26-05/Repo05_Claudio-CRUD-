<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion prueba</title>
</head>
<body>
    <?php 
    $server_name="localhost";
    $user_name="root";
    $pswd="";
    $bd="crud";

    $conn=new mysqli($server_name,$user_name,$pswd,$bd);

        if($conn->connect_error){
            echo "No se pudo conectar";
            
        }
    // Recibir datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $carrera = $_POST['carrera'];
    $ciclo = $_POST['ciclo'];

    // Insertar en la BD
    $sql = "INSERT INTO registro(nombre, apellido,edad,carrera,ciclo) VALUES ('$nombre', '$apellido','$edad','$carrera','$ciclo')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro creado con éxito";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();



    ?>
</body>
</html>