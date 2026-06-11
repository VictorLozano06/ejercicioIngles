<html>
    <body>
        <h1>Ejercicios de inglés</h1>
        <a href="vistas/vInicioSesion.php">Iniciar Sesion</a>
        <ul>
            <?php foreach($datos as $ejercicio){
                echo '<li><a href="pEjercicio.php?id=' . $ejercicio['idEjercicio'] . '">' . $ejercicio['nombre'] . '</a></li>';
                echo '<p>' . $ejercicio['descripcion'] . '</p>';
                echo '<p>Dificultad: ' . $ejercicio['dificultad'] . '</p>';
            }?>
        </ul>
    </body>
</html>