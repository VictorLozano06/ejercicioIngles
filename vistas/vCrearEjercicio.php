<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pCrearEjercicio.php" method="get">
        <label for="nombre">Nombre ejercicio</label><input type="text" name="nombre">
        <label for="descripcion">Descripcion</label><input type="text" name="descripcion">
        <?php
        $i=0;
            while($i<=9){
                echo '<label for="espaniol' . $i . '">Español</label><input type="text" name="espaniol' . $i . '"><label for="ingles' . $i . '">Ingles</label><input type="text" name="ingles' . $i . '"><br><br>';
                $i=$i+1;
            }
        ?>
        <input type="submit">
    </form>
</body>
</html>