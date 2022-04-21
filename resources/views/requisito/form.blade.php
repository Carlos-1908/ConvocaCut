<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('convocatoria') }}
            {{ Form::text('convocatoria', $requisito->convocatoria, ['class' => 'form-control' . ($errors->has('convocatoria') ? ' is-invalid' : ''), 'placeholder' => 'Convocatoria']) }}
            {!! $errors->first('convocatoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario') }}
            {{ Form::text('usuario', $requisito->usuario, ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : ''), 'placeholder' => 'Usuario']) }}
            {!! $errors->first('usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('requisitos') }}
            {{ Form::text('requisitos', $requisito->requisitos, ['class' => 'form-control' . ($errors->has('requisitos') ? ' is-invalid' : ''), 'placeholder' => 'Requisitos']) }}
            {!! $errors->first('requisitos', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>