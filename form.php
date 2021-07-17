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
<?php include "includes/head.php";
if(!$isLogin){
    header("Location: index.php"); die();
}
$id = $_SESSION['memberId:TVTC'];
$conn = Database::getInstance();
$check = $conn->prepare("SELECT name,email FROM users WHERE id=:id");
$check->bindValue(":id", $id);
$check->execute();
$row = $check->fetch();
?>


<body data-spy="scroll" data-target="#fixedNavbar" data-offset="70">

<!--// Header Start //-->
<?php include "includes/header.php";?>
<!--// Header End  //-->

<!--// Breadcrumb Section Start //-->
<section class="breadcrumb-section jarallax" data-scroll-index="1" data-speed="0.5s" data-jarallax style="background-image: url('img/bg/bg-TVTC.jpeg'); " dir="rtl">
    <div class="container">
        <div class="breadcrumb-content text-center" style="direction: ltr;">
            <h1 class="bread-crumb-title">TVTC Guides</h1>
            <ul class="breadcrumb-links">
                <li class="breadcrumb-link fonty"><a href="orders.php">الطلبات</a></li>
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
            <form onsubmit="return false" style="display: contents;">
            <fieldset disabled style="width: 100%">

            <div class="col-lg-12">
                <label for="disabledTextInput" class="d-flex text-dark">الاسم</label>
                <div class="contact-form-group">
                    <input type="text" class="form-input" name="name" id="name" value="<?=$row['name']?>" readonly>
                </div>
            </div>

                <div class="col-lg-12">
                    <label for="disabledTextInput" class="d-flex text-dark">الائميل</label>
                    <div class="contact-form-group">
                        <input type="email" class="form-input" name="email" id="email" value="<?=$row['email']?>" readonly>
                    </div>
                </div>
            </fieldset>

            <div class="col-lg-12">
                <label for="disabledTextInput" class="d-flex text-dark">تفاصيل الطلب</label>
                <div class="contact-form-group">
                    <textarea class="form-input" id="msg" placeholder="أكتب رسالتك هنا..." cols="20" rows="10" autocomplete="off"></textarea>
                </div>
            </div>

            <div class="col-lg-12">
                <label for="" class="d-flex text-dark">حالة الطلب</label>
                <div class="form-check d-flex">
                    <input class="form-check-input" type="radio" name="imp" id="imp" value="0" checked>
                    <label class="form-check-label mr-4 " for="exampleRadios1"> غير هام</label>
                </div>
                <div class="form-check d-flex">
                    <input class="form-check-input " type="radio" name="imp" id="imp" value="1">
                    <label class="form-check-label mr-4 text-danger " for="exampleRadios2"> هام</label>
                </div>
            </div>


            <div class="col-md-12 text-center pt-1">
                <div class="contact-btn-left custom-form">
                    <button type="submit" id="contactBtn" onClick="send()" class="primary-button border-none">ارسال</button>
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
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script>






    function  send() {



        var email=document.getElementById("email").value;
        var name=document.getElementById("name").value;
        var msg=document.getElementById("msg").value;
        var importent =  document.querySelector('input[name="imp"]:checked').value;
        var myParam = location.search.split('do=')[1]




        if( msg == ""){

            swal({
                title: "عذراً",
                text: "الرجاء كتابة رسالتك",
                type: 'error',
                showConfirmButton: true,
                confirmButtonText: 'موافق'
            });
        }else {

            wait();
            sendData("order.php", "email="+email+"&name="+name+"&import="+importent+"&msg="+msg+"&from="+myParam)
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
                        setTimeout(function () { location.href = "./orders.php";}, 3500);
                    }
                });

        }

    }

    function wait(){


        swal({
            title: 'جاري الأرسال',
            allowOutsideClick: false,
            allowEscapeKey: false,
            text: 'إنتظر قليلا من فضلك',
            confirmButtonText: null,
            onOpen: () => {
                swal.showLoading()
            }
        });
    }
</script>

<!--// Theme Main Js // -->
<script src="js/main.js"></script>

</body>

</html>