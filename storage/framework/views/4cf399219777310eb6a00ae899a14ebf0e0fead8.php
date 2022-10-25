

<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow mb-4">
				<div class="card-body">
					<?php if(count($errors) > 0): ?>
						<div class="alert alert-danger">
							<ul>
								<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li><?php echo e($error); ?></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</div>
					<?php endif; ?>
					<h4>Nama Siswa : <?php echo e($siswa->nama); ?></h4>
					<hr>
					<form enctype="multipart/form-data" action="<?php echo e(route('masterproject.store')); ?>" method="POST">
						<?php echo csrf_field(); ?>
						<div class="form-group">
							<label for="nama">Nama Project</label>
							<input type="hidden" name="id_siswa" value="<?php echo e($siswa->id); ?>">
							<input type="text" class="form-control" id="nama" name="nama" value="<?php echo e(old('nama')); ?>">
						</div>
						<div class="form-group">
							<label for="nisn">Deskripsi</label>
							<input type="textarea" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo e(old('deskripsi')); ?>">
						</div>
						<div class="form-group">
							<label for="alamat">Tanggal</label>
							<input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo e(old('tanggal')); ?>">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-success"  value="Simpan">
							<a href="/masterproject" class="btn btn-danger">Batal</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas\12RPL2\Pemrograman Web\Laravel\tugas2\resources\views/admin-pages/project/CreateProject.blade.php ENDPATH**/ ?>