<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Server</title>
</head>
<body>
    <h1>
        Trabalho de Redes de Computadores - Web Server
    </h1>
    <hr>
    <p style="font-size: 20px">
        <?php
        $userIP = $_SERVER['REMOTE_ADDR'];

        date_default_timezone_set('America/Sao_Paulo');
        $currentDate = date('d/m/Y');
        $currentTime = date('H:i:s');

        echo "IP: $userIP<br>";
        echo "Data: $currentDate<br>";
        echo "Hora: $currentTime<br>";
        ?>
    </p>
</body>
</html>