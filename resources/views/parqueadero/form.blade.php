<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('usuario') }}
            {{ Form::text('usuario', $parqueadero->usuario, ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : ''), 'placeholder' => 'Usuario']) }}
            {!! $errors->first('usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $parqueadero->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('placa') }}
            {{ Form::text('placa', $parqueadero->placa, ['class' => 'form-control' . ($errors->has('placa') ? ' is-invalid' : ''), 'placeholder' => 'Placa']) }}
            {!! $errors->first('placa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('entrada') }}
            {{ Form::text('entrada', $parqueadero->entrada, ['class' => 'form-control' . ($errors->has('entrada') ? ' is-invalid' : ''), 'placeholder' => 'Entrada']) }}
            {!! $errors->first('entrada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('salida') }}
            {{ Form::text('salida', $parqueadero->salida, ['class' => 'form-control' . ($errors->has('salida') ? ' is-invalid' : ''), 'placeholder' => 'Salida']) }}
            {!! $errors->first('salida', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
