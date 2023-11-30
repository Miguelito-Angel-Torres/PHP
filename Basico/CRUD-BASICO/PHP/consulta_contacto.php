<script>
    document.addEventListener('DOMContentLoaded',e =>{
        ConsultaContactos()
        
    });
    const ConsultaContactos = () =>{
        const $lista = document.querySelector("#consulta-lista");
        $lista.onchange = seleccionarConsulta;
        function seleccionarConsulta(){
            window.location = "?op=consultas&consulta_slc="+$lista.value;
        };
    };

</script>

<form action="" id="consulta-contacto" name="consulta_form"
method="get">
    <fieldset>
        <legend>Consulta de Contactos</legend>
        <label for="consulta-lista">Tipo de Consulta:</label>
        <select name="consulta_slc" id="consulta-lista" required>
            <option value="" <?php if($_GET["consulta_slc"] == ""){ echo " selected";} ?>>---</option>
            <option value="todos" <?php if($_GET["consulta_slc"] == "todos"){ echo " selected";} ?> >Todos los Contactos</option>
            <option value="email" <?php if($_GET["consulta_slc"] == "email"){ echo " selected";} ?> >Por email</option>
            <option value="inicial" <?php if($_GET["consulta_slc"] == "inicial"){ echo " selected";} ?>>Por inicial</option>
            <option value="sexo" <?php if($_GET["consulta_slc"] == "sexo"){ echo " selected";} ?>>Por sexo</option>
            <option value="pais" <?php if($_GET["consulta_slc"] == "pais"){ echo " selected";} ?>>Por Pais</option>
            <option value="buscador" <?php if($_GET["consulta_slc"] == "buscador"){ echo " selected";} ?>>Tipo Buscador</option>
        </select>
        <?php 
            switch($_GET["consulta_slc"]){
                case "todos":{
        
                    include ("./PHP/CONSULTAS/consulta_todo.php");
                    break;
                }
                case "email":{
                    include ("./PHP/CONSULTAS/consulta_email.php");
                    break;
                }
                case "inicial":{
                    include ("./PHP/CONSULTAS/consulta_inicial.php");
                    break;
                }
                case "sexo":{
                    include ("./PHP/CONSULTAS/consulta_sexo.php");
                    break;
                }
                case "pais":{
                    include ("./PHP/CONSULTAS/consulta_pais.php");
                    break;
                }
                case "buscador":{
                    include ("./PHP/CONSULTAS/consulta_buscador.php");
                    break;
                }
            }
        ?>
    </fieldset>
</form>