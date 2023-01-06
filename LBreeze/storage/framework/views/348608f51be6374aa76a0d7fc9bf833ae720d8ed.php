

<?php $__env->startSection('content'); ?>
<div>
    <div class="flex justify-start">
        <div class="float-left text-2xl font-bold">
            <h2>Edit Data</h2>
        </div>
    </div>

    <form action="<?php echo e(route('sisw.update', $sisw->id)); ?>" method="POST" class="w-full max-w-sm py-2">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:flex md:items-center">
                            <div class="md:w-20">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Nama">
                                Nama:
                            </label>
                            </div>
                                <div class="md:w-2/3">
                                    <input id="Nama" type="text" name="Nama" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Masukkan Nama">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:flex md:items-center">
                            <div class="md:w-20">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="NIM">
                                    NIM:
                                </label>
                            </div>
                                <div class="md:w-2/3">
                                    <input id="NIM" type="text" name="NIM" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Masukkan NIM">
                                </div>
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:flex md:items-center">
                            <div class="md:w-20">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="Prodi">
                                    Program Studi:
                                </label>
                            </div>
                                <div class="md:w-2/3">
                                    <input id="Prodi" type="text" name="Prodi" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Masukkan Prodi">
                                </div>
                        </div>
                    </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:flex md:items-center">
                            <div class="md:w-20">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="IPK">
                                    IPK:
                                </label>
                            </div>
                                <div class="md:w-2/3">
                                    <input id="IPK" type="text" name="IPK" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Masukkan IPK">
                                </div>
                            </div>
                        </div>
                            <div class="text-center flex justify-center">
                            <button type="submit" class=" bg-blue-500 hover:bg-blue-700 transition-colors text-white font-bold py-2 px-4 rounded flex items-center">
                                Update
                            </button>
                            </div>
                </div>

                <?php if($errors->any()): ?>
                <div class="alert alert-danger px-2">
                    <strong>Whoops!</strong> Input gagal.<br><br>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
    </form>
                   
                    <div class="p-4">
                        <a href="<?php echo e(route('sisw.index')); ?>">
                                    <button class=" bg-green-500 hover:bg-green-700 transition-colors text-white font-bold py-2 px-4 rounded float-right">
                                        Kembali
                                    </button>
                        </a>
                    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('sisw.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\LATIHAN LARAVEL\LBreeze\resources\views/sisw/edit.blade.php ENDPATH**/ ?>