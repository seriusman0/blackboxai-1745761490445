<section class="mb-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="bg-white p-4 rounded-3 shadow-sm">
        <h5 class="fw-bold text-center mb-4">Search Payment Proof</h5>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php if(isset($payment)): ?>
          <div class="mb-4">
            <h6 class="fw-bold">Latest Payment Proof</h6>
            <p>Invoice Number: <?php echo e($payment->invoice_number); ?></p>
            <p>Payment Date: <?php echo e(\Carbon\Carbon::parse($payment->payment_date)->format('d M Y')); ?></p>
            <p>Amount: Rp <?php echo e(number_format($payment->amount, 0, ',', '.')); ?></p>
            <div class="mb-3">
              <embed src="<?php echo e(asset('storage/' . $payment->proof_file)); ?>" type="application/pdf" width="100%" height="600px" />
            </div>
            <a href="<?php echo e(route('payment-proof.detail', ['id' => $payment->id])); ?>" class="btn btn-success">View Details</a>
          </div>
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('payment-proof.fetch')); ?>" class="mt-4">
          <?php echo csrf_field(); ?>
          <div class="mb-4">
            <label for="nis" class="form-label fw-medium">NIS (10-digit Student ID)</label>
            <input type="text" class="form-control form-control-lg" id="nis" name="nis" maxlength="10" pattern="\d{10}" required value="<?php echo e(old('nis')); ?>" placeholder="Enter your 10-digit Student ID">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-success btn-lg px-5">Search</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php /**PATH /project/sandbox/user-workspace/studycenter/resources/views/partials/payment-proof-form.blade.php ENDPATH**/ ?>