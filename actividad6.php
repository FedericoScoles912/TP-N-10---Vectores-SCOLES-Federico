<!DOCTYPE html>
<html>
<head>
    <title>Meses del Año</title>
</head>
<body>
    <?php
    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    sort($meses);
    echo "Meses ordenados alfabéticamente: " . implode(", ", $meses) . "<br>";
    ?>
</body>
</html>
