<html>
    <head>
        <title>Une las columnas</title>
        <link rel="stylesheet" type="text/css" href="estilos.css"/> 
        <link rel="shortcut icon" href="ImagenesRelacionaColumnas/lapiz.png">

        <meta http-equiv=Content-Type content="text/html; charset=utf-8">
        <script type="text/javascript">
        </script>
    </head>
    <body class="cuerpa">
        <header class="cabeza">¡Relaciona las columnas!</header>
        <center><form id="examen">
            <fieldset class="Qn">
                <legend class="lgd">Zapatero es a zapato como...</legend>
        <table cellpadding=5 class="taba" ><tbody>
        <tr>
        <td><input type=hidden value="" id="vNombre"><br>
            <input type=radio name="nombre1" id="nombre1" value="si">Carpintero a...<br>
            <input type=radio name="nombre1" id="cebo" value="si">Herrero a...<br>
        </td>

        <td ><input type=hidden value="" id=resp><br>
            <input type=radio name="respuesta1" id="respuesta1"  value="bien">Madera<br>
            <input type=radio name="respuesta1" id="respuesta1"  value="mal">Cabello<br>
            <input type=radio name="respuesta1" id="respuesta1"  value="mal">Pasteles<br>
        
</td></tr></tbody></table>

        </fieldset>

        <fieldset class="Qn">
            <legend class="lgd">La arena es al vidrio como...</legend>
    <table cellpadding=5 class="taba" ><tbody>
    <tr>
    <td><input type=hidden value="" id="vNombre"><br>
        <input type=radio name="nombre2" id="nombre2" value="si">La leche a... <br>
        <input type=radio name="nombre2" id="cebo" value="si">Plastico a...<br>

    </td>

    <td ><input type=hidden value="" id=resp><br>
        <input type=radio name="respuesta2" id="respuesta2" value="mal">Catsup <br>
        <input type=radio name="respuesta2" id="respuesta2" value="bien">Crema<br>
        <input type=radio name="respuesta2" id="respuesta2" value="mal">Vino<br>
    
</td></tr></tbody></table>
    </fieldset>

    <fieldset class="Qn">
        <legend class="lgd">La naranja es al jugo, lo que la </legend>
<table cellpadding=5 class="taba" ><tbody>
<tr>
<td ><input type=hidden value="" id="vNombre"><br>
    <input type=radio name="nombre3" id="nombre3" value="si">Madera a... <br>
    <input type=radio name="nombre3" id="cebo" value="si">Manzana a...<br>

</td>

<td ><input type=hidden value="" id=resp><br>
    <input type=radio name="respuesta3" id="respuesta3" value="bien">Mesa<br>
    <input type=radio name="respuesta3" id="respuesta3" value="mal">Pizza<br>
    <input type=radio name="respuesta3" id="respuesta3" value="mal">Lampara<br>

</td></tr></tbody></table>

</fieldset>
<fieldset class="Qn">
    <legend class="lgd">Panadero es a pan como </legend>
<table cellpadding=5 class="taba"><tbody>
<tr>
<td ><input type=hidden value="" id="vNombre"><br>
<input type=radio name="nombre4" id="nombre4" value="si">Escultor a...<br>
<input type=radio name="nombre4" id="cebo" value="si">Cantante a...<br>

</td>

<td><input type=hidden value="" id=resp><br>
<input type=radio name="respuesta4" id="respuesta4" value="mal">Obra <br>
<input type=radio name="respuesta4" id="respuesta4" value="mal">Pintura <br>
<input type=radio name="respuesta4" id="respuesta4" value="bien">Escultura<br>

</td></tr></tbody></table>

</fieldset>
<fieldset class="Qn">
    <legend class="lgd">El carbon es al fuego como el</legend>
<table cellpadding=5 class="taba" ><tbody>
<tr>
<td ><input type=hidden value="" id="vNombre"><br>
<input type=radio name="nombre5" id="nombre5" value="si">Algodon a...<br>
<input type=radio name="nombre5" id="cebo" value="si">Jugo a...<br>

</td>

<td ><input type=hidden value="" id=resp><br>
<input type=radio name="respuesta5" id="respuesta5" value="mal">Juguete<br>
<input type=radio name="respuesta5" id="respuesta5" value="mal">Vaso <br>
<input type=radio name="respuesta5" id="respuesta5" value="bien">Pantalon <br>


</td></tr></tbody></table>

</fieldset>
<div class="aparecex" id="divapa">
    
</div>
<center>
<input type="button" value="Calificar" onclick="calificar()"  class="qsubmit_2">
</center>
</form>
<script src="script.js"></script>
<label class="eti">
    Respuestas:
</label><br>
<audio controls>
    <source src="ImagenesRelacionaColumnas/Respuestas.mp3" type="audio/mp3" >
        Tu navegador no soporta audio HTML5.
</audio><br>
<?php
                    echo "<a href='indice_examenes.php?user=".$_GET['user']."'><input type='button' value='Regresar' id='btn'></a>";
                ?>
</body>
</html> 