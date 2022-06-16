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
        <?php if (!empty($_SESSION)){ ?>
            <li class="text-center">
                <img class="rounded-circle w-50 " src="">
                <h3 class="text-light"><?php  echo $_SESSION['User_name']?></h3>
                <p class="text-info ">Admin</p>
            </li>
        </ul>
        <ul class="linklist d-flex flex-column justify-content-center align-items-center  p-1">
            <li class="link mt-3 ps-3 rounded-3 ">
                <a href="Tableau">
                    <img class="mx-auto" src="images/svg/home.svg" alt="">
                    <small class="text-light">لائحة المستخدمين</small>
                </a>
            </li>
            <li class="link mt-3 ps-3 rounded-3 ">
                <a href="nouveauxJuristes">
                    <img class="mx-auto" src="images/svg/cours.svg" alt="">
                    <small class="text-light">طلبات التسجيل</small>
                </a>
            </li>

            <li class="link mt-5 ps-3 rounded-3 ">
                <a href="logouat">
                    <small class="text-light">تسجيل الخروج</small>
                    <img class="ms-1" src="images/svg/logout.svg" alt="">
                </a>
            </li>
        </ul>
        <?php } else if ($_SESSION['role'] == "عميل"){ ?>
            <li class="text-center">
                <img class="rounded-circle w-50 " src="">
                <h3 class="text-light"><?=  $_SESSION['nom'] ?><?= $_SESSION['prenom'] ?> ?></h3>
                <p class="text-info ">عميل</p>
            </li>
        </ul>
        <ul class="linklist d-flex flex-column justify-content-center align-items-center  p-1">
            <li class="link mt-3 ps-3 rounded-3 ">
                <a href="juristeListe">
                    <img class="mx-auto" src="images/svg/home.svg" alt="">
                    <small class="text-light">لائحة المحامين والموثقين</small>
                </a>
            </li>
            <li class="link mt-3 ps-3 rounded-3 ">
                <a href="mesDemandes">
                    <img class="mx-auto" src="images/svg/cours.svg" alt="">
                    <small class="text-light">تفاصيل الطلبات</small>
                </a>
            </li>

            <li class="link mt-5 ps-3 rounded-3 ">
                <a href="logouat">
                    <small class="text-light">تسجيل الخروج</small>
                    <img class="ms-1" src="images/svg/logout.svg" alt="">
                </a>
            </li>
        </ul>
        <?php } else { ?>
            <li class="text-center">
                <img class="rounded-circle w-50 " src="">
                <h3 class="text-light"><?= $_SESSION['nom']?><?= $_SESSION['prenom']?></h3>
                <p class="text-info "><?= $_SESSION['role']?></p>
            </li>
        </ul>
        <ul class="linklist d-flex flex-column justify-content-center align-items-center  p-1">
            <li class="link mt-3 ps-3 rounded-3 ">
                <a href="demandes">
                    <img class="mx-auto" src="images/svg/home.svg" alt="">
                    <small class="text-light">لائحة الطلبات</small>
                </a>
            </li>
            <li class="link mt-3 ps-3 rounded-3 ">
                <a href="détailRV">
                    <img class="mx-auto" src="images/svg/cours.svg" alt="">
                    <small class="text-light">لائحة المواعيد</small>
                </a>
            </li>

            <li class="link mt-5 ps-3 rounded-3 ">
                <a href="logouat">
                    <small class="text-light">تسجيل الخروج</small>
                    <img class="ms-1" src="images/svg/logout.svg" alt="">
                </a>
            </li>
        </ul>
        <?php } ?>

    </nav>