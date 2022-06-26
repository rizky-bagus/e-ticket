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
        <title>E-Ticket</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/vendors/linericon/style.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="assets/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- fonts/ico -->
        <link rel="stylesheet" href="assets/icon/bootstrap-icons/font/bootstrap-icons.css">

    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
        <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"> E-Ticket</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item" style="padding: 15px;"><a class="book_now_btn button_hover" href="<?php echo base_url() ?>login">Login</a></li>
                        </ul>
                    </div>
                </nav>
        </header>
        <!--================Header Area =================-->

        <!--================Banner Area =================-->
        <!-- <section class="banner_area">
            <div class="booking_table d_flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                    <div class="container">
                        <div class="banner_content text-center">
                            <h2>Checkout Page</h2>
                        </div>
                    </div>
				</div>
            </div>
        </section> -->
        <!--================Banner Area =================-->

        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap">
            <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Hotel Booking</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2" style="margin: auto; vertical-align: middle;">
                                    <i class="bi bi-lock-fill" style="font-size: 40px;"></i>
                                </div>
                                <div class="col-10">
                                    <label class="d-block">Log In register to enjoy this member-only benefit.</label>
                                    <label class="d-block"><i class="bi bi-key-fill"></i> Book faster and easier</label>
                                    <label class="d-block"><a href="<?php echo base_url() ?>login">Log in</a> or <a href="<?php echo base_url() ?>register">Register</a></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 class="mt-4">Your Information</h4>
                    <div class="card mt-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h4>Contact Name</h4>
                                </div>
                                <div class="col-6">
                                    <label class="d-block">Mobile Number</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="d-block">Email</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 class="mt-4">Special Request</h4>
                    <div class="card mt-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <input type="checkbox" class="styled" style="width: auto; height: auto"> 
                                    High floor
                                </div>
                                <div class="col-4">
                                    <input type="checkbox" class="styled" style="width: auto; height: auto"> 
                                    Check-in Time
                                </div>
                                <div class="col-4">
                                    <input type="checkbox" class="styled" style="width: auto; height: auto"> 
                                    Check-out Time
                                </div>
                                <div class="col-4">
                                    <input type="checkbox" class="styled" style="width: auto; height: auto"> 
                                    Non Smoking Room
                                </div>
                                <div class="col-4">
                                    <input type="checkbox" class="styled" style="width: auto; height: auto"> 
                                    Connecting Room
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label class="d-block">Notes:</label>
                                    <textarea class="w-100" cols="4" rows="4" style="resize: none;border-color: #ced4da;padding:10px;"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h4><i class="bi bi-building"></i> Hotel Transluxury</h4>
                                </div>
                                <div class="col-3">
                                    <label>Check-in</label>
                                </div>
                                <div class="col-9">
                                    <label>Sat, March 22 2022 From 14.00</label>
                                </div>
                                <div class="col-3">
                                    <label>Check-out</label>
                                </div>
                                <div class="col-9">
                                    <label>Mon, March 23 2022 From 12.00</label>
                                </div>

                                <div class="col-12">
                                    <h4>(1x) Deluxe Twin Room Only</h4>
                                </div>

                                <div class="col-4">
                                    <label>Guest per room</label>
                                </div>
                                <div class="col-8">
                                    <label>2 guest</label>
                                </div>
                                <div class="col-4">
                                    <label>Guest per room</label>
                                </div>
                                <div class="col-8">
                                    <label>1 twin bed</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <img src="<?php echo base_url() ?>assets/image/about_banner.jpg" class="img-thumbnail w-30">
                                </div>
                                <div class="col-8" style="margin: auto; vertical-align: middle;">
                                    <label class="d-block"><i class="bi bi-wifi"></i> Wifi</label>
                                    <label class="d-block"><i class="bi bi-cup-fill"></i> Breakfast</label>
                                </div>
                                <div class="col-12 mt-10">
                                    <h5 class="text-danger"><i class="bi bi-x-circle-fill"></i> Free Cancelation</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <label>Discount</label>
                                </div>
                                <div class="col-6 text-right">
                                    <label class="font-weight-bold">Rp 0</label>
                                </div>

                                <div class="col-6">
                                    <label>Additional Fee</label>
                                </div>
                                <div class="col-6 text-right">
                                    <label class="font-weight-bold">Rp 0</label>
                                </div>

                                <div class="col-6">
                                    <label>Pay Upon Check-in</label>
                                </div>
                                <div class="col-6 text-right">
                                    <label class="font-weight-bold">Rp 1227000</label>
                                </div>

                                <div class="col-6">
                                    <label>Total</label>
                                </div>
                                <div class="col-6 text-right">
                                    <label class="font-weight-bold">Rp 1227000</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-4">
                        <button class="btn btn-lg btn-success w-100">Book</button>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--================ Accomodation Area  =================-->

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
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="assets/js/mail-script.js"></script>
        <!-- <script src="assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script> -->
        <script src="assets/vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="assets/js/mail-script.js"></script>
        <script src="assets/js/stellar.js"></script>
        <script src="assets/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>
