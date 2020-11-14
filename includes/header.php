<header class="header fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg p-0">
            <a class="navbar-brand btn btn-link" href="#">

                <img src="img/bg/tvtc.png" alt="Logo" class=" w-50 img-fluid img-thumbnail logo-transparent "style="background-color: #ffffff4a;
    border: 1px solid #dee2e694;">
                <img src="img/bg/tvtc.png" alt="Logo" class=" w-50 img-fluid logo-normal">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fixedNavbar" aria-controls="fixedNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="togler-icon-inner">
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                        <span class="line-3"></span>
                    </span>
            </button>
            <div class="collapse navbar-collapse main-menu justify-content-end" id="fixedNavbar" >
                <ul class="navbar-nav" style="text-align: initial;" dir="rtl">

                    <?php if($_SERVER['SCRIPT_NAME'] !== '/TVTC/index.php' ): $homeLink = "index.php"; else: $homeLink = "#"; endif; ?>

                    <li class="nav-item">
                        <a class="nav-link fonty" href=" <?php echo $homeLink?> "  style="font-size: 17px;">الرئيسية</a>
                    </li>
                    <?php if(!$isLogin) :?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fonty" href="#" id="homeDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 17px;">
                            حسابي
                        </a>
                        <div class="dropdown-menu text-right" aria-labelledby="homeDropdownMenu">
                            <a class="dropdown-item fonty" href="login.php">تسجيل دخول</a>
                            <a class="dropdown-item fonty" href="singup.php">أنشاء حساب</a>
                        </div>
                    </li>
                    <?php endif; ?>

                    <li class="nav-item">
                        <a class="nav-link fonty" href="listinfo.php"  style="font-size: 17px;">تواصل معانا</a>
                    </li>

                    <?php if($_SERVER['SCRIPT_NAME'] == '/TVTC/index.php' ): ?>
                    <li class="nav-item">
                        <a class="nav-link fonty" href="" data-scroll-nav="5" style="font-size: 17px;">فريق المشروع</a>
                    </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link menu-link fonty" href="Contact.php"  style="font-size: 17px;">أتصل بنا</a>
                    </li>
                    <?php if($isLogin) :?>
                    <li class="nav-item">
                        <a class="nav-link menu-link fonty" href="logout.php"  style="font-size: 17px;">تسجيل خروج</a>
                    </li>
                    <?php endif; ?>

                </ul>
            </div>
        </nav>
    </div>
</header>