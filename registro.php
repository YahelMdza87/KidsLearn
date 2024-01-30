<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body style="background-color: rgb(0, 42, 9);">
    <div>
        <div class="tipo_examen" style="margin-left: 30%; width:30%; height: 40%;">
            <div id="titulo">
                <br>
                <center><h1>Registrarse</h1></center>
            </div>
            <br><br>
            <form method="POST">
                <table>
                    <tr>
                        <td><label>Usuario: </label></td><td><input style="width: 90%;" type="text" id="nombre" name="user"  required></td>
                    </tr>
                    <tr>
                        <td><label>Contraseña: </label></td><td><input style="width: 90%;" type="password" id="ap" name="pass"  required></td>
                    </tr>
                    <tr>
                        <td><label>Confirmar contraseña: </label></td><td><input style="width: 90%;" type="password" name="cpass" id="ap"  required></td>
                    </tr>
                </table>
                <input style="margin-left: 25%" type="submit" class="btn_indice" value="Crear cuenta" name="sign">
                <?php
                if(isset($_POST['sign'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $cpass=$_POST['cpass'];
                    if($pass==$cpass){
                        $mysqli = mysqli_connect("localhost","root", "", "kidslearnbd");
                        $query = "INSERT INTO usuarios (id, usuario, password) VALUES (NULL,'".$user."','".$pass."')";
                        if (mysqli_query($mysqli, $query)) {
                        echo "Agregado correctamente";
                        header("location: index.php");
                        } else {
                        echo "Error: " . mysqli_error($mysqli);
                }
                mysqli_close($mysqli);
                    }
                }
                ?>
            </form>
        </div>
    </div>
</body>
</html>