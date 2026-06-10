<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($datos as $palabra){
        echo '<p>Palabra en español: ' . $palabra['palabraEspaniol'] . '</p>';
        echo '<p>Palabra en inglés: ' . $palabra['palabraIngles'] . '</p>';
    }
    ?>
</body>
</html>