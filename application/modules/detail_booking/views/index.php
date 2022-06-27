<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Royal Hotel</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/linericon/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assetsvendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-2.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
        <link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
        <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-brand logo_h" href="<?php echo base_url('/landing') ?>"> My Amazing Web App</div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item" style="padding: 15px;"><a class="book_now_btn button_hover" href="#">Login</a></li>
                        </ul>
                    </div>
                </nav>
        </header>



        <!--================ Content Area  =================-->
        <section class="accomodation_area section_gap">
            <div class="container">
            <div class="container-fluid mt-2 mb-3">
            <div class="row no-gutters">
                <div class="col-md-5 pr-2">
                <div class="card">
                    <div class="demo">
                    <ul id="lightSlider">
                        <li data-thumb="https://i.imgur.com/KZpuufK.jpg">
                        <img src="https://i.imgur.com/KZpuufK.jpg" />
                        </li>
                        <li data-thumb="https://i.imgur.com/GwiUmQA.jpg">
                        <img src="https://i.imgur.com/GwiUmQA.jpg" />
                        </li>
                        <li data-thumb="https://i.imgur.com/DhKkTrG.jpg">
                        <img src="https://i.imgur.com/DhKkTrG.jpg" />
                        </li>
                        <li data-thumb="https://i.imgur.com/kYWqL7k.jpg">
                        <img src="https://i.imgur.com/kYWqL7k.jpg" />
                        </li>
                        <li data-thumb="https://i.imgur.com/c9uUysL.jpg">
                        <img src="https://i.imgur.com/c9uUysL.jpg" />
                        </li>
                        <li data-thumb="https://i.imgur.com/KZpuufK.jpg">
                        <img src="https://i.imgur.com/KZpuufK.jpg" />
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
                <div class="col-md-7">
                <div class="card">
                    <div class="product-description">
                    <!-- <div class="d-flex flex-row align-items-center">
                        <i class="fa fa-calendar-check-o"></i>
                        <span class="ml-1">Delivery from sweden, 15-45 days</span>
                    </div> -->
                    <div class="mt-2">
                        <span class="font-weight-bold">Description</span>
                        <p>
                        The minimalist collaboration features chairs, lightening, Shelves,
                        Sofas, Desks and various home accessories, all offering form and
                        function at the same point.We use high-strength clamps and joinery
                        techniques specially designed for engineered wood beds. Ergo, no
                        irksome creaks - and you can sleep like a baby, well into
                        adulthood!
                        </p>
                        <div class="bullets">
                        <span class="font-weight-bold">Facilities</span>
                        <div class="d-flex align-items-center">
                            <span class="dot"></span>
                            <span class="bullet-text">Best in Quality</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="dot"></span>
                            <span class="bullet-text">Anti-creak joinery</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="dot"></span>
                            <span class="bullet-text">Sturdy laminate surfaces</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="dot"></span>
                            <span class="bullet-text">Relocation friendly design</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="dot"></span>
                            <span class="bullet-text">High gloss, high style</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="dot"></span>
                            <span class="bullet-text">Easy-access hydraulic storage</span>
                        </div>
                        </div>
                    </div>

                    </div>
                    <div class="about">
                    <h4 class="font-weight-bold">$3,444</h4>
                    </div>
                    <div class="buttons" >
                    <!-- <button class="btn btn-outline-warning btn-long cart">
                        Add to Cart
                    </button> -->
                    <button class="btn btn-warning btn-long buy">Book Now</button>

                    </div>
                </div>
                </div>
            </div>
            </div>
            </div>
        </section>
        <hr/>

        <!--================ Review Area  =================-->

    <section class="testimonial_area section_gap">
            <div class="container">
                <div class="row">
                <div class="col-md-3">
                    <div class="section_title ">
                    <h3 class="title_color">See our Top Reviews!</h3>
                    <p>Check out curated review for honest descriptions about this accomodation </p>
                </div>
                </div>
                <div class="col-md-9 testimonial_slider owl-carousel ">
                    <div class="media testimonial_item">
                        <!-- <img class="rounded-circle" src="assets/image/testtimonial-1.jpg" alt=""> -->
                        <div class="media-body">
                            <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                            <a href="#"><h4 class="sec_h4">Fanny Spencer</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item">
                        <div class="media-body">
                            <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                            <a href="#"><h4 class="sec_h4">Fanny Spencer</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item">
                        <div class="media-body">
                            <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                            <a href="#"><h4 class="sec_h4">Fanny Spencer</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item">
                        <!-- <img class="rounded-circle" src="assets/image/testtimonial-1.jpg" alt=""> -->
                        <div class="media-body">
                            <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                            <a href="#"><h4 class="sec_h4">Fanny Spencer</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- <div class="section_title text-center">
                    <h2 class="title_color">Testimonial from our Clients</h2>
                    <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
                </div> -->
            </div>
        </section>
        <hr/>


        <!--================ Suggestion Room Area  =================-->

        <section class="testimonial_area section_gap">
            <div class="container">
                    <div class="section_title ">
                    <h3 class="title_color">See Other Rooms!</h3>
            </div>
                <div class="testimonial_slider owl-carousel ">
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="assets/image/testtimonial-1.jpg" alt="">
                        <div class="media-body">
                            <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                            <a href="#"><h4 class="sec_h4">Fanny Spencer</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="assets/image/testtimonial-1.jpg" alt="">
                        <div class="media-body">
                            <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                            <a href="#"><h4 class="sec_h4">Fanny Spencer</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="assets/image/testtimonial-1.jpg" alt="">
                        <div class="media-body">
                            <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                            <a href="#"><h4 class="sec_h4">Fanny Spencer</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="assets/image/testtimonial-1.jpg" alt="">
                        <div class="media-body">
                            <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                            <a href="#"><h4 class="sec_h4">Fanny Spencer</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- <div class="section_title text-center">
                    <h2 class="title_color">Testimonial from our Clients</h2>
                    <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
                </div> -->
            </div>
        </section>




        <!--================ start footer Area  =================-->
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Agency</h6>
                            <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Navigation Links</h6>
                            <div class="row">
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Feature</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>
                                    </div>
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">InstaFeed</h6>
                            <ul class="list_style instafeed d-flex flex-wrap">
                                <li><img src="assets/image/instagram/Image-01.jpg" alt=""></li>
                                <li><img src="assets/image/instagram/Image-02.jpg" alt=""></li>
                                <li><img src="assets/image/instagram/Image-03.jpg" alt=""></li>
                                <li><img src="assets/image/instagram/Image-04.jpg" alt=""></li>
                                <li><img src="assets/image/instagram/Image-05.jpg" alt=""></li>
                                <li><img src="assets/image/instagram/Image-06.jpg" alt=""></li>
                                <li><img src="assets/image/instagram/Image-07.jpg" alt=""></li>
                                <li><img src="assets/image/instagram/Image-08.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/popper.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/mail-script.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/mail-script.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/stellar.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
        <script src="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
        <script>
                $(function() {
        // Owl Carousel
        var owl = $(".owl-carousel");
        owl.owlCarousel({
            items: 2,
            margin: 10,
            loop: true,
            nav: true
        });
        });
        $('#lightSlider').lightSlider({ gallery: true, item: 1, loop: true, slideMargin: 0, thumbItem: 9 });</script>
    </body>
</html>
