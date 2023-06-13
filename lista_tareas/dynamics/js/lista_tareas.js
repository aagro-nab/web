const agregar= document.getElementById("agregar");

const tabla = document.getElementById("tabla");

const tarea = document.createElement("tr");

const nombreTarea = document.getElementById("nombreInput");

const formulario = document.getElementById("formulario");
console.log(formulario);

const materiaAct = document.getElementById("materiaAct");

var checkBox = document.getElementById("checkbox");

const btnBorrar = document.getElementsByClassName("btn btn-danger");
const btnAgregar = document.getElementsByClassName("btn btn-success ms-1");
console.log(btnBorrar); 
console.log(btnAgregar);

const classTarea = document.getElementsByClassName("tarea");

let tipo = "";

let contMat = Array();
let i = 0;



// appendChild


// const lista= document.getElementsByClassName("Lista");

// const entradaMat = document.getElementById("entradaMat");
// const ingresar = document.getElementById("ingresar");

// function nuevaMateria(){
//     // Get the checkbox
//     var checkBox = document.getElementById("checkbox");
//     // Get the output text
//     var nuevaMat = document.getElementById("nuevaMat");
    
//     // If the checkbox is checked, display the output text
//     if (checkBox.checked == true){
//         nuevaMat.style.display = "block";
//         materiaAct.style.display = "none";
//     } else {
//         nuevaMat.style.display = "none";
//         materiaAct.style.display = "block";
//     }
// }

window.addEventListener("load", () => {

    checkBox.addEventListener('change', function() {
        if (this.checked) {
          console.log("Checkbox is checked.");
          materiaAct.innerHTML='<input type="text" class="form-control" id="materiaAct" name="materia" required autocomplete="off"><label for="materia" class="form-label">Materia</label>';
          tipo = "nuevaMat";
        } else {
          console.log("Checkbox is not checked.");
          materiaAct.innerHTML='<select class="form-select" aria-label="Default select example" name="materia" id = "selectMateria"require><option selected disabled>Materia</option></select>';
          tipo = "viejaMat";
        }
    });

    // btnBorrar.addEventListener("click", () =>{
    //   console.log(this);  
    // });

    // agregar.addEventListener("click", ()=>{
    formulario.addEventListener("submit", event => { 
    
        event.preventDefault();
    
        const datosForm = new FormData(formulario);
        let nombre = datosForm.get('nombre');
        let materia = datosForm.get('materia');

        console.log(nombre);
        console.log(materia);
        // let datosForm2 = new FormData("nombre", "materia");  
        
        console.log(datosForm.values());

        console.log(datosForm);

        if(tipo == "nuevaMat"){
            materiaAct.innerHTML='<select class="form-select" aria-label="Default select example" name="materia" id = "selectMateria"require><option selected disabled>Materia</option></select>';
            checkBox.checked = false;

            let selectMateria = document.getElementById("selectMateria");
            
            contMat[i] = materia;
            console.log(contMat[i]);    
            let materias = contMat.length;
            console.log(materias); 
            
            for(u = 0; u < materias; u++){
                let nuevo = document.createElement("option");
                nuevo.value = contMat[u];
                nuevo.textContent = contMat[u];
                nuevo = selectMateria.appendChild(nuevo);
                console.log("el u actual es " + contMat[u]);
            }
            
            i++;
            console.log(i);
            contMat.forEach(element => console.log(element));
        }

        // let string = new String(datosForm);

        // fetch("../php/lista_tareas.php", {
        //     method: 'POST',
        //     // headers: {
        //     //     'Content-Type' : 'application/json'
        //     // },
        //     body: string,
        // }).then(nombrej => nombrej)
        // .then(datosForm => console.log(datosForm))
        // .catch(error => console.log("Error: ", error))
        // .then(response => console.log('Success:', response));

        // console.log(nombre);
        
        // .then(response => response.json())
        // .then(data => console.log(data))
        // .catch(error => console.log(error))

        // .then((respuesta)=>{
        //     return respuesta.json();
        // }).then((datosJSON)=>{
        //     console.log(datosJSON);
        //     for(let tipo of datosJSON){
        //         select.innerHTML += `<option value = ${tipo.type_id}>${tipo.type_name}</option>`;
        //     }
        // });



        // window.alert("ayudajsjsjs");
        console.log(nombreTarea);
        nuevatarea(nombre, materia);
        nombreTarea.value = "";
        console.log(btnBorrar);
        console.log(btnAgregar);
        console.log(classTarea);
    });
});

function nuevatarea(nombre, materia){
    //let nuevatarea = document.createElement('tr');
    // nuevatarea.id = "nuevatarea";
    // tabla.appendChild(tarea);

    let tareaNueva = document.createElement("tr");
    tareaNueva = tabla.appendChild(tareaNueva);
    let clase = "tarea";
    tareaNueva.className = clase;

    let tituloCud = document.createElement("td");
    tituloCud.textContent = nombre;

    let materiaCud = document.createElement("td");
    materiaCud.textContent = materia;

    let botones = document.createElement("td");
    botones.innerHTML='<button type="submit" class="btn btn-danger">Delete</button> <button type="submit" class="btn btn-success ms-1">Finished</button>';

    tareaNueva.appendChild(tituloCud);
    tareaNueva.appendChild(materiaCud);
    tareaNueva.appendChild(botones);
}