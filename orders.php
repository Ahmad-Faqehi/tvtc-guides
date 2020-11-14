<?php include "includes/head.php"; ?>

<body data-spy="scroll" data-target="#fixedNavbar" data-offset="70">

<style>
    *  , h5{
        font-family: "JF Flat Regular", "roboto", sans-serif, arial;

    }

    /*Run this when is not login in*/


<?php if(!$isLogin): ?>
    .services-item .services-icon {
        border-right: 5px dashed #a2a2a2;
        border-bottom: 5px solid #a2a2a2;
        display: inline-block;
        margin-bottom: 30px;
        padding: 10px;
        border-radius: 50%;
    }
    .services-item .services-icon i {
        text-align: center;
        color: #fff;
        display: inline-block;
        border-radius: 50%;
        width: 120px;
        height: 120px;
        line-height: 120px;
        font-size: 50px;
        background: #a2a2a2;
    }
    .services-item {
        text-align: center;
        padding: 40px;
        margin-bottom: 30px;
        border-radius: 10px;
        -webkit-transition: all 0.25s ease;
        transition: all 0.25s ease;
        border: 1px solid #ccc!important;
        background-color: #e1e1e1;
    }
    .services-item:hover {
        background: #a2a2a2;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
<?php endif; ?>
</style>

<!--// Header Start //-->
<?php include "includes/header.php";?>
<!--// Header End  //-->

<!--// Breadcrumb Section Start //-->
<section class="breadcrumb-section jarallax" data-scroll-index="1" data-speed="0.5s" data-jarallax style="background-image: url('img/bg/bg-TVTC.jpeg'); " dir="rtl">
    <div class="container">
        <div class="breadcrumb-content text-center" style="direction: ltr;">
            <h1 class="bread-crumb-title">TVTC Guides</h1>
            <ul class="breadcrumb-links">
                <li class="breadcrumb-link fonty"><a href="index.php">الرئيسية</a></li>
                <li class="active fonty">الطلبات</li>
            </ul>
        </div>
    </div>
</section>
<!--// Breadcrumb Section End //-->

<!-- Services Start -->
<section class="section pb-minus-70" id="services" data-scroll-index="2" dir="rtl">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-6">
                <div class="section-heading">
                    <h2 class="section-title fonty">قسم الطلبات</h2>
                    <p class="fonty-par">
                        يمكن من خلال هذا القسم طلب الدعم الفني - الطبيبة - الأمن - مسؤولة المفاتيح وذلك لسهولة الوصول إليهم
                    </p>
                </div>
            </div>
        </div>
        <?php if(!$isLogin):?>
        <div class="alert alert-danger text-right  " role="alert" style="margin-bottom: 40px;">
           <strong>تنبية: </strong> حتى تستفيد من الخدمات الرجاء تسجيل الدخول. للدخول أضغط <a href="login.php" class="btn-link"> هنا </a>
        </div>
        <?php endif;?>
        <div class="row">

            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <a <?php if($isLogin): ?> href="form.php?do=support" <?php else: echo 'onclick="login()"'; endif;?> class="text-muted">
                <div class="services-item">
                    <div class="services-icon">
                        <i class="far fa-question-circle"></i>
                    </div>
                    <div class="services-body">
                        <h5>الدعم الفني</h5>
                        <p class="fonty-par" >هنا وصف صغير عن الخدمة</p>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <a <?php if($isLogin): ?> href="form.php?do=key" <?php else: echo 'onclick="login()"'; endif;?> class="text-muted">
                <div class="services-item">
                    <div class="services-icon">
                        <i class="fas fa-key"></i>
                    </div>
                    <div class="services-body">
                        <h5>مسؤولة المفاتيح</h5>
                        <p class="fonty-par" >هنا وصف صغير عن الخدمة</p>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <a <?php if($isLogin): ?> href="form.php?do=security" <?php else: echo 'onclick="login()"'; endif;?> class="text-muted">
                <div class="services-item">
                    <div class="services-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <div class="services-body">
                        <h5>الامن</h5>
                        <p class="fonty-par" >هنا وصف صغير عن الخدمة</p>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <a <?php if($isLogin): ?> href="form.php?do=doctor" <?php else: echo 'onclick="login()"'; endif;?> class="text-muted">
                    <div class="services-item">
                    <div class="services-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <div class="services-body">
                        <h5>الطبيبة</h5>
                        <p class="fonty-par" >هنا وصف صغير عن الخدمة</p>
                    </div>
                </div>
                </a>
            </div>

        </div>
    </div>
</section>
<!--// Services End  //-->

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
    function  login() {
        swal({
            title: "عذراً",
            text: " يجب ان تقوم بتسجيل الدخول أولاً ",
            type: 'warning',
            showConfirmButton: false,
            // confirmButtonText: 'موافق',
            footer: '<a href="login.php" class="btn btn-link">تسجيل دخول أو أنشاء حساب</a>'
        });
    }
</script>
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<!--// Theme Main Js // -->
<script src="js/main.js"></script>

</body>

</html>