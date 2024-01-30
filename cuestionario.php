<html>
    <head><meta charset="UTF-8">
        <title>Cuestionario</title>
        <link rel="stylesheet" type="text/css" href="estilos.css"/>
    </head> 
  
    <body id="boa">
        <center><header id="hea">Ponte a prueba: Animales</header><br></center>
        <div class="apa2" id="diva"> </div>
    <center><form id="foa">
            <label>Nombre/s: </label><input type="text" id="nombre" onblur="colorear('nombre')" required><br></br>
            <label>Apellido: </label><input type="text" id="ap" onblur="colorear('ap')" required><br></br>
            <label>Color favorito: </label><input type="color"><br></br>
            <label>Nombra un animal que comience por A: </label><input type="text" id="A" required pattern="[a|A]{1}[a-z]{2,15}" title="Que comience por A"><br></br>
                <fieldset id="fs">
                    <legend id="lea">1.-¿Que tipo de animal es el ajolote?</legend>
                        <input type="radio" name="r1" id="r1" value="mal"><a>Aracnido</a><br>
                        <input type="radio" name="r1" id="r1" value="mal"><a>Crustáseo</a><br>
                        <input type="radio" name="r1" id="r1" value="bien"><a>Anfibio</a>
                </fieldset><br>
                <fieldset id="fs">
                    <legend id="lea">2.-Verdadero o falso: El perro es un cuadrupedo</legend>
                        <input type="radio" name="r2" id="r2" value="bien"><a>Verdadero</a><br>
                        <input type="radio" name="r2" id="r2" value="mal"><a>Falso</a>
                </fieldset><br>
                <fieldset id="fs">
                    <legend id="lea">3.-¿Cómo se orienta el topo bajo tierra?</legend>
                        <input type="radio" name="r3" id="r3" value="mal"><a>Con la nariz</a><br>
                        <input type="radio" name="r3" id="r3" value="mal"><a>Con los ojos</a><br>
                        <input type="radio" name="r3" id="r3" value="bien"><a>Con los bigotes</a>
                </fieldset><br>
                <fieldset id="fs">
                    <legend id="lea">4.-Verdadero o falso: El guepardo puede alcanzar los 120 km/h</legend>
                        <input type="radio" name="r4" id="r4" value="mal">  <a>Falso</a><br>
                        <input type="radio" name="r4" id="r4" value="bien"> <a>Verdadero</a>
                </fieldset><br>
                <fieldset id="fs">
                    <legend id="lea">5.-¿Cuánto tiempo pueden estar los camellos sin beber?</legend>
                        <input type="radio" name="r5" id="r5" value="mal"><a>Una semana</a><br>
                        <input type="radio" name="r5" id="r5" value="bien"><a>Dos semanas</a><br>
                        <input type="radio" name="r5" id="r5" value="mal"><a>3 días</a>
                </fieldset><br>
                <fieldset id="fs">
                    <legend id="lea">6.-¿En qué estación del año ulula el búho?</legend>
                        <input type="radio" name="r6" id="r6" value="bien"><a>Primavera</a><br>
                        <input type="radio" name="r6" id="r6" value="mal"><a>Verano</a><br>
                        <input type="radio" name="r6" id="r6" value="mal"><a>Otoño</a>
                </fieldset><br>
                <fieldset id="fs">
                    <legend id="lea">7.-¿Por qué son importantes los buitres?</legend>
                        <input type="radio" name="r7" id="r7" value="mal"><a>Ayuda a los banditos</a><br>
                        <input type="radio" name="r7" id="r7" value="bien"><a>Limpian el mundo de cadáveres</a><br>
                        <input type="radio" name="r7" id="r7" value="mal"><a>Se comen a los animales</a>
                </fieldset><br>
                <fieldset id="fs">
                    <legend id="lea">8.-¿Cuál es el animal más grande del mundo?</legend>
                        <input type="radio" name="r8" id="r8" value="mal"><a>Elefante</a><br>
                        <input type="radio" name="r8" id="r8" value="bien"><a>Ballena azul del Antártico</a><br>
                        <input type="radio" name="r8" id="r8" value="mal"><a>Rata</a>
                </fieldset><br>
                <fieldset id="fs">
                    <legend id="lea">9.-¿Cuál es la vida media de un perro?</legend>
                        <input type="radio" name="r9" id="r9" value="mal"><a>21-37 años</a><br>
                        <input type="radio" name="r9" id="r9" value="bien"><a>10-13 años</a><br>
                        <input type="radio" name="r9" id="r9" value="mal"><a>5-7años</a>
                </fieldset><br>
                <fieldset id="fs">
                    <legend id="lea">10.-¿Dónde viven normalmente los leones?</legend>
                        <input type="radio" name="r10" id="r10" value="bien"><a>África</a><br>
                        <input type="radio" name="r10" id="r10" value="mal"><a>México</a><br>
                        <input type="radio" name="r10" id="r10" value="mal"><a>Brasil</a>
                </fieldset><br>
                <center><input type="submit" id="btn">
                <input type="button" value="Calificar" onclick="calificar()" id="btn">
                <?php
                    echo "<a href='indice_examenes.php?user=".$_GET['user']."'><input type='button' value='Regresar' id='btn'></a>";
                ?>
            </form></center>
        <div class="aparece" id="divap">
        </div>
        <script src="validani.js"></script>
    </body>
</html>