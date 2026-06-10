<html>
    <head>
        <title>Ejercicios de Inglés</title>
    </head>
    <body>
        <h1>Ejercicios de Inglés</h1>
        <ul>
            <?php foreach($datos as $palabra){
                echo '<li>' . $palabra['palabraEspaniol'] . '</li> | <form><input type="text" placeholder="Poner palabra en inglés"></form>';
            }
            echo '<a href="pResultado.php?id=' . $palabra['idEjercicio'] . '">Mirar resultados</a>';
            ?>
        </ul>
    </body>
</html>