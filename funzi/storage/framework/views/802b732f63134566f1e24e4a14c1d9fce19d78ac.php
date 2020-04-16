<html>
<head>
    <title>Create Class</title>
</head>
<body>



</body>
</html>












<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('users.partials.header', ['title' => __('Add Class` Details')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0"><?php echo e(__('Add Class')); ?></h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                            <form method='POST' action='<?php echo e(route('post.class')); ?>'>
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group<?php echo e($errors->has('application_form') ? ' has-danger' : ''); ?>">
                                            <label class="form-control-label"><?php echo e(__('Student Email')); ?></label>
                                        <select name="school" class="form-control">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                </select>
                            </div>
                                <label>Stream</label>

                                <div class="form-group<?php echo e($errors->has('application_form') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label"><?php echo e(__('School Name')); ?></label>
                                        <input type="text" name="stream" placeholder="stream e.g x,y"  class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('School Details')); ?>" readonly autofocus>
                                    </div>
                                <input type="submit" class="btn btn-success mt-4" value="Submit">

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








<?php echo $__env->make('layouts.app', ['title' => __('User Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Projects\funzi\resources\views/class/create_class.blade.php ENDPATH**/ ?>