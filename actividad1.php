<!DOCTYPE html>
<html>
<head>
    <title>Días de la Semana</title>
</head>
<body>
    <?php
    $dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
    echo "El primer día de la semana es: " . $dias[0] . "<br>";
    echo "El último día de la semana es: " . end($dias) . "<br>";
    ?>
</body>
</html>
