document.addEventListener("DOMContentLoaded",()=>{
    obtenerDocente();
    obtenerSemestre();
    SelectXSemestre();
    


  
    

});

const $crud_table_body = document.querySelector(".table-group-divider")


const $sel = document.querySelector("#select-semestre");
var Semestre = []; var Docente = [];var XSemestre = [];var arrMeses = []

const fetch_1 = (_url,_type,_data) => {
    return fetch(`${_url}`, {
        method: _type,
        body: JSON.stringify(_data),
        headers:{
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.getElementsByName('csrf-token')[0].getAttribute('content')
        }
    }).then(res => res.json())
    .then(response => response)
}



const obtenerSemestre =async () => {
    try {
        const res = await fetch_1(`http://127.0.0.1:8000/semestreApi`,'GET');
        this.Semestre = res;
        llenarSelecSemestre();
    } catch (error) {
        console.log(error);
    }
}

const obtenerDocente = async() =>{
    try {
        const r =  await fetch_1(`http://127.0.0.1:8000/docenteApi`,'GET');
        this.Docente = r;
        console.log(this.Docente);
    } catch (error) {
        console.log(error);
    }
}





const llenarSelected = (array,$select,propiedad,propiedad1) =>{
    try { 
        $selectgeneral = "";
        for (let x = 0; x < array["data"].length; x++) {
            if(x==0){
                $selectgeneral += `<option value="" disabled>Seleccione periodo</option>`;
            }
            $selectgeneral += `<option value=${array["data"][x]["id"]}

            ${(array["data"][x][`${propiedad1}`] == 1)? `selected`:"" }>${array["data"][x][`${propiedad}`]}
            
            </option>`; 
        }
        $select.innerHTML = $selectgeneral; 
    } catch (error) {
        console.log(error);
    }
    
}

const llenarSelecSemestre = () =>{
    llenarSelected(this.Semestre,$sel,'semestre','estado') 
    obtenerXSemestre($sel.value);
}

const obtenerXSemestre = async (SelectValor) =>{
    const CodDocente = this.Docente["data"][0]["codDocente"];
    try {
        const res = await fetch_1(`http://127.0.0.1:8000/semestreConsultaApi/${SelectValor}/${CodDocente}`,'GET');
        this.XSemestre = res;
        forMonth();
        console.log(this.XSemestre);
    } catch (error) {
        console.log(error);
    }
}

const SelectXSemestre = () =>{
    //const SelectValor = $sel.value; 
    document.addEventListener("change",e=>{
        if(e.target == $sel){
            try { 
               obtenerXSemestre($sel.value);
            } catch (error) {
                console.log(error);
            }
        }
    })
}

const getMonthDifference = (startDate,endDate) =>{
    return (
        endDate.getMonth() -
        startDate.getMonth() +
        12 * (endDate.getFullYear() - startDate.getFullYear())
    );


}


const forMonth = () =>{
    const arrNomMeses_ = ['', 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
    
    
    let num_meses_futuros = getMonthDifference(new Date(`${XSemestre["data"][0].fechInicio} 08:00:00`), new Date(`${XSemestre["data"][0].fechFinal} 08:00:00`));
    //console.log(num_meses_futuros);
    for (let i = 1; i < (num_meses_futuros + 1); i++) { 
        arrMeses.push(arrNomMeses_[i]);
        //console.log(arrNomDias_[i]);
       
     }

     verificarcollapse();
     
}
  



const verificarcollapse = () =>{
    
    const $accordion = d.querySelector(".acord");
    
    if($accordion.classList.contains('collapsed')){
    }else{   
       for (let i =0; i < arrMeses.length; i++) {
        if($accordion.outerText === arrMeses[i]){
            $crud_table_body.innerHTML = '';
           console.log(XSemestre["data"][0].fecha)
           XSemestre["data"].forEach((el)=>{
           const $variable =  funcionparaverificarfecha(el.fecha)
            console.log($variable);
            $crud_table_body.innerHTML +=
            
            `
            <tr class = "">
                <td>${$variable.fecha + " " +$variable.mes}</td>
                <td>${el.codCurso + "-" + el.secCurso}</td>
            </tr>
            
            
            
            `
           })

        }else{

        }
       }
          
            //https://es.stackoverflow.com/questions/66907/comparar-elementos-de-un-arreglo

   

    }

}

const funcionparaverificarfecha = (fecha = undefined) =>{
    const arrNomDias_ = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
    var Xmas95 = new Date();
    var weekday = Xmas95.getDay();
    return {
        fecha: arrNomDias_[weekday],
        mes : Xmas95.toString().substr(8,2)
    }
}

//console.log(arrMeses.length);

    /*const objeto = {};
    const objetoMeses = {};
    //console.log(this.XSemestre)
    XSemestre["data"].forEach((element,index) => {
        objeto[`id_${index}`] = getMonthDifference(new Date(`${element.fechInicio} 08:00:00`), new Date(`${element.fechFinal} 08:00:00`));
        
    });

    console.log(objeto);

    var valores = Object.values(objeto);

    console.log(valores);
    //console.log(valores[0])
    for(let y = 0;y <valores.length;y++){
        
        for (let i = 1; i < ((valores[y]) + 1); i++) { 
            console.log(arrNomMeses_[i])    
            //objetoMeses[`id_${i}`] = "Maria";
         }

        /*for (let i=1; i < (valores[i] + 1); i++) {
            console.log(arrNomMeses_[i]);*/
           // const array = [];

           /* objetoMeses[`idMeses_${i}`] = function (){
                return arrNomMeses_[i];
            }*/
          
        //}
       


    










