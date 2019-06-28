<?php $__env->startSection('content'); ?>
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add New Order
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
      <form method="post" action="<?php echo e(route('shares.store')); ?>">
          <div class="form-group">
              <?php echo csrf_field(); ?>
              <label for="name">Nama:</label>
              <input type="text" class="form-control" name="nama"/>
          </div>
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="no_telepon">No Telepon:</label>
              <input type="text" class="form-control" name="no_telepon"/>
          </div>
          <div class="form-group">
              <label for="alamat">Alamat:</label>
              <input type="text" class="form-control" name="alamat"/>
          </div>
          <div class="form-group">
              <label for="kategori">Kategori:</label>
              <select class="form-control" name="kategori"> 
                <option value="Cleaning">Cleaning</option>
                <option value="Repaint">Repaint</option>
                <option value="Repair">Repair</option>
                <option value="Custom Painting">Custom Painting</option>
              </select>
          </div>
          <div class="form-group">
              <label for="jumlah">Jumlah:</label>
              <input type="text" class="form-control" name="jumlah"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>