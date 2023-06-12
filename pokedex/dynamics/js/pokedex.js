window.addEventListener("load", ()=>{
    const btnAgregar = document.getElementById("btn-agregar");
    const divAgregar = document.getElementById("contenedor-agregar");
    const select = document.getElementById("select-tipos");
    const formAgregar = document.getElementById("form-nuevo");
    const btnEnviar = document.getElementById("btn-enviar");
    const buscador = document.getElementById("buscador");
    const resultados = document.getElementById("contenedor-resultados");
    const mostrar = document.getElementById("contenedor-mostrar");
    let editar;
    let eliminar;
    // let listo;
    let formActualizar;
    
    fetch("./dynamics/php/consultar.php")
    .then((respuesta)=>{
        return respuesta.json();
    }).then((datosJSON)=>{
        console.log(datosJSON);
        for(let tipo of datosJSON){
            select.innerHTML += `<option value = ${tipo.type_id}>${tipo.type_name}</option>`;
        }
    });
    btnAgregar.addEventListener("click", ()=>{
        divAgregar.style.display ="block";
    });
    btnEnviar.addEventListener("click", (e)=>{
        e.preventDefault();
        divAgregar.style.display ="none";
        datosForm = new FormData(formAgregar);
        fetch("./dynamics/php/insertar.php", {
            method: "POST",
            body: datosForm
        }).then((respuesta)=>{
            return respuesta.json();
        }).then ((datosJSON)=>{
            alert(datosJSON.mensaje);
          
        });
    });
    buscador.addEventListener("keyup", ()=>{
        let termino = buscador.value;  
        resultados.innerHTML = "";
        if(termino.length >= 3){
            fetch("./dynamics/php/buscador.php?termino="+termino)
            .then((respuesta)=>{
                return respuesta.json();
            }).then ((datosJSON)=>{
              
                for (resultado of datosJSON)
                {
                    resultados.innerHTML += `<div class="coincidencia" data-id="${resultado.pok_id}">${resultado.pok_name}</div>`;
                }   
                if(datosJSON.length == 0)
                {
                    resultados.innerHTML = "No hay resultados";
                }
            });
        }
        
    });
    resultados.addEventListener("click", (e)=>{
        if(e.target.classList.contains("coincidencia"))
        {
            let id_pokemon= e.target.dataset.id;
            resultados.innerHTML = "";
            mostrar.innerHTML = "";
            mostrar.style.display = "flex";
            divAgregar.style.display = "none";
            fetch ("./dynamics/php/pokemon.php?id="+id_pokemon)
            .then((respuesta)=>{
                return respuesta.json();
            }).then((datosJSON)=>{
                let titulo = ["Nombre", "Altura", "Peso", "Tipo", "Experiencia"];
                let datos=[datosJSON.pok_name, datosJSON.pok_height, datosJSON.pok_weight, datosJSON.type_name, datosJSON.pok_base_experience];
                i=0;
                for (dato of datos){
                    mostrar.innerHTML += `
                    <div class="dato">
                        <h1>${titulo[i]}</h1>
                        <p>${dato}</p>
                    </div>   
                    `;
                    i++;
                }
                mostrar.innerHTML += `
                <button data-id="${datosJSON.pok_id}" id="btn-eliminar" class=" botones">
                    <h1>Eliminar</h1>
                </button> `;
                mostrar.innerHTML += `
                <button data-id="${datosJSON.pok_id}" id="btn-editar" class="botones">
                    <h1>Editar</h1>
                </div>`;

                editar = document.getElementById("btn-editar");
                eliminar = document.getElementById("btn-eliminar");
                datosDiv = document.getElementsByClassName("dato");
                console.log(editar);
                console.log(datosDiv);

                editar.addEventListener("click", () => {
                    mostrar.innerHTML = "";
                    
                    let form = document.createElement("form");
                    form.setAttribute("id", "formActualizar");
                    form = mostrar.appendChild(form);

                    let divForm = document.createElement("div");
                    divForm.setAttribute("id", "divActualizar");
                    divForm = form.appendChild(divForm);
                    
                    formActualizar = document.getElementById("formActualizar");
                    divActualizar = document.getElementById("divActualizar");
                    
                    divActualizar.innerHTML +=
                    `<input id="pokeId" name="id" type="hidden" value="${id_pokemon}">`;

                    divActualizar.innerHTML += 
                    `<div class="dato">
                        <h1>${titulo[0]}</h1>
                        <p>${datos[0]}</p>
                    </div>  `;

                    let varDatos = Array();

                    for(u=1; u<=4; u++){
                        varDatos[u-1] = titulo[u].toLowerCase();

                        divActualizar.innerHTML += 
                        `<div class="dato" id="div${titulo[u]}">
                            <h1>${titulo[u]}</h1>
                            <p><input type="text" name="${varDatos[u-1]}" class="inputDatos" id="input${titulo[u]} required"></p>
                        </div>  `;
                    };

                    let divTipo = document.getElementById("divTipo");
                    console.log(divTipo);
                    divTipo.innerHTML = 
                    `<h1>Tipo</h1>
                    <select id="selectTipoAct" name="tipo"></select>`;

                    fetch("./dynamics/php/consultar.php")
                    .then((respuesta)=>{
                        return respuesta.json();
                    }).then((datosJSON)=>{
                        console.log(datosJSON);
                        console.log("si entró");

                        let selectTipoAct = document.getElementById("selectTipoAct");
                        console.log(selectTipoAct);

                        for(tipo of datosJSON){
                            console.log("si entro incluso a la otra cosa");
                            selectTipoAct.innerHTML += `<option value = ${tipo.type_id}>${tipo.type_name}</option>`;
                        }

                        divActualizar.innerHTML += 
                        `<button data-id="${datosJSON.pok_id}" id="btn-listo" class="botones" type="submit">
                            <h1>Listo</h1>
                        </button> `;

                        console.log(formActualizar);

                        console.log(id_pokemon);
                        
                        let listo = document.getElementById("btn-listo");
                        console.log(listo);

                        formActualizar.addEventListener("submit", (event) => {
                            event.preventDefault();
                            datosForm = new FormData(formActualizar);
                            fetch("./dynamics/php/editar.php", {
                                method: "POST",
                                body: datosForm
                            }).then((respuesta)=>{
                                return respuesta.json();
                            }).then ((datosJSON)=>{
                                alert(datosJSON.mensaje);
                            });
                    
                        });

                    });
                    
                });

                eliminar.addEventListener("click", () => {
                    fetch ("./dynamics/php/eliminar.php?id="+id_pokemon)
                    .then((respuesta)=>{
                        return respuesta.json();
                    }).then((datosJSON)=>{
                        alert(datosJSON.mensaje);
                        mostrar.innerHTML = "";
                    });
                });
                
            });
        }
    });

    
    
    
});