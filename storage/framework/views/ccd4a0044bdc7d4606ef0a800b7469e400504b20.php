<?php $__env->startSection('template_title'); ?>
    Parqueadero
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Parqueadero')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('parqueaderos.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Create New')); ?>

                                </a>
                              </div>
                        </div>
                    </div>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Id</th>

										<th>Usuario</th>
										<th>Marca del vehiculo</th>
										<th>Placa del vehiculo</th>
										<th>Entrada</th>
										<th>Salida</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $parqueaderos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parqueadero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>

											<td><?php echo e($parqueadero->usuario); ?></td>
											<td><?php echo e($parqueadero->marca); ?></td>
											<td><?php echo e($parqueadero->placa); ?></td>
											<td><?php echo e($parqueadero->entrada); ?></td>
											<td><?php echo e($parqueadero->salida); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('parqueaderos.destroy',$parqueadero->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('parqueaderos.show',$parqueadero->id)); ?>"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('parqueaderos.edit',$parqueadero->id)); ?>"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $parqueaderos->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\parqueadero-colombia\resources\views/parqueadero/index.blade.php ENDPATH**/ ?>