<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get y Post</title>
    <script>
        // En el objeto document , se encuenta como propiedades los formularios d.enviar-get_frm.password_txt.value
        const d = document;
        d.addEventListener("DOMContentLoaded", e =>{
            validar("#enviar-get","#enviar-post");
            //console.log(d.querySelector("#formulario1"))
        });
        function validar(button1,button2){
            d.addEventListener("click",e=>{
                if(e.target.matches(button1)){
                    validarDatosGet();           
                }
                if(e.target.matches(button2)){
                    validarDatosPost();
                }
            })
            const validarDatosGet =() =>{
                var verificar = true;
                const nombre_txt = d.querySelector("#formulario1").nombre_txt;
                const password_txt = d.querySelector("#formulario1").password_txt;
                const sexo_rdo = d.querySelector("#formulario1").sexo_rdo;
                if(!nombre_txt.value){
                    console.log("El campo nombre es requerido");
                    nombre_txt.focus();
                    verificar = false;
                }else if(!password_txt.value){
                    console.log("El campo password es requerido");
                    password_txt.focus();
                    verificar =false;
                }else if(!sexo_rdo[0].checked && !sexo_rdo[1].checked){
                    console.log("El campo sexo es requierido");
                    sexo_rdo[0].focus();
                    verificar = false;
                }
                if(verificar){
                    // submit() nos va mandar dependiendo el valor de action
                    d.querySelector("#formulario1").submit();        
                }                
            };
            const validarDatosPost =() =>{
                var verificar = true;
                const nombre_txt = d.querySelector("#formulario2").nombre_txt;
                const password_txt = d.querySelector("#formulario2").password_txt;
                const sexo_rdo = d.querySelector("#formulario2").sexo_rdo;
                if(!nombre_txt.value){
                    console.log("El campo nombre es requerido");
                    nombre_txt.focus();
                    verificar = false;
                }else if(!password_txt.value){
                    console.log("El campo password es requerido");
                    password_txt.focus();
                    verificar =false;
                }else if(!sexo_rdo[0].checked && !sexo_rdo[1].checked){
                    console.log("El campo sexo es requierido");
                    sexo_rdo[0].focus();
                    verificar = false;
                }
                if(verificar){
                    // submit() nos va mandar dependiendo el valor de action
                    d.querySelector("#formulario2").submit();        
                }                
                
            }
        };
    </script>
</head>
<body>
    <?php
    // Funcion de php para decirle que no nos muestre noticias(notice) y alertas(warning);
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    if($_GET["error"]=="si"){
        echo "<span style=\"color:#F00;font-size:2em;\">Verificar tus datos</span>";
    } ?>
    <!-- GET:Envia los datos a traves de la url del navegador
         POST:Envia de manera oculta para los usuario(encriptado)-->
    <form name="enviar-get_frm" id="formulario1" action="./envia_datos.php" method="GET" enctype="application/x-www-form-urlencoded">
        <label for="nombre">Ingresa Nombre:</label>
        <input type="text" name="nombre_txt" id="nombre"/>
        <br/>
        <label for="pass">Ingresa Password:</label>
        <input type="password" name="password_txt" id="pass"/>
        <br/>
        <input type="radio" name="sexo_rdo" value="M"/>
        Masculino&nbsp;
        <input type="radio" name="sexo_rdo" value="F"/>
        Femenino&nbsp;
        <br/>
        <input type="hidden" name="enviar_hdn" value="get">
        <input type="submit" name="enviar_btn" value="Enviar-GET">
        <input type="button" id="enviar-get" name="enviar_btn" value="Enviar-GET-BUTTON">
    </form>
    <br/>
    <form name="enviar-post_frm" id="formulario2" action="./envia_datos.php" method="POST" enctype="application/x-www-form-urlencoded">
        <label for="nombre">Ingresa Nombre:</label>
        <input type="text" name="nombre_txt" id="nombre"/>
        <br/>
        <label for="pass">Ingresa Password:</label>
        <input type="password" name="password_txt" id="pass"/>
        <br/>
        <input type="radio" name="sexo_rdo" value="M"/>
        Masculino&nbsp;
        <input type="radio" name="sexo_rdo" value="F"/>
        Femenino&nbsp;
        <br/>
        <input type="submit" name="enviar_btn" value="Enviar-POST">
        <input type="hidden" name="enviar_hdn" value="post">
        <input type="button" id="enviar-post" name="enviar_btn" value="Enviar-POST-BUTTON">
    </form>
</body>
</html>