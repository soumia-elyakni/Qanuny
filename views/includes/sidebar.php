<link rel="stylesheet" href="public/css/sidebar.css">

<!--sidebar-->
 <nav class="side_bar">
        <ul>
            <li>
                <a href="#">
                <h1 class="px-1 mt-4 ms-3 me-5 text-white fw-bolder" style="font-size: 20px">Al-Qanuny القانوني</h1>
                </a>
                <span class="d-none ms-5" onclick="openn()">
                    <i class="fas fa-times"></i> 
                </span>
            </li>
            <li class="text-center">
                <img class="rounded-circle w-50 " src="">
                <h3 class="text-dark ">Selya</h3>
                    <!-- <?php // echo $_SESSION['name']?> -->
                <p class="text-info ">Admin</p>
            </li>
        </ul>
        <ul class="linklist d-flex flex-column justify-content-center align-items-center  p-1">
            <li class="link mt-3 ps-3 rounded-3 ">
                <a href="cruduser.html">
                    <img class="mx-auto" src="images/svg/home.svg" alt="">
                    <small class="text-light">لائحة المستخدمين</small>
                </a>
            </li>
            <li class="link mt-3 ps-3 rounded-3 ">
                <a href="nouveauxJuristes.php">
                    <img class="mx-auto" src="images/svg/cours.svg" alt="">
                    <small class="text-light">طلبات التسجيل</small>
                </a>
            </li>

            <li class="link mt-5 ps-3 rounded-3 ">
                <a href="logouat.php">
                    <small class="text-light">تسجيل الخروج</small>
                    <img class="ms-1" src="images/svg/logout.svg" alt="">
                </a>
            </li>
        </ul>
    </nav>