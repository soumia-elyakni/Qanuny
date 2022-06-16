<?php



include_once 'includes/sidebar.php';
?>
<main style="position: absolute; z-index: 20; width: calc(100% - 270px); top: 62px; right : 270px; padding: 20px;">
<section class=" d-flex align-items-center px-3 justify-content-between" style=" margin-top : 40px; direction:rtl;">
        <h2 class="text-info text-center mb-5" style="margin-top :100px;">لائحة المحامين والموثقين</h2>
   
    <select name="statut" class="select mt-3 float-start" id="statut" style="width : 190px">
             <option selected="selected">الكل</option>
             <option value="محام">محام</option>
             <option value="موثق">موثق</option>
    </select>
    </section>
<div class="card py-3 px-2" style="width: 18rem;">
  <img src="public/image/mr_nobody_new.svg" class="card-img-top w-50 m-auto" alt="photo">
  <div class="card-body m-auto">
    <h5 class="card-title">الاسم الشخصي والعائلي</h5>
    <p class="card-text">موثق</p>
    <a href="#" class="btn btn-primary float-start">ارسال طلب</a>
  </div>
</div>


</main>