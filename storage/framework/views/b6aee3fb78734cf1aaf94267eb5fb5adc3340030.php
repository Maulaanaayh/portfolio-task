<?php if($project->isEmpty()): ?>
    <h6>Siswa belum memiliki project</h6>
<?php else: ?>
<?php $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card">
        <div class="card-header bg-dark">
            <strong style="font-style: italic" class="text-white"><?php echo e($item->nama); ?></strong>
        </div>
        <div class="card-body">
            <strong>Tanggal Project :</strong>
            <p><?php echo e($item->tanggal); ?></p>
            <strong>Deskripsi Project :</strong>
            <p><?php echo e($item->deskripsi); ?></p>
        </div>
       <div class="card-footer bg-grey d-flex">
            <form action="<?php echo e(route('masterproject.edit', $item->id)); ?>" method="GET">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-sm btn-warning btn-circle"><i class="fas fa-pen"></i></button>
            </form>
            <form action="<?php echo e(route('masterproject.destroy', $item->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-sm btn-danger btn-circle"><i class="fas fa-trash"></i></button>
            </form>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH D:\tugas\12RPL2\Pemrograman Web\Laravel\tugas2\resources\views/admin-pages/project/ShowProject.blade.php ENDPATH**/ ?>