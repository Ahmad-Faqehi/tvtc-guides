<?php

//if(!isset($_GET['do'])): header("Location: home.html"); die(); endif;
//if(isset($_GET['do'])){
//
//    $do = $_GET['do'];
//
//    switch ($do){
//        case 'support':
//            $job = "الدعم الفني";
//            break;
//
//        case 'key':
//            $job = "مسؤولة المفاتيح";
//            break;
//
//        case 'security':
//            $job = "الامن";
//            break;
//
//        case 'doctor':
//            $job = "الطبيبة";
//            break;
//
//        default:
//            $job = "";
//    }
//    if(empty($job)){
//        header("Location: index.php"); die();
//    }
//
//    $lable = " نموذج " . $job;
//}

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TVTC Guides - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@700&display=swap" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sb-admin-2.css">
    <style>
        .navbar-nav{
            padding-right: 0;
        }
        .input-group>.input-group-append>.btn{
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-top-left-radius: .35rem;
            border-bottom-left-radius: .35rem;
        }

        @media (min-width: 768px){
            .sidebar.toggled .nav-item .nav-link {
                text-align: center;
                padding: .75rem 1rem;
                padding-top: 0.35rem;
                padding-right: 1rem;
                padding-bottom: 0.75rem;
                padding-left: 1rem;
                width: 6.5rem;
            }
        }

        @media (min-width: 635px){
            .topbar .dropdown .dropdown-menu {
                width: auto;
                right: -110px;
            }
        }
        .head-menu{
            font-size: 12px;
        }

        *{
            font-family: 'Tajawal', sans-serif;

        }
    </style>

</head>

<body id="page-top" >

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion toggled" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon">
                <!-- <i class="fas fa-laugh-wink"></i> -->
                <img src="img/dark2.png" alt="" width="50" height="50">
            </div>
            <div class="sidebar-brand-text mx-3">FORT 92</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active ">
            <a class="nav-link text-center" href="index.html" >
                <i class="fas fa-home"></i>
                <span>الرئيسية</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading text-center Fonty">
            <div class="head-menu">الطلبات</div>
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link text-center" href="#">
                <i class="far fa-question-circle"></i>
                <span>الدعم الفني</span>
            </a>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link text-center" href="#">
                <i class="fas fa-key"></i>
                <span>مسؤولة المفاتيح</span>
            </a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link text-center" href="#">
                <i class="fas fa-user-shield"></i>
                <span>الامن </span>
            </a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link text-center" href="#">
                <i class="fas fa-user-md"></i>
                <span> الطبيبة </span>
            </a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading text-center Fonty" >
            <div class="head-menu">المفقودات</div>
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link text-center" href="#">
                <i class="fas fa-map-marker"></i>
                <span>عرض المفقودات</span>
            </a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link text-center" href="#">
                <i class="fas fa-plus-square"></i>
                <span>أضافة مفقود</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading text-center Fonty" >
            <div class="head-menu">أخرى</div>
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link text-center" href="#">
                <i class="fas fa-user-plus"></i>
                <span> أضافة مسؤول </span>
            </a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link text-center" href="#">
                <i class="fas fa-users"></i>
                <span>عرض المستخدمين</span>
            </a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link text-dark d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <!--          <form class="d-none d-sm-inline-block form-inline mr-auto mr-md-3 my-2 my-md-0 mw-100 navbar-search">-->
                <!--            <div class="input-group">-->
                <!--              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">-->
                <!--              <div class="input-group-append">-->
                <!--                <button class="btn btn-dark" type="button">-->
                <!--                  <i class="fas fa-search fa-sm"></i>-->
                <!--                </button>-->
                <!--              </div>-->
                <!--            </div>-->
                <!--          </form>-->

                <!-- Topbar Navbar -->
                <ul class="navbar-nav mr-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <!--            <li class="nav-item dropdown no-arrow d-sm-none">-->
                    <!--              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                    <!--                <i class="fas fa-search fa-fw"></i>-->
                    <!--              </a>-->
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header font-weight-bold text-center fonty-par bg-dark" style="font-size: medium; border-color: white">
                                أشعارات التواصل
                            </h6>

                            <a class="dropdown-item d-flex align-items-center" href="#" style="direction: rtl">
                                <div class="mr-3">
                                    <div class="icon-circle bg-dark">
                                        <i class="far fa-question-circle fa-1x text-white"></i>
                                    </div>
                                </div>
                                <div class="text-right mr-2">
                                    <div class="small text-gray-500">Nov 7, 2020</div>
                                    <br>
                                    <div class="fonty-par" style="margin-top: -17px; font-size: medium">طلب جديد لدعم الفني </div>
                                </div>
                            </a>

                            <a class="dropdown-item d-flex align-items-center" href="#" style="direction: rtl">
                                <div class="mr-3">
                                    <div class="icon-circle bg-dark">
                                        <i class="fas fa-user-md fa-1x text-white"></i>
                                    </div>
                                </div>
                                <div class="text-right mr-2">
                                    <div class="small text-gray-500">Nov 7, 2020</div>
                                    <br>
                                    <div class="fonty-par" style="margin-top: -17px; font-size: medium">طلب جديد على الطبيبة</div>
                                </div>
                            </a>

                            <a class="dropdown-item d-flex align-items-center" href="#" style="direction: rtl">
                                <div class="mr-3">
                                    <div class="icon-circle bg-danger">
                                        <i class="fas fa-key fa-1x text-white"></i>
                                    </div>
                                </div>
                                <div class="text-right mr-2">
                                    <div class="small text-gray-500">Nov 7, 2020</div>
                                    <br>
                                    <div class="fonty-par" style="margin-top: -17px; font-size: medium">   طلب جديد لمسؤولة المفاتيح - هام </div>
                                </div>
                            </a>


                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow" dir="ltr">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800 text-right Fonty">لوحة التحكم</h1>

                </div>
                <!-- Content Row -->
                <div class="row">

                    <div class="col-xl-12 col-lg-12">

                        <!-- Dropdown Card Example -->
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary text-center">بيانات المسؤلين</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body" style="direction: ltr;">

                                <div class="table-responsive">
                                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0" dir="rtl">
                                        <thead dir="">
                                        <tr>
                                            <th>الاسم</th>
                                            <th>القسم</th>
                                            <th>الائميل</th>
                                            <th>تعديل</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>نورة محمد</td>
                                            <td>المفاتيح</td>
                                            <td><a href="mailto:dfgh@TVTC.com"> dfgh@TVTC.com </a></td>
                                            <td><a href="edit-user.php" class="btn btn-primary">تعديل</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <!-- Content Row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<div class="text-left">
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>


<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
