<?php
    $user = $_REQUEST['usuario'];
    $minutos = $_REQUEST['minutos'];
    $segundos = $_REQUEST['segundos'];
    $miliseg = $_REQUEST['milisegundos'];
    $tiempo = $minutos." : ".$segundos." : ".$miliseg;
    $mysqli = mysqli_connect("localhost","root", "", "kidslearnbd");
    $query = "INSERT INTO tablero (id,usuario,tiempo) VALUES (NULL,'".$user."','".$tiempo."')";
    if (mysqli_query($mysqli, $query)) {
        echo "Tu record se registró, checalo";
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
    mysqli_close($mysqli);
    ?>