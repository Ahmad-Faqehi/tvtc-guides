<?php
session_start();
if(isset($_SESSION['memberId:TVTC'])){
    unset($_SESSION['memberId:TVTC']);
//    session_unset();
//    session_destroy();
    exit(header("Refresh:0; url=login.php"));

}else{
    exit(header("Refresh:0; url=login.php"));
}
die();
?>