<div class="col-md-6 text-start">
    <label class="fs-5 fw-bold " for="name">Nombre</label>
    <input class="form-control {{ ($errors->has('name') ? '  is-invalid' : '' )}}"  type="text" id="name" name="name" placeholder="Escribe tu nombre"
    title="Nombre solo acepta letras y espacios en blanco" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" required>
    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="col-md-6 text-start">
    <label class="fs-5  fw-bold " for="apellido">Apellido</label>
    <input  class="form-control {{ ($errors->has('apellido') ? '  is-invalid' : '' )}}" type="text" id="apellido" name="apellido" placeholder="Escribe tu apellido" 
    title="Acepta solo acepta letras y espacios en blanco" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" required>
    {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="col-md-6 text-start">
    <label class="fs-5  fw-bold " for="edad">Edad</label>
    <input class="form-control {{ ($errors->has('edad') ? '  is-invalid' : '' )}}" type="number" id="edad" name="edad" placeholder="Escribe tu edad" 
    title="La edad es requerido"  required>
    {!! $errors->first('edad', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="col-md-6 text-start">
    <label class="fs-5  fw-bold " for="dni">Dni</label>
    <input class="form-control {{ ($errors->has('dni') ? '  is-invalid' : '' )}}" type="text" id="dni" name="dni" placeholder="Escribe tu dni" 
    title="Debes colocar 8 numeros" pattern="^([0-9]{8})$" required>
    {!! $errors->first('dni', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="col-12 text-start">
    <label class="fs-5  fw-bold " for="correo">Correo</label>
    <input class="form-control {{ ($errors->has('correo') ? '  is-invalid' : '' )}}" type="" id="correo" name="correo" placeholder="Escribe tu correo" 
    title="Email Incorrecto" pattern="^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$" required>
    {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="col-3 text-start">
    <label class="fs-5  fw-bold " for="telefono">Telefono</label>
    <input class="form-control {{ ($errors->has('telefono') ? '  is-invalid' : '' )}}" type="text" id="telefono" name="telefono" placeholder="Escribe tu telefono" 
    title="Debe colocar 9 numeros " pattern="^([0-9]{9})$" required>
    {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="col-3 text-start">
    <label class="fs-5  fw-bold " for="bloque">Bloque</label>
    <select class="form-control {{ ($errors->has('bloque_id') ? '  is-invalid' : '' )}}" name="bloque_id" id="bloque">
        
    </select>
    {!! $errors->first('bloque_id', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="col-6 text-start">
    <label class="fs-5  fw-bold " for="actitud">Actitud</label>
    <select class="form-control {{ ($errors->has('actitud_id') ? '  is-invalid' : '' )}}" name="actitud_id" id="actitud">
    </select>
    {!! $errors->first('actitud_id', '<div class="invalid-feedback">:message</div>') !!}
</div>
<!--semestre y mes de ahi poner hidden-->
<!--<div class="col-6 text-start">
    <label class="fs-5  fw-bold " for="semestre">Semestre</label>
    <input class="form-control" type="text" id="semestre" name="semestre"  placeholder="Escribe tu Semestre" 
    title="El semestre es requerido" required>

</div>


<div class="col-6 text-start">
    <label class="fs-5  fw-bold " for="mes">Mes</label>
    <input class="form-control" type="text" id="mes" name="mes"  placeholder="Escribe tu Mes" 
    title="El mes es requerido" required>
</div> -->
<div>
    <input type="hidden" name ="semestre"  id="semestre" class="form-control">
    <input type="hidden" name ="mes"  id="mes" class="form-control">
    <input type="hidden" name="id">
    <input class="submitformA"  type="submit" value="Enviar">
    <!--<button type="submit" class="btnForm" >Enviar</button>-->
</div>
