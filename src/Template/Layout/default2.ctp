<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <title>Shiping | Unify - Responsive Website Template</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico">

        <!-- Web Fonts -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=cyrillic,latin">

        <!-- CSS Global Compulsory -->
        <?= $this->Html->css('/plugins/bootstrap/css/bootstrap.min.css') ?>
        
        <?= $this->Html->css('/css/app.css') ?>
        <?= $this->Html->css('/css/blocks.css') ?>
        <?= $this->Html->css('/css/one.style.css') ?>
        
        <!-- CSS Footer -->
        <?= $this->Html->css('header-v9.css') ?>
        <?= $this->Html->css('footer-v7.css') ?>

        <!-- CSS Implementing Plugins -->
        <?= $this->Html->css('/plugins/animate.css') ?>
        <?= $this->Html->css('/plugins/line-icons/line-icons.css') ?>
        <?= $this->Html->css('/plugins/font-awesome/css/font-awesome.min.css') ?>
        <?= $this->Html->css('/plugins/line-icons-pro/styles.css') ?>
        <?= $this->Html->css('/plugins/owl-carousel2/assets/owl.carousel.css') ?>
        <?= $this->Html->css('/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css') ?>
        <?= $this->Html->css('/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css') ?>
        <?= $this->Html->css('/plugins/hover-effects/css/custom-hover-effects.css') ?>
        
        <?= $this->Html->css('plugins/pace-flash.css') ?>
        
        <!-- CSS Theme -->
        <?= $this->Html->css('shiping.style.css') ?>

        <!-- CSS Customization -->
        <?= $this->Html->css('custom.css') ?>
    </head>

    <!--
            The data-spy and data-target are part of the built-in Bootstrap scrollspy function.
    -->
    <body id="body" data-spy="scroll" data-target=".header-v9" class="demo-lightbox-gallery">
        <!-- Header -->
        <?= $this->element('menu'); ?>
        <!-- End Header -->

        <?= $this->fetch('content') ?>

        <!-- Contact -->
        <section id="contact">
            <div class="contact-us">
                <div class="container-fluid no-padding">
                    <div class="g-heading-v11 text-center g-mb-70">
                        <h2>Contact Us</h2>
                        <p>Curabitur ullamcorper ultricies nisi. Nam eget dui.</p>
                    </div>

                    <!-- Google Map -->
                    <div id="map" class="map-class g-mb-70"></div>
                </div>

                <div class="container">
                    <div class="row">
                        <!-- Contact list -->
                        <div class="col-md-4 contact-list">
                            <h4>Where to meet</h4>
                            <p>Curabitur sit amet fringilla mi. Etiam ac massa sit amet nulla eleifend rutrum vitae non sem.</p>

                            <h4>Say Hello!</h4>

                            <ul class="list-unstyled g-mb-30">
                                <li>phone number <span>+48 555 2566 112</span></li>
                                <li>Email <span>info@unify.com</span></li>
                            </ul>
                        </div>

                        <!-- Contact form -->
                        <div class="col-md-8">
                            <form action="#" method="post" id="sky-form3" class="sky-form contact-style">
                                <fieldset>
                                    <div class="row g-mb-20">
                                        <div class="col-md-12 col-md-offset-0">
                                            <div>
                                                <input type="text" name="name" id="name" class="form-control rounded" placeholder="Your Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-mb-20">
                                        <div class="col-md-12 col-md-offset-0">
                                            <div>
                                                <input type="text" name="email" id="email" class="form-control rounded" placeholder="Email *">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-mb-20">
                                        <div class="col-md-12 col-md-offset-0">
                                            <div>
                                                <textarea rows="4" name="message" id="message" class="form-control rounded g-textarea-noresize" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <p><button type="submit" class="btn-u btn-u-lg btn-u-default btn-u-upper rounded">Submit</button></p>
                                </fieldset>

                                <!-- Success Message -->
                                <div class="message">
                                    <i class="rounded-x fa fa-check"></i>
                                    <p>Your message was successfully sent!</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyrights -->
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-3">
                            <div class="cr-left">
                                <p>&copy; 2016 All right reserved. Development by <a href="https://htmlstream.com" target="_blank">HTML Stream</a></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-9">
                            <div class="cr-right">
                                <ul class="list-unstyled list-inline cr-list">
                                    <li><a href="#" class="rounded"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="rounded"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#" class="fb rounded"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="rounded"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="rounded"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Contact -->

        <!-- JS Global Compulsory -->
        <?= $this->Html->script('/plugins/jquery/jquery.min.js') ?>
        <?= $this->Html->script('/plugins/jquery/jquery-migrate.min.js') ?>
        <?= $this->Html->script('/plugins/bootstrap/js/bootstrap.min.js') ?>

        <!-- JS Implementing Plugins -->
        <?= $this->Html->script('/plugins/smoothScroll.js') ?>
        <?= $this->Html->script('/plugins/jquery.easing.min.js') ?>
        <?= $this->Html->script('/plugins/pace/pace.min.js') ?>
        <?= $this->Html->script('/plugins/counter/waypoints.min.js') ?>
        <?= $this->Html->script('/plugins/counter/jquery.counterup.min.js') ?>
        <?= $this->Html->script('/plugins/owl-carousel2/owl.carousel.min.js') ?>
        <?= $this->Html->script('/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js') ?>
        <?= $this->Html->script('/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js') ?>
        <?= $this->Html->script('/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js') ?>
        <?= $this->Html->script('/plugins/circles-master/circles.min.js') ?>
        <script src="https://maps.googleapis.com/maps/api/js?signed_in=true&amp;callback=initMap" async defer></script>
        <?= $this->Html->script('plugins/gmaps-ini.js') ?>

        <?= $this->Html->script('/plugins/backstretch/jquery.backstretch.min.js') ?>

        <!-- JS Page Level-->
        <?= $this->Html->script('one.app.js') ?>
        <?= $this->Html->script('plugins/pace-loader.js') ?>
        <?= $this->Html->script('plugins/promo.js') ?>
        <?= $this->Html->script('plugins/circles-master.js') ?>
        <?= $this->Html->script('plugins/cube-portfolio-3-ns.js') ?>
        <?= $this->Html->script('forms/contact.js') ?>
        <script>
            $(function () {
                App.init();
                App.initCounter();
                OwlCarousel.initOwlCarousel();
                CirclesMaster.initCirclesMaster();
                ContactForm.initContactForm();
            });
        </script>
        <!--[if lt IE 10]>
                <script src="../assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
        <![endif]-->
    </body>
</html>
