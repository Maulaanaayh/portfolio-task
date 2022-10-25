

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
	<?php elseif(session()->has('successUpdate')): ?>
	<div class="alert alert-success alert-block">
		<?php echo e(session()->get('successUpdate')); ?>

		<buttton type="button" class="close" data-dismiss="alert">x</buttton>
	</div>
	<?php endif; ?>
	<div class="row">
		<div class="col-5">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Siswa</h6>
				</div>
				<div class="card-body">
					<table class="table">
						<thead class="table-dark">
							<tr>
								<th scope="col">NISN</th>
								<th scope="col">Nama</th>
								<th scope="col" class="text-right">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($item->nisn); ?></td>
								<td><?php echo e($item->nama); ?></td>
								<td class="text-right">
									<a class="btn btn-sm btn-primary btn-circle" onclick="show( <?php echo e($item->id); ?> )" ><i class="fas fa-folder"></i></a>
									<a href="<?php echo e(route('masterproject.tambah', $item->id)); ?>" class="btn btn-sm btn-success btn-circle"><i class="fas fa-plus"></i>
									</a>
								</td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
					<div class="card-footer">
					<?php echo e($data->links()); ?>

				</div>
				</div>
				
			</div>
		</div>
		<div class="col-7">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Project</h6>
				</div>
				<div class="card-body" id="project">
					<h6 class="text-center">Pilih siswa terlebih dahulu</h6>
				</div>
			</div>
		</div>
	</div>

	<script>
		function show(id){
			$.get('/masterproject/'+id, function(data){
				$('#project').html(data);
			})
		}
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas\12RPL2\Pemrograman Web\Laravel\tugas2\resources\views/admin-pages/master-project.blade.php ENDPATH**/ ?>