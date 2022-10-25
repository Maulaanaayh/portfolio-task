

<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-lg-4">
			<div class="card shadow mb-4">
				<div class="card-header">
					<i class="fas fa-id-card me-1" style="margin-right: 5px"></i>
					Profil Siswa
				</div>
				<div class="card-body text-center">
					<img src="<?php echo e(asset('/templete/img/'.$siswa->foto)); ?>" class="rounded-circle mt-3 mx-3 img-thumbnail" width="200" alt="">
					<h4 class="display-8"><?php echo e($siswa->nama); ?></h4>
				</div>
			</div>
			<div class="card shadow mb-4">
				<div class="card-header">
					<i class="fas fa-id-card me-1" style="margin-right: 5px"></i>
					Kontak Siswa
				</div>
				<div class="card-body">
					<?php $__currentLoopData = $kontaks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li> <?php echo e($item->jenis_kontak); ?> : <?php echo e($item->pivot->deskripsi); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
		</div>
		<div class="col-lg-8">
			<div class="card shadow mb-4">
				<div class="card-header"> 
					<i class="fas fa-id-card me-1" style="margin-right: 5px"></i>
					Tentang Siswa 
				</div>
				<div class="card-body text-left">
					<li>NISN   : <?php echo e($siswa->nisn); ?></li>
					<hr>
					<li>Alamat : <?php echo e($siswa->alamat); ?></li>
					<hr>
					<li>Gender : <?php echo e($siswa->jk); ?></li>
				</div>
			</div>   
			<div class="card shadow mb-4">
				<div class="card-header">
					<i class="fas fa-id-card me-1" style="margin-right: 5px"></i>
					Pesan Siswa
				</div>
				<div class="card-body">
					<blockquote class="text-center mb-0">	
						<p class="mb-0 blockquote" style="font-style: italic"><?php echo e($siswa->about); ?></p>
						<footer class="blockquote"><cite class="Source title" style="font-size: 14px">~<?php echo e($siswa->nama); ?>~</cite></footer>
					</blockquote>
				</div>
			</div>
		</div>
 	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas\12RPL2\Pemrograman Web\Laravel\tugas2\resources\views/admin-pages/siswa/Showsiswa.blade.php ENDPATH**/ ?>