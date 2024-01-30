function colorear(objeto){
    if(document.getElementById(objeto).value!=""){
        document.getElementById(objeto).style.backgroundColor="#20F90B";
    }else{
        document.getElementById(objeto).style.backgroundColor="red";
        alert("este campo es obligatorio");
    }
}
function calificar(){
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
    cadena=" <p class='cal'>" +calif+"/10 </p>";
    document.getElementById("diva").innerHTML=cadena;

    document.getElementById("divap").style.display="block";
    cadena=" <p class='calif'> Obtuviste " +calif+" de 10 preguntas </p>"
            +"<br>"+"<a id='adi'> 1.El ajolote es un anfibio!:Es un anfibio carnívoro cuya alimentación se compone de pequeños crustáceos, larvas de     insectos, gusanos, babosas, caracoles, lombrices, renacuajos y algún pez.</a>"+"<br></br>"
            +"<a id='adi'> 2. Verdadero!El perro es un cuadrúpedo:Los cuadrupedos Son aquellos animales que caminan en cuatro extremidades, que en ese caso se denominan anteriores y posteriores.</a>"+"<br></br>"
            +"<a id='adi'> 3.¿Topos?:los topos no ven casi nada con sus pequeños ojos, se orientan casi exclusivamente con sus bigotes.</a>"+"<br></br>"
            +"<a id='adi'> 4.Verdadero!:Es el animal más rápido de todos y alcanza los 120 km/h en el momento más rápido de su carrera.</a>"+"<br></br>"
            +"<a id='adi'> 5.Dos Semanas:puede estar hasta dos semanas sin beber agua. Puede beber de una sentada 100 litros de agua y almacenarla en sus dos gibas para vivir después de estas reservas.</a>"+"<br></br>"
            +"<a id='adi'> 6.Primavera!:El búho macho ulula en primavera, principalmente en abril y mayo, para atraer a la hembra.</a>"+"<br></br>"
            +"<a id='adi'> 7.Limpian cadáveres:Los buitres son los basureros del mundo de las aves, alimentándose principalmente de cadáveres de animales muertos.</a>"+"<br></br>"
            +"<a id='adi'> 8.La ballena azul:¡El tamaño de la ballena azul equivale a 33 elefantes!.</a>"+"<br></br>"
            +"<a id='adi'> 9.La vida promedio de un perro es de 10-13 años.</a>"+"<br></br>"
            +"<a id='adi'> 10.África:La mayoría se encuentra en el desierto del Sahara en África, pero una pequeña población se encuentra en la India.</a>";
    document.getElementById("divap").innerHTML=cadena;
}