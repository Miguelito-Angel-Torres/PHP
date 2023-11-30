document.addEventListener("DOMContentLoaded",() =>{
    obtenerActitudes();
    obtenerBloques();
    obtenerAlumnos();
})

const $form = document.querySelector('.crud-form');
const $title = document.querySelector('.crud-title');

const $crud_table_body = document.querySelector(".crud-table tbody");



var alumnos = [];
var actitudes = [];
var bloques = [];
var mensaje = [];

var alumno = [];


const fetch_1 = (_url,_type,_data) => {
    return fetch(`${_url}`, {
        method: _type,
        body: JSON.stringify(_data),
        headers:{
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.getElementsByName('csrf-token')[0].getAttribute('content')
        }
    }).then(res => res.json())
    .then(response => response)}


const obtenerAlumnos = async ()=>{
    try {
        const resultado = await fetch_1(`http://127.0.0.1:8000/alumnosApi/0`,'GET');
        this.alumnos = resultado;
        llenarTabla();
        llenarSelecBloques();
        llenarSelecActitudes()
    } catch (error) {
        console.log(error);
    }
}



const llenarTabla =() =>{

    var state = {
        // querySet : que contiene todo mi alumno
        'querySet':alumnos["data"],
        'page': 1,
        'rows':5,
        'window':5
    }
    buildTable()

    function pagination(querySet,page,row){
        trimStar = (page-1)*row
        iniciocontador = trimStar
        console.log(trimStar)
        const trimEnd = trimStar + row
        console.log(trimEnd)
        const trimmeData = querySet.slice(trimStar,trimEnd)
        console.log(trimmeData);
        const pages = Math.ceil(querySet.length/row)
        console.log(pages);
        return {
            'querySet':trimmeData,
            'pages':pages
        }

    }

    

    function pageButtons(pages){
        var wrapper = document.getElementById("pagination-wrapper");
        wrapper.innerHTML = '';
        var maxLeft=(state.page- Math.floor(state.window/2))
      var maxRight=(state.page+ Math.floor(state.window/2))
        
      if (maxLeft < 1) {
        maxLeft = 1
        maxRight = state.window
      }

      if (maxRight > pages) {
          maxLeft = pages - (state.window - 1)
          
          if (maxLeft < 1){
            maxLeft = 1
          }
          maxRight = pages
      }

        for (var page = maxLeft;page <= maxRight;page++){
            wrapper.innerHTML += `<li class="page-item mx-1"><button value=${page} class="page btn btn-sm btn-success ml-2">${page}</button></li>`;
        }
        if(state.page !=1){
            wrapper.innerHTML = `<li class="page-item"><button value=${1} class="page btn btn-sm  btn-info ml-2">&#171; First</button></li>` + wrapper.innerHTML;
        }
        if(state.page != pages){
            wrapper.innerHTML += `<li class="page-item"><button value=${pages} class="page btn btn-sm  btn-info ml-2 " >Last &#187;</button></li>`;

        }
        //var valor = document.getElementByValue(`${page}`);
        //var button = document.getElementsByClassName('page btn').value = `${page}`;
        //var button1 = document.querySelectorAll('.page');
        //console.log(button1);
        /*button1.addEventListener('click',()=>{
            console.log(alert('Maria'))
            const $crud_table_body_pagination = document.querySelector(".crud-table tbody");
            $crud_table_body_pagination.empty();
            state.page = Number($(this).val());
            buildTable();
        })*/
        
        

        $('.page').on('click',function() {
            $('.tabla_alumno tbody').empty()
            state.page = Number($(this).val())
    
            buildTable()
          })



    }
    function buildTable(){
        const data = pagination(state.querySet,state.page,state.rows)
        const $crud_table_body_pagination = document.querySelector(".crud-table tbody");
        console.log($crud_table_body_pagination)
        console.log("Data:",data,"x");
        var myList = data.querySet;
        console.log(myList);

    

        $crud_table_body_pagination.innerHTML  = '';
    myList.forEach((el)=>{
        $crud_table_body_pagination.innerHTML  +=
        `
            <tr class = "bg-primary bg-gradient  bg-opacity-50 text-center fs-5 fw-bold bcolor-principal">
                    <td>${el.name}</td>
                    <td>${el.apellido}</td>
                    <td>${el.edad}</td>
                    <td>${el.dni}</td>
                    <td>${el.correo}</td>
                    <td>${el.telefono}</td>
                    <td>${el.bloque}</td>
                    <td>${el.actitud}</td>
                    <td>${el.semestre}</td>
                    <td>${el.mes}</td>
                    <td>
                        <button class="edit  btn btn-primary btn-lg text-white"
                        onclick="edit(${el.id})">Editar</button>
                        <button class="delete  btn btn-danger btn-lg text-white"
                        onclick="elim(${el.id})">Eliminar</button>
                    </td>
            </tr>`
    })

    pageButtons(data.pages)

}}



const elim = async(id) =>{
    try {
        const resultado = await fetch_1(`http://127.0.0.1:8000/alumnosApi/${id}`,'DELETE');
        this.mensaje = resultado;
        console.log(mensaje)
        msj(mensaje);
        obtenerAlumnos();   
    } catch (error) {
        console.log(error);
    }
}
const $crud_form1 = document.querySelector(".crud-form1");
const $crud_title = document.querySelector(".crud-title1");
const edit = async(id) =>{
    try {
        const resultado = await fetch_1(`http://127.0.0.1:8000/alumnosApi/${id}`,'GET');
        this.alumno = resultado["data"][0];
        $crud_title.textContent = "EDITAR ALUMNO";
        $crud_form1.name.value = resultado["data"][0].name;
        $crud_form1.apellido.value = resultado["data"][0].apellido;
        $crud_form1.edad.value = resultado["data"][0].edad;
        $crud_form1.dni.value = resultado["data"][0].dni;
        $crud_form1.correo.value = resultado["data"][0].correo;
        $crud_form1.telefono.value = resultado["data"][0].telefono;
        $crud_form1.bloque_id.value = resultado["data"][0].bloque_id;
        $crud_form1.actitud_id.value = resultado["data"][0].actitud_id;
        $crud_form1.semestre.value = resultado["data"][0].semestre;
        $crud_form1.mes.value = resultado["data"][0].mes;
        llenarSelecActitudes()
        
    } catch (error) {
        console.log(error);
    }
    
}
//const $submitFormA = document.querySelector(".submitformA")
//console.log($submitFormA);
//const $crud_form1 = document.querySelector(".crud-form1");
//console.log($crud_form1)
document.addEventListener("submit",async(e) =>{
    e.preventDefault();
    
    if(e.target === $crud_form1){
        const data = {
            id: isNaN(parseInt(e.target.id.value.trim()))? null : parseInt(e.target.id.value.trim()),
            name:e.target.name.value.trim(),
            apellido:e.target.apellido.value.trim(),
            edad:parseInt(e.target.edad.value),
            dni:e.target.dni.value.trim(),
            correo:e.target.correo.value.trim(),
            telefono:e.target.telefono.value.trim(),
            bloque_id:parseInt(e.target.bloque_id.value),
            actitud_id:parseInt(e.target.actitud_id.value),
            semestre:e.target.semestre.value.trim(),
            mes:e.target.mes.value.trim()

        }
        if(!e.target.id.value){
            try {
                const resultado = await fetch_1(`http://127.0.0.1:8000/alumnosApi`,'POST',data);
                this.mensaje = resultado;
                msj(mensaje);
                obtenerAlumnos();
                $crud_form1.reset();  
            } catch(error){
                console.log(error);
            }
        }else{
            try {
                const resultado = await fetch_1(`http://127.0.0.1:8000/alumnosApi`,'POST',data);
                this.mensaje = resultado;
                msj(mensaje);
                obtenerAlumnos();
                $crud_form1.reset();      
            } catch(error){
                console.log(error);
            }
        }
    }
}   
)

const obtenerActitudes  = async () => {
    try {
        const resultado = await fetch_1(`http://127.0.0.1:8000/actitudesApi`,'GET');
        this.actitudes = resultado;
        console.log(actitudes);
    } catch (error) {
        console.log(error);
    }
}


const obtenerBloques = async () => {
    try {
        const resultado = await fetch_1(`http://127.0.0.1:8000/bloquesApi`,'GET');
        this.bloques = resultado;
        console.log(bloques);
    } catch (error) {
        console.log(error)
    }
}

const llenarSelected = (array,$select,propiedad) =>{
    try { 
        $selectgeneral = "";
        for (let x = 0; x < array["data"].length; x++) {
            if(x==0){
                $selectgeneral += `<option value="" disabled>---</option>`;
            }
            $selectgeneral += `<option value=${array["data"][x]["id"]}

            ${(this.alumno[`${propiedad}`] == array["data"][x][`${propiedad}`])? `selected`:"" }>${array["data"][x][`${propiedad}`]}
            
            </option>`; 
        }
        $select.innerHTML = $selectgeneral; 
    } catch (error) {
        console.log(error);
    }
    
}

const llenarSelecBloques= () =>{
    try {
        $select = $crud_form1.bloque_id
        llenarSelected(this.bloques,$select,'bloque')
    } catch (error) {
        console.log(error);
    }
}

const llenarSelecActitudes =() =>{
    try {
        $select = $crud_form1.actitud_id
        llenarSelected(this.actitudes,$select,'actitud')
    } catch (error) {
        console.log(error);    
    }
    
}



// Realizar mas rato hidden  del mes y semestre y los patter form1 


const msj = (mensaje = undefined) => {
    if(mensaje === undefined) return console.log("No ingresastes un Arreglo");
    if(!(mensaje instanceof(Object))){return console.log("El valor de ingresastes no es un object");}
    if(mensaje.length === 0){
        return console.log("El arreglo esta vacio");
    }else{
        const $div = document.createElement("div");
         $accordion = document.querySelector(".accordion");

        $div.setAttribute("class","alert alert-success alert-dismissible fade show");
        $div.setAttribute("role","alert");
        $div.innerHTML =`
            <strong>${mensaje.mensaje}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        `;

        $accordion.insertAdjacentElement("afterend",$div);
        
    }

}



/*const fetch_ = async (_url,_type,_data) =>{
    await fetch(`${_url}`,{
        method: _type,
        body: JSON.stringify(_data),
        headers:{
            'Content-Type': 'application/json;;charset=utf-8',
            'X-CSRF-TOKEN': document.getElementsByName('csrf-token')[0].getAttribute('content')
        }
    }).then(res => {
        return res.ok?res.json():Promise.reject(res);
    }).then(response => {
        alumnos = response;
    }).catch(err =>{
        let message = err.statusText || "Ocurrio un error";
        $form.insertAdjacentHTML("afterend",`<p><b>Error ${err.status}: ${message}</b></p>`)
    })
}

const obtenerAlumnos =  ()=>{
    fetch_(`https://jsonplaceholder.typicode.com/users`,'GET');
}
obtenerAlumnos();*/


// verificar el diseño booton
// crear la tabla de semestre unido con la tabla alumno y mas columnas
// realizar el pagination
//// realizar que se vaya a un pdf los registro laravel


















/*document.addEventListener('DOMContentLoaded', async function(event){





const datos = {
    consulta: 'addUpdate',
};

const resultado = await fetch_(`alumnos`,'post',datos);
console.log(resultado)

});*/