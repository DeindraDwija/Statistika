

<?php $__env->startSection('content'); ?>

    <?php if($message = Session::get('success')): ?>
    <div class="py-3">
        <div class="text-lg text-left font-semibold text-white bg-green-600 px-2">
            <p><?php echo e($message); ?></p>
        </div>
    </div>
    <?php endif; ?>


    
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white">
                Data Siswa
                <p class="mt-1 text-sm font-normal text-gray-500"></p>
                    </caption>
            <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">No</th>
                    <th scope="col" class="py-3 px-6">Nama</th>
                    <th scope="col" class="py-3 px-6">NIM</th>
                    <th scope="col" class="py-3 px-6">Program Studi</th>
                    <th scope="col" class="py-3 px-6">IPK</th>
                    <th scope="col" class="py-3 px-6">Action</th>
                </tr>
            </thead>
            <tbody>
                
                <?php $__currentLoopData = $sisw; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="bg-white border-b">
            <td class="text-center"><?php echo e(++$i); ?></td>
            <td><?php echo e($siswa->Nama); ?></td>
            <td class="text-center"><?php echo e($siswa->NIM); ?></td>
            <td class="text-center"><?php echo e($siswa->Prodi); ?></td>
            <td class="text-center"><?php echo e($siswa->IPK); ?></td>
            <td class="text-center">
                <div class="flex justify-center">
                    <div class="px-1">
                        <a href="<?php echo e(route('sisw.edit',$siswa->id)); ?>">
                        <button class=" bg-green-500 hover:bg-green-700 transition-colors text-white font-bold py-2 px-4 rounded">
                            Edit
                        </button>
                        </a>
                    </div>    
                
                    <div>
                        <form action="<?php echo e(route('sisw.destroy',$siswa->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>

                            <button type="submit" class=" bg-red-500 hover:bg-red-700 transition-colors text-white font-bold py-2 px-4 rounded" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    </table>

    <div class="flex justify-end p-3">
            <div class=" py-2 px-2">
                <a href="<?php echo e(route('sisw.create')); ?>">
                <button class=" bg-blue-600 hover:bg-blue-900 transition-colors text-white font-bold py-2 px-4 rounded">
                Input Data
            </button>
                </a>
            </div>

            <div class=" py-2 px-2">
            <a href="/siswa/export_excel" target="_blank">
                <button class="bg-red-600 hover:bg-red-900 transition-colors text-white font-bold py-2 px-4 rounded" onclick="return confirm('Export Data Siswa ?')">Export Data</button>
            </a>
            </div>

            <div>
            <div class="max-w-2xl mx-auto">


    <div class=" py-2 px-2">
        <a href="/siswa/import">
        <button class="bg-green-600 hover:bg-green-900 transition-colors text-white font-bold py-2 px-4 rounded" type="button" data-modal-toggle="default-modal">Import Data</button>
        </a>
    </div>


</div>


            </div>
    </div>
</div>

    <?php echo $sisw->links(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('sisw.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LBreeze\resources\views/sisw/index.blade.php ENDPATH**/ ?>