

<?php $__env->startSection('content'); ?>
	<?php if(session()->has('success')): ?>
		<div class="alert alert-success alert-block">
			<?php echo e(session()->get('success')); ?>

			<buttton type="button" class="close" data-dismiss="alert">x</buttton>
		</div>
	<?php elseif(session()->has('successDelete')): ?>
		<div class="alert alert-danger alert-block">
			<?php echo e(session()->get('successDelete')); ?>

			<buttton type="button" class="close" data-dismiss="alert">x</buttton>
		</div>
	<?php endif; ?>
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<a href="<?php echo e(route('mastersiswa.create')); ?>" class="btn btn-success">Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Nama</th>
								<th scope="col">NISN</th>
								<th scope="col">Alamat</th>
								<th scope="col">ACTION</th>
							</tr>
						</thead>
						<tbody class="table-group-divider">
							<?php $__currentLoopData = $data_siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<th scope="row"><?php echo e(++$i); ?></th>
									<td><?php echo e($item -> nama); ?></td>
									<td><?php echo e($item -> nisn); ?></td>
									<td><?php echo e($item -> alamat); ?></td>
									<td>
										<a href="<?php echo e(route('mastersiswa.show', $item-> id)); ?>" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
										<a href="<?php echo e(route('mastersiswa.edit', $item-> id)); ?>" class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
										<a href="<?php echo e(route('mastersiswa.hapus', $item-> id)); ?>" class="btn btn-sm btn-danger btn-circle"><i class="fas fa-trash"></i></a>
									</td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas\12RPL2\Pemrograman Web\Laravel\tugas2\resources\views/admin-pages/master-siswa.blade.php ENDPATH**/ ?>