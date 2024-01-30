<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="operacionesMemorama.js"></script>
    <title>Memorama</title>
</head>

<body onload="cuandoCargue()">
  
  <div class="yfondo"></div>
  <div class="ysecciones">
    <h1>Bienvenido al Memorama, <?php echo $_GET['user']; ?></h1> <h1 id="userphp" style="display: none;"><?php echo $_GET['user']; ?></h1>
  </div>
  <div style="margin-top: 30px;">
  <div class="div1">
    <aside class="ytablero">
      <h1>Marcador</h1>
      <section id="contrarrelojMemorama"> 
        <h2 style="margin-left: 0px;">Tiempo: </h2>
        <h2 id="minutos" style="margin-left: 30px;">0</h2>
        <h2>:</h2>
        <h2 id="segundos">0</h2>
        <h2>:</h2>
        <h2 id="milisegundos">00</h2>
      </section> 
        <h2 id="intentos">Movimientos: 0</h2>
        <h2 id="pares">Pares: 0</h2>
        <h2 id="win"></h2>
        <h2 id="contenedor"></h2>
    </aside>
    <form method="POST">
      <input type="submit" class="ysubmit" value="Ver tablero" name="tablero" style="margin-top: 1%; width: 95%; height:10%;">
    <?php
                if(isset($_POST['tablero'])){
                    header("location: marcador.php?user=".$_GET['user']);
                }
                               
                ?> 
            </form>
  </div>
      <div id="yjuego" >
          <table>
            <tbody>
              <tr>
                <td><img id="0" class="flip" onclick="girarCarta()" data-valor="valor" src="ImagenesMemorama/carta.png" alt=""></td>
                <td><img id="1" class="flip" onclick="girarCarta()" data-valor="valor" src="ImagenesMemorama/carta.png" alt=""></td>
                <td><img id="2" class="flip" onclick="girarCarta()" data-valor="valor" src="ImagenesMemorama/carta.png" alt=""></td>
                <td><img id="3" class="flip" onclick="girarCarta()" data-valor="valor" src="ImagenesMemorama/carta.png" alt=""></td>
              </tr>
              <tr>
                <td><img id="4" class="flip" onclick="girarCarta()" data-valor="valor" src="ImagenesMemorama/carta.png" alt=""></td>
                <td><img id="5" class="flip" onclick="girarCarta()" data-valor="valor" src="ImagenesMemorama/carta.png" alt=""></td>
                <td><img id="6" class="flip" onclick="girarCarta()" data-valor="valor" src="ImagenesMemorama/carta.png" alt=""></td>
                <td><img id="7" class="flip" onclick="girarCarta()" data-valor="valor" src="ImagenesMemorama/carta.png" alt=""></td>
              </tr>
              <tr>
                <td><img id="8" class="flip" onclick="girarCarta()" data-valor="valor" src="ImagenesMemorama/carta.png" alt=""></td>
                <td><img id="9" class="flip" onclick="girarCarta()" data-valor="valor" src="ImagenesMemorama/carta.png" alt=""></td>
                <td><img id="10" class="flip" onclick="girarCarta()" data-valor="valor" src="ImagenesMemorama/carta.png" alt=""></td>
                <td><img id="11" class="flip" onclick="girarCarta()" data-valor="valor" src="ImagenesMemorama/carta.png" alt=""></td>
              </tr>
            </tbody>
          </table>
      </div>

  <div class="ybotones">
    <button style="margin-top: 3%;" class="ysubmit" name="botones" onclick="iniciarJuego()" >Iniciar</button>
    <br>
    <button class="ysubmit" name="botones" onclick="resetearJuego()">Reiniciar </button>
    <br>
    <form method="POST">
    <input type="submit" class="ysubmit" name="index" value="Regresar" type="button">
    <?php
                if(isset($_POST['index'])){
                    header("location: principal.php?user=".$_GET['user']);
                }
                               
                ?> 
    </form>
  </div>
</div>
</body>
</html>