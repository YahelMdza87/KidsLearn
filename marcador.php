<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcador</title>
</head>
<body>
<div class="yfondo"></div>
    <div class="ysecciones">
    <h1>Marcador</h1>
  </div>
<table class="tabla" style="position:absolute; margin-left: 36%; height:40%; width:30%; margin-top:3%;">
    <tr>
        <td>Usuario</td><td>Tiempo total</td>
    </tr>
<?php
            $mysqli = new mysqli('localhost','root', '', 'kidslearnbd');
			$mysqli->set_charset("utf8");
			$query = $mysqli->query("SELECT * FROM tablero ORDER BY tiempo ASC");
			while ($dat = $query ->fetch_object()){
			echo "<tr><td>".$dat->usuario."</td><td>".$dat->tiempo."</td></tr>";
			}
            ?>
</table>
<form method="POST">
<input type="submit" style="position: absolute; width:20%; height:20%;" class="ysubmit" value="Regresar" name="index" type="button">
<?php
                if(isset($_POST['index'])){
                    header("location: Memorama.php?user=".$_GET['user']);
                }
                               
                ?> 
    </form>
</body>
</html>
