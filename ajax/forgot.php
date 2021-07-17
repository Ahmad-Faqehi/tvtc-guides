<?php
session_start();
include "../includes/funtion.php";
include "../includes/Database.php";
include "../vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if($_SERVER['REQUEST_METHOD'] == "POST") {


    $email = $_POST['email'];
    $token = generateNewString();

    $html_body = "
    <!DOCTYPE html>
<html lang=\"ar\" dir=\"rtl\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Email</title>
    <style>



     body {
      
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


      h2{
        color: #0a0a0a;
    font-weight: normal;
    font-size: revert;
      }
      .xlg{
        font-size: x-large;
      }

      .align-center {
        text-align: center; 
      }
      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        margin: 20px 0; 
      }

      .mt3 {
        margin-top: 30px; 
      }
      

    </style>
</head>
<body>

    <div class=\"container align-center mt3\">

       <h1>
         طلب استعادة كلمة المرور
      </h1>
       
    
       <hr>
       <h2 class=\"xlg\"> أضغط
         <a href=\"https://tvtc-guides.com/newpassword.php?token=$token\" >هـنـا </a>
         لتغير كلمة السر
       </h2>
    
      </div>
      
    

</body>
</html>
    ";


    $stmtc = $conn->prepare("SELECT id  from `users` WHERE email =:email");
    $stmtc->bindValue(":email", $email);
    $stmtc->execute();
    if ($stmtc->rowCount() == 0) {
        returnJSON(array('t' => 'خطأ', 'm' => 'هذا الائميل غير مسجل بعد', 'tp' => 'error', 'b' => true));
    } else {



        $stmt = $conn->prepare("UPDATE `users` set token = :token  , token_end = DATE_ADD(NOW(), INTERVAL 30 MINUTE)  WHERE email =:email");
        $stmt->bindValue(":token", $token);
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {

            //Todo Send mail has token of man.

            $mail = new PHPMailer;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );


            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = "#"; // Todo: Write The Email Here 
            $mail->Password = "#"; // Todo: Write the Password Here
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
            $mail->setFrom("#", 'موقع خدمات الكلية التقنية الرقمية');
            $mail->addAddress($email);     // Add a recipient
            $mail->CharSet = "UTF-8";
            $mail->isHTML(true);                                  // Set email format
            $mail->Subject = "طلب أستعادة كلمة المرور جديدة";
            $mail->Body = $html_body;
            if($mail->send()){
                returnJSON(array('t' => 'حسناً', 'm' => 'تم أرسال الطلب بنجاح. سوف تصلك رسالة في صندوق البريد تحتوي على رابط أستعادة كلمة المرور ', 'tp' => 'success', 'b' => false));
            }else{
                returnJSON(array('t' => 'خطأ', 'm' => 'حدث خطا ما، حاول مرة أخرى', 'tp' => 'error', 'b' => true));
            }


        } else {

            returnJSON(array('t' => 'خطأ', 'm' => 'تفاصيل تسجيل الدخول الخاصة بك خاطئة ، حاول مرة أخرى', 'tp' => 'error', 'b' => true));

        }

//        returnJSON(array('tp' => 'error', 't' => 'خطأ', 'm' => 'حدث خطأ غير معروف من فضلك أعد تحميل هذه الصفحة','b' => true));

    }
}