
<?php include "includes/head.php"; ?>



<body data-spy="scroll" data-target="#fixedNavbar" data-offset="70">
<style>
a{
color: #6c63ff;}
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
                <li class="active fonty"> التواصل </li>
            </ul>
            </ul>
        </div>
    </div>
</section>
<!--// Breadcrumb Section End //-->

<scction class="section "  id="info" >

    <div class="container" dir="rtl">
        <div class="row justify-content-center  mt-4">
            <div class="section-heading col-md-12 text-center" style="  margin-bottom: 1px;">
                <h6 class="section-title fonty">  التواصل مع المسؤولين </h6>
            </div>

            <div class="col-md-12 text-right  table-responsive ">
                <table class="table table-bordered table-hover text-center">

                    <thead>
                    <tr>
                        <th scope="col">الاسم</th>
                        <th scope="col">القسم</th>
                        <th scope="col">الائميل</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $stmt=$conn->prepare("SELECT * FROM `info_list` where supervisor = 0 ORDER BY `info_list`.`id` ASC ");
                    $stmt->execute();
                    if($stmt->rowCount() > 0) {
                        $rows = $stmt->fetchAll();
                        foreach ($rows as $row) {
                            $name = $row['name'];
                            $depart = $row['depart'];
                            $email = $row['email'];?>
                    <tr>
                        <td><?=$name?></td>
                        <td><?=$depart?></td>
                        <td><a href="mailto:<?=$email?>"><?=$email?></a></td>
                    </tr>
                    <?php } } ?>

                    </tbody>

                </table>
            </div>


            <?php
            $stmt=$conn->prepare("SELECT * FROM `info_list` where supervisor = 1 ORDER BY `info_list`.`id` ASC ");
            $stmt->execute();
            if($stmt->rowCount() > 0) {
            $rows = $stmt->fetchAll();

            ?>

            <!-- بداية جدول المدربات -->
            <div class="section-heading col-md-12 text-center  " style="margin-bottom: 1px; margin-top: 30px">
                <h6 class="section-title fonty"> المدربات </h6>
            </div>

            <div class="col-md-12 text-right  table-responsive " style="padding-bottom: 30px">
                <table class="table table-bordered table-hover text-center">

                    <thead>
                    <tr>
                        <th scope="col">الاسم</th>
                        <th scope="col">القسم</th>
                        <th scope="col">الائميل</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                foreach ($rows as $row) {
                    $name = $row['name'];
                    $depart = $row['depart'];
                    $email = $row['email'];
                    ?>
                    <tr>
                        <td><?=$name?></td>
                        <td><?=$depart?></td>
                        <td><a href="mailto:<?=$email?>"><?=$email?></a></td>
                    </tr>
                    <?php } ?>
                    </tbody>

                </table>
            </div>
            <!-- نهاية جدول المدربات -->
<?php   }?>
        </div>
        <div class="pb-3"></div>
    </div>


</scction>


<!--// Footer Start //-->
<footer class="footer ">
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
            title: "قريباً",
            text: "سوف يعمل النظام قريباً",
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