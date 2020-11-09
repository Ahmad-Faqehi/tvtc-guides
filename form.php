<?php  if(!isset($_GET['do'])): header("Location: index.php"); die(); endif;
if(isset($_GET['do'])){

    $do = $_GET['do'];

    switch ($do){
        case 'support':
            $job = "الدعم الفني";
            break;

        case 'key':
            $job = "مسؤولة المفاتيح";
            break;

        case 'security':
            $job = "الامن";
            break;

        case 'doctor':
            $job = "الطبيبة";
            break;

        default:
            $job = "";
    }
    if(empty($job)){
        header("Location: index.php"); die();
    }

    $lable = " نموذج " . $job;
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="app landing page,business,finance,corporate,landing page,ui,ux">
    <meta name="author" content="Yucel Yilmaz">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TVTC Guides</title>
    <!--// Icons //-->
    <link rel="stylesheet" href="fonts/flat_icons/flaticon.css">
    <link rel="stylesheet" href="fonts/flat-icons2/flaticon.css">
    <link rel="stylesheet" href="fonts/font_awesome/css/all.css">
    <!--// Google Fonts //-->

    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i&display=swap&subset=latin-ext" rel="stylesheet">
    <!--// FrameWorks //-->
    <link rel="stylesheet" href="css/frameworks.css">
    <!--// Theme Main Js //-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <style>
        *{
            font-family: "JF Flat Regular", "roboto", sans-serif, arial;

        }
    </style>
</head>

<body data-spy="scroll" data-target="#fixedNavbar" data-offset="70">

<!--// Header Start //-->
<header class="header fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg p-0">
            <a class="navbar-brand btn btn-link" href="#">

                <img src="img/bg/tvtc.png" alt="Logo" class=" w-50 img-fluid logo-transparent ">
                <img src="img/bg/tvtc.png" alt="Logo" class=" w-50 img-fluid logo-normal">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fixedNavbar" aria-controls="fixedNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="togler-icon-inner">
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                        <span class="line-3"></span>
                    </span>
            </button>
            <div class="collapse navbar-collapse main-menu justify-content-end" id="fixedNavbar" >
                <ul class="navbar-nav" style="text-align: initial;" dir="rtl">


                    <li class="nav-item">
                        <a class="nav-link fonty" href="index.php"  style="font-size: 17px;">الرئيسية</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fonty" href="#" id="homeDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 17px;">
                            حسابي
                        </a>
                        <div class="dropdown-menu text-right" aria-labelledby="homeDropdownMenu">
                            <a class="dropdown-item fonty" href="login.html">تسجيل دخول</a>
                            <a class="dropdown-item fonty" href="singup.html">أنشاء حساب</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fonty" href="listinfo.html"  style="font-size: 17px;">تواصل معانا</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link fonty" href="Contact.html"  style="font-size: 17px;">أتصل بنا</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</header>
<!--// Header End  //-->

<!--// Breadcrumb Section Start //-->
<section class="breadcrumb-section jarallax" data-scroll-index="1" data-speed="0.5s" data-jarallax style="background-image: url('img/bg/bg-TVTC.jpeg'); " dir="rtl">
    <div class="container">
        <div class="breadcrumb-content text-center" style="direction: ltr;">
            <h1 class="bread-crumb-title">TVTC Guides</h1>
            <ul class="breadcrumb-links">
                <li class="breadcrumb-link fonty"><a href="orders.html">الطلبات</a></li>
                <li class="active fonty"> <?=$job?> </li>
            </ul>
            </ul>
        </div>
    </div>
</section>
<!--// Breadcrumb Section End //-->

<!--// Blog Grid Start //-->
<section class="section" id="blog-grid">
    <div class="container" dir="rtl">
        <div class="row justify-content-center">
            <div class="section-heading col-md-12 text-center" style="  margin-bottom: 15px;">
                <h2 class="section-title fonty"> <?=$lable?> </h2>
            </div>
            <fieldset disabled style="width: 100%">

            <div class="col-lg-12">
                <label for="disabledTextInput" class="d-flex text-dark">الاسم</label>
                <div class="contact-form-group">
                    <input type="text" class="form-input" name="contact_name" id="disabledTextInput" value="سارة علي" readonly>
                </div>
            </div>

                <div class="col-lg-12">
                    <label for="disabledTextInput" class="d-flex text-dark">الرقم الاكاديمي</label>
                    <div class="contact-form-group">
                        <input type="text" class="form-input" name="contact_name" id="disabledTextInput" value="102182" readonly>
                    </div>
                </div>
            </fieldset>

            <div class="col-lg-12">
                <label for="disabledTextInput" class="d-flex text-dark">تفاصيل الطلب</label>
                <div class="contact-form-group">
                    <textarea class="form-input" placeholder="أكتب رسالتك هنا..." cols="20" rows="10" autocomplete="off"></textarea>
                </div>
            </div>

            <div class="col-lg-12">
                <label for="" class="d-flex text-dark">حالة الطلب</label>
                <div class="form-check d-flex">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                    <label class="form-check-label mr-4 " for="exampleRadios1"> غير هام</label>
                </div>
                <div class="form-check d-flex">
                    <input class="form-check-input " type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label mr-4 text-danger " for="exampleRadios2"> هام</label>
                </div>
            </div>


            <div class="col-md-12 text-center pt-1">
                <div class="contact-btn-left custom-form">
                    <button type="submit" id="contactBtn" onClick="send()" class="primary-button border-none">ارسال</button>
                </div>
            </div>

        </div>
    </div>

</section>
<!--// Blog Grid End //-->

<!--// Footer Start //-->
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <p class="copyright-text text-center fonty-par">مشروع متدربات الكلية التقنية الرقمية بالرياض - إشراف المدربة <b>أ. ايمان الغامدي</b></p>
        </div>
    </div>
</footer>
<!--// Footer End //-->

<!--<a href="#" data-scroll-goto="1" class="scroll-top-btn"><i class="fa fa-arrow-up"></i></a>-->


<div class="preloader-wrap">
    <div class="preloader-inner">
        <div id="loader"></div>
    </div>
</div>
<!--// Preloader  //-->

<!--// Scripts //-->
<script src="js/swal.js"></script>

<script>
    function  send() {
        swal({
            title: "قريباً",
            text: " 😄 أعلم أنك متحمس لتجربة لكن بقي القليل ",
            type: 'warning',
            showConfirmButton: true,
            confirmButtonText: 'موافق'
        });
    }
</script>
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<!--// Theme Main Js // -->
<script src="js/main.js"></script>

</body>

</html>