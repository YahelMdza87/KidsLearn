<html>
	<head>  <meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilos.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body class="ifondo"> 
	<center>
		<header id="cabeza">
			<div>
				<div>
	 				<center><p class="p2"><img src="ImagenesIndex/basket.png" width="30" height="30"> Bienvenido a Kids learn,
                     <?php
                               echo $_GET['user'];
                    ?>  
                    <img src="ImagenesIndex/fut.png" width="30" height="30"></p></center>
					<form method="POST">
					<a href="detalles.php"><button class="isubmit" name="detalles" type="submit" style="position: absolute; background-color: rgba(255, 225, 0, 0);  width: 15%; top:0.3%; right: 1%;"><img src="ImagenesIndex/usuario.png" alt=""> Cuenta</button></a>
					<?php
					if(isset($_POST['detalles'])){
						header("location: detalles.php?user=".$_GET['user']);
					}         
                	?> 
            </form>
				</div>
				
				<div style="background-image:url('ImagenesIndex/icon.png'); height: 43px;"></div>
				
				</div>
		</header>
<br>
		<div class="container mt-3">
			<center>
  </center>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" href="#home">¿Quienes somos?</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu1">Juegos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu2">Refuerza tu conocimiento</a>
    </li>
  </ul>

  <!-- Tab panes -->
<div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
	<div class="isecciones" style="margin-top: 80px;">
			<h1 style="font-size: 40px;" class="p2">¿Quiénes somos?</h1>
			<p class="p2" id="texto">Somos una asociación interesada por el pronto aprendizaje de los niños y su interacción a temprana edad 
				con las nuevas tecnologias de la computación.
				Con el trabajo en conjunto de los padres haremos esta buena intención una realidad
			</p>
			<img src="ImagenesIndex/boy.jpg" width="100" height="100" style="border: 3px solid;"/>
			<p class="p2" id="texto">Nuestra asociación es una organizacion sin fines de lucro. Principalmente
				impulsada por estudiantes universitarios que ponen en práctica todos los conocimientos que les van siendo adquiridos.
			</p>
	</div>	
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
	<div class="isecciones" style="background-color: rgba(0, 199, 119, 0.248); border: 3px solid #00ff91;">
			<h1 style="font-size: 40px;" class="p2">Juegos</h1>
			<div style="margin-top: 40px;">
            <form method="POST">
				<a href="Memorama.php" ><input type="submit" value="Memorama" name="memo" class="isubmit" style="background-color: rgba(0, 199, 119, 0.611);"></a>
                <?php
                if(isset($_POST['memo'])){
                    header("location: Memorama.php?user=".$_GET['user']);
                }
                               
                ?> 
            </form>
			<?php
			  echo "<a href='indice_examenes.php?user=".$_GET['user']."'><button class='isubmit' style='background-color: rgb(0, 199, 119, 0.611);'>Examenes</button></a>";
			?>
			</div>
		</div>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
	    <div class="isecciones" style="background-color: rgba(255, 221, 0, 0.248); border: 3px solid #ffb300;">
			<h1 style="font-size: 40px;" class="p2">Refuerza tu conocimiento</h1>
			<br><br>
			<div>
			<?php
			  echo "<a href='colores.php?user=".$_GET['user']."'><button class='isubmit'>Colores</button></a>";
			?>
						<?php
			  echo "<a href='form.php?user=".$_GET['user']."'><button class='isubmit'>Tu opinion</button></a>";
			?>
			</div>
	    </div>
    </div>
</div>

<div id="menu3" class="container tab-pane active"><br>
	<div class="isecciones" style="background-color: rgb(237, 171, 143); border:3px solid #ee4fc9">
			<iframe width="560" height="350" 
			src="https://www.youtube.com/embed/3ZdW1hGh3Mw" 
			title="YouTube video player" frameborder="0" 
			allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
		</iframe>
		</div>
    </div>
	<div id="menu4" class="container tab-pane active"><br>
	<div class="isecciones" style="background-color: rgb(146, 180, 153); border:3px solid #4fee91">
			<h1 style="font-size: 40px;" class="p2">Te recomendamos visitar el museo interactivo Semilla</h1>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.758949261137!2d-106.08675995777315!3d28.636985775763605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea44c5be3e84bd%3A0xd7b2caa3d186c81b!2sMuseo%20Semilla!5e0!3m2!1ses-419!2smx!4v1684729677838!5m2!1ses-419!2smx" 
			width="95%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
    </div>

		<footer id="pie">
			<table>
				<tbody>
					<tr>
						<td class="seccion_foot" style="margin-left: 1px; border-left: rgba(0, 0, 0, 0);">
							<img src="ImagenesIndex/educacion.jpg" width="250" height="100"/>
						</td>
						<td class="seccion_foot">
							<br><br>
							<p>Programación Web Front End</p>
							<p>ITCH II</p>
							<br><br>
						</td>
						<td class="seccion_foot">
							<br>
							<p>Diseñado por:</p>
							<p>Mendoza Gutierrez Yahel Adrián</p>
							<p>Montes Silva Alan Jesús</p>
							<p>Suárez Franco Cristina</p>
							<p>Quiñonez Esparza Omar</p>
							<br>
						</td>
					</tr>
				</tbody>
			</table>
		</footer>
		</center>
	</body>
</html>
