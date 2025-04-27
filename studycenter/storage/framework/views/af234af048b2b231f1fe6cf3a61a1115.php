<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h2>Search Payment Proof</h2>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form method="POST" action="<?php echo e(route('payment-proof.fetch')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="nis" class="form-label">NIS (10-digit Student ID)</label>
            <input type="text" class="form-control" id="nis" name="nis" maxlength="10" pattern="\d{10}" required value="<?php echo e(old('nis')); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /project/sandbox/user-workspace/studycenter/resources/views/payment-proof/form.blade.php ENDPATH**/ ?>