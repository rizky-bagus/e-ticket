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
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/vendors/linericon/style.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="assets/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css">
        <link href="bootstrap-popover-x.css" rel="stylesheet">

        <!-- main css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-2.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
        <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-brand logo_h" href="index.html"> My Amazing Web App</div>
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
        <!--================Header Area =================-->

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="booking_table d_flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<!-- <h6>Away from monotonous life</h6> -->
						<h2>Deals from your favorite booking site</h2>
						<h3>Try searching for a city, a spesific hotel, or even a landmark!</p>
						<!-- <a href="#" class="btn theme_btn button_hover">Get Started</a> -->
                        <div class="tabs tab-round">
                        <nav>
                            <a href="#content4" id ="all" class="active">All</a>
                            <a href="#content5">Hotel</a>
                            <a href="#content6">Apartement</a>
                        </nav>
                        <div class="hotel_booking_area position" id="content4">
                            <div class="container">
                                <div class="hotel_booking_table" style="display: block; margin-top: -44px;">
                                    <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                        <div class="form-group">
                                                            <div class='input-group date' id='datetimepicker11'>
                                                            <span class="input-group-addon" style="height:34px">
                                                                <i class="fa fa-map-marker" style="font-size:24px;color:red"></i>
                                                                </span>
                                                                <input type='text' class="form-control" placeholder="Destination"/>
                                                            </div>
                                                        </div>
                                        </div>
                                    </div>
                            </div>


                            <div class="col-md-12">
                                <div class="boking_table">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="book_tabel_item" style ="padding-left: 20px">
                                                <div class="form-group">
                                                    <div class='input-group date' id='datetimepicker2'>
                                                    <span class="input-group-addon">
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>
                                                        <input type='text' class="form-control" placeholder="Check in"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book_tabel_item">
                                            <div class="form-group">
                                                    <div class='input-group date' id='datetimepicker1'>
                                                        <input type='text' class="form-control" placeholder="Check Out"/>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                        <div class="book_tabel_item">
                                        <button id="subscribe" type="button" class="btn btn-default" data-toggle="popover" style="width: 100%;height: 37px;margin-top: -5px;">Guest</button>
                                        <div id="popover-form" class="hide">
                                        <form id="myform" class="block">
                                            <div class="row">
                                            <div>Adults</div> &nbsp;&nbsp;&nbsp;
                                                <div id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div> &nbsp;&nbsp;
                                                <input type="number" id="number" value="0" /> &nbsp;&nbsp;
                                                <div id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                            </div>
                                            </form>
                                        <form id="myform" class="block">
                                            <div class="row">
                                            <div>Children</div> &nbsp;&nbsp;&nbsp;
                                                <div id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div> &nbsp;&nbsp;
                                                <input type="number" id="number" value="0" /> &nbsp;&nbsp;
                                                <div id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                            </div>
                                            </form>
                                            <form id="myform">
                                            <div class="row">
                                            <div>Rooms</div> &nbsp;&nbsp;&nbsp;
                                                <div id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div> &nbsp;&nbsp;
                                                <input type="number" id="number" value="0" /> &nbsp;&nbsp;
                                                <div id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                            </div>
                                            </form>
                                        </div>

                                        <!-- <form>
                                            <div class="row">
                                            <div>Adult</div> &nbsp;&nbsp;&nbsp;
                                                <div id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div> &nbsp;&nbsp;
                                                <input type="number" id="number" value="0" /> &nbsp;&nbsp;
                                                <div id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                            </div>
                                        </form> -->

                                        </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book_tabel_item">
                                            <a class="book_now_btn button_hover" href="#">Search</a>
                                            </div>
                                            </div>
                                    </div>
                            </div>


                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!--================ Content 4 =================-->

                         <div class="hotel_booking_area position" id="content5">
                            <div class="container">
                                <div class="hotel_booking_table" style="display: block; margin-top: -44px;">
                                    <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                        <div class="form-group">
                                                            <div class='input-group date' id='datetimepicker11'>
                                                            <span class="input-group-addon" style="height:34px">
                                                                <i class="fa fa-map-marker" style="font-size:24px;color:red"></i>
                                                                </span>
                                                                <input type='text' class="form-control" placeholder="Destination"/>
                                                            </div>
                                                        </div>
                                        </div>
                                    </div>
                            </div>


                            <div class="col-md-12">
                                <div class="boking_table">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="book_tabel_item" style ="padding-left: 20px">
                                                <div class="form-group">
                                                    <div class='input-group date' id='datetimepicker2'>
                                                    <span class="input-group-addon">
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>
                                                        <input type='text' class="form-control" placeholder="Check in"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book_tabel_item">
                                            <div class="form-group">
                                                    <div class='input-group date' id='datetimepicker1'>
                                                        <input type='text' class="form-control" placeholder="Check Out"/>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                        <div class="book_tabel_item">
                                        <button id="subscribe" type="button" class="btn btn-default" data-toggle="popover" style="width: 100%;height: 37px;margin-top: -5px;">Guest</button>
                                        <div id="popover-form" class="hide">
                                        <form id="myform" class="block">
                                            <div class="row">
                                            <div>Adults</div> &nbsp;&nbsp;&nbsp;
                                                <div id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div> &nbsp;&nbsp;
                                                <input type="number" id="number" value="0" /> &nbsp;&nbsp;
                                                <div id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                            </div>
                                            </form>
                                        <form id="myform" class="block">
                                            <div class="row">
                                            <div>Children</div> &nbsp;&nbsp;&nbsp;
                                                <div id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div> &nbsp;&nbsp;
                                                <input type="number" id="number" value="0" /> &nbsp;&nbsp;
                                                <div id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                            </div>
                                            </form>
                                            <form>
                                            <div class="row">
                                            <div>Rooms</div> &nbsp;&nbsp;&nbsp;
                                                <div id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div> &nbsp;&nbsp;
                                                <input type="number" id="number" value="0" /> &nbsp;&nbsp;
                                                <div id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                            </div>
                                            </form>
                                        </div>

                                        <!-- <form>
                                            <div class="row">
                                            <div>Adult</div> &nbsp;&nbsp;&nbsp;
                                                <div id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div> &nbsp;&nbsp;
                                                <input type="number" id="number" value="0" /> &nbsp;&nbsp;
                                                <div id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                            </div>
                                        </form> -->

                                        </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book_tabel_item">
                                            <a class="book_now_btn button_hover" href="#">Search</a>
                                            </div>
                                            </div>
                                    </div>
                            </div>


                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- content 5 -->

                        <div class="hotel_booking_area position" id="content6">
                            <div class="container">
                                <div class="hotel_booking_table" style="display: block; margin-top: -138px;">
                                    <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                        <div class="form-group">
                                                            <div class='input-group date' id='datetimepicker11'>
                                                            <span class="input-group-addon" style="height:34px">
                                                                <i class="fa fa-map-marker" style="font-size:24px;color:red"></i>
                                                                </span>
                                                                <input type='text' class="form-control" placeholder="Destination"/>
                                                            </div>
                                                        </div>
                                        </div>
                                    </div>
                            </div>


                            <div class="col-md-12">
                                <div class="boking_table">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="book_tabel_item" style ="padding-left: 20px">
                                                <div class="form-group">
                                                    <div class='input-group date' id='datetimepicker2'>
                                                    <span class="input-group-addon">
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>
                                                        <input type='text' class="form-control" placeholder="Check in"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book_tabel_item">
                                            <div class="form-group">
                                                    <div class='input-group date' id='datetimepicker1'>
                                                        <input type='text' class="form-control" placeholder="Check Out"/>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                        <div class="book_tabel_item">
                                        <button id="subscribe" type="button" class="btn btn-default" data-toggle="popover" style="width: 100%;height: 37px;margin-top: -5px;">Guest</button>
                                        <div id="popover-form" class="hide">
                                        <form id="myform" class="block">
                                            <div class="row">
                                            <div>Adults</div> &nbsp;&nbsp;&nbsp;
                                                <div id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div> &nbsp;&nbsp;
                                                <input type="number" id="number" value="0" /> &nbsp;&nbsp;
                                                <div id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                            </div>
                                            </form>
                                        <form id="myform" class="block">
                                            <div class="row">
                                            <div>Children</div> &nbsp;&nbsp;&nbsp;
                                                <div id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div> &nbsp;&nbsp;
                                                <input type="number" id="number" value="0" /> &nbsp;&nbsp;
                                                <div id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                            </div>
                                            </form>
                                            <form>
                                            <div class="row">
                                            <div>Rooms</div> &nbsp;&nbsp;&nbsp;
                                                <div id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div> &nbsp;&nbsp;
                                                <input type="number" id="number" value="0" /> &nbsp;&nbsp;
                                                <div id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                            </div>
                                            </form>
                                        </div>

                                        <!-- <form>
                                            <div class="row">
                                            <div>Adult</div> &nbsp;&nbsp;&nbsp;
                                                <div id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div> &nbsp;&nbsp;
                                                <input type="number" id="number" value="0" /> &nbsp;&nbsp;
                                                <div id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                            </div>
                                        </form> -->

                                        </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book_tabel_item">
                                            <a class="book_now_btn button_hover" href="#">Search</a>
                                            </div>
                                            </div>
                                    </div>
                            </div>


                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- content 6---->
                    </div>
                </div>
            </div>

        </section>
        <!--================Banner Area =================-->

        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title">
                    <h3 class="title_color">These top destination are just click away</h3>
                </div>

                        <header>
                                <div id="material-tabs">
                                        <a id="tab1-tab" href="#tab1" class="active">Top Destination</a>
                                        <a id="tab2-tab" href="#tab2">Top Most Visited</a>
                                        <span class="yellow-bar"></span>
                                </div>
                        </header>

                        <div class="tab-content">
                                <div id="tab1">
                                    <div class="row mb_30">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="accomodation_item">
                                            <div class="hotel_img">
                                                <img src="assets/image/room1.jpg" alt="">
                                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                                            </div>
                                            <a href="#"><h4 class="sec_h4">Hotel in Bandung</h4></a>
                                            <div class="row">
                                                <div class="col-md-5">
                                                <h6>3998 hotel</h6>
                                                </div>
                                                <div class="col-md-7">
                                                <h6>Rp.600.000/malam</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="accomodation_item">
                                            <div class="hotel_img">
                                                <img src="assets/image/room2.jpg" alt="">
                                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                                            </div>
                                            <a href="#"><h4 class="sec_h4">Hotel in Jakarta</h4></a>
                                            <div class="row">
                                                <div class="col-md-5">
                                                <h6>3998 hotel</h6>
                                                </div>
                                                <div class="col-md-7">
                                                <h6>Rp.900.000/malam</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="accomodation_item">
                                            <div class="hotel_img">
                                                <img src="assets/image/room3.jpg" alt="">
                                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                                            </div>
                                            <a href="#"><h4 class="sec_h4">Hotel in Surabaya</h4></a>
                                            <div class="row">
                                                <div class="col-md-5">
                                                <h6>3998 hotel</h6>
                                                </div>
                                                <div class="col-md-7">
                                                <h6>Rp.500.000/malam</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="accomodation_item">
                                            <div class="hotel_img">
                                                <img src="assets/image/room4.jpg" alt="">
                                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                                            </div>
                                            <a href="#"><h4 class="sec_h4">Hotel in Yogyakarta</h4></a>
                                            <div class="row">
                                                <div class="col-md-5">
                                                <h6>3998 hotel</h6>
                                                </div>
                                                <div class="col-md-7">
                                                <h6>Rp.700.000/malam</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div id="tab2">
                                    <div class="row mb_30">
                                        <?php
                                        foreach($hotel->result() as $row)
                                        {
                                            ?>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="accomodation_item">
                                            <div class="hotel_img">
                                                <img src="assets/image/room1.jpg" alt="">
                                                <a href="<?php echo site_url("index.php/detail_booking");?>" class="btn theme_btn button_hover">Book Now</a>
                                            </div>
                                            <a href="#"><h4 class="sec_h4"><?php echo $row->name ?></h4></a>
                                            <div class="row">
                                                <div class="col-md-12">
                                                <h6>Rp. <?php echo $row->price_from?> - <?php echo $row->price_to?>/malam</h6>
                                                </div>
                                                <div class="col-md-12">
                                                <h6>Rating <?php echo $row->rating?></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                        ?>
                                </div>
                        </div>
            </div>
        </section>
        <!--================ Accomodation Area  =================-->




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
        <script src="bootstrap-popover-x.js"></script>
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="assets/js/mail-script.js"></script>
        <script src="assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="assets/vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="assets/js/mail-script.js"></script>
        <script src="assets/js/stellar.js"></script>
        <script src="assets/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <script>

            $(function () {
                $("#subscribe").popover({
                    title: '<h4>Choose Room and Guest</h4>',
                    container: 'body',
                    placement: 'bottom',
                    html: true,
                    content: function(){
                        return $('#popover-form').html();
                    }
                });
                })
            $(function () {
                $('#datetimepicker1').datetimepicker({
                    format: 'dd/mm/yyyy'
                });
            });
            $(function () {
                $('#datetimepicker2').datetimepicker({
                    format: 'dd/mm/yyyy'
                });
            });
            $(function() {
                $('nav').each(function() {


                    var $active, $content, $links = $(this).find('a');

                    $active = $($links.filter('[href="' + location.hash + '"]')[0] || $links[0]);
                    $active.addClass('active');

                    $content = $($active[0].hash);

                    $links.not($active).each(function() {
                        $(this.hash).hide();
                    });

                    $(this).on('click', 'a', function(e) {
                        $active.removeClass('active');
                        $content.hide();

                        $active = $(this);
                        $content = $(this.hash);

                        $active.addClass('active');
                        $content.show();

                        e.preventDefault();
                    });
                });
            });


            function increaseValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('number').value = value;
            }

            function decreaseValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            value < 1 ? value = 1 : '';
            value--;
            document.getElementById('number').value = value;
            }

            $(document).ready(function() {
                $('#material-tabs').each(function() {

                        var $active, $content, $links = $(this).find('a');

                        $active = $($links[0]);
                        $active.addClass('active');

                        $content = $($active[0].hash);

                        $links.not($active).each(function() {
                                $(this.hash).hide();
                        });

                        $(this).on('click', 'a', function(e) {

                                $active.removeClass('active');
                                $content.hide();

                                $active = $(this);
                                $content = $(this.hash);

                                $active.addClass('active');
                                $content.show();

                                e.preventDefault();
                        });
                });
        });
            </script>
    </body>
</html>
