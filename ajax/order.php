<?php
session_start();
include "../includes/funtion.php";
include "../includes/Database.php";
include "../vendor/autoload.php";
use voku\helper\AntiXSS;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$antiXss = new AntiXSS();


if($_SERVER['REQUEST_METHOD'] == "POST") {


    $email = $_POST['email'];
    $name = $_POST['name'];
    $msg = $_POST['msg'];
    $save_msg = $antiXss->xss_clean($msg);
    $to = $_POST['from'];
    $import = $_POST['import'];
    $id = $_SESSION['memberId:TVTC'];
    $date = time();

    switch ($to){
        case 'support':
            $depart = "الدعم الفني";
            break;
        case 'key':
            $depart = "المفاتيح";
            break;
        case 'security':
            $depart = "الامن";
            break;
        case 'doctor':
            $depart = "الطبيبة";
            break;
        default:
            $depart = "غير معروف القسم";

    }

    switch ($to){
        case 'support':
            $roal_id = "1";
            break;
        case 'key':
            $roal_id = "4";
            break;
        case 'security':
            $roal_id = "2";
            break;
        case 'doctor':
            $roal_id = "3";
            break;
        default:
            $roal_id = "1";

    }

    // get emails for departs
    $stmtmail=$conn->prepare(" SELECT email FROM `users` WHERE users.roal =:roal  ");
    $stmtmail->bindValue(":roal", $roal_id);
    $stmtmail->execute();
    $count_mail = $stmtmail->rowCount();
    $rowmail = $stmtmail->fetchAll();

    //get info of user who send order
    $stmt_user=$conn->prepare(" SELECT name,email FROM `users` WHERE users.id =:id  ");
    $stmt_user->bindValue(":id", $id);
    $stmt_user->execute();
    $row_user = $stmt_user->fetch();
    $user_name = $row_user["name"];
    $user_email = $row_user["email"];

    //Todo: write a good body for msg

    if($import == 0){

        $sub = " تنبيه بطلب جديد  الى " . $depart;
        $im = "";
    }else{
        $sub = " تنبيه بطلب جديد الى " . $depart;
        $im = "هام";
    }



    $html_body = "
    
    <!DOCTYPE html>
<html lang=\"ar\" dir=\"rtl\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Email</title>
    <style>



     body {
      direction: rtl;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; 
      }
      .body {

        width: 100%; 
      }
      h1,
      h3,
      h4 {
        color: #000000;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        margin-bottom: 30px; 
      }

      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; 
      }





      h2{
        color: #0a0a0a;
    font-weight: normal;
    font-size: revert;
      }
      .xlg{
        font-size: x-large;
      }
      .red{
        color: red;
      }
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; 
      }
      .btn {

        display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1.3rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
      }
      .btn-primary {
        background-color: #3498db;
        border-color: #3498db;
        color: #ffffff; 
      }
      .last {
        margin-bottom: 0; 
      }

      .first {
        margin-top: 0; 
      }

      .align-center {
        text-align: center; 
      }


      .mt3 {
        margin-top: 30px; 
      }

      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        margin: 20px 0; 
      }

      .info{
        font-size: 18px;
        
      }
      span{ font-weight: bold ;}
      

    </style>
</head>
<body>

    <div class=\"container align-center mt3\">

       <h1>
          $sub  
        <br>
        <div class=\"red\">$im</div>
        </h1>
       
        
       <hr>
       <h2 class=\"xlg\">تفاصيل الطلب:</h2>
       <h2> $save_msg </h2>

       <br>
       <hr>
       <h2 class=\"xlg\">بيانات الطالب:</h2>
      
      
          <div class=\"info\">
            الاسم: <span> $user_name </span>
            <br>
            الائميل: <span><a href=\"mailto:$user_email\">$user_email</a></span>
          </div> 
      </div>

      <br>
      
    </div>
    <a href=\"https://tvtc-guides.com/dashboard\" class=\"btn btn-primary\"> الذهاب الى لوحة التحكم </a>
</body>
</html>
    ";

if($import){
    $sub = $sub . " - " . $im;
}



    //if there is no one in this depart, No mail send
    if($count_mail !== 0):
    $mail = new PHPMailer;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );


    // $mail->isSMTP();
    // $mail->Host = 'smtp.gmail.com';
    // $mail->SMTPAuth = true;
    // $mail->Username = "##";
    // $mail->Password = "#";
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                            // Enable TLS encryption, `ssl` also accepted
    // $mail->Port = 587;                                    // TCP port to connect to
    // $mail->setFrom("#", 'موقع خدمات الكلية التقنية الرقمية');
    // foreach ($rowmail as $mails):
    //     $mail->addAddress($mails['email']);     // Add a recipient
    //     endforeach;
    // $mail->CharSet = "UTF-8";
    // $mail->isHTML(true);                                  // Set email format
    // $mail->Subject = $sub;
    // $mail->Body = $html_body;
    // $mail->send();
    endif;

    $stmtz=$conn->prepare("INSERT INTO `order`(`to_who`, `message`, `important`, `from_who`, `date_order`) value (:towho,:message,:importt,:fromh,:date) ");
    $stmtz->bindValue(":towho", $to);
    $stmtz->bindValue(":message", $save_msg);
    $stmtz->bindValue(":importt", $import);
    $stmtz->bindValue(":fromh", $id);
    $stmtz->bindValue(":date", $date);
    $stmtz->execute();

    if($stmtz->rowCount() > 0){

        returnJSON(array('tp' => 'success', 't' => 'حسناً', 'm' => 'تم أرسال طلبك بنجاح','b' => false));

    }else{
        returnJSON(array('tp' => 'error', 't' => 'خطأ', 'm' => 'حدث خطأ غير معروف','b' => true));
    }

}