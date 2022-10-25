

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
					<form enctype="multipart/form-data" action="<?php echo e(route('mastersiswa.store')); ?>" method="POST">
						<?php echo csrf_field(); ?>
						<div class="form-group">
							<label for="nama">Nama Siswa</label>
							<input type="text" class="form-control" id="nama" name="nama" value="<?php echo e(old('nama')); ?>">
						</div>
						<div class="form-group">
							<label for="nisn">NISN</label>
							<input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo e(old('nisn')); ?>">
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo e(old('alamat')); ?>">
						</div>
						<div class="form-group">
							<label for="jk">Jenis Kelamin</label>
							<select class="form-select form-control" aria-label="Default select example" id="jk" name="jk">
								<option selected>Kelamin</option>
								<option value="laki-laki">Laki-laki</option>
								<option value="perempuan">Perempuan</option>
							</select>
						</div>
						<div class="form-group">
							<label for="foto">Foto Siswa</label>
							<input type="file" class="form-control-file" id="foto" name="foto" value="<?php echo e(old('foto')); ?>">
						</div>
						<div class="form-group">
							<label for="about">About</label>
							<textarea class="form-control" id="about" name="about" value="<?php echo e(old('about')); ?>"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-success"  value="Simpan">
							<a href="<?php echo e(route('mastersiswa.create')); ?>" class="btn btn-danger">Batal</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas\12RPL2\Pemrograman Web\Laravel\tugas2\resources\views/admin-pages/siswa/CreateSiswa.blade.php ENDPATH**/ ?>