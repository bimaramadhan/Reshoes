<?php $__env->startSection('content'); ?>
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
  </div>
  <div class="card-body">
    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div><br />
    <?php endif; ?>
      <form method="post" action="<?php echo e(route('shares.update', $share->id)); ?>">
        <?php echo method_field('PATCH'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="name">Nama:</label>
          <input type="text" class="form-control" name="nama" value=<?php echo e($share->nama); ?> />
        </div>
        <div class="form-group">
          <label for="price">Email:</label>
          <input type="text" class="form-control" name="email" value=<?php echo e($share->email); ?> />
        </div>
        <div class="form-group">
          <label for="no_telepon">No Telepon:</label>
          <input type="text" class="form-control" name="no_telepon" value=<?php echo e($share->no_telepon); ?> />
        </div>
        <div class="form-group">
          <label for="alamat">Alamat:</label>
          <input type="text" class="form-control" name="alamat" value=<?php echo e($share->alamat); ?> />
        </div>
        <div class="form-group">
          <label for="kategori">Kategori:</label>
          <input type="text" class="form-control" name="kategori" value=<?php echo e($share->kategori); ?> />
        </div>
        <div class="form-group">
          <label for="jumlah">Jumlah:</label>
          <input type="text" class="form-control" name="jumlah" value=<?php echo e($share->jumlah); ?> />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>