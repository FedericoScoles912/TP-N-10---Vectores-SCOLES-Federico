<!DOCTYPE html>
<html>
<head>
    <title>Claves de Acceso</title>
</head>
<body>
    <?php
    $usuarios = array(
        'usuario1' => 'clave123',
        'usuario2' => 'clave456',
        'usuario3' => 'clave789',
        'usuario4' => 'clave101',
        'usuario5' => 'clave112'
    );
    foreach ($usuarios as $usuario => $clave) {
        echo "Clave de acceso para $usuario: $clave<br>";
    }
    ?>
</body>
</html>
