document.addEventListener('DOMContentLoaded', () => { 
     // VARIABLES
   //Ponemos como limite 25 minutos
   var limite = 1500000;
   var inicio = 0;
   contrarreloj = document.getElementById('contrarreloj');
   //Obtenemos los h3 para actualizar en el html los minutos y segundos
   minutos_transcurridos = document.querySelector('h3#minutos');
   segundos_transcurridos = document.querySelector('h3#segundos');
   var milisegundos_psegundo = 1000;
   var milisegundos_pminuto = milisegundos_psegundo * 60;
   var milisegundos_phora = milisegundos_pminuto * 60;
   //Método para actualizar el contrarreloj
   function actualizarContrarreloj() {
     //Duración total irá cambiando conforme inicio vaya aumentando
     var duracion_total = limite - inicio;
     //Calculos para ver cuantos minutos o segundos faltan
     minutos_transcurridos.innerHTML = " "+Math.floor((duracion_total % milisegundos_phora) / milisegundos_pminuto);
     segundos_transcurridos.innerHTML = Math.floor((duracion_total % milisegundos_pminuto) / milisegundos_psegundo);
     //Si los minutos y los segundos llegan a 0, entrará aquí
     if(Math.floor((duracion_total % milisegundos_phora) / milisegundos_pminuto)==0 && Math.floor((duracion_total % milisegundos_pminuto) / milisegundos_psegundo)==0){
        //Calificamos las respuestas que haya contestado
        calificar();
        //Desaparecemos el cronometro
        contrarreloj.style.display="none";
     }
     //Aumentamos un segundo
     inicio+=1000;
   }
   //Llamamos el método para que se actualice en cada momento 
   actualizarContrarreloj();
   //Asignamos que cada segundo se actualice el contrarreloj
   control = setInterval(actualizarContrarreloj, milisegundos_psegundo);
});
function calificar(){
    var section = document.getElementById('contrarreloj');
    section.style.display="none";
    var calif=0;
    var cadena;

    for(var i=1;i<=10;i++){
        var resp=0;
        var grupo=document.getElementsByName("r"+i);
    for(var j=0; j<grupo.length; j++){
        if(grupo[j].checked){
            resp=grupo[j].value;
        }
    }
    if(resp == "bien"){
        calif=calif+1;

    }
    }
    document.getElementById("diva").style.display="block";
    cadena=" <p class='calm'>" +calif+"/10 </p>";
    document.getElementById("diva").innerHTML=cadena;

}