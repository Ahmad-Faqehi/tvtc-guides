
<?php include "includes/head.php"; ?>

<body data-spy="scroll" data-target="#fixedNavbar" data-offset="70">

<!--// Header Start //-->
<?php include "includes/header.php"?>
<!--// Header End  //-->

<!--// Hero Start //-->
<section id="home" class="jarallax" data-scroll-index="1" data-jarallax="" data-speed="0.6s" style="background-image: url(img/bg/bg-TVTC.jpeg); direction: rtl">
    <div class="banner-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner-content">
                        <h1 class="wow fadeInUp text-center " style="letter-spacing: 3px;" data-wow-delay="0.1s">TVTC Guides</h1>
                        <p class="wow fadeInUp h5 text-center fonty spc" data-wow-delay="0.2s">
                            موقع يقدم عدة أقسام من الخدمات تخدم الكلية التقنية الرقمية
                        </p>
                        <div class="holder-link wow fadeInUp text-center" data-wow-delay="0.3s" data-scroll-nav="2">
                            <a href="#"  class="default-button fonty">
                               عرض الخدمات
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="scroll-down-btn" data-scroll-nav="2">
        <i class="fa fa-arrow-down"></i>
    </a>
</section>
<!--// Hero End //-->

<!-- Services Start -->
<section class="section pb-minus-1" id="services" data-scroll-index="2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2 class="section-title fonty">الخدمات</h2>

<!--                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci dolor fuga, magnam et sed quidem.</p>-->
                </div>
            </div>
        </div>
        <div class="tab-link-wrap">
            <div class="row">
                <?php if(!isset($_SESSION['memberId:TVTC'])): ?>
                <div class="col-md-6 col-lg-6 offset-md-3 offset-lg-3 tab-link-item wow fadeInLeft pb-3" data-wow-delay="0s">
                    <a href="login.php">
                    <div class="tab-link-inner">
                        <span class="flaticon-user"></span>
                        <h6 class="fonty-par">إدارة الحساب</h6>
                        <p class="fonty-par text-muted  "> تسجيل دخول او إنشاء حساب </p>
                    </div>
                    </a>
                </div>
                <?php endif; ?>
                <div class="col-md-6 col-lg-6 offset-md-3 offset-lg-3 tab-link-item wow fadeInRight pb-3" data-wow-delay="0.1s">
                    <a href="orders.php">
                    <div class="tab-link-inner">
                        <span class="flaticon-checklist"></span>
                        <h6 class="fonty-par">الطلبات</h6>
                    </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-6 offset-md-3 offset-lg-3 tab-link-item wow fadeInLeft pb-3" data-wow-delay="0.3s">
                    <a href="listinfo.php">
                    <div class="tab-link-inner">
                        <span class="flaticon-contact"></span>
                        <h6 class="fonty-par">التواصل</h6>
                    </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-6 offset-md-3 offset-lg-3 tab-link-item wow fadeInRight pb-3" data-wow-delay="0.3s">
                    <a href="loss.php">
                    <div class="tab-link-inner">
                        <span class="flaticon-lost-items"></span>
                        <h6 class="fonty-par">المفقودات</h6>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--// Services End  //-->

<!--// How It Work Start //-->
<section id="how-it-work" class="section" style="direction: rtl">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-6 text-right">
                <div class="how-it-works-inner">
                    <h4 class="fonty mo-center">كيف يعمل الموقع؟</h4>
                    <p class="fonty-par mo-center">
                        هنا نص قصير عن آلية عمل الموقع و الفكرة المطروحة من هذا المشروع, تندرج تحت هذه الاقسام
                    </p>
                    <ul>
                        <li class="how-it-work-item">
                            <div class="how-it-work-icon">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <div class="how-it-work-body">
                                <h6 class="fonty-nav" >قسم الطلبات</h6>
                                <p class="fonty-par">
                                    يمكن من خلال هذا القسم طلب الدعم الفني - الطبيبة - الأمن - مسؤولة المفاتيح وذلك لسهولة الوصول إليهم
                                </p>
                            </div>
                        </li>
                        <li class="how-it-work-item">
                            <div class="how-it-work-icon">
                                <i class="fas fa-question"></i>
                            </div>
                            <div class="how-it-work-body">
                                <h6 class="fonty-nav" >قسم المفقودات</h6>
                                <p class="fonty-par">
                                    عبارة عن لائحة إعلانات يمكن من خلالها البحث عن المفقودات
                                </p>
                            </div>
                        </li>
                        <li class="how-it-work-item mb-0">
                            <div class="how-it-work-icon">
                                <i class="far fa-comment-dots"></i>
                            </div>
                            <div class="how-it-work-body">
                                <h6 class="fonty-nav" >قسم التواصل</h6>
                                <p class="fonty-par">
                                    من هذا القسم يمكن من خلاله التواصل السريع مع المسؤولين
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="how-it-work-img">
                    <img src="img/bg/how-it-work.png" alt="" class="img-fluid mo-pt-15">
                </div>
            </div>
        </div>
    </div>
</section>
<!--// How It Work End //-->



<!--/ Counter Start /-->
<section class="section pb-minus-70 " id="counters">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-heading white-section-text">
                    <h2 class="section-title fonty">إحصائيات</h2>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci dolor fuga, magnam et sed quidem.</p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
                <div class="counter-item">
                    <div class="counter-header">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <div class="counter-body">
                        <h2 class="counter"> <?php echo  $conn->query("SELECT * FROM `order` ")->rowCount();  ?> </h2>
                        <span class="fonty-par">عدد الطلبات</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0s">
                <div class="counter-item">
                    <div class="counter-header">
                        <i class="mdi mdi-account-heart"></i>
                    </div>
                    <div class="counter-body">
                        <h2 class="counter"><?php echo  $conn->query("SELECT * FROM `users` ")->rowCount();  ?></h2>
                        <span class="fonty-par">عدد المستفيدين</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="counter-item">
                    <div class="counter-header">
                        <i class="mdi mdi-ticket"></i>
                    </div>
                    <div class="counter-body">
                        <h2 class="counter"><?php echo  $conn->query("SELECT * FROM `contact`")->rowCount();  ?></h2>
                        <span class="fonty-par">عدد مرات التوصل</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--// Counter End //-->



<!--// Watch Video Start //-->
<section class="section jarallax"  data-jarallax="" data-speed="0.6s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 ">
                <div class="section-heading white-section-text">
                    <h2 class="section-title text-dark fonty">شاهد فديو الشرح</h2>
                    <p class="fonty-par text-dark">فديو شرح طريقة الاستفادة من الخدمات الموقع</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="video-inner-wrap">
                    <img src="img/bg/maxresdefault.jpg" alt="Video image" class="img-fluid">
                    <a href="https://www.youtube.com/watch?v=vfRykT6eFQ0" class="video-button popup-youtube"><i class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--// Watch Video End //-->


<!--// Testimonial Section End //-->
<section id="testimonials" class="section jarallax"  data-jarallax="" data-speed="0.6s" data-scroll-index="5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-heading white-section-text" dir="rtl">
                    <h2 class="section-title fonty">القائمين على المشروع</h2>
                    <p class="fonty-par">
                     تعرف على الفريق الرائع الذي قام على تصميم فكرة هذا المشروع.
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="testimonials-carousel owl-carousel owl-theme">


                    <div class="item">
                        <div class="testimonials-item">
                            <div class="testimonials-header">
                                <img src="img/moji/4.jpg" alt="testimonials image" class="img-fluid">
                            </div>
                            <div class="testimonials-body">
                                <h5 class="fonty"> لمياء محمد</h5>
                                <div class="team-social m-2">
                                    <a href="#no"><i class="fab fa-twitter"></i></a>
                                    <a href="#no"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonials-item">
                            <div class="testimonials-header">
                                <img src="img/moji/3.jpg" alt="testimonials image" class="img-fluid">
                            </div>
                            <div class="testimonials-body">
                                <h5 class="fonty"> ساره علي </h5>
                                <div class="team-social m-2">
                                    <a href="#no"><i class="fab fa-twitter"></i></a>
                                    <a href="#no"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonials-item">
                            <div class="testimonials-header">
                                <img src="img/moji/8.jpg" alt="testimonials image" class="img-fluid">
                            </div>
                            <div class="testimonials-body">
                                <h5 class="fonty">دانيا محمد</h5>
                                <div class="team-social m-2">
                                    <a href="#no"><i class="fab fa-twitter"></i></a>
                                    <a href="#no"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonials-item">
                            <div class="testimonials-header">
                                <img src="img/moji/7.jpg" alt="testimonials image" class="img-fluid">
                            </div>
                            <div class="testimonials-body">
                                <h5 class="fonty"> نورة أحمد </h5>
                                <div class="team-social m-2">
                                    <a href="#no"><i class="fab fa-twitter"></i></a>
                                    <a href="#no"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</section>
<!--// Testimonial Section End //-->



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
            <p class="copyright-text text-center fonty-par" style="direction: rtl;"> برمجة و تطوير: <a href="https://iahmad.info" class="text-white" style=" font-family: 'Roboto';"> Ahmad Faqehi</a></p>
        </div>
    </div>
</footer>
<!--// Footer End //-->

<!--<a href="#" data-scroll-goto="1" class="scroll-top-btn"><i class="fa fa-arrow-up"></i></a>-->
<!--// Scroll Top Btn  //-->

<div class="preloader-wrap">
    <div class="preloader-inner">
        <div id="loader"></div>
    </div>
</div>
<!--// Preloader  //-->

<!--// Scripts //-->
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<!--// Theme Main Js // -->
<script src="js/main.js"></script>
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '28e1e7cc790aae898633c1bc56669ab314f53628';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-68483271-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-68483271-3');
</script>

</body>

</html>