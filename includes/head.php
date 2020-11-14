<?php include  "dashboard/includes/DataBase.php";
session_start();
$isLogin = true;
if(!isset($_SESSION['memberId:TVTC'])):
    $isLogin = false;
endif;
?>
<!DOCTYPE html>
<html lang="ar" >
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="app landing page,business,finance,corporate,landing page,ui,ux">
    <meta name="author" content="Yucel Yilmaz">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TVTC Guides</title>
    <!--// Icons //-->
    <link rel="stylesheet" href="fonts/flat_icons/flaticon.css">
    <link rel="stylesheet" href="fonts/flat-icons2/flaticon.css">
    <link rel="stylesheet" href="fonts/font_awesome/css/all.css">
    <!--// Google Fonts //-->

    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i&display=swap&subset=latin-ext" rel="stylesheet">
    <!--// FrameWorks //-->
    <link rel="stylesheet" href="css/frameworks.css">
    <!--// Theme Main Js //-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mystyle.css">

    <style>
        *{
            font-family: "JF Flat Regular", "roboto", sans-serif, arial;

        }
    </style>
</head>