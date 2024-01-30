<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examenes</title>
    <link rel="stylesheet" href="estilos.css">
</head>
    
<body style="background-color: rgb(0, 37, 6);">
    <div id="titulo_indice">
        <center><h1>Prueba tu destreza</h1></center>
    </div>
    <div>
        <div class="tipo_examen" style="margin-left: 210px;">
            <div id="titulo">
                <br>
                <center><h1>Fauna</h1></center>
            </div>
            <ul>
				<li style="margin-top: 40px;">Dificultad: Normal</li>
				<li>Tiempo esperado: 15 minutos</li>
				<li>Tipo: Quiz</li>
			</ul>
            <?php
            echo "<a href='cuestionario.php?user=".$_GET['user']."'><button class='btn_indice'>Realizar</button></a>";
            ?>
         
        </div>
        <div class="tipo_examen">
            <div id="titulo">
                <br>
            <center><h1>Cultura</h1></center>
            </div>
            <ul>
				<li style="margin-top: 40px;">Dificultad: Facil</li>
				<li>Tiempo esperado: 5 minutos</li>
				<li>Tipo: Relacionar columnas</li>
			</ul>
            <?php
            echo "<a href='cuestionario_relacionar.php?user=".$_GET['user']."'><button class='btn_indice'>Realizar</button></a>";
            ?>
        </div>
    </div>
</body>
<footer>
    <?php
    echo "<a href='principal.php?user=".$_GET['user']."'><input type='button' value='Regresar' class='btn_indice'></a>";
    ?>
</footer>
</html>