<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="crud.css">
</head>
<body>
    <h1>Registro de Alumnos</h1>

    <!-- Formulario de Registro -->
    <div>
    <form action="crud.php" method="POST"  class="form">
        <h2>Formulario de regitro</h2>
        <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre">
        <input type="text" name="apellido" id="apellido" placeholder="Ingresa tu apellido">
        <input type="number" name="edad" id="edad" placeholder="Ingresa tu edad">
        <input type="text" name="carrera" id="carrera" placeholder="Ingresa tu carrera"> 
        <input type="number" name="ciclo" id="ciclo" placeholder="Ingresa tu ciclo"> 
        <button id="Registro">Registro</button>
    </form>
    </div>
    <script src="crud.js"></script>
</body>
</html>
