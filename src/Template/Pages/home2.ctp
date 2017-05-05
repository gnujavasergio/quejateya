<section id="intro" class="intro-section">
    <div class="fullscreen-static-image fullheight">
        <!-- Promo Content BEGIN -->
        <div class="container valign__middle">
            <div class="row">
                <div class="col-md-5 col-sm-6 text-center">
                    <form class="shipping-form">
                        <h3><?php echo __('Envienos su reclamo'); ?></h3>
                        <div class="form-group g-mb-20">
                            <input type="text" name="slocation" class="form-control rounded g-mb-20" placeholder="Start Location">
                            <input type="text" name="elocation" class="form-control rounded g-mb-20" placeholder="End Location">
                            <select class="form-control rounded">
                                <option>Cargo Type</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>

                        <div class="form-group g-mb-20">
                            <div class="row">
                                <div class="col-sm-4 g-xs-mb-20">
                                    <input type="text" name="height" class="form-control rounded" placeholder="Height">
                                </div>

                                <div class="col-sm-4 g-xs-mb-20">
                                    <input type="text" name="width" class="form-control rounded" placeholder="Width">
                                </div>

                                <div class="col-sm-4 g-xs-mb-20">
                                    <input type="text" name="length" class="form-control rounded" placeholder="Length">
                                </div>
                            </div>
                        </div>

                        <div class="form-group g-mb-20">
                            <div class="row">
                                <div class="col-sm-6 g-xs-mb-20">
                                    <input type="name" name="name" class="form-control rounded" placeholder="Name">
                                </div>

                                <div class="col-sm-6 g-xs-mb-20">
                                    <input type="email" name="email" class="form-control rounded" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-u btn-u-lg btn-u-default btn-u-upper rounded">Calculate</button>
                    </form>
                </div>
                <div class="col-md-7 col-sm-6 intro-section-info">
                    <h2>Packaging <br> &amp; Shiping</h2>
                    <h3>Delivering anything to anywhere</h3>
                    <p>Maecenas lacus magna, pretium in congue a, pharetra at lacus. Nulla neque justo, sodales<br> vitae dui non, imperdiet luctus libero.</p>
                    <a href="#" class="btn-u btn-u-lg btn-u-default btn-u-upper rounded">Learn More</a>
                </div>
            </div>
        </div>
        <!-- Promo Content END -->
    </div>
</section>
<!-- End Intro Section -->

<!-- About -->
<section id="about">
    <!-- Call to action -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="special-offer">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <h2>Order now and get <span>20% off</span></h2>
                            <p>Raecenas lacus magna, pretium in congue a, pharetra at lacus imperdiet luctus libero</p>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="soffer-link">
                                <a href="#" class="btn-u btn-u-lg btn-u-dark btn-u-upper rounded">Calculate and Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Call to action -->

    <!-- Main Services -->
    <div class="container-fluid">
        <div class="row equal-height-columns">
            <div class="col-sm-4 no-padding">
                <div class="shipping-service text-center">
                    <div class="shipping-service-img-wrapper"><img src="assets/img-temp/3/PeopleImages.com-312368-zoom.jpg" alt=""></div>
                    <div class="shipping-service-text shipping-service-text--noborder equal-height-column">
                        <h3>Cargo</h3>
                        <p>Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in. Donec in blandit dolor. Vivamus a fringilla lorem</p>
                        <a href="#" class="shipping-service__more">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 no-padding">
                <div class="shipping-service text-center">
                    <div class="shipping-service-img-wrapper"><img src="assets/img-temp/3/PeopleImages.com-1184488-zoom.jpg" alt=""></div>
                    <div class="shipping-service-text equal-height-column">
                        <h3>Logistic Services</h3>
                        <p>Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in. Donec in blandit dolor. Vivamus a fringilla lorem</p>
                        <a href="#" class="shipping-service__more">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 no-padding">
                <div class="shipping-service text-center">
                    <div class="shipping-service-img-wrapper"><img src="assets/img-temp/3/PeopleImages.com-1172607-zoom.jpg" alt=""></div>
                    <div class="shipping-service-text equal-height-column">
                        <h3>Storage</h3>
                        <p>Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in. Donec in blandit dolor. Vivamus a fringilla lorem</p>
                        <a href="#" class="shipping-service__more">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of main services -->

    <!-- Shiping types -->
    <div class="container-fluid no-padding">
        <div class="shiping-types">
            <div class="g-heading-v11 text-center g-mb-70">
                <h2>Types of Shiping</h2>
                <p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
            </div>

            <div class="shiping-types-list">
                <?php if ($categories) { ?>
                <?php foreach ($categories as $category) { ?>
                <div class="col-md-3 col-sm-6 col-xs-6 col-2xs-12 no-padding">
                    <div class="shiping-type">
                        <div class="shiping-type-img">
                            <img class="img-responsive" src="assets/img-temp/type1.png" alt="">
                        </div>

                        <div class="shiping-type-text">
                            <h3><a href="#"><?= $category->name ?></a></h3>
                            <p class="default-p">Shiping &amp; package</p>
                            <p class="onhover-p">Maecenas tempus, tellus eget condimentum rhoncus.</p>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php } ?>
                <div class="col-md-3 col-sm-6 col-xs-6 col-2xs-12 no-padding">
                    <div class="shiping-type">
                        <div class="shiping-type-img">
                            <img class="img-responsive" src="assets/img-temp/type2.png" alt="">
                        </div>

                        <div class="shiping-type-text">
                            <h3><a href="#"><strong>Servicios</strong> Públicos</a></h3>
                            <p class="default-p">Shiping &amp; package</p>
                            <p class="onhover-p">Maecenas tempus, tellus eget condimentum rhoncus.</p>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    <!-- End of Shiping types -->
</section>
<!-- End of Main Offers -->

<!-- Our Services -->
<section id="services">
    <div class="container-fluid no-padding">
        <div class="our-services">
            <div class="container">
                <div class="g-heading-v11 text-center g-mb-70">
                    <h2 class="g-color-white">Tour Services</h2>
                    <p class="g-color-white-darker">Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus.</p>
                </div>

                <!-- Grid -->
                <div class="service-grid">
                    <div class="row equal-height-columns">
                        <div class="col-md-4 col-sm-4 service-item">
                            <div class="item-in equal-height-column">
                                <span class="icon-transport-026 icon-4x" aria-hidden="true"></span>
                                <h3>International Shiping</h3>
                                <p>Fusce mauris eros, ullamcorper in gravida a, feugiat in mauris. Curabitur ac scelerisque nisi. Vivamus accumsan in purus et egestas.</p>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 service-item">
                            <div class="item-in equal-height-column">
                                <span class="icon-christmas-090 icon-4x" aria-hidden="true"></span>
                                <h3>Pckaging</h3>
                                <p>Fusce mauris eros, ullamcorper in gravida a, feugiat in mauris. Curabitur ac scelerisque nisi. Vivamus accumsan in purus et egestas.</p>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 service-item">
                            <div class="item-in equal-height-column">
                                <span class="icon-travel-044 icon-4x" aria-hidden="true"></span>
                                <h3>Competitive rates</h3>
                                <p>Fusce mauris eros, ullamcorper in gravida a, feugiat in mauris. Curabitur ac scelerisque nisi. Vivamus accumsan in purus et egestas.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row equal-height-columns">
                        <div class="col-md-4 col-sm-4 service-item">
                            <div class="item-in equal-height-column">
                                <span class="icon-hotel-restaurant-249 icon-4x" aria-hidden="true"></span>
                                <h3>Quick Shiping</h3>
                                <p>Fusce mauris eros, ullamcorper in gravida a, feugiat in mauris. Curabitur ac scelerisque nisi. Vivamus accumsan in purus et egestas.</p>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 service-item">
                            <div class="item-in equal-height-column">
                                <span class="icon-hotel-restaurant-211 icon-4x" aria-hidden="true"></span>
                                <h3>Quality protection</h3>
                                <p>Fusce mauris eros, ullamcorper in gravida a, feugiat in mauris. Curabitur ac scelerisque nisi. Vivamus accumsan in purus et egestas.</p>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 service-item">
                            <div class="item-in equal-height-column">
                                <span class="icon-hotel-restaurant-234 icon-4x" aria-hidden="true"></span>
                                <h3>Shiping anywhere</h3>
                                <p>Fusce mauris eros, ullamcorper in gravida a, feugiat in mauris. Curabitur ac scelerisque nisi. Vivamus accumsan in purus et egestas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of grid -->
            </div>
        </div>
    </div>
</section>
<!-- End of Our Services -->

<!-- Skills -->
<section id="skills">
    <div class="skills">
        <div class="container">
            <div class="g-heading-v11 text-center g-mb-40">
                <h2>Our Skills</h2>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas ac nulla vehicula risus pulvinar feugiat ullamcorper sit amet mi.</p>
            </div>

            <!-- Pie Charts v1 -->
            <div class="row pie-progress-charts">
                <div class="inner-pchart col-md-3 col-xs-6 col-3xs-12">
                    <div class="circle" id="circle-1"></div>
                    <h3>Shiping</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="inner-pchart col-md-3 col-xs-6 col-3xs-12">
                    <div class="circle" id="circle-2"></div>
                    <h3>Availability</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.	Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="inner-pchart col-md-3 col-xs-6 col-3xs-12">
                    <div class="circle" id="circle-3"></div>
                    <h3>Logestics</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>

                <div class="inner-pchart col-md-3 col-xs-6 col-3xs-12">
                    <div class="circle" id="circle-4"></div>
                    <h3>Packaging</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <!-- End Pie Charts v1 -->
        </div>
    </div>

    <!-- Process temporary static-->
    <div class="process">
        <div class="container-fluid">
            <div class="row equal-height-columns">
                <div class="col-md-4 col-sm-4 hidden-xs no-padding">
                    <div class="process-img equal-height-column"></div>
                </div>

                <div class="col-md-8 col-sm-8 equal-height-column">
                    <div class="row">
                        <div class="col-md-12 no-padding">
                            <div class="process-text">
                                <h3>Packing fragile items</h3>
                                <p>Aenean volutpat erat quis mollis accumsan. Mauris at cursus ipsum. Praesent molestie imperdiet purus in finibus. Pellentesque elit enim, malesuada a varius elementum, sodales id turpis. Maecenas interdum enim egestas risus semper, consectetur auctor metus rhoncus.</p><br>
                                <p>Proin tempus tincidunt nunc sed pellentesque. Vivamus suscipit, tellus nec auctor egestas, urna augue hendrerit est, vel luctus nisl leo ut sem. Suspendisse sed tincidunt risus.</p>
                            </div>
                        </div>
                    </div>

                    <div class="process-steps">
                        <div class="row equal-height-columns">
                            <div class="col-md-6 no-padding">
                                <div class="process-step equal-height-column">
                                    <span class="step-no">01.</span>
                                    <h4>Fusce accumsan faucibus</h4>
                                    <p>Curabitur sit amet fringilla mi. Etiam ac massa sit amet nulla eleifend rutrum vitae non sem. Fusce accumsan faucibus laoreet. Maecenas auctor mauris erat quis mollis.</p>
                                </div>
                            </div>

                            <div class="col-md-6 no-padding">
                                <div class="process-step equal-height-column">
                                    <span class="step-no">02.</span>
                                    <h4>Maecenas auctor mauris</h4>
                                    <p>Aenean volutpat erat quis mollis accumsan. Mauris at cursus ipsum. Praesent molestie imperdiet purus in finibus. Pellentesque elit enim, malesuada a varius elementum.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row equal-height-columns">
                            <div class="col-md-6 no-padding">
                                <div class="process-step equal-height-column">
                                    <span class="step-no">03.</span>
                                    <h4>Suspendisse pharetra elit ac</h4>
                                    <p>Maecenas interdum enim egestas risus semper, consectetur auctor metus rhoncus. Proin tempus tincidunt nunc sed pellentesque. Vivamus suscipit, tellus nec </p>
                                </div>
                            </div>

                            <div class="col-md-6 no-padding">
                                <div class="process-step equal-height-column">
                                    <span class="step-no">04.</span>
                                    <h4>Vestibulum fringilla risus ege</h4>
                                    <p>Suspendisse sed tincidunt risus. Nam vehicula nunc vel metus rutrum, eu venenatis nulla porttitor. Nam iaculis nunc eu tincidunt consectetur. Nullam et ex at velit tempor.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row equal-height-columns">
                            <div class="col-md-6 no-padding">
                                <div class="process-step equal-height-column">
                                    <span class="step-no">05.</span>
                                    <h4>Enim egestas risus semper</h4>
                                    <p>Maecenas interdum enim egestas risus semper, consectetur auctor metus rhoncus. Proin tempus tincidunt nunc sed pellentesque. Vivamus suscipit, tellus nec </p>
                                </div>
                            </div>

                            <div class="col-md-6 no-padding">
                                <div class="process-step equal-height-column">
                                    <span class="step-no">06.</span>
                                    <h4>Eu venenatis nulla porttitor</h4>
                                    <p>Suspendisse sed tincidunt risus. Nam vehicula nunc vel metus rutrum, eu venenatis nulla porttitor. Nam iaculis nunc eu tincidunt consectetur. Nullam et ex at velit tempor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Skills -->

<!-- Best Offers -->
<section id="bestOffers">
    <div class="container-fluid bg-grey">
        <div class="offers">
            <div class="container">
                <div class="g-heading-v11 text-center g-mb-70">
                    <h2>Best Offers</h2>
                    <p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, Etiam rhoncus. Maecenas tempus.</p>
                </div>

                <!-- Pricing tables-->
                <div class="row g-mb-40 equal-height-columns">
                    <div class="col-md-3 col-xs-6 col-3xs-12">
                        <div class="pricing float equal-height-column">
                            <div class="pricing-img">
                                <img src="assets/img-temp/price/PeopleImages.com-1172607-zoom.jpg" alt="">
                            </div>

                            <div class="pricing-head">
                                <h3>Small</h3>
                                <span>Dimentions: 10x10x15cm</span>
                                <h4>$10.00</h4>
                            </div>

                            <ul class="pricing-content list-unstyled">
                                <li>Curabitur sit amet</li>
                                <li>Etiam ac massa sit</li>
                                <li>Fusce accumsan faucibus </li>
                                <li>Duis tristique bibendum</li>
                                <li>Duis vehicula</li>
                                <li>Donec fringilla</li>
                            </ul>
                            <div class="pricing-footer">
                                <a class="btn-u btn-u-lg btn-u-default btn-u-upper rounded" href="#">Order Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 col-3xs-12">
                        <div class="pricing float equal-height-column">
                            <div class="pricing-img">
                                <img src="assets/img-temp/price/PeopleImages.com-1171492-zoom.jpg" alt="">
                            </div>

                            <div class="pricing-head">
                                <h3>Medium</h3>
                                <span>Dimentions: 10x10x15cm</span>
                                <h4>$20.00</h4>
                            </div>

                            <ul class="pricing-content list-unstyled">
                                <li>Curabitur sit amet</li>
                                <li>Etiam ac massa sit</li>
                                <li>Fusce accumsan faucibus </li>
                                <li>Duis tristique bibendum</li>
                                <li>Duis vehicula</li>
                                <li>Donec fringilla</li>
                            </ul>
                            <div class="pricing-footer">
                                <a class="btn-u btn-u-lg btn-u-default btn-u-upper rounded" href="#">Order Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 col-3xs-12">
                        <div class="pricing float equal-height-column">
                            <div class="pricing-img">
                                <img src="assets/img-temp/price/PeopleImages.com-312441-zoom.jpg" alt="">
                            </div>

                            <div class="pricing-head">
                                <h3>Large</h3>
                                <span>Dimentions: 10x10x15cm</span>
                                <h4>$40.00</h4>
                            </div>

                            <ul class="pricing-content list-unstyled">
                                <li>Curabitur sit amet</li>
                                <li>Etiam ac massa sit</li>
                                <li>Fusce accumsan faucibus </li>
                                <li>Duis tristique bibendum</li>
                                <li>Duis vehicula</li>
                                <li>Donec fringilla</li>
                            </ul>
                            <div class="pricing-footer">
                                <a class="btn-u btn-u-lg btn-u-default btn-u-upper rounded" href="#">Order Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 col-3xs-12">
                        <div class="pricing float equal-height-column">
                            <div class="pricing-img">
                                <img src="assets/img-temp/price/PeopleImages.com-312413-zoom.jpg" alt="">
                            </div>

                            <div class="pricing-head">
                                <h3>Extra large</h3>
                                <span>Dimentions: 10x10x15cm</span>
                                <h4>$100.00</h4>
                            </div>

                            <ul class="pricing-content list-unstyled">
                                <li>Curabitur sit amet</li>
                                <li>Etiam ac massa sit</li>
                                <li>Fusce accumsan faucibus </li>
                                <li>Duis tristique bibendum</li>
                                <li>Duis vehicula</li>
                                <li>Donec fringilla</li>
                            </ul>
                            <div class="pricing-footer">
                                <a class="btn-u btn-u-lg btn-u-default btn-u-upper rounded" href="#">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div><!--/row-->
                <!-- End Pricing -->
            </div>
        </div>
    </div>
</section>
<!-- End of Best Offers -->

<!-- Gallery -->
<section id="gallery">
    <div class="gall-div">
        <div class="container">
            <div class="g-heading-v11 text-center g-mb-70">
                <h2>Gallery</h2>
                <p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, Etiam rhoncus. Maecenas tempus.</p>
            </div>
        </div>
        <!--=== Cube-Portfdlio ===-->
        <div class="cube-portfolio">
            <div id="grid-container">
                <div class="cbp-item">
                    <div class="cbp-caption">
                        <a href="assets/img-temp/gallery/PeopleImages.com-312385-zoom.jpg" class="cbp-lightbox" data-title="Design Object">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img-temp/gallery/PeopleImages.com-312385-zoom.jpg" alt="">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="cbp-item">
                    <div class="cbp-caption">
                        <a href="assets/img-temp/gallery/PeopleImages.com-1172630-zoom.jpg" class="cbp-lightbox" data-title="Design Object">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img-temp/gallery/PeopleImages.com-1172630-zoom.jpg" alt="">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="cbp-item">
                    <div class="cbp-caption">
                        <a href="assets/img-temp/gallery/PeopleImages.com-1182019-zoom.jpg" class="cbp-lightbox" data-title="Design Object">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img-temp/gallery/PeopleImages.com-1182019-zoom.jpg" alt="">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="cbp-item">
                    <div class="cbp-caption">
                        <a href="assets/img-temp/gallery/PeopleImages.com-1182095-zoom.jpg" class="cbp-lightbox" data-title="Design Object">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img-temp/gallery/PeopleImages.com-1182095-zoom.jpg" alt="">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="cbp-item">
                    <div class="cbp-caption">
                        <a href="assets/img-temp/gallery/PeopleImages.com-1184078-zoom.jpg" class="cbp-lightbox" data-title="Design Object">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img-temp/gallery/PeopleImages.com-1184078-zoom.jpg" alt="">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="cbp-item">
                    <div class="cbp-caption">
                        <a href="assets/img-temp/gallery/PeopleImages.com-1184519-zoom.jpg" class="cbp-lightbox" data-title="Design Object">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img-temp/gallery/PeopleImages.com-1184519-zoom.jpg" alt="">
                            </div>
                        </a>
                    </div>
                </div>

            </div><!--/end Grid Container-->
        </div>
    </div>
</section>
<!-- End of Gallery -->

<!-- FAQ -->
<section id="faq">
    <div class="faq">
        <div class="container">
            <div class="row">
                <!-- Tabs -->
                <div class="col-md-8 col-md-push-4">
                    <div class="faq-tab">
                        <div class="g-heading-v11 g-mb-50">
                            <h2>FAQ</h2>
                            <p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p>
                        </div>

                        <!-- Accordion v1 -->
                        <div class="panel-group acc-v1 plus-toggle " id="accordion-1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-One">
                                            Phasellus bibendum semper lectus, in ornare erat tempus eget?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-One" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>Anim pariatur cliche reprehenderit, 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Two">
                                            Duis vehicula turpis tincidunt, malesuada mauris et, tincidunt nisl?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-Two" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Three">
                                            Mauris et lacus ut massa luctus varius?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-Three" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Four">
                                            Curabitur id elit lobortis, malesuada nibh in, fringilla metus?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-Four" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. nesciunt laborum eiusmod.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Five">
                                            Fusce accumsan faucibus laoreet?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-Five" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion v1 -->
                    </div>
                </div>
                <!-- Image -->
                <div class="col-md-4 col-md-pull-8">
                    <div class="faq-img">
                        <img src="assets/img-temp/faq.png" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of FAQ -->

<!-- Testimonials -->
<section id="testimonials">
    <div class="testo">
        <div class="container">
            <div class="testo-in">
                <div class="g-heading-v11 text-center g-mb-70">
                    <h2 class="g-color-white">What do people say about us?</h2>
                    <p class="g-color-white-darker">Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Nam eget dui. Etiam rhoncus. ullamcorper ultricies nisi, ullamcorper ultricies nisi</p>
                </div>

                <!-- Testimonials-v3 -->
                <div class="testimonials-v3">
                    <ul class="list-unstyled owl-ts-v1">
                        <li class="item">
                            <div class="row">
                                <div class="col-sm-3 text-right">
                                    <img class="rounded-x" src="assets/img-temp/testimonials/img1.jpg" alt="">
                                </div>

                                <div class="col-sm-9">
                                    <div class="testimonials-v3-text">
                                        <p class="g-color-white-darker">The customisation options you implemented are countless, and I feel sorry I can't use them all. Good job, and keep going! are countless, and I feel</p>
                                        <h5>Someone someone</h5>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="item">
                            <div class="row">
                                <div class="col-sm-3 text-right">
                                    <img class="rounded-x" src="assets/img-temp/testimonials/img2.jpg" alt="">
                                </div>

                                <div class="col-sm-9">
                                    <div class="testimonials-v3-text">
                                        <p class="g-color-white-darker">The customisation options you implemented are countless, and I feel sorry I can't use them all. Good job, and keep going! are countless, and I feel</p>
                                        <h5>Someone someone</h5>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="item">
                            <div class="row">
                                <div class="col-sm-3 text-right">
                                    <img class="rounded-x" src="assets/img-temp/testimonials/img3.jpg" alt="">
                                </div>

                                <div class="col-sm-9">
                                    <div class="testimonials-v3-text">
                                        <p class="g-color-white-darker">The customisation options you implemented are countless, and I feel sorry I can't use them all. Good job, and keep going! are countless, and I feel</p>
                                        <h5>Someone someone</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Clients -->
    <div class="clients">
        <div class="container-fluid no-padding">
            <ul class="list-unstyled owl-clients-v1">
                <li class="item"><a href="#"><img src="assets/img-temp/clients/1.png" alt=""></a></li>
                <li class="item"><a href="#"><img src="assets/img-temp/clients/2.png" alt=""></a></li>
                <li class="item"><a href="#"><img src="assets/img-temp/clients/3.png" alt=""></a></li>
                <li class="item"><a href="#"><img src="assets/img-temp/clients/4.png" alt=""></a></li>
                <li class="item"><a href="#"><img src="assets/img-temp/clients/5.png" alt=""></a></li>
                <li class="item"><a href="#"><img src="assets/img-temp/clients/6.png" alt=""></a></li>
                <li class="item last"><a href="#"><img src="assets/img-temp/clients/7.png" alt=""></a></li>
            </ul>
        </div>
    </div>
    <!-- End of Clients -->
</section>
<!-- End of Testimonials -->