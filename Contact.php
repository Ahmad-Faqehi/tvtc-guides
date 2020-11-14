<?php include "includes/head.php";
include "vendor/autoload.php";
use voku\helper\AntiXSS;
$antiXss = new AntiXSS();

?>



<body data-spy="scroll" data-target="#fixedNavbar" data-offset="70">
<!--// Header Start //-->
<?php include "includes/header.php  "; ?>
<!--// Header End  //-->

<!--// Breadcrumb Section Start //-->
<section class="breadcrumb-section jarallax" data-scroll-index="1" data-speed="0.5s" data-jarallax style="background-image: url('img/bg/bg-TVTC.jpeg'); " dir="rtl">
    <div class="container">
        <div class="breadcrumb-content text-center" style="direction: ltr;">
            <h1 class="bread-crumb-title">TVTC Guides</h1>
            <ul class="breadcrumb-links">
                <li class="breadcrumb-link fonty"><a href="index.php">الرئيسية</a></li>
                <li class="active fonty"> أتصل بنا </li>
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
                <h5 class="section-title fonty">نموذج للتواصل</h5>
            </div>

<?php

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $msg = $_POST['msg'];
        $save_msg = $antiXss->xss_clean($msg);
        $phone_number = $_POST['number'];
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo '
              <div class="alert alert-danger text-right" role="alert"  >
               الرجاء التاكد من الائميل <a href=""> أعادة المحاولة </a>
            </div>
            ';die();
        }

$stmtz=$conn->prepare("INSERT INTO `contact`(`name`, `email`, `phone`, `message`,`date`) value (:name,:email,:phone,:msg,:date) ");
$stmtz->bindValue(":name", $name);
$stmtz->bindValue(":email", $email);
$stmtz->bindValue(":phone", $phone_number);
$stmtz->bindValue(":msg", $save_msg);
$stmtz->bindValue(":date", time());
$stmtz->execute();

if($stmtz->rowCount() > 0){
echo '
     <div class="alert alert-success text-right" role="alert"  >
               تم ارسال رسالتك بنجاح. شكرا لتواصلك
            </div>
';
}else{
    echo '
     <div class="alert alert-danger text-right" role="alert"  >
              حدث خطاء غير متوقع. الرجاء المحاولة مره أخرى
            </div>
';
}


    }

?>


            <form action="" method="post" style="display: contents;">
                <div class="col-lg-12">
                    <label for="disabledTextInput" class="d-flex text-dark">الاسم</label>
                    <div class="contact-form-group">
                        <input type="text" class="form-input" name="name" id="disabledTextInput" required >
                    </div>
                </div>


            <div class="col-lg-12">
                <label for="disabledTextInput" class="d-flex text-dark">الائميل</label>
                <div class="contact-form-group">
                    <input type="email" class="form-input" name="email" id="disabledTextInput" required >
                </div>
            </div>

            <div class="col-lg-12">
                <label for="disabledTextInput" class="d-flex text-dark">  رقم الهاتف 	&nbsp; <span class="text-muted"> (أختياري) </span> </label>
                <div class="contact-form-group">
                    <input type="number" class="form-input" name="number" id="disabledTextInput" >
                </div>
            </div>

            <div class="col-lg-12">
                <label for="disabledTextInput" class="d-flex text-dark">الرسالة</label>
                <div class="contact-form-group">
                    <textarea class="form-input" name="msg" placeholder="أكتب محتوى رسالتك هنا..." cols="20" rows="10" autocomplete="off" required></textarea>
                </div>
            </div>

            <div class="col-md-12 text-center pt-1">
                <div class="contact-btn-left custom-form">
                    <button type="submit" id="contactBtn" name="submit" class="primary-button border-none">أرسال</button>
                </div>
            </div>
            </form>
        </div>
    </div>

</section>
<!--// Blog Grid End //-->

<hr>
<scction class="section" id="info" >

    <div class="container" dir="rtl">
        <div class="row justify-content-center  mt-4">
            <div class="section-heading col-md-12 text-center" style="  margin-bottom: 15px;">
                <h5 class="section-title fonty"> يمكنك التواصل من خلال </h5>
            </div>

            <!--            <div class=" col-lg-12 text-right d-flex mb-1">-->
            <!--                <strong>الائميل:</strong> &nbsp;  <a href="mailto:info@TVTC.com">info@TVTC.com</a>-->
            <!--            </div>-->

            <!--            <div class=" col-lg-12 text-right d-flex mb-1">-->
            <!--                <strong>رقم الهاتف:</strong> &nbsp;  011 417 1333-->
            <!--            </div>-->

            <!--            <div class=" col-lg-12 text-right d-flex mb-1">-->
            <!--                <strong>العنوان:</strong> &nbsp;  شارع رفحاء، صلاح الدين، الرياض 12433-->
            <!--            </div>-->
            <div class="col-md-12 text-right  table-responsive ">
                <table class="table table-borderless ">

                    <tbody  >
                    <tr>
                        <th scope="row">الائميل</th>
                        <td><a href="mailto:info@TVTC.com">info@tvtc.edu.sa</a></td>
                    </tr>

                    <tr>
                        <th scope="row">رقم الهاتف</th>
                        <td style="direction: ltr">011 417 1333</td>
                    </tr>

                    <tr>
                        <th  scope="row">العنوان</th>
                        <td >العباس بن الأحنيف المرسلات الرياض 12464</td>
                    </tr>
                    </tbody>

                </table>
            </div>

            <div class="">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.109602263168!2d46.69181151500089!3d24.757430984102655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDQ1JzI2LjgiTiA0NsKwNDEnMzguNCJF!5e0!3m2!1sen!2ssa!4v1604661157379!5m2!1sen!2ssa" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

        </div>
    </div>


</scction>

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