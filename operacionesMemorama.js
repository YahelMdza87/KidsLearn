//Creamos un arreglo con dos propiedades: su string (que contiene la dirección de imagen) y su valor booleano (que nos ayudará
//al momento de diferenciar cuales ya han sido acertadas y cuales no
var cartas = new Array(
  {src: "ImagenesMemorama/perro.png", seleccion: false}, {src: "ImagenesMemorama/perezoso.png", seleccion: false},
  {src: "ImagenesMemorama/pajaro.png", seleccion: false}, {src: "ImagenesMemorama/hamster.png", seleccion: false},
  {src: "ImagenesMemorama/gato.png", seleccion: false}, {src: "ImagenesMemorama/caballo.png", seleccion: false},
  {src: "ImagenesMemorama/perro.png", seleccion: false}, {src: "ImagenesMemorama/perezoso.png", seleccion: false},
  {src: "ImagenesMemorama/pajaro.png", seleccion: false}, {src: "ImagenesMemorama/hamster.png", seleccion: false},
  {src: "ImagenesMemorama/gato.png", seleccion: false}, {src: "ImagenesMemorama/caballo.png", seleccion: false}
);  
//Variable para activar la opción de poder girar cartas
var activar_juego=0;
//Variable de apoyo para poder mostrar y ocultar las cartas al inicio del juego
var apoyo_cambiarCartas=0;
//Variable para contar el numero de movimientos que hizo
var intentos = 0;
//Variable para contar el numero de pares que ha hecho el usuario
var pares = 0;
//Variable para una de las cartas (guardará la dirección de imagen)
var jugada1 = "";
//Variable para una de las cartas (guardará la dirección de imagen)
var jugada2 = "";
//Variable para guardar el identificador de la carta (la posición) 
var id_J1 = "";
//Variable para guardar el identificador de la carta (la posición) 
var id_J2 = "";
//Creamos las variables de todas las etiquetas con las cuales interactuaremos
var dato="",victoria="",movimientos="",aciertos=""; 
//Variable que guarda la dirección de la imagen de la carta volteada hacía abajo
var cartaprincipal="ImagenesMemorama/carta.png";
//Variable que nos ayuda al conteo de milisegundos
var mili=0;

//Como su nombre lo indica, método el cual realiza el funcionamiento del cronometro
function cronometro(){
  //Comenzamos de 0 el cronometro
  var inicio = 0;
  //Obtenemos los h2 de la pagina para interactuar con ellos
  minutos_transcurridos = document.querySelector('h2#minutos');
  segundos_transcurridos = document.querySelector('h2#segundos');
  milisegundos_transcurridos = document.querySelector('h2#milisegundos');
  //Creamos las conversiones para entender mejor los calculos
  var milisegundos_psegundo = 1000;
  var milisegundos_pminuto = milisegundos_psegundo * 60;
  var milisegundos_phora = milisegundos_pminuto * 60;
  //Método para actualizar el contrarreloj
  function actualizarContrarreloj() {
    //Duración total es igual al inicio (debido a que no sabemos cuanto durará el usuario en realizar el memorama)
    var duracion_total = inicio;
    //Calculos para ver cuantos minutos o segundos han pasado
    minutos_transcurridos.innerHTML = Math.floor((duracion_total % milisegundos_phora) / milisegundos_pminuto);
    segundos_transcurridos.innerHTML = Math.floor((duracion_total % milisegundos_pminuto) / milisegundos_psegundo);
    //Aumentamos un segundo
    inicio+=1000;
  }
  //Llamamos el método para que se actualice en cada momento 
  actualizarContrarreloj();
  //Asignamos que cada segundo se actualice el contrarreloj
  control = setInterval(actualizarContrarreloj, milisegundos_psegundo);
  //Para los milisegundos, asignamos que cada 10 milisegundos se actualice el contador "mili" dentro del método milisegundos()
  controlmili = setInterval(milisegundos,10);
}
//Método para el contéo de milisegundos
function milisegundos(){
  mili++;
  //Si llega a 100, lo devolvemos a 0 para que visualmente llegue del 0 al 99 (simulando que al llegar a 100 pasa un segundo)
  if(mili==100){
    mili=0;
  }
  //Lo mostramos
  milisegundos_transcurridos.innerHTML = mili;
}
//Este método fue creado más que nada para deshabilitar los botones, pero aprovechandolo, asignamos algunas variables más
function cuandoCargue(){
  //Obtenemos los h2 del marcador para interactuar con ellos después
  victoria = document.getElementById("win");
  movimientos = document.getElementById("intentos");
  aciertos = document.getElementById("pares");
  botones = document.getElementsByName('botones');
  //obtenemos el div donde están guardadas nuestras cartas 
  dato = document.getElementById("yjuego");
  //Desactivamos el boton de reiniciar
  botones[1].disabled=true;
  botones[1].style.opacity="0.3";
}
//Métoddo para asignar las direcciones de imagenes a las imagenes y poder iniciar así con el juego
function iniciarJuego () { 
  //Se muestran las cartas al instante
  setTimeout(mostrarCartas,10); 
  //Se ocultan las cartas en 1 segundo (solo tendrá un segundo para ver las cartas)
  setTimeout(mostrarCartas,1000);
  //Iniciamos el cronometro
  cronometro();
  //Le ponemos la opacidad al 100% a las cartas (en este caso con poner uno se entiende)
  dato.style.opacity = 1;
  //Sorteamos el arreglo todas las cartas para que cada vez que juguemos, aparezcan en diferentes posiciones
  cartas.sort(function() {return Math.random() - 0.5});
  //Iniciamos un for para asignar las cartas al html
  for ( var i = 0 ; i < 12 ; i++ ) {
    //Creamos una variable string que extraiga la dirección de imagen de la carta
    var carta = cartas[i].src;
    //Creamos una variable que se referencíe con cada carta
    var indice = document.getElementById( i.toString() );
    //A cada carta le pasamos la imagen que tendrá
    indice.dataset.valor = carta;
  }
  //Desactivamos el boton de iniciar
  botones[0].disabled=true;
  botones[0].style.opacity="0.3";
}
function girarCarta () {
  //La variable activar_juego cambiará en cada acción que hagamos (0 o 1), esto para evitar errores/confusiones a la hora de voltear 
  //una o dos cartas
  if (activar_juego==1){
    //Variables que nos ayudarán para voltear una carta, ya sea para mostrarla o volver a la normalidad
    //Valores para mostrar la carta seleccionada: rotacionx="translateX(100%)" rotaciony="rotateY(-180deg)"
    //Valores para poner la carta a la normalidad: rotacionx="" rotaciony="rotateY(0deg)"
    var rotacionx="", rotaciony="";
    //Creamos una variable evento
    var evento = window.event;
    //En cualquiera de las cartas que hayamos clickeado (gracias al evento.target logramos saber eso) obtendrá la dirección de imagen
    //asignada anteriormente y la guardará en jugada2
    jugada2 = evento.target.dataset.valor;
    //En cualquiera de las cartas que hayamos clickeado (gracias al evento.target logramos saber eso) obtendrá la posición de imagen
    //asignada anteriormente y la guardará en id_J2
    id_J2 = evento.target.id;
    //Un if donde solo se accederá si es la segunda carta que se haya volteado 
    if ( jugada1 !== "" ) {
      //Un if donde se accederá si las cartas que fueron volteadas son iguales
      if ( jugada1 === jugada2 && id_J1 !== id_J2 && cartas[parseInt(id_J2)].seleccion != true && cartas[parseInt(id_J1)].seleccion != true) {
        //Le agregamos el valor "true" a las cartas ya encontradas
        cartas[parseInt(id_J1)].seleccion = true;
        cartas[parseInt(id_J2)].seleccion = true;
        intentos++;
        pares++;
        //Mandamos la posición y la dirección de imagen para que el método cambiarCarta() lo muestre
        rotacionx="translateX(100%)"; rotaciony="rotateY(-180deg)";
        cambiarCarta(id_J2, jugada2,rotacionx,rotaciony);
        //Llamamos al método vaciar() para que nos borre los datos guardados con los que interactuamos
        vaciar();
        //Llamamos al método comprobar() para confirmar si ya hemos ganado o aún no
        comprobar();
      }
    //Si no se logró el par, entrará en este else if
      else if(id_J1 !== id_J2){
        if(cartas[parseInt(id_J2)].seleccion==true){
        }
        else{
          var self = this;
          intentos++;
          //Desactivamos la posibilidad de voltear cartas en lo que se voltean a la normalidad las antes seleccionadas
          activar_juego=0;
          setTimeout(function(){
            //Se voltean las dos cartas a la normalidad
            rotacionx=""; rotaciony="rotateY(0deg)";
            cambiarCarta(self.id_J1, cartaprincipal,rotacionx,rotaciony)
            cambiarCarta(self.id_J2, cartaprincipal,rotacionx,rotaciony)
            //Activamos la posibilidad de nuevo
            activar_juego=1;
            vaciar()
          },600); 
          //Se voltea la segunda carta (mandamos la dirrección de imagen y posición, para saber cual carta se volteará)
          rotacionx="translateX(100%)"; rotaciony="rotateY(-180deg)";
          cambiarCarta(id_J2, jugada2,rotacionx,rotaciony);
        }
      }
    } 
    //En este else if entraremos solo si es nuestro primer levantamiento de carta
    else if(jugada2 !== "valor") {
      if(cartas[parseInt(id_J2)].seleccion==true){}
      else{
        //Se voltea la primera carta
        rotacionx="translateX(100%)"; rotaciony="rotateY(-180deg)";
        cambiarCarta(id_J2, jugada2,rotacionx,rotaciony);
        //Guardamos los valores de jugada2 en jugada1 para que, cuando se levanté la segunda carta, los datos obtenidos por voltearla
        //se guarden nuevamente en jugada2
        jugada1 = jugada2;
        id_J1 = id_J2;
      }
    }
  }
}
//Método para vaciar los valores de jugada1 y jugada2
function vaciar ()  {
  jugada1 = ""; 
  jugada2 = ""; 
  id_J1 = "";
  id_J2 = "";
}
//Método donde recibimos la posición, la dirrección de imagen y que rotación aplicaremos para así, voltear la carta
function cambiarCarta (posicion, contenido, x, y) {
  //Aplicamos la animación de voltear la carta
  document.getElementById(posicion).style.transform=y+" "+x;
  //Le pasamos la dirección de imagen en un lapso de 120 milisegundos, esto para que se vea un poco realista y no se muestre
  //antes o después de tiempo
  setTimeout(function(){
    //Accedemos a la etiqueta img de html con id = posición para reemplazar la imagen por la que hayamos volteado
    document.getElementById(posicion).src=contenido;
    movimientos.innerHTML="Movimientos: "+intentos;
    aciertos.innerHTML="Pares: "+pares;
  },120); 

}   
//Método para comprobar si el usuario ha ganado o aún no
function comprobar () {
  var aciertos = 0;
  //Iniciamos un for para comprobar cuantas cartas se han volteado
  for( var i = 0 ; i < 12 ; i++ ){
    if ( cartas[i].seleccion == true ) {
      aciertos ++;
    }
  }
  //Si el arreglo cartas tiene todos sus valores en true, hemos ganado
  if(aciertos == 12){
    victoria.innerHTML = "Felicidades Ganaste!!!";
    //Detenemos el cronometro
    clearInterval(controlmili);
    clearInterval(control);
    var user = document.getElementById('userphp');
    $( document ).ready(function() {
      // Definimos las variables de javascrpt
      var usuario = user.innerHTML;
      var minutos = minutos_transcurridos.innerHTML;
      var segundos = segundos_transcurridos.innerHTML;
      var milisegundos = milisegundos_transcurridos.innerHTML;
      // Ejecutamos AJAX
      
          $("#contenedor").load("tablero.php",{usuario,minutos,segundos,milisegundos});
          
          });
    //Asignamos a cada carta el dato "valor" para que así, no se puedan girar de nuevo
    for ( var i = 0; i < 12 ; i++ ) {
      var indice = document.getElementById( i.toString() );
      indice.dataset.valor = "valor";
    }
  }
}
//Método para mostrar las cartas al iniciar el juego
function mostrarCartas(){
  var k=0, l=0;
  for ( var j = 0 ; j < 12 ; j++ ) {
    //Si se van a mostrar por primera vez, entra aquí
    if(apoyo_cambiarCartas==0){
      document.getElementById(j).style.transform="rotateY(-180deg) translateX(100%)"
      setTimeout(function(){
      document.getElementById(k).src=cartas[k].src;
      document.getElementById(k).style.borderRadius="15px";
      k++;
      },120); 
    }
    //Si se van a voltear a la normalidad, entrará aqui
    else{
      document.getElementById(j).style.transform="rotateY(0deg) "
      setTimeout(function(){
      document.getElementById(l).src=cartaprincipal;
      l++;
      },120); 
      activar_juego=1;
      //Activamos el botón de reiniciar
      botones[1].disabled=false;
      botones[1].style.opacity="1";
    }
  }
  apoyo_cambiarCartas=1;
}
//Método para reiniciar el juego
function resetearJuego () {
  //Detenemos el cronometro
  clearInterval(controlmili);
  clearInterval(control);
  milisegundos_transcurridos.innerHTML="00";
  minutos_transcurridos.innerHTML="0";
  segundos_transcurridos.innerHTML="0";
  var php = document.getElementById('contenedor');
  php.innerHTML="";
  dato.style.opacity = 0.8;
  vaciar();
  intentos=0;
  pares=0;
  apoyo_cambiarCartas=0;
  activar_juego=0;
  movimientos.innerHTML="Movimientos: "+intentos;
  aciertos.innerHTML="Pares: "+pares;
  victoria.innerHTML="";
  for ( var i = 0; i < 12 ; i++ ) {
      cartas[i].seleccion=false;
      var indice = document.getElementById( i.toString() );
      indice.dataset.valor = "valor";
      cambiarCarta(i, cartaprincipal,"","rotateY(0deg)");
  }
  botones[0].disabled=false;
  botones[0].style.opacity="1";
  botones[1].disabled=true;
  botones[1].style.opacity="0.3";
}