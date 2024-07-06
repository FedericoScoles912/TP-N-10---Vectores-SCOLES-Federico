<!DOCTYPE html>
<html>
<head>
    <title>Array de Apellidos</title>
</head>
<body>
    <?php
    $jugador = array("Pérez", "García", "Martínez", "López", "Rodríguez");
    echo "La alineación del equipo está compuesta por: " . implode(", ", $jugador) . ".<br>";
    ?>
</body>
</html>
