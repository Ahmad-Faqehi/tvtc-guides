<?php
session_start();
include "../includes/funtion.php";
include "../includes/Database.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){


    $email = $_POST['email'];
    $password = $_POST['password'];


    $stmt=$conn->prepare("SELECT id, password FROM users WHERE email=:email");
    $stmt->bindValue(":email", $email);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        $row = $stmt->fetch();
        $id = $row['id'];
        $password = $row['password'];
        $passwordd = password_verify($_POST['password'], $password);

        if($passwordd){
            $_SESSION['memberId:TVTC'] = $id;
            returnJSON(array('t' => 'حسناً','m' => 'تم تسجيل الدخول بنجاح.','tp' => 'success', 'b' => false));
        }else{
            returnJSON(array('t' => 'خطأ','m' => 'تفاصيل تسجيل الدخول الخاصة بك خاطئة ، حاول مرة أخرى.','tp' => 'error', 'b' => true));
        }

    }else{

        returnJSON(array('t' => 'خطأ','m' => 'تفاصيل تسجيل الدخول الخاصة بك خاطئة ، حاول مرة أخرى.','tp' => 'error', 'b' => true));

    }

//        returnJSON(array('tp' => 'error', 't' => 'خطأ', 'm' => 'حدث خطأ غير معروف من فضلك أعد تحميل هذه الصفحة','b' => true));

}