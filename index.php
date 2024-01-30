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
        <div class="tipo_examen" style="margin-left: 30%; height: 40%;">
            <div id="titulo">
                <br>
                <center><h1>Login</h1></center>
            </div>
            <br><br>
            <form  method="POST">
                <table>
                    <tr>
                        <td><label>Usuario: </label></td><td><input type="text" id="nombre" name="user" required></td>
                    </tr>
                    <tr>
                        <td><label>Contraseña: </label></td><td><input type="password" id="ap" name="pass" required></td>
                    </tr>
                </table>
                <?php
                if(isset($_POST['login'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $mysqli = mysqli_connect("localhost","root", "", "kidslearnbd");
                    $query = "SELECT * FROM usuarios where usuario = '".$user."' and password = '".$pass."'";
                    $result = mysqli_query($mysqli, $query);  
                    $count = mysqli_num_rows($result);  
                    if ($count==1) {
                        $_SESSION['user']=$user;
                        header("location: principal.php?user=".$_POST['user']);
                    } 
                    else {
                        echo "Usuario y/o contraseña incorrectos";
                    }
                    mysqli_close($mysqli);
                }
                ?>
                <input type="submit" class="btn_indice" value="Iniciar sesion" name="login">
            </form>
            <a href="registro.php">¿No tienes cuenta? Registrate.</a>
        </div>
    </div>
</body>
</html>