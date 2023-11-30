const d = document;

d.addEventListener('DOMContentLoaded',e =>{
    efectosMisContactos()
    
});


function efectosMisContactos(){
   const $form = d.querySelector(".formulario");
    
    setTimeout(() =>{
        $form.classList.remove("formulario") ; 
    },2000);
    

}



