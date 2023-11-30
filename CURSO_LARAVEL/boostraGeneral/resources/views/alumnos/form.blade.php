    <div class="col-md-6 text-start">
        {{ Form::label('Nombre','Nombre',['class'=>'fs-5 fw-bold']) }}
        {{ Form::text('name', $alumno->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''),'id'=>'Name','placeholder' => 'Escribe tu nombre',
        'title' =>'Nombre solo acepta letras y espacios en blanco','pattern' => '^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$','required']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="col-md-6 text-start">
        {{ Form::label('Apellido','Apellido',['class'=>'fs-5  fw-bold']) }}
        {{ Form::text('apellido', $alumno->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''),'id'=>'Apellido','placeholder' => 'Escribe tu apellido',
        'title' =>'Acepta solo acepta letras y espacios en blanco','pattern' => '^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$','required']) }}
        {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="col-md-6 text-start">
        {{ Form::label('Edad','Edad',['class'=>'fs-5  fw-bold'])}}
        {{ Form::number('edad', $alumno->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''),'id'=>'Edad','placeholder' => 'Escribe tu edad',
        'title' =>'La edad es requerido','required']) }}
        {!! $errors->first('edad', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="col-md-6 text-start">
        {{ Form::label('Dni','Dni',['class'=>'fs-5  fw-bold']) }}
        {{ Form::text('dni', $alumno->dni, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : ''),'id'=>'Dni','placeholder' => 'Escribe tu dni',
        'title' =>'Debes colocar 8 numeros','pattern' => '^([0-9]{8})$','required']) }}
        {!! $errors->first('dni','<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="col-12 text-start">
        {{ Form::label('Correo','Correo',['class'=>'fs-5  fw-bold']) }}
        {{ Form::email('correo', $alumno->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''),'id'=>'Correo','placeholder' => 'Escribe tu correo',
        'title' =>'Email Incorrecto','pattern' => '^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$','required']) }}
        {!! $errors->first('correo','<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="col-3 text-start">
        {{ Form::label('Telefono','Telefono',['class'=>'fs-5  fw-bold']) }}
        {{ Form::text('telefono', $alumno->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''),'id'=>'Telefono','placeholder' => 'Escribe tu telefono',
        'title' =>'Debe colocar 9 numeros','pattern' => '^([0-9]{9})$','required']) }}
        {!! $errors->first('telefono','<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="col-3 text-start">
        {{ Form::label('Bloque','Bloque',['class'=>'fs-5  fw-bold']) }}
            {{ Form::select('bloque_id',$bloque,$alumno->bloque_id, ['class' => 'form-control' . ($errors->has('bloque_id') ? ' is-invalid' : ''),
            'title' =>'El bloque es requerido','required']) }}
            {!! $errors->first('bloque_id','<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="col-6 text-start">
        {{ Form::label('Actitud','Actitud',['class'=>'fs-5  fw-bold']) }}
            {{ Form::select('actitud_id',$actitud,$alumno->actitud_id, ['class' => 'form-control' . ($errors->has('actitud_id') ? ' is-invalid' : ''),
            'title' =>'La actitud es requerido','required']) }}
            {!! $errors->first('actitud_id','<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div>
        {{ Form::hidden('semestre', $alumno->semestre, ['class' => 'form-control' ]) }}

        {{ Form::hidden('mes', $alumno->mes, ['class' => 'form-control']) }}


        


        {!! $errors->first('mes','<div class="invalid-feedback">:message</div>') !!}
        {{ Form::hidden('id', $alumno->id, ['class' => 'form-control']) }}
        <!--<input  type="submit" value="Enviar">-->
        <button type="submit" class="btnForm" >Enviar</button>
    </div>

<!--https://laravel.com/docs/4.2/html-->