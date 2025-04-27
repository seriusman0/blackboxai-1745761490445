<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h2>Latest Payment Proof</h2>
    <p>Invoice Number: <?php echo e($payment->invoice_number); ?></p>
    <p>Payment Date: <?php echo e(\Carbon\Carbon::parse($payment->payment_date)->format('d M Y')); ?></p>
    <p>Amount: Rp <?php echo e(number_format($payment->amount, 0, ',', '.')); ?></p>

    <div class="mb-3">
        <embed src="<?php echo e(asset('storage/' . $payment->proof_file)); ?>" type="application/pdf" width="100%" height="600px" />
    </div>

    <a href="<?php echo e(route('payment-proof.detail', ['id' => $payment->id])); ?>" class="btn btn-info">View Details</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /project/sandbox/user-workspace/studycenter/resources/views/payment-proof/show.blade.php ENDPATH**/ ?>