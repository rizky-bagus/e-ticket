<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (isset($buyerid)) {
    $isLogin = true;
} else {
    $isLogin = false;
}
?><!DOCTYPE html>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo base_url() ?>assets/icon/main-icon.png" type="image/png">
        <title>AyoHotel</title>
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

        <style>
            ul.lSGallery > li > a > img {
                width: 46px !important;
                height: 46px !important;
            }
        </style>
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="<?php echo base_url() ?>landing"> <img src="<?php echo base_url() ?>assets/icon/main-icon.png" style="width: 50px;" alt=""> <label style="padding-top: 20px;">AyoHotel</label></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <?php if (!$isLogin) { ?>
                            <li class="nav-item" style="padding: 15px;"><a class="book_now_btn button_hover" href="<?php echo base_url() ?>login">Login</a></li>
                        <?php } else { ?>
                            <li class="nav-item" style="padding: 15px;"><a class="book_now_btn button_hover" href="<?php echo base_url() ?>login/logout">Logout</a></li>
                        <?php }?>
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
                        <?php foreach ($hotels as $row) { ?>
                            <li data-thumb="<?php echo base_url().$row['ImagePath']; ?>">
                                <img src="<?php echo base_url().$row['ImagePath']; ?>" width="100%" height="400px" />
                            </li>
                        <?php } ?>
                    </ul>
                    </div>
                </div>
                </div>
                <div class="col-md-7">
                    <div class="card p-3">
                        <div class="product-description">
                        <div class="mt-2">
                            <h2 style="text-decoration: underline;"><?php echo $selectedHotel->name; ?></h2>
                            <span class="font-weight-bold">Description</span>
                            <p style="text-align: justify;"><?php echo $selectedHotel->description; ?></p>
                            <div class="bullets">
                                <span class="font-weight-bold">Facilities</span>
                                <?php 
                                    $spec = explode(",", $selectedHotel->specification);
                                    for ($i = 0; $i < count($spec); $i++) {     
                                ?>
                                        <div class="d-flex align-items-center">
                                            <span class="dot"></span>
                                            <span class="bullet-text"><?php echo $spec[$i]; ?></span>
                                        </div>
                                <?php } ?>
                            </div>
                            <span class="font-weight-bold">Rating</span>
                            <p style="text-align: justify;"><?php echo $selectedHotel->rating; ?></p>
                        </div>

                        </div>
                        <div class="about">
                            <h4 class="font-weight-bold">Rp. <?php echo $selectedHotel->price_to ?></h4>
                        </div>
                        <div class="buttons" >
                            <a href="<?php echo base_url().'Checkout/index/'.$selectedHotel->id; ?>" class="btn btn-warning btn-long buy">Book Now</a>
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
                        <?php foreach ($testimoni as $row) { ?>
                            <div class="media testimonial_item">
                                <div class="media-body">
                                    <p style="text-align: justify;"><?php echo substr($row['Comment'], 0, 200); ?></p>
                                    <a href="#"><h4 class="sec_h4"><?php echo $row['username']; ?></h4></a>
                                    <div class="star">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <hr />
        <!--================ Suggestion Room Area  =================-->
        <section class="testimonial_area section_gap">
            <div class="container">
                <div class="section_title ">
                    <h3 class="title_color">See Other Rooms!</h3>
                </div>
                <div class="testimonial_slider owl-carousel">
                    <?php foreach ($otherHotels as $row) { 
                            $imgOtherHotel = $this->db->query("SELECT * FROM hotel_images WHERE hotel_id = '".$row['id']."'")->row();
                        ?>
                        <div class="media testimonial_item">
                            <img class="rounded-circle" src="<?php echo base_url().$imgOtherHotel->path; ?>" style="width: 80px !important; height: 80px !important;" alt="">
                            <div class="media-body">
                                <p style="text-align: justify;"><?php echo substr($row['description'], 0, 200).'... '; ?><a href="<?php echo base_url().'landing/detail_hotel/'.$row['id']; ?>">See more</a></p>
                                <a href="<a href="<?php echo base_url().'landing/detail_hotel/'.$row['id']; ?>"><h4 class="sec_h4"><?php echo $row['name']; ?></h4></a>
                                <div class="star">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
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
