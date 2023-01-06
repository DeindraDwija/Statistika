

<?php $__env->startSection('content'); ?>
<div>
    <div>
        <h3 class="text-gray-900 text-xl lg:text-2xl font-semibold dark:text-white">
            Import Data Excel ke Database
        </h3>
    </div>
    
    <div>
        <form method="post" action="/siswa/import_excel" enctype="multipart/form-data">
            <div class="">
                <div class="modal-body">
                    <?php echo e(csrf_field()); ?>

                    <div class="px-2">
                        <div>
                            <label>Pilih file excel</label>
                        </div>
                        <div class="form-group" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <input type="file" name="file" required="required">
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center flex justify-center">
                <button type="submit" class=" bg-blue-500 hover:bg-blue-700 transition-colors text-white font-bold py-2 px-4 rounded flex items-center" onclick="return confirm('Import Data?')">
                    Import
                </button>
            </div>

           
        </form>
        <div class="p-4">
                <a href="<?php echo e(route('sisw.index')); ?>">
                    <button class=" bg-green-500 hover:bg-green-700 transition-colors text-white font-bold py-2 px-4 rounded float-right">
                        Kembali
                    </button>
                </a>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('sisw.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\LATIHAN LARAVEL\LBreeze\resources\views/sisw/import.blade.php ENDPATH**/ ?>