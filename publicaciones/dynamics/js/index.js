window.addEventListener("load", ()=>{

    const nota = document.getElementById("textaDescripcion");
    const enviar = document.getElementById("btnEnviar");

    var guardado = document.cookie.split("=");
    if(guardado != ""){
        nota.value = guardado;
    };

    //document.cookie = "comegalleta = galletita; max-age=" + 60*5;


    nota.addEventListener("keyup", ()=>{
        document.cookie = "comegalleta= " + nota.value + "; max-age=3600;";
    })

    enviar.addEventListener("click", ()=>{
        document.cookie = "comegalleta; max-age=-1";
    })
});