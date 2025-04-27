<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h2>Payment Proof Details</h2>
    <p><strong>Invoice Number:</strong> <?php echo e($payment->invoice_number); ?></p>
    <p><strong>Student ID (NIS):</strong> <?php echo e($payment->student_id); ?></p>
    <p><strong>Payment Date:</strong> <?php echo e(\Carbon\Carbon::parse($payment->payment_date)->format('d M Y')); ?></p>
    <p><strong>Amount:</strong> Rp <?php echo e(number_format($payment->amount, 0, ',', '.')); ?></p>
    <p><strong>Status:</strong> <?php echo e(ucfirst($payment->status)); ?></p>
    <p><strong>Notes:</strong> <?php echo e($payment->notes); ?></p>

    <div class="mb-3">
        <embed src="<?php echo e(asset('storage/' . $payment->proof_file)); ?>" type="application/pdf" width="100%" height="600px" />
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /project/sandbox/user-workspace/studycenter/resources/views/payment-proof/detail.blade.php ENDPATH**/ ?>