<?php
session_start();
include "../includes/funtion.php";
include "../includes/Database.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $token = $_POST['token'];
    $re_password = $_POST['re_password'];
    $password = $_POST['password'];

    $stmt=$conn->prepare("SELECT id FROM users WHERE token=:token AND token<>'' AND token_end > NOW()");
    $stmt->bindValue(":token", $token);
    $stmt->execute();
    if($stmt->rowCount() == 0){

        returnJSON(array('tp' => 'error', 't' => 'خطأ', 'm' => 'حدث خطا ما. الرجاء طلب استعادة مره اخرى','b' => true));

    }elseif($password !== $re_password){

        returnJSON(array('tp' => 'error', 't' => 'خطأ', 'm' => 'كلمة المرور غير متطابقة','b' => true));



    }else{
        $passwordHashed=password_hash($password, PASSWORD_DEFAULT);

        $stmtup=$conn->prepare("UPDATE `users` SET `password`=:pass,`token`= '' WHERE token = :token");
        $stmtup->bindValue(":pass", $passwordHashed);
        $stmtup->bindValue(":token", $token);
        $stmtup->execute();
        if ($stmtup->rowCount() > 0) {
            returnJSON(array('tp' => 'success', 't' => 'حسناً', 'm' => 'تم تغير كلمة السر بنجاح. جاري تحويلك الى صفحة تسجيل الدخول','b' => false));
        }else{
            returnJSON(array('tp' => 'error', 't' => 'خطأ', 'm' => 'حدث خطاء أثناء تغير كلمة السر الرجاء المحاولة مره اخرى','b' => true));

        }
    }

}