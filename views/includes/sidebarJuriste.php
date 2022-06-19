<link rel="stylesheet" href="public/css/sidebar.css">
<nav class="side_bar">
    <ul>
        <li>
            <a href="#">
                <h1 class="px-1 mt-4 ms-3 me-5 text-white fw-bolder" style="font-size: 20px">Al-Qanuny القانوني</h1>
            </a>
            <!-- <span class="d-none ms-5" onclick="openn()">
                    <i class="fas fa-times"></i>
                </span> -->
        </li>

        <li class="text-center">
            <img class="rounded-circle w-50 " src="">
            <h3 class="text-light"><?= $_SESSION['nom'] ?></h3>
            <p class="text-info "><?= $_SESSION['role'] ?></p>
        </li>


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
    </ul>
</nav>