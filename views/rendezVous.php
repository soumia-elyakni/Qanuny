<?php

if (!(isset($_SESSION['logged'])) && (!($_SESSION['role'] === 'محام') ||!($_SESSION['role'] === 'موثق'))){
  Redirect::to('home');
}; 
?>



<main style="position: absolute; z-index: 20; width: calc(100% - 270px); top: 62px; right : 270px; padding: 20px;">
<div class="card py-3 px-2" style="width: 18rem;">
  <img src="public/image/mr_nobody_new.svg" class="card-img-top w-50 m-auto" alt="photo">
  <div class="card-body m-auto">
    <h5 class="card-title">الاسم الشخصي والعائلي</h5>
    <p class="card-text">01/07/2022 15:00</p>
    <p class="card-text">localisation</p>

    <!-- <a href="#" class="btn btn-primary float-start">ارسال طلب</a> -->
    <button type="button" class="btn btn-primary float-start" data-bs-toggle="modal" data-bs-target="#sendDemande">رسالة</button>

  </div>
</div>

</main>