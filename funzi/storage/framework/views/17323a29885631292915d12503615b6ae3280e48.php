<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('users.partials.header', ['title' => __('Add New Student')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0"><?php echo e(__('Student Management')); ?></h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method='POST' action='<?php echo e(route('post.student')); ?>'>
                            <?php echo csrf_field(); ?>
                            <div class="form-group<?php echo e($errors->has('application_form') ? ' has-danger' : ''); ?>">
                            <label class="form-control-label"><?php echo e(__('School Name')); ?></label>
                            <input type="text" name="name"  class="form-control form-control-alternative<?php echo e($errors->has('grant_name') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Student Name')); ?>" value="" required autofocus>
                            </div>
                        <div class="form-group<?php echo e($errors->has('application_form') ? ' has-danger' : ''); ?>">
                            <label class="form-control-label"><?php echo e(__('Student Name')); ?></label>
                        <input type="text" name="name"  class="form-control form-control-alternative<?php echo e($errors->has('grant_name') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Student Name')); ?>" value="<?php echo e(old('name')); ?>" required autofocus>
                        </div>
                        <div class="form-group<?php echo e($errors->has('application_form') ? ' has-danger' : ''); ?>">
                            <label class="form-control-label"><?php echo e(__('Student Email')); ?></label>
                        <input type="email" name="email"  class="form-control form-control-alternative<?php echo e($errors->has('grant_name') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Student Email')); ?>" value="<?php echo e(old('email')); ?>" required autofocus>
                        </div>
                        <div class="form-group<?php echo e($errors->has('application_form') ? ' has-danger' : ''); ?>">
                        <label>Class</label>
                        <select name="class" class="form-control">
                                <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class => $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo $values->id; ?>"><?php echo $values->name; ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
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





<?php echo $__env->make('layouts.app', ['title' => __('User Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Projects\funzi\resources\views/student/create_student.blade.php ENDPATH**/ ?>