<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        form{margin: 1em auto; text-align: center;}
        span{color:#F60;font-size:1.5rem;}
    </style>
    <script>
        const d = document;
        d.addEventListener('DOMContentLoaded',e=>{
                validarForm("#enviar_btn");
        });

        function validarForm(email){
            d.addEventListener("click",e=>{
                if(e.target.matches(email)){
                    validacion();
                }
            })
            const validacion =() =>{
                var verificar = true;
                var expRegEmail = /^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$/;
                var expRegNombre = /^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$/;
                const form = d.mail_frm;
                if(!form.de_txt.value){
                    console.log("El campo 'De' es requirido");
                    form.de_txt.focus()
                    verificar = false;
                }else if(!expRegEmail.exec(form.de_txt.value)){
                    console.log("El campo 'De' no es valido")
                    form.de_txt.focus();
                    verificar = false;
                }else if(!form.para_txt.value){
                    console.log("El campo 'Para' es requirido");
                    form.para_txt.focus()
                    verificar = false;
                }else if(!expRegEmail.exec(form.para_txt.value)){
                    console.log("El campo 'Para' no es valido")
                    form.para_txt.focus();
                    verificar = false;
                }else if(!form.asunto_txt.value){
                    console.log("El campo 'Asunto' es requirido");
                    form.asunto_txt.focus()
                    verificar = false;
                }else if(!form.mensaje_txa.value){
                    console.log("El campo 'Mensaje' es requirido");
                    form.mensaje_txa.focus()
                    verificar = false;
                }
                if(verificar){
                    d.mail_frm.submit();
                }
            }
        }

    </script>
</head>
<body>
    <!--Esta para cambiar el action : Ya no funciona -->
    <form action="http://bextlan.com/alumnos/recursos/curso-PHP/enviar_email.php" name="mail_frm" 
    method="post" enctype="application/x-www-form-urlencoded">
     <label for="">De:</label>
     <input type="text" name="de_txt"><br /><br />
     <label for="">Para:</label>
     <input type="text" name="para_txt"><br /><br />
     <label for="">Asunto:</label>  
     <input type="text" name="asunto_txt" required><br /><br />
     <label for="">Mensaje:</label>
     <textarea id="" cols="30" rows="10" name="mensaje_txa" 
     title="Tu comentario no debe exceder los 255 caracteres" placeholder="Escribe tu Comentarios" data-pattern="^.{1,255}$ " required></textarea>
     <br /><br />
     <input type="button" id="enviar_btn" name="enviar_btn" value="Enviar"><br />
     <?php
        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
        if(isset($_GET["respuesta"])){
            echo "<span>".$_GET["respuesta"]."</span>";
        }
     ?>
    </form>
</body>
</html>