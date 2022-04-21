<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $convocatoria->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $convocatoria->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('departamento') }}
            {{ Form::text('departamento', $convocatoria->departamento, ['class' => 'form-control' . ($errors->has('departamento') ? ' is-invalid' : ''), 'placeholder' => 'Departamento']) }}
            {!! $errors->first('departamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email_Dudas') }}
            {{ Form::text('email_Dudas', $convocatoria->email_Dudas, ['class' => 'form-control' . ($errors->has('email_Dudas') ? ' is-invalid' : ''), 'placeholder' => 'Email Dudas']) }}
            {!! $errors->first('email_Dudas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono_Dudas') }}
            {{ Form::text('telefono_Dudas', $convocatoria->telefono_Dudas, ['class' => 'form-control' . ($errors->has('telefono_Dudas') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Dudas']) }}
            {!! $errors->first('telefono_Dudas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('requisitos') }}
            {{ Form::text('requisitos', $convocatoria->requisitos, ['class' => 'form-control' . ($errors->has('requisitos') ? ' is-invalid' : ''), 'placeholder' => 'Requisitos']) }}
            {!! $errors->first('requisitos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_de_Registro') }}
            {{ Form::text('fecha_de_Registro', $convocatoria->fecha_de_Registro, ['class' => 'form-control' . ($errors->has('fecha_de_Registro') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Registro']) }}
            {!! $errors->first('fecha_de_Registro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_de_Revision') }}
            {{ Form::text('fecha_de_Revision', $convocatoria->fecha_de_Revision, ['class' => 'form-control' . ($errors->has('fecha_de_Revision') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Revision']) }}
            {!! $errors->first('fecha_de_Revision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_de_Emision_de_Constancias') }}
            {{ Form::text('fecha_de_Emision_de_Constancias', $convocatoria->fecha_de_Emision_de_Constancias, ['class' => 'form-control' . ($errors->has('fecha_de_Emision_de_Constancias') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Emision De Constancias']) }}
            {!! $errors->first('fecha_de_Emision_de_Constancias', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_de_Envio_de_Proyecto') }}
            {{ Form::text('fecha_de_Envio_de_Proyecto', $convocatoria->fecha_de_Envio_de_Proyecto, ['class' => 'form-control' . ($errors->has('fecha_de_Envio_de_Proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Envio De Proyecto']) }}
            {!! $errors->first('fecha_de_Envio_de_Proyecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_de_Publicacion_de_Resutados') }}
            {{ Form::text('fecha_de_Publicacion_de_Resutados', $convocatoria->fecha_de_Publicacion_de_Resutados, ['class' => 'form-control' . ($errors->has('fecha_de_Publicacion_de_Resutados') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Publicacion De Resutados']) }}
            {!! $errors->first('fecha_de_Publicacion_de_Resutados', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>