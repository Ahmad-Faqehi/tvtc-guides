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


    //Todo: write a good body for msg
    $final_body = $msg;

    //Todo: changer super mail to depart mail
    $super_mail = "hayder775@gmail.com";

    if($import == 0){

        $sub = "طلب الى " . $depart;
    }else{
        $sub = "طلب الى " . $depart . " هام ";
    }


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
    $mail->Username = "fort92mail@gmail.com";
    $mail->Password = "5878ASDde!d4";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->setFrom($super_mail, 'موقع خدمات الكلية التقنية الرقمية');
    $mail->addAddress($super_mail);     // Add a recipient
    $mail->CharSet = "UTF-8";
    $mail->isHTML(true);                                  // Set email format
    $mail->Subject = $sub;
    $mail->Body = $final_body;
    $mail->send();


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