<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Title -->
        <title>Brands | Anmol Food</title>

        <?php include_once 'include/header-style.php';?>
    </head>
    <body class="page">
        <!-- Preloader Start -->
        <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>
        <!-- Preloader End -->

        <?php include_once 'include/header.php';?>

        <!-- About Area Start -->
        <section class="theme-contact-area mt-5 pt-5 contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wow fadeInRight pt-5" data-wow-delay="0.5">
                            <div class="about-heading">
                                <h2 class="mb-0">Brands</h2>
                                <span class="heading_overlay"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="assets/img/brands/kohinoor-chakki-fresh-aata.jpg" class="brand-popup">
                            <img src="assets/img/brands/kohinoor-chakki-fresh-aata.jpg" alt="Kohinoor Chakki Fresh Aata" class="img-fluid" />
                        </a>
                        <h5 class="text-center mt-2">Kohinoor Chakki Fresh Aata</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="assets/img/brands/tapi-gold-chakki-fresh-aata.jpg" class="brand-popup">
                            <img src="assets/img/brands/tapi-gold-chakki-fresh-aata-small.jpg" alt="Kohinoor Chakki Fresh Aata" class="img-fluid" />
                        </a>
                        <h5 class="text-center mt-2">Tapi Gold Chakki Fresh Aata</h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->


        <?php include_once 'include/footer.php';?>

        <?php include_once 'include/footer-script.php';?>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.brand-popup').magnificPopup({
                    type: 'image',
                    zoom: {
                        enabled: true, // By default it's false, so don't forget to enable it
                        duration: 300, // duration of the effect, in milliseconds
                        easing: 'ease-in-out', // CSS transition easing function
                    }
                });
            });
        </script>
    </body>
</html>

