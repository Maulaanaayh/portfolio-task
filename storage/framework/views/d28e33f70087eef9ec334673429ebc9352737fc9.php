

<?php $__env->startSection('content'); ?>
	<div class="card mb-4" style="border: 1px solid #bbb;"> 
        <div style="color: white; font-weight: 500; background-color: #e74a3b;" class="card-header"> 
            <i class="fas fa-user me-1" style="margin-right: 5px;"></i> 
            Data Siswa 
        </div> 
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
         	<form enctype="multipart/form-data" action="<?php echo e(route('mastersiswa.update', $siswa->id)); ?>" method="POST"> 
			<?php echo csrf_field(); ?>
			<?php echo method_field('PUT'); ?>
				<div class="form-group"> 
					<label for="nama">Nama</label> 
					<input type="text" class="form-control" id="nama" name='nama' value="<?php echo e($siswa->nama); ?>"> 
				</div> 
				<div class="form-group"> 
					<label for="nisn">NISN</label> 
					<input type="text" class="form-control" id="nisn" name='nisn' value="<?php echo e($siswa->nisn); ?>"> 
				</div> 
				<div class="form-group"> 
					<label for="alamat">Alamat</label> 
					<input type="text" class="form-control" id="alamat" name='alamat' value="<?php echo e($siswa->alamat); ?>"> 
				</div> 
				<div class="form-group"> 
					<label for="jk">Jenis Kelamin</label> 
					<select class="form-select form-control" id="jk" name="jk"> 
						<option value="Laki-laki"<?php if($siswa->jk == 'Laki-laki'): ?> selected <?php endif; ?>>Laki-laki</option> 
						<option value="Perempuan"<?php if($siswa->jk == 'Perempuan'): ?> selected <?php endif; ?>>Perempuan</option> 
					</select> 
				</div> 
				<div class="form-group"> 
					<label for="foto">Foto Siswa</label><br> 
					<img src="/templete/img/<?php echo e($siswa->foto); ?>" width="300" class="img-thumbnail"> 
					<input type="file" class="form-control-file" id="foto" name='foto' value="<?php echo e($siswa->foto); ?>"> 
				</div> 
				<div class="form-group"> 
					<label for="about">About</label> 
					<textarea class="form-control" id="about" name='about'><?php echo e($siswa->about); ?></textarea> 
				</div> 
				<div class="form-group"> 
					<input type="submit" class="btn btn-success" value="Simpan">
					<a href="/mastersiswa" class="btn btn-danger">Batal</a> 
				</div> 
			</form> 
        </div> 
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas\12RPL2\Pemrograman Web\Laravel\tugas2\resources\views/admin-pages/siswa/EditSiswa.blade.php ENDPATH**/ ?>