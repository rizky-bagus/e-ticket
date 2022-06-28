<?php
defined('BASEPATH') or exit('No direct script access allowed');

$spec = explode(",", $hotel[0]['Spec']);
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
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/linericon/style.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
        <!-- fonts/ico -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/icon/bootstrap-icons/font/bootstrap-icons.css">

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
        <?php echo form_open("/Checkout/SubmitBooking", array('id' => 'form_book')) ?>
        <section class="accomodation_area section_gap">
            <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Hotel Booking</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-6">

                    <?php if (!$isLogin) { ?>
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
                    <?php } ?>

                        <h4 class="mt-4">Your Information</h4>
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h4>Contact Name</h4>
                                    </div>
                                    <div class="col-6">
                                        <label class="d-block">Mobile Number</label>
                                        <input type="hidden" name="HotelId" class="form-control" value="<?php echo $hotel[0]['HotelId'] ?>" style="text-align: left;">
                                        <input type="text" name="InputPhone" class="form-control" placeholder="Input Mobile Number" value="<?php echo ($isLogin ? $phone : '') ?>" style="text-align: left;">
                                    </div>
                                    <div class="col-6">
                                        <label class="d-block">Email</label>
                                        <input type="text" name="InputEmail" class="form-control" placeholder="Input Email" value="<?php echo ($isLogin ? $email : '') ?>" style="text-align: left;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h4 class="mt-4">Special Request</h4>
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <input type="checkbox" name="InputAddOns[]" class="styled" value="High floor" style="width: auto; height: auto"> 
                                        High floor
                                    </div>
                                    <div class="col-4">
                                        <input type="checkbox" name="InputAddOns[]" class="styled" value="Check-in Time" style="width: auto; height: auto"> 
                                        Check-in Time
                                    </div>
                                    <div class="col-4">
                                        <input type="checkbox" name="InputAddOns[]" class="styled" value="Check-out Time" style="width: auto; height: auto"> 
                                        Check-out Time
                                    </div>
                                    <div class="col-4">
                                        <input type="checkbox" name="InputAddOns[]" class="styled" value="Non Smoking Room" style="width: auto; height: auto"> 
                                        Non Smoking Room
                                    </div>
                                    <div class="col-4">
                                        <input type="checkbox" name="InputAddOns[]" class="styled" value="Connecting Room" style="width: auto; height: auto"> 
                                        Connecting Room
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label class="d-block">Notes:</label>
                                        <textarea class="w-100" name="InputNotes" cols="4" rows="4" style="resize: none;border-color: #ced4da;padding:10px;"></textarea>
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
                                    <h4><i class="bi bi-building"></i> <?php echo $hotel[0]['HotelName'] ?></h4>
                                </div>
                                <div class="col-3">
                                    <label>Check-in</label>
                                </div>
                                <div class="col-9">
                                    <label id="label-check-in"><?php echo $checkIn ?> From <?php echo $hotel[0]['CheckInTime'] ?> </label>
                                </div>
                                <div class="col-3">
                                    <label>Check-out</label>
                                </div>
                                <div class="col-9">
                                    <label id="label-check-out"><?php echo $checkOut ?> From <?php echo $hotel[0]['CheckInTime'] ?></label>
                                </div>

                                <div class="col-12">
                                    <hr>
                                </div>

                                <div class="col-12">
                                    <label for="">Unit:</label>
                                    <ol style="list-style-type: circle; padding-left: 17px;">
                                        <?php foreach ($units as $row) { ?>
                                            <li><label class="d-block"><?php echo $row['value'].' '.$row['name'] ?></label></li>
                                        <?php } ?>
                                    </ol>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <img src="<?php echo base_url().$hotel[0]['Path'] ?>" class="img-thumbnail w-30">
                                </div>
                                <div class="col-8" style="margin: auto; vertical-align: middle;">
                                    <ol style="list-style-type: circle; padding-left: 17px;">
                                        <?php for ($idx = 0; $idx < count($spec); $idx++) { ?>
                                            <li><label class="d-block"><?php echo $spec[$idx] ?></label></li>
                                        <?php } ?>
                                    </ol>
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
                                    <label>Total</label>
                                </div>
                                <div class="col-6 text-right">
                                    <label class="font-weight-bold" id="label-subtotal" data-value="<?php echo $hotel[0]['PriceTo'] ?>">Rp <?php echo $hotel[0]['PriceTo'] ?></label>
                                </div>
                                
                                <div class="col-6">
                                    <label>Discount</label>
                                </div>
                                <div class="col-6 text-right">
                                    <label class="font-weight-bold" id="label-discount">Rp 0</label>
                                </div>

                                <div class="col-6">
                                    <label>Additional Fee</label>
                                </div>
                                <div class="col-6 text-right">
                                    <label class="font-weight-bold" id="label-fee" data-value="<?php echo $hotel[0]['AdminCharge'] ?>">Rp <?php echo $hotel[0]['AdminCharge'] ?></label>
                                </div>

                                <div class="col-6">
                                    <label>Grand Total</label>
                                </div>
                                <div class="col-6 text-right">
                                    <input type="hidden" name="InputGrand">
                                    <label class="font-weight-bold" id="label-grand">Rp 0</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-4">
                        <button type="button" class="btn btn-lg btn-warning w-100" onclick="submitBook()">Book</button>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <?php echo form_close() ?>
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
        <script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/popper.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/mail-script.js"></script>
        <!-- <script src="assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script> -->
        <script src="<?php echo base_url() ?>assets/vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="<?php echo base_url() ?>assets/js/mail-script.js"></script>
        <script src="<?php echo base_url() ?>assets/js/stellar.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/custom.js"></script>

        <script>
            $(document).ready(function () {
                var isLogin = '<?php echo $isLogin; ?>';
                var discountPercent = isLogin ? 10 : 0;

                var subtotal = $('#label-subtotal').data('value');
                var discount = (discountPercent/100) * parseFloat(subtotal);
                var fee = $('#label-fee').data('value');
                var grandTotal = subtotal - discount + fee;

                $('#label-discount').text("Rp " + discount);
                $('#label-grand').text("Rp " + grandTotal);

                $('[name=InputGrand]').val(grandTotal);
            });

            function submitBook() {
                if (!$('[name=InputPhone]').val()) {
                    alert("Mobile Number is required.");
                    return false;
                }
                if (!$('[name=InputEmail]').val()) {
                    alert("Email is required.");
                    return false;
                }

                $('#form_book').submit();
            }
        </script>
    </body>
</html>
