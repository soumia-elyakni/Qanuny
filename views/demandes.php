<?php

if (!(isset($_SESSION['logged'])) && (!($_SESSION['role'] === 'محام') ||!($_SESSION['role'] === 'موثق'))){
  Redirect::to('home');
}; 
?>


<?php include_once 'includes/sidebar.php'; ?>

<main style="position: absolute; z-index: 20; width: calc(100% - 270px); top: 62px; right : 270px; padding: 20px;">
    <section class=" d-flex align-items-center px-3 justify-content-between" style=" margin-top : 40px; direction:rtl;">
        <h2 class="text-info text-center mb-5" style="margin-top :100px;">لائحة الطلبات</h2>
   
    <select name="statut" class="select mt-3 float-start" id="statut" style="width : 190px">
             <option selected="selected">الكل</option>
             <option value="عميل">الانتظار</option>
             <option value="محام">مقبول</option>
    </select>
    </section>

<?php ?>
<div class="card m-auto p-4 mb-4">
  <div class="card-header">
    <h6>علي العال</h6>
    <p>04/06/2022</p>
  </div>
  <div class="card-body">
    <h5 class="card-title">اجراءات الحصول على الحضانة</h5>
    <p class="card-text">لوريم ابسوم بننبتنتبلمنتلقهثتلقثهتلقهثتلقهتلقهخلاقهخلاقخلتتلتل</p>
    <p class="card-text"><?= $_SESSION['mail']?></p>
<div class=" d-flex float-start">  
<form class="ms-1">
    <a href="#" class="btn btn-primary">القبول</a>
</form>
<form class="me-1">
    <a href="#" class="btn btn-primary">الرفض</a>
</form>
</div> 
  </div>
</div>
<?php ?>


</main>

  