function calificar(){
    var resp = 0;
    var calif = 0;

    for(var i=1; i<=5;i++){
        var grupo=document.getElementsByName("respuesta"+i);
        for(var j=0; j<grupo.length; j++){
            if(grupo[j].checked){
                resp = grupo[j].value;
            }
        }
        if(resp == "bien" && document.getElementById("nombre"+i).checked == true){
            calif=calif+1;
        }
    }

document.getElementById("divapa").style.display="block";
cadena="<div class='contenedor'><p class='calif'> ¡Obtuviste "+calif+" de 5 preguntas!</p></div>";
document.getElementById("divapa").innerHTML=cadena;
}