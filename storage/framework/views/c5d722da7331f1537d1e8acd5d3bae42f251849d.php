<div class="topnav">
    <link href="<?php echo e(url('css/homepage.css')); ?>" rel="stylesheet" type="text/css" />
      <a href="/homepage">Home</a>
      <a href="/home">Dashboard</a>
  </div>
  <br> <br>
<?php $__env->startSection('content'); ?>
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
      <?php echo e(session()->get('success')); ?>  
    </div><br />
  <?php endif; ?>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nama</td>
          <td>Email</td>
          <td>No Telepon</td>
          <td>Alamat</td>
          <td>Kategori</td>
          <td>Jumlah</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $shares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $share): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($share->id); ?></td>
            <td><?php echo e($share->nama); ?></td>
            <td><?php echo e($share->email); ?></td>
            <td><?php echo e($share->no_telepon); ?></td>
            <td><?php echo e($share->alamat); ?></td>
            <td><?php echo e($share->kategori); ?></td>
            <td><?php echo e($share->jumlah); ?></td>
            <td><a href="<?php echo e(route('shares.edit',$share->id)); ?>" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="<?php echo e(route('shares2.destroy', $share->id)); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>