<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title>Funzi</title>
        <!-- Favicon -->
        <link href="<?php echo e(asset('argon')); ?>/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="<?php echo e(asset('argon')); ?>/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="<?php echo e(asset('argon')); ?>/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="<?php echo e(asset('argon')); ?>/css/toastr/toastr.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="<?php echo e(asset('argon')); ?>/css/argon.css?v=1.0.0" rel="stylesheet">
        <!-- Custom -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script src="https://cdn.tiny.cloud/1/l5w3nj1258r1wdwckq2lvmro94gcg4y6ivfkfapeci6tge24/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="<?php echo e(asset('argon')); ?>/vendor/jquery/dist/jquery.min.js"></script>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

    </head>
    <body class="<?php echo e($class ?? ''); ?>">
        <?php if(auth()->guard()->check()): ?>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
            <?php echo $__env->make('layouts.navbars.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        <div class="main-content">
            <?php echo $__env->make('layouts.navbars.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="<?php echo e(asset('argon')); ?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
        <script src="https://player.vimeo.com/api/player.js"></script>

        <?php echo $__env->yieldPushContent('js'); ?>

        <script type="text/javascript">
            $(".flatpickr").flatpickr({
              altInput: true,
              altFormat: "F j, Y",
              dateFormat: "Y-m-d",
            });

            $(".flatpickr-time").flatpickr({
              enableTime: true,
              noCalendar: true,
              dateFormat: "H:i",
            });

            $(".flatpickr-datetime").flatpickr({
              enableTime: true,
              dateFormat: "Y-m-d H:i",
            });

            ClassicEditor
                .create( document.querySelector( '#editor' ), {
                    toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                    heading: {
                        options: [
                            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                        ]
                    }
                } )
                .catch( error => {
                    console.log( error );
                } );
        </script>
<script>
$(document).ready(function(){
    $('.direct_format_yes').click(function(){
$('.direct_element').fadeIn();
});
$('.direct_format_no').click(function(){
$('.direct_element').fadeOut();
});
$('.eligible_country_yes').click(function(){
$('.country').fadeIn();
});
$('.eligible_country_no').click(function(){
$('.country').fadeOut();
});
$('#no_distributor').click(function(){

         $('.distributor_proof').fadeOut();
         $('.distributor_proof').prop("required", false);
     });
     $('#yes_distributor').click(function(){

         $('.distributor_proof').fadeIn();
         $('.distributor_proof').prop("required", true);
     });
     $('#yes_broadcaster').click(function(){

         $('.broadcaster_proof').fadeIn();
         $('.broadcaster_proof').prop("required", true);
     });
     $('#no_broadcaster').click(function(){
            // alert('hah');
         $('.broadcaster_proof').fadeOut();
         $('.broadcaster_proof').prop("required", false);
     });
     $('#yes_screening').click(function(){
            // alert('hah');
         $('.screening_proof').fadeIn();
         $('.screening_proof').prop("required", true);
     });
     $('#no_screening').click(function(){

         $('.screening_proof').fadeOut();
         $('.screening_proof').prop("required", false);
     });


setTimeout(function () {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 10000
                    };
                    <?php if(!is_null(Session::get('success'))): ?>
                    toastr.success('<?php echo Session::get('success'); ?>',
                        'Success');
                    <?php endif; ?>
                    <?php if(!is_null(Session::get('error'))): ?>
                    toastr.error('<?php echo Session::get('error'); ?>',
                        'Error !!');
                    <?php endif; ?>
                    <?php if(count($errors) > 0): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    toastr.error('<?php echo $error; ?>', 'Validation error !!');
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <?php if(!is_null(Session::get('info'))): ?>
                    toastr.info('<?php echo Session::get('info'); ?>',
                        'Info');
                    <?php endif; ?>
                }, 1300);
});
</script>

        <!-- Argon JS -->
        <script src="<?php echo e(asset('argon')); ?>/js/argon.js?v=1.0.0"></script>
        <script src="<?php echo e(asset('argon')); ?>/js/toastr/toastr.min.js"></script>
    </body>
</html>
<?php /**PATH D:\Laravel Projects\funzi\resources\views/layouts/app.blade.php ENDPATH**/ ?>