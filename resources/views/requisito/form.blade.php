<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('convocatoria') }}
            {{ Form::text('convocatoria', $requisito->convocatoria, ['class' => 'form-control' . ($errors->has('convocatoria') ? ' is-invalid' : ''), 'placeholder' => 'Convocatoria']) }}
            {!! $errors->first('convocatoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre del Equipo') }}
            {{ Form::text('usuario',  Auth::user()->name,  ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : '')], $requisito->usuario) }}
            {!! $errors->first('usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('Subir video de requisito') }}<br>
            <a href="https://www.youtube.com/watch?v=gpJqaI61aB8" target="_blank">Tutorial para subir link privado</a>
            {{ Form::textarea('requisitos', $requisito->requisitos, ['class' => 'form-control' . ($errors->has('requisitos') ? ' is-invalid' : ''), 'placeholder' => 'Requisitos']) }}
            {!! $errors->first('requisitos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div> 