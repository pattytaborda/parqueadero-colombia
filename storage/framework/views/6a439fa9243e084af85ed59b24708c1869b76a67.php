<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <?php echo e(Form::label('usuario')); ?>

            <?php echo e(Form::text('usuario', $parqueadero->usuario, ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : ''), 'placeholder' => 'Usuario'])); ?>

            <?php echo $errors->first('usuario', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('marca')); ?>

            <?php echo e(Form::text('marca', $parqueadero->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca'])); ?>

            <?php echo $errors->first('marca', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('placa')); ?>

            <?php echo e(Form::text('placa', $parqueadero->placa, ['class' => 'form-control' . ($errors->has('placa') ? ' is-invalid' : ''), 'placeholder' => 'Placa'])); ?>

            <?php echo $errors->first('placa', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('entrada')); ?>

            <?php echo e(Form::text('entrada', $parqueadero->entrada, ['class' => 'form-control' . ($errors->has('entrada') ? ' is-invalid' : ''), 'placeholder' => 'Entrada'])); ?>

            <?php echo $errors->first('entrada', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('salida')); ?>

            <?php echo e(Form::text('salida', $parqueadero->salida, ['class' => 'form-control' . ($errors->has('salida') ? ' is-invalid' : ''), 'placeholder' => 'Salida'])); ?>

            <?php echo $errors->first('salida', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\laravel\parqueadero-colombia\resources\views/parqueadero/form.blade.php ENDPATH**/ ?>