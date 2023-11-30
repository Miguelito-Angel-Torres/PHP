const d = document;
const w = window;
const ls = localStorage;


d.addEventListener("DOMContentLoaded",e=>{
    
    selectperiodo();
    //jalarelMes();
    //contactFormValidations();

    contactFormValidations1();
    contactFormValidations2();

    verificarcollapsed(); 
}); 



//===========Seleccion de Periodo

const selectperiodo = () =>{
    //1
    const $selectgeneral = d.querySelector(".form-select");
    console.log($selectgeneral);
    const $selectform = d.querySelector(".crud-form");
    console.log($selectform)
    //2
    const $selectform2 = d.querySelector(".crud-form1");


    d.addEventListener("change",e=>{
        if(e.target == $selectgeneral){
            //1
            $selectform.semestre.value = $selectgeneral.value;
            //2
            $selectform2.semestre.value = $selectgeneral.value;


        }
    });
    if($selectform.semestre.value == "" || $selectform2.semestre.value == ""){
        $selectform.semestre.value = $selectgeneral.querySelectorAll("option")[1].value;
        $selectform2.semestre.value = $selectgeneral.querySelectorAll("option")[1].value;
    }

    /*($selectform.semestre.value == "" || $selectform2.semestre.value == "")?
    $selectform.semestre.value = $selectgeneral.querySelectorAll("option")[1].value
    $selectform2.semestre.value = $selectgeneral.querySelectorAll("option")[1].value
    :null;*/
    
}
//======Seleccion de Periodo
/*const jalarelMes = ()=>{
    const $accordion = d.querySelector(".acord");
    //console.log($accordion);
    const $selectform = d.querySelector(".crud-form");
    d.addEventListener("click",e=>{
        if(e.target == $accordion){
            const $outerText = $accordion.innerText;
            $selectform.mes.value = $outerText;   
        }
})}*/

const verificarcollapsed = () =>{
    //1
    const $accordion = d.querySelector(".acord");
    const $selectform = d.querySelector(".crud-form");
    //2
    const $accordion2 = d.querySelector(".acord1");
    const $selectform2 = d.querySelector(".crud-form1 ");


    if($accordion.classList.contains('collapsed') || (!($accordion2.classList.contains('collapsed')))){
        $selectform.mes.value = null 

        $selectform2.mes.value = null
    }else{
        $selectform.mes.value = $accordion.innerText;

        $selectform2.mes.value = $accordion2.innerText
    }
    /*($accordion.classList.contains('collapsed') ||)? 
    $selectform.mes.value = null // estacerrado
    :$selectform.mes.value = $accordion.innerText; //estaabierto
    //console.log($accordion.innerText)

    ($accordion2.classList.contains('collapsed'))?
    $selectform2.mes.value = $accordion2.innerText
    :null// estacerrado*/
}
//----Validacion de Formulario:
const contactFormValidationsO = ($inputs,$numero,$matches) =>{
    $inputs.forEach(input =>{
        const $span = d.createElement("span");
        $span.id = input.name + `${$numero}`;
        $span.textContent = input.title;
        $span.classList.add("contact-form-error","none")
        input.insertAdjacentElement("afterend",$span);

    });

    d.addEventListener("keyup",e=>{
        if(e.target.matches(`${$matches}`)){
            let $input = e.target;
            let pattern = $input.pattern;

            if(pattern && $input.value !== ""){
                let regex = new RegExp(pattern);

                return !regex.exec($input.value)
                ? d.getElementById($input.name + `${$numero}`).classList.add("is-active")
                : d.getElementById($input.name + `${$numero}`).classList.remove("is-active");
                
            }
            if(!pattern){
                return $input.value === "" 
                ? d.getElementById($input.name + `${$numero}`).classList.add("is-active")
                : d.getElementById($input.name + `${$numero}`).classList.remove("is-active");
                
            }
        }
    })
}
const contactFormValidations1 =() =>{
    const $inputs = d.querySelectorAll(".contact-form [required]");
    contactFormValidationsO($inputs,'1',".contact-form [required]");

}
const contactFormValidations2 = () =>{
    const $inputs2 = d.querySelectorAll(".contact-form1 [required]")
    contactFormValidationsO($inputs2,'2',".contact-form1 [required]");
}


