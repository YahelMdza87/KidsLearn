<HTML>
	<head><meta charset="UTF-8">
		<TITLE>Formulario</TITLE>
		<link rel="stylesheet" type="text/css" href="estilos.css"/>
	</head>
	<body id="body1">
	<header id="he1">
		<marquee id="m1">Kids Learning</marquee>
	</header>
	 <Form method="get">
			<p id="p1"><b>Bienvenido, cuéntanos que te pareció tu visita, 
			responde las preguntas con honestidad.<br>
			Muchas gracias :) </p></b><br></br>
			<hr></hr>
			
		<table id="ta1">
		 <tr id="tr1">
			<td>
			 <label id="lb1"> 1.Nombre: </label><input type="text" name="nombre" maxlength="25" 
			 placeholder="Escribe tu nombre aqui" size="35" required><br></br>
			 <label id="lb1"> 2. Edad:  <input type="number" name="edad" max="99" min="7" required> 
			 <br></br>
			 <label id="lb1"> 3.Fecha nacimiento: <input type="date" name="fenac" required> <br></br>
			 <label id="lb1"> 4.Correo electrónico <input type="mail" name="email"><br></br>
			</td>
		 </tr>
		 <tr id="tr2">
		  <td>
			<label id="lb2">¿Te ha gustado nuestra página? <br></label>
			 <input type="radio" name="respuesta" value="si"><a id="a4">Sí</a><br>
			  <input type="radio" name="respuesta" value="no"><a id="a4">No</a><br></br>
			<label id="lb2">¿Por qué? </label><br>
			  <textarea name="coments" rows="5" cols="50" ></textarea><br></br>
			<label id="lb2">¿Considera nuestro página como segura?</label><br>
			  <input type="radio" name="confi" value="si"><a id="a4">Sí</a><br>
			  <input type="radio" name="confi" value="no"><a id="a4">No</a><br></br>
			<label id="lb2">Selecciona tu sección favorita (si te ha gustado más de 1 seleccionalas)</label><br>
				<input type="checkbox" name="sec"><a id="a4">Animales</a><br></br>
				<input type="checkbox" name="sec"><a id="a4">Colores</a><br></br>
				<input type="checkbox" name="sec"><a id="a4">Interacciones</a><br></br>
			<label id="lb2">Cuentanos que tipo de temas son de tu interés</label><br>
				<textarea name="interes" rows="5" cols="50" ></textarea><br></br>
			<label id="lb2">¿Qué crees que podamos mejorar?<label><br>
				<textarea name="mejoras" rows="5" cols="50" ></textarea><br></br>
			<label id="lb2">Del 1 al 10 ¿Qué tanto recomiendas nuestra página?</label><br></br>
				<input type="range" name="rango"  min="1" max="10" step="1"><br></br>
			
			<center> 
			<button type="submit" name="enviar" id="boto">Enviar</button>
			<button type="reset" name="reset" id="boto"> Reestablecer</button> </center><br></br>
			<?php
			  echo "<a href='principal.php?user=".$_GET['user']."' id='a2' >Regresar</a>";
			?>
		 </tr>
		 </td>
		</table>
	 </form>
	</body>
</HTML>