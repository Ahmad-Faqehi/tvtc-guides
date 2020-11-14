<?php
session_start();
include "../includes/funtion.php";
include "../includes/Database.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $roal = 4;

    $stmt=$conn->prepare("SELECT email FROM users WHERE email=:email");
    $stmt->bindValue(":email", $_POST['email']);
    $stmt->execute();
    if($stmt->rowCount() == 0){

        $passwordHashed=password_hash($_POST['password'], PASSWORD_DEFAULT);
        $stmtz=$conn->prepare("INSERT INTO users (name,password,email,roal) VALUES (:name,:password,:email,4)");
        $stmtz->bindValue(":password", $passwordHashed);
        $stmtz->bindValue(":email", $email);
        $stmtz->bindValue(":name", $username);
        $stmtz->execute();
        if($stmtz->rowCount() > 0){
            $MID = $conn->lastInsertId();
            $_SESSION['memberId:TVTC'] = $MID;
            returnJSON(array('tp' => 'success', 't' => 'حسناً', 'm' => 'تم تسجيل حسابك بنجاح','b' => true));
        }else{
            returnJSON(array('tp' => 'error', 't' => 'خطأ', 'm' => 'حدث خطأ غير معروف','b' => true));
        }

    }else{

        returnJSON(array('tp' => 'error', 't' => 'خطأ', 'm' => 'أنت مسجل مسبقاً','b' => true));

    }

//        returnJSON(array('tp' => 'error', 't' => 'خطأ', 'm' => 'حدث خطأ غير معروف من فضلك أعد تحميل هذه الصفحة','b' => true));

}