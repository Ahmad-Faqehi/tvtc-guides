
<?php include "includes/head.php"; ?>

<body data-spy="scroll" data-target="#fixedNavbar" data-offset="70">

<!--// Header Start //-->
<?php include "includes/header.php";?>
<!--// Header End  //-->
<?php
if($isLogin){
    header("Location: index.php"); die();
}
?>
<!--// Breadcrumb Section Start //-->
<section class="breadcrumb-section jarallax" data-scroll-index="1" data-speed="0.5s" data-jarallax style="background-image: url('img/bg/bg-TVTC.jpeg'); " dir="rtl">
    <div class="container">
        <div class="breadcrumb-content text-center" style="direction: ltr;">
            <h1 class="bread-crumb-title">TVTC Guides</h1>
            <ul class="breadcrumb-links">
                <li class="breadcrumb-link fonty"><a href="index.php">الرئيسية</a></li>
                <li class="active fonty">تسجيل حساب</li>
            </ul>
        </div>
    </div>
</section>
<!--// Breadcrumb Section End //-->

<!--// Blog Grid Start //-->
<section class="section" id="blog-grid">
    <div class="container" dir="rtl">
        <div class="row justify-content-center">
            <div class="section-heading col-md-12 text-center " style="  margin-bottom: 15px;">
                <h2 class="section-title fonty">تسجيل حساب جديد</h2>
            </div>
            <form onSubmit="return false" style="display: contents;">

            <div class="col-6">
                <div class="contact-form-group">
                    <input type="text" class="form-input" name="first_name" id="first_name" placeholder="الاسم الاول">
                </div>
            </div>
            <div class="col-6">
                <div class="contact-form-group">
                    <input type="text" class="form-input" name="last_name" id="last_name" placeholder="الاسم الاخير">
                </div>
            </div>

                <div class="col-lg-12">
                    <div class="contact-form-group">
                        <input type="text" class="form-input" name="email" id="email" placeholder="الائميل">
                    </div>
                </div>


            <div class="col-lg-12">
                <div class="contact-form-group">
                    <input type="password" class="form-input" name="password" id="password" placeholder="كلمة المرور">
                </div>
            </div>

                <div class="col-lg-12">
                    <div class="contact-form-group">
                        <input type="password" class="form-input" name="re_password" id="re_password" placeholder="تاكيد كلمة المرور">
                    </div>
                </div>

            <div class="col-md-12 text-center pt-1">
                <div class="contact-btn-left custom-form">
                    <button type="submit" id="contactBtn" onClick="singup()" class="primary-button border-none">تسجيل</button>
                </div>
            </div>
            </form>

            <div class="col-12 text-right pt-4">
                <p>هل لديك حساب مسبقاً ؟<a href="login.php" class="text-main"> تسجيل دخول </a></p>

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
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script>

    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }




    function  singup() {

        var f_name= document.getElementById("first_name").value;
        var l_name= document.getElementById("last_name").value;

        var secound_name = f_name.replace(/\s/g, '')  + " " + l_name.replace(/\s/g, '');

        var email=document.getElementById("email").value;
        var password=document.getElementById("password").value;
        var re_password=document.getElementById("re_password").value;

        if(f_name == "" || l_name == "" || email == "" || password == "" || re_password == ""){

            swal({
                title: "عذراً",
                text: "الرجاء ملئ جميع الحقول",
                type: 'error',
                showConfirmButton: true,
                confirmButtonText: 'موافق'
            });
        }else if(!validateEmail(email)){

            swal({
                title: "خطا",
                text: "الرجاء التحقق من صحة الائميل",
                type: 'warning',
                showConfirmButton: true,
                confirmButtonText: 'موافق'
            });

        }else if(password !== re_password) {

            swal({
                title: "خطا",
                text: "الرجاء التحقق من كلمة المرور غير متطابقة",
                type: 'warning',
                showConfirmButton: true,
                confirmButtonText: 'موافق'
            });

        }else {

            sendData("reg.php", "email="+email+"&password="+password+"&username="+secound_name)
                .then(function(response){
                    swal({
                        title: response.t,
                        text: response.m,
                        type: response.tp,
                        showConfirmButton: response.b,
                        confirmButtonText: 'موافق'
                    });
                    if(response.tp == 'error'){

                    }else if(response.tp == 'success'){
                        setTimeout(function () { location.href = "./index.php";}, 3000);
                    }
                });

        }

    }
</script>

<!--// Theme Main Js // -->
<script src="js/main.js"></script>



</body>

</html>