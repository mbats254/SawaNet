<html>
<head>
    <title>Set Credentials</title>
</head>
<body>



</body>
</html>





<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('users.partials.header', ['title' => __('Set Credentials')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0"><?php echo e(__('User Management')); ?></h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">



                                <form method='POST' action='<?php echo e(route('post.credentials')); ?>'>
                                    <?php echo csrf_field(); ?>


                                    <div class="form-group<?php echo e($errors->has('application_form') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label"><?php echo e(__('User Email')); ?></label>
                                    <input type="email" name="name" value="<?php echo $user->email; ?>" class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" readonly autofocus>
                                    </div>

                                    <input type="hidden" name="uniqid" value="<?php echo $user->uniqid; ?>">

                                <div class="form-group<?php echo e($errors->has('application_form') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label"><?php echo e(__('Password')); ?></label>
                                <input type="password" name="password" placeholder="password" class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" required autofocus>
                                </div>

                                <div class="form-group<?php echo e($errors->has('application_form') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label"><?php echo e(__('Confirm Password')); ?></label>
                                <input type="password" name="confirm_password" placeholder="confirmation password" class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" required autofocus>
                                </div>

                                <input type="submit" value="Submit">

                                </form>
                             </div>
                </div>
            </div>
        </div>
<script type="text/javascript">
$(document).ready(function(){
   $('#image').on("change", function(){
     $('.should_appear').fadeIn();
   });
});

</script>
        <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>







<?php echo $__env->make('layouts.app', ['title' => __('User Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Projects\funzi\resources\views/user/set_credentials.blade.php ENDPATH**/ ?>