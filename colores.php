<HTML>
	<head>
		<TITLE> Colores </TITLE>
		<link rel="stylesheet" type="text/css" href="estilos.css"/>
	</head>
	<body id="body1">
		<header id="he1">
			<br>
			<marquee id="m1"><img style="height: 40px;" src="KidsLearn.png" alt=""></marquee>
		</header>
		<div>
			<aside id="as1">
			<?php
			  echo "<a href='principal.php?user=".$_GET['user']."' id='a2' >Regresar</a>";
			?>
				<ul>
					<li><a id="a1">Rojo</a><br></br>
					<li><a id="a1">Azul</a><br></br>
					<li><a id="a1">Verde</a><br></br>
					<li><a id="a1">Rosa</a><br></br>
					<li><a id="a1">Amarillo</a><br></br>
					<li><a id="a1">Cian</a><br></br>
					<li><a id="a1">Morado</a><br></br>
					<li><a id="a1">Negro</a><br></br>
					<li><a id="a1">Blanco</a><br></br>
					<li><a id="a1">Misterioso</a>
				</ul>
			</aside>
			<section id="se1">
				<center>
				<div class="ins" >Manten presionado el circulo para ver el color c:</div> 
				<div class="contenedor"> <!--Pricipal-->
				<div>
					<div class="botton5" id="Bo11">Rojo</div>
					<div class="botton5" id="Bo12">Azul</div>
					<div class="botton5" id="Bo13">Verde</div>
				</div><br>
				<div>
					<div class="botton5" id="Bo14">Rosa</div>
					<div class="botton5" id="Bo15">Amarillo</div>
					<div class="botton5" id="Bo16">Cian</div>
				</div><br>
				<div>
					<div class="botton5" id="Bo17">Morado</div>
					<div class="botton5" id="Bo18">Negro</div>
					<div class="botton5" id="Bo19">Blanco</div>
				</div><br>
				<div>
					<div class="botton5" id="Bo20">Misterio</div><br>
				</div>
			</div>
		</center>
		</section>
		</div>
			
	</body>
</HTML>