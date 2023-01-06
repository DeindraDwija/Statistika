

<?php $__env->startSection('content'); ?>
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Pengguna</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="<?php echo e(route('peng.index')); ?>"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <?php echo e($peng->Nama); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tiket:</strong>
                <?php echo e($peng->StudentID); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('peng.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\Lara_Breeze\LBreeze_backup\LBreeze\resources\views/peng/show.blade.php ENDPATH**/ ?>