<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <!--<link rel="stylesheet" href="css/icon-font.css">-->

        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        <link href="<?php echo e(asset('argon')); ?>/css/toastr/toastr.min.css" rel="stylesheet">
        <script src="<?php echo e(asset('argon')); ?>/vendor/jquery/dist/jquery.min.js"></script>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

        <title>Funzi | Elimu Ulipo</title>
    </head>

    <body>
       <!--  <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>01</span>About Funzi</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>02</span>The benfits</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>03</span>Packages</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>04</span>Stories</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>05</span>Start Trial</a></li>
                    </ul>
            </nav>
        </div> -->

        <header class="header">
            <div class="header__logo-box">
                <img src="img/Funzi-logo.svg" alt="Logo" class="header__logo">
            </div>

            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">Funzi</span>
                    <span class="heading-primary--sub">Elimu Ulipo</span>
                </h1>

                <a href="#section-tours" class="btn btn--white btn--animated">Learn More</a>
            </div>
        </header>

        <main>
            <section class="section-about">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        Exciting New Way To Learn For Students
                    </h2>
                </div>

                <div class="row">
                    <div class="col-1-of-2">
                        <h3 class="heading-tertiary u-margin-bottom-small">Done with the old ways of doing things</h3>
                        <p class="paragraph">
                            Funzi is a revolutionary new way for students, teachers and parents to collaborate in a way never seen before in our current
                            curriculum. We think its time to rethink how we learn and teach.
                        </p>

                        <h3 class="heading-tertiary u-margin-bottom-small">Learn in a way you've never before</h3>
                        <p class="paragraph">
                          With funzi students will have a ready working portal to learn, teachers will toss red pens for a mouse click and administrations
                            will have increased efficiency in the management of their campuses.
                        </p>

                        <a href="#" class="btn-text">Learn more &rarr;</a>
                    </div>
                    <div class="col-1-of-2">
                        <div class="composition">

                            <img srcset="img/blackboard.jpg 300w, img/nat-1-large.jpg 1000w"
                                 sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                 alt="Photo 1"
                                 class="composition__photo composition__photo--p1"
                                 src="img/blackboard.jpg">

                            <img srcset="img/laptop.jpg 300w, img/nat-2-large.jpg 1000w"
                                 sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                 alt="Photo 2"
                                 class="composition__photo composition__photo--p2"
                                 src="img/laptop.jpg">

                            <img srcset="img/pencil.jpg 300w, img/nat-3-large.jpg 1000w"
                                 sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                 alt="Photo 3"
                                 class="composition__photo composition__photo--p3"
                                 src="img/pencil.jpg">

                            <!--
                            <img src="img/nat-1-large.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
                            <img src="img/nat-2-large.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">
                            <img src="img/nat-3-large.jpg" alt="Photo 3" class="composition__photo composition__photo--p3">
                            -->
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-features">

                <div class="row">
                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-world"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">The Globe in Hand</h3>
                            <p class="feature-box__text">
                                Administrators, students, teachers and parents will finally have everything in one digital portal.
                            </p>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-compass"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Guided Focus</h3>
                            <p class="feature-box__text">
                                With teacher support features students will be able to be guided remotely like never before.
                            </p>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-map"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">More In Less</h3>
                             <p class="feature-box__text">
                                 No carrying around booklets, reduced number of textbooks but even more content.
                            </p>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-heart"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Wellness Programs</h3>
                            <p class="feature-box__text">
                                Wellness programs curated for the age group will come standard in portal. A healthy mind is a must.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

          <!--   <section class="section-tours" id="section-tours">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        Portal Packages
                    </h2>
                </div>

                <div class="row">
                    <div class="col-1-of-3">
                       <div class="card">
                           <div class="card__side card__side--front">
                                <div class="card__picture card__picture--1">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">Mwanafunzi Wa Kisasa</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum</li>
                                    </ul>
                                </div>
                           </div>
                           <div class="card__side card__side--back card__side--back-1">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">Ksh29,700</p>
                                    </div>
                                    <a href="#popup" class="btn btn--white">Contact Us</a>
                                </div>
                            </div>
                       </div>
                    </div>


                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--2">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--2">Mwanafunzi Pro</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="card__side card__side--back card__side--back-2">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">ksh49,700</p>
                                    </div>
                                    <a href="#popup" class="btn btn--white">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--3">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--3">Mwanafunzi Pro+</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="card__side card__side--back card__side--back-3">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">Ksh89,700</p>
                                    </div>
                                    <a href="#popup" class="btn btn--white">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="u-center-text u-margin-top-huge">
                    <a href="#" class="btn btn--green">Contact Us For Details</a>
                </div>
            </section> -->

           <!--  <section class="section-stories">
                <div class="bg-video">
                    <video class="bg-video__content" autoplay muted loop>
                        <source src="img/video.mp4" type="video/mp4">
                        <source src="img/video.webm" type="video/webm">
                        Your browser is not supported!
                    </video>
                </div>

                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        Insitutions Happy With Our Work
                    </h2>
                </div>

                <div class="row">
                    <div class="story">
                        <figure class="story__shape">
                            <img src="img/nat-8.jpg" alt="Person on a tour" class="story__img">
                            <figcaption class="story__caption">Mary Smith</figcaption>
                        </figure>
                        <div class="story__text">
                            <h3 class="heading-tertiary u-margin-bottom-small">We have seen a drastic improvement in results</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
                                ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero
                                repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="story">
                        <figure class="story__shape">
                            <img src="img/nat-9.jpg" alt="Person on a tour" class="story__img">
                            <figcaption class="story__caption">Jack Wilson</figcaption>
                        </figure>
                        <div class="story__text">
                            <h3 class="heading-tertiary u-margin-bottom-small">Its impossible to understand how we functioned before Funzi</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
                                ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero
                                repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="u-center-text u-margin-top-huge">
                    <a href="#" class="btn-text">Read all stories &rarr;</a>
                </div>
            </section> -->

            <section class="section-book">
                <div class="row">
                    <div class="book">
                        <div class="book__form">
                            <form method="POST" action="<?php echo e(route('contact.us')); ?>" class="form">
                                <?php echo csrf_field(); ?>
                                <div class="u-margin-bottom-medium">
                                    <h2 class="heading-secondary">
                                        Start your trial now
                                    </h2>
                                </div>
                                                                <div class="form__group">
                                    <input type="text" name="name" class="form__input" placeholder="Full name" id="name" required>
                                    <label for="name" class="form__label">Full name</label>
                                </div>

                                <div class="form__group">
                                    <input type="email" name="email" class="form__input" placeholder="Email address" id="email" required>
                                    <label for="email" class="form__label">Email address</label>
                                </div>

                                <div class="form__group u-margin-bottom-medium">
                                    <div class="form__radio-group">
                                        <input type="radio" name="school_type" value="secondary_school" class="form__radio-input" id="small" name="size">
                                        <label for="small" class="form__radio-label">
                                            <span class="form__radio-button"></span>
                                            Secondary School
                                        </label>
                                    </div>

                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" name="school_type" value="primary_school" id="large" name="size">
                                        <label for="large" class="form__radio-label">
                                            <span class="form__radio-button"></span>
                                            Primary School
                                        </label>
                                    </div>
                                </div>

                                <div class="form__group">
                                    <button class="btn btn--green">Next step &rarr;</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="footer__logo-box">

                <picture class="footer__logo">
                    <source srcset="img/Funzi-Logo.svg 1x, img/Funzi-Logo.svg 2x"
                            media="(max-width: 37.5em)">
                    <img srcset="img/Funzi-Logo.svg 1x, img/Funzi-Logo.svg 2x" alt="Full logo" src="img/Funzi-Logo.svg">
                </picture>



            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <div class="footer__navigation">
                        <ul class="footer__list">

                            <!-- <li class="footer__item"><a href="#" class="footer__link">Contact us</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Carrers</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Privacy policy</a></li> -->

                        </ul>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <ul class="footer__copyright">
                       <li class="footer__item"><a href="#" class="footer__link">Terms</a></li>
                       <li class="footer__item"><a href="http://lattice.co.ke" class="footer__link">Company</a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <div class="popup" id="popup">
            <div class="popup__content">
                <div class="popup__left">
                    <img src="img/nat-8.jpg" alt="Tour photo" class="popup__img">
                    <img src="img/nat-9.jpg" alt="Tour photo" class="popup__img">
                </div>
                <div class="popup__right">
                    <a href="#section-tours" class="popup__close">&times;</a>
                    <h2 class="heading-secondary u-margin-bottom-small">Start Your Trial now</h2>
                    <h3 class="heading-tertiary u-margin-bottom-small">Important &ndash; Please read these terms</h3>
                    <p class="popup__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Sed sed risus pretium quam. Aliquam sem et tortor consequat id. Volutpat odio facilisis mauris sit
                        amet massa vitae. Mi bibendum neque egestas congue. Placerat orci nulla pellentesque dignissim enim
                        sit. Vitae semper quis lectus nulla at volutpat diam ut venenatis. Malesuada pellentesque elit eget
                        gravida cum sociis natoque penatibus et. Proin fermentum leo vel orci porta non pulvinar neque laoreet.
                        Gravida neque convallis a cras semper. Molestie at elementum eu facilisis sed odio morbi quis. Faucibus
                        vitae aliquet nec ullamcorper sit amet risus nullam eget. Nam libero justo laoreet sit. Amet massa
                        vitae tortor condimentum lacinia quis vel eros donec. Sit amet facilisis magna etiam. Imperdiet sed
                        euismod nisi porta.
                    </p>
                    <a href="#" class="btn btn--green">Start Trial</a>
                </div>
            </div>
        </div>

        <!--
        <section class="grid-test">
            <div class="row">
                <div class="col-1-of-2">
                    Col 1 of 2
                </div>
                <div class="col-1-of-2">
                    Col 1 of 2
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-2-of-3">
                    Col 2 of 3
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-2-of-4">
                    Col 2 of 4
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-3-of-4">
                    Col 3 of 4
                </div>
            </div>
        </section>
        -->
<script>
$(document).ready(function(){

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
<script src="<?php echo e(asset('argon')); ?>/js/toastr/toastr.min.js"></script>



    </body>
</html>
<?php /**PATH D:\Laravel Projects\funzi\resources\views/welcome.blade.php ENDPATH**/ ?>