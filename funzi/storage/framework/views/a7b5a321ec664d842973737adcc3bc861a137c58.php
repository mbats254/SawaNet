<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('users.partials.header', ['title' => __('Add Parent Details')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0"><?php echo e(__('Parent Student Management')); ?></h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                            <form method='POST' action='<?php echo e(route('post.parents')); ?>'>
                                    <?php echo csrf_field(); ?>
                                    <?php if(!isset($student_details)): ?>
                                    <div class="form-group<?php echo e($errors->has('application_form') ? ' has-danger' : ''); ?>">
                                            <label class="form-control-label"><?php echo e(__('Student Email')); ?></label>
                                        <select name="student_id" class="form-control">
                                                <?php $__currentLoopData = $all_students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student => $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo $values->id; ?>"><?php echo $values->name; ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                            </div>
                                            <div class="form-group<?php echo e($errors->has('application_form') ? ' has-danger' : ''); ?>">
                                                <label class="form-control-label"><?php echo e(__('Student Email')); ?></label>
                                <label class="form-control-label"><?php echo e(__('Class')); ?></label>
                                <select name="class" class="form-control">
                                        <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class => $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo $values->id; ?>"><?php echo $values->name; ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

                                <?php else: ?>
                                <div class="form-group<?php echo e($errors->has('application_form') ? ' has-danger' : ''); ?>">
                            <label class="form-control-label"><?php echo e(__('Student Name')); ?></label>
                        <input type="text" name="name"  class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Student Name')); ?>" value="<?php echo e($student_details->name); ?>" readonly autofocus>
                        </div>
                        <div class="form-group<?php echo e($errors->has('application_form') ? ' has-danger' : ''); ?>">
                                <label class="form-control-label"><?php echo e(__('Student Email')); ?></label>
                                <input type="email" name="email"  class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" placeholder="Parent Email" value="<?php echo e($student_details->email); ?>" readonly autofocus>
                            </div>
                            <div class="form-group<?php echo e($errors->has('application_form') ? ' has-danger' : ''); ?>">
                                <label class="form-control-label"><?php echo e(__('Class')); ?></label>
                                <input type="text" name="class" placeholder="Student Class" value="<?php echo $class_details->name; ?>" readonly class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" autofocus>
                            </div>
                            <input type="hidden" name="student_id" value="<?php echo $student_details->id; ?>">
                            <?php endif; ?>
                            <div class="form-group<?php echo e($errors->has('application_form') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label"><?php echo e(__('Name')); ?></label>
                                <input type="text" name="name"  class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" placeholder="Parent Name" value="" required autofocus>
                                </div>
                                <div class="form-group<?php echo e($errors->has('application_form') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label"><?php echo e(__('Email')); ?></label>
                                        <input type="email" name="email"  class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" placeholder="Parent Email"  required autofocus>
                                    </div>
                                    <div class="form-group<?php echo e($errors->has('application_form') ? ' has-danger' : ''); ?>">
                                            <label class="form-control-label"><?php echo e(__('Mobile Number')); ?></label>
                                            <input type="text" name="phone_number"  class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" placeholder="Parent Number" maxlength='10' required autofocus>
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







<?php echo $__env->make('layouts.app', ['title' => __('User Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Projects\funzi\resources\views/student/add_parent.blade.php ENDPATH**/ ?>