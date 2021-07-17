<?php include "includes/head.php"; ?>

<body data-spy="scroll" data-target="#fixedNavbar" data-offset="70">
<style>
    *  , h5, h6{
        font-family: "JF Flat Regular", "roboto", sans-serif, arial;

    }

    @media only screen and (min-width: 768px) {
        a > h6 {
            font-size: 25px;
        }
    }
    .modal-header .close {
        /* padding: 1rem 1rem; */
        /* margin: -1rem -1rem -1rem auto; */
    }

    .btn-secondary {
    color: #5a59e6;
    background-color: #6c757d00;
    border-color: #403f48;
}
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
                <li class="active fonty">المفقودات</li>
            </ul>
        </div>
    </div>
</section>
<!--// Breadcrumb Section End //-->

<!-- Services Start -->
<section class="section pb-minus-70" id="services" data-scroll-index="2" dir="rtl">
    <div class="container">

        <div class="row justify-content-center">
            <div class="blog-sidebar" style="width: 85%;">

                <div class="blog-widgets text-right " >
                    <h5 class="inner-header-title text-center">قائمة المفقودات</h5>

                    <?php

                    $stmt=$conn->prepare("SELECT * FROM `lost` ORDER BY `lost`.`date` DESC  ");
                    $stmt->execute();
                    $count = 0;
                    if($stmt->rowCount() > 0) {
                        $rows = $stmt->fetchAll();
                        foreach ($rows as $row) {
                            $id_lost = $row['id'];
                            $title = $row['title'];
                            $image = $row['image'];
                            $date = $row['date'];
                            $state = $row['state'];
                            ?>

                            <?php if($state != 1): $count++; ?>
                            <div class="recent-post-item clearfix">
                                <div class="  mr-3">
                                    <a  href="#" data-toggle="modal" data-target="#show_m<?=$id_lost?>">
                                        <img class="img-fluid w-50" src="img/lost/<?php if(!empty($image)): echo $image; else: echo "placeholder.png"; endif; ?>" alt="صورة المفقود" style="float: left;">
                                    </a>
                                </div>
                                <div class="recent-post-body">
                                    <a  href="#" data-toggle="modal" data-target="#show_m<?=$id_lost?>">
                                        <h6 class="recent-post-title fo "><?=$title?></h6>
                                    </a>
                                    <p class="recent-post-date" dir="ltr"><i class="far fa-clock"></i><?php echo  date('d M, Y', $date)?></p>
                                </div>
                            </div>
                                <hr>
                            <?php endif;   } ?>


                       <?php
                       if($count == 0):
                        echo '<div class="recent-post-item clearfix text-center ">
                        <h1 class="fonty h3 p-3">لا يوجد مفقودات حالياً</h1>
                    </div>';
                       endif;
                    }  ?>



                </div>


        </div>
    </div>
</section>
<!--// Services End  //-->


<!-- Todo Show models for every lost -->
<?php
foreach ($rows as $row) :
    $id_lost = $row['id'];
    $title = $row['title'];
    $description = $row['description'];

    if($description):
    ?>
<div id="show_m<?=$id_lost?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header" style="direction: rtl;background-color: #6362c5!important;">
                <h5 class="modal-title text-white"> <?=$title?> </h5>
            </div>
            <div class="modal-body" style="font-size: 16px;">
                <div class="text-right">
                    <p class="text-justify text-dark  p-2" dir="rtl">
                        <?=$description?>
                    </p>

                </div>

                <div class="text-center pt-2">
                    <hr>
                <button type="button" class=" btn btn-secondary text-center" data-dismiss="modal"> اغلاق </button>
            </div>
            </div>
        </div>

    </div>
</div>
<?php
endif;
endforeach;
?>

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


<div class="preloader-wrap">
    <div class="preloader-inner">
        <div id="loader"></div>
    </div>
</div>
<!--// Preloader  //-->

<!--// Scripts //-->
<script src="js/swal.js"></script>
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