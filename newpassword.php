<?php include "includes/head.php"; ?>

<?php

if(!isset($_GET['token'])){
    header("Location: index.php"); die();
}

$stmtc = $conn->prepare("SELECT id  from `users` WHERE token =:token AND token<>'' AND token_end > NOW()");
$stmtc->bindValue(":token", $_GET['token']);
$stmtc->execute();
if ($stmtc->rowCount() == 0){
    header("Location: index.php"); die();
}else{

?>

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
                <li class="active fonty">تعين كلمة مرور</li>
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
                <h2 class="section-title fonty">تعين كلمة مرور</h2>
            </div>
            <form onSubmit="return false" style="display: contents;">

                <div class="col-lg-12">
                    <div class="contact-form-group">
                        <label for="disabledTextInput" class="d-flex text-dark">كلمة المرور الجديدة</label>
                        <input type="hidden" name="token" id="token" value="<?=$_GET['token']?>">
                        <input type="password" class="form-input" name="password" id="password"  >
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="contact-form-group">
                        <label for="disabledTextInput" class="d-flex text-dark">أعادة كلمة المرور الجديدة</label>
                        <input type="password" class="form-input" name="re_password" id="re_password"  >
                    </div>
                </div>


                <div class="col-md-12 text-center pt-1">
                    <div class="contact-btn-left custom-form">
                        <button type="submit" id="contactBtn" onClick="change()" class="primary-button border-none">تغير</button>
                    </div>
                </div>
            </form>

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




    function  change() {





        var token=document.getElementById("token").value;
        var password=document.getElementById("password").value;
        var re_password=document.getElementById("re_password").value;


        if( re_password == "" || password == ""){

            swal({
                title: "عذراً",
                text: "الرجاء ملئ جميع الحقول",
                type: 'error',
                showConfirmButton: true,
                confirmButtonText: 'موافق'
            });
        }else if(re_password !== password){

            swal({
                title: "خطا",
                text: "كلمة المرور غير متطابقة",
                type: 'error',
                showConfirmButton: true,
                confirmButtonText: 'موافق'
            });

        }else {

            sendData("change.php", "re_password="+re_password+"&password="+password+"&token="+token)
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
                        setTimeout(function () { location.href = "./login.php";}, 5000);
                    }
                });

        }

    }
</script>

<!--// Theme Main Js // -->
<script src="js/main.js"></script>

</body>

</html>
<?php } ?>