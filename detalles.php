<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilos.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>
<div class="yfondo"></div>
<div class="ysecciones" style="border: 3px solid #03b500; width: 25%; height: 63%; margin-left: 35%; margin-top: 5%; position: absolute; background-color: rgba(0, 170, 0, 0.5); ">
    <h1>Datos</h1>
    <img src="ImagenesIndex/usuario.png" alt="">
    <form method="POST">
    <table class="tabla" style="margin-left: auto; margin-right: auto;">
    <br>
    <?php
                    if(isset($_POST['mostrar'])){
                            $mysqli = mysqli_connect("localhost","root", "", "kidslearnbd");
                            $sql = "SELECT * FROM usuarios WHERE usuario = '".$_GET['user']."'";
                            $query = $mysqli->query($sql);
                            $dat = $query ->fetch_object();
                                echo "<tr><td><h3>Usuario</h3></td><td><input type="."text"." name="."user".
                                " value=".$dat->usuario."></td></tr><tr><td><h3>Contraseña</h3></td><td><input type="."text"." name="."passwd"." value=".$dat->password."></td></tr>";
                    }
                    if(isset($_POST['delete'])){
                        $mysqli = mysqli_connect("localhost","root", "", "kidslearnbd");
                        $query = "DELETE FROM usuarios WHERE usuario = '".$_GET['user']."'";
                        if (mysqli_query($mysqli, $query)) {
                            $query = "DELETE FROM tablero WHERE usuario = '".$_GET['user']."'";
                            if (mysqli_query($mysqli, $query)) {
                            header("location: index.php");
                            }
                      } else {
                            echo "Error: " . mysqli_error($mysqli);
                    }
                }
                if(isset($_POST['logout'])){
                        header("location: index.php");
                }
                    if(isset($_POST['guardar'])){
                        if (isset($_POST['user'])){
                        $user=$_POST['user'];
                        $passwd=$_POST['passwd'];
                        $mysqli = mysqli_connect("localhost","root", "", "kidslearnbd");
                        $sql = "SELECT * FROM usuarios WHERE usuario = '".$_GET['user']."'";
                        $query = $mysqli->query($sql);
                        $dat = $query ->fetch_object();
                        $id = $dat->id;
                        $query = "UPDATE usuarios SET usuario = '".$user."', password = '".$passwd."' WHERE (id = '".$id."')";
                        if (mysqli_query($mysqli, $query)) {
                            header("location: detalles.php?user=".$user);
                            mysqli_close($mysqli);
                        } 
                        else {
                                echo "Error: " . mysqli_error($mysqli);
                        }
                    }
                    else {
                        echo "Error: No se ha presionado el boton de editar";
                    }
                        
                    }
                    ?> 
        </table>
        <input type="submit" class="btn_indice" value="editar" name="mostrar"  style="margin-left: 0%; width: 40%; height: 100px;">
        <input type="submit" class="btn_indice" value="guardar" name="guardar" style="width: 40%; height: 100px;">
        <input type="submit" class="btn_indice" value="eliminar" name="delete" style="margin-left: 3%; width: 40%; height: 100px;">
        <input type="submit" class="btn_indice" value="Cerrar sesion" name="logout" style="margin-left: 3%; width: 52%; height: 100px;">
        </form>
        <form method="POST">
        <input type="submit" class="ysubmit" name="index" value="Regresar" style="position: absolute; top: 80%; left:10%; height: 100px;" type="button">
        <?php
                if(isset($_POST['index'])){
                    header("location: principal.php?user=".$_GET['user']);
                }
                               
                ?> 
    </form>
</div>
</body>
</html>