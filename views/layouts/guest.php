<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Trogn">
    <meta property="og:site_name" content="">
    <meta property="og:site" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:type" content="article">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!--title-->
    <title>App Landing Page Template</title>

    <!--favicon icon-->
    <link rel="icon" href="<?= asset('home/img/favicon.png') ?>" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans&display=swap" rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="<?= asset('home/css/bootstrap.min.css') ?>">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="<?= asset('home/css/magnific-popup.css') ?>">
    <!--Themify icon css-->
    <link rel="stylesheet" href="<?= asset('home/css/themify-icons.css') ?>">
    <!--animated css-->
    <link rel="stylesheet" href="<?= asset('home/css/animate.min.css') ?>">

    <!--Owl carousel css-->
    <link rel="stylesheet" href="<?= asset('home/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('home/css/owl.theme.default.min.css') ?>">
    <!--custom css-->
    <link rel="stylesheet" href="<?= asset('home/css/style.css') ?>">
    <!--responsive css-->
    <link rel="stylesheet" href="<?= asset('home/css/responsive.css') ?>">

</head>

<body>

    <!--header section start-->
    <header class="header custom-header">
        <!--start navbar-->
        <nav class="navbar navbar-expand-lg fixed-top custom-nav white-bg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    Logo
                    <!-- <img src="<?= asset('home/img/logo-color-1x.png') ?>" width="120" alt="logo" class="img-fluid"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>

                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="<?= url('about') ?>">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="<?= url('contact') ?>">Contact</a>
                        </li>
                        <?php if (!auth_check()) { ?>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="<?= url('login') ?>">Sign In</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link page-scroll dropdown-toggle" href="#" id="navbarDropdownPage" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Hello <?= strtoupper(auth()['username']) ?> !
                                </a>
                                <div class="dropdown-menu submenu" aria-labelledby="navbarDropdownPage">
                                    <a class="dropdown-item" href="<?= url('logout') ?>">Logout</a>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!--end navbar-->
    </header>
    <!--header section end-->

    <!--body content wrap start-->
    <div class="main">
        <?php include $content; ?>
    </div>
    <!--body content wrap end-->

    <!--footer section start-->
    <footer class="footer-section">

        <!--footer top start-->
        <div class="footer-top background-img-2" style="background: url('/home/img/footer-bg.png')no-repeat center top / cover">
            <!--footer bottom copyright start-->
            <div class="footer-bottom border-gray-light mt-5 py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-7">
                            <div class="copyright-wrap small-text">
                                <p class="mb-0 text-white">© Trogn</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5">
                            <div class="terms-policy-wrap text-md-end text-start">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a class="small-text" href="#">Terms</a></li>
                                    <li class="list-inline-item"><a class="small-text" href="#">Security</a></li>
                                    <li class="list-inline-item"><a class="small-text" href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer bottom copyright end-->
        </div>
        <!--footer top end-->
    </footer>
    <!--footer section end-->

    <!--jQuery-->
    <script src="<?= asset('home/js/jquery-3.6.1.min.js') ?>"></script>
    <!--Popper js-->
    <script src="<?= asset('home/js/popper.min.js') ?>"></script>
    <!--Bootstrap js-->
    <script src="<?= asset('home/js/jquery.magnific-popup.min.js') ?>"></script>
    <!--Magnific popup js-->
    <script src="<?= asset('home/js/jquery.magnific-popup.min.js') ?>"></script>
    <!--jquery easing js-->
    <script src="<?= asset('home/js/jquery.easing.min.js') ?>"></script>

    <!--wow js-->
    <script src="<?= asset('home/js/wow.min.js') ?>"></script>
    <!--owl carousel js-->
    <script src="<?= asset('home/js/owl.carousel.min.js') ?>"></script>
    <!--countdown js-->
    <script src="<?= asset('home/js/jquery.countdown.min.js') ?>"></script>
    <!--validator js-->
    <script src="<?= asset('home/js/validator.min.js') ?>"></script>
    <!--custom js-->
    <script src="<?= asset('home/js/scripts.js') ?>"></script>
</body>

</html>