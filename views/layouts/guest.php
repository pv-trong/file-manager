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
    <link rel="stylesheet" href="<?= asset('fonts/fonts.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/custom.css') ?>">
    <link rel="stylesheet" href="<?= asset('libs/owlcarousel2/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('libs/owlcarousel2/owl.theme.default.min.css') ?>">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3"><a href="#" class="brandLogo"><img src="img/logo.png"></a>
                    <div class="toggleMenu"></div>
                </div>
                <div class="col-md-9">
                    <ul class="navigation">
                        <li><a href="#">บริการทั้งหมดของเรา</a></li>

                        <li><a href="#">ผลงานของเรา</a></li>
                        <li><a href="#" class="btn">ติดต่อเรา</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!--body content wrap start-->
    <div class="main">
        <?php include $content; ?>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="img/map.png">
                </div>
                <div class="col-lg-6">
                    <div class="content-padding-all">
                        <a href="#" class="brandLogo"><img src="img/logoWhite.png"></a>
                        <p>285/30 ถ.ช้างคลาน ต.ช้างคลาน อ.เมือง<br> อำเภอ จังหวัดเชียงใหม่ 50100</p>
                        <ul class="social">
                            <li><img src="img/phone.svg">099-4262416</li>
                            <li><img src="img/mail.svg">housetohomecnx@gmail.com</li>
                        </ul>
                        <hr>
                        <h4>ติดต่อเราได้ที่</h4>
                        <ul>
                            <li><a href="#"><img src="img/facebook.svg"></a></li>
                            <li><a href="#"><img src="img/line.svg"></a></li>
                            <li><a href="#"><img src="img/tiktok.svg"></a></li>
                        </ul>
                        <hr>
                        <div class="copyright">
                            <ul>
                                <li><a href="#">เกี่ยวกับ</a></li>
                                <li><a href="#">บริการ</a></li>
                                <li><a href="#">ข้อความรับรอง</a></li>
                            </ul>
                            <span>© ลิขสิทธิ์ 2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?= asset('js/jquery.min.js') ?>"></script>
    <script src="<?= asset('js/bootstrap.min.js') ?>"></script>
    <script src="<?= asset('libs/owlcarousel2/owl.carousel.min.js') ?>"></script>
    <?php if (isset($scripts)) { ?>
        <?php foreach ($scripts as $script) { ?>
            <script src="<?= asset($script) ?>"></script>
    <?php }
    } ?>
</body>

</html>