<?php
  $newUser = new UserControllers();
  $newUser-> addUser();
  // Redirect::to('home');
?>

<?php if( $data['role'] == "عميل"){ ?>

<div class="container-fluid border border-success position-absolute top-50 mx-auto  translate-middle w-50 " >
  <div class="card-header bg-transparent border-success"><h5 class="card-title">مبروك</h5></div>
  <div class="card-body text-success">
    <h5 class="card-title">مرحبا</h5>
    <p class="card-text">لقد تمت إضافة حسابكم بنجاح</p>
  </div>
  <div class="card-footer bg-transparent border-success">
  <a href="home" class="btn btn-primary">الصفحة الرئيسية</a>
  </div>
</div>

<?php }else{ ?>

<div class="container-fluid border border-success position-absolute top-50 mx-auto  translate-middle w-50 " >
  <div class="card-header bg-transparent border-success"><h5 class="card-title">مرحبا</h5></div>
  <div class="card-body text-success">
    <h5 class="card-title">لقد تمت اضافة معلوماتكم في قائمة الطلبات</h5>
    <p class="card-text">المرجو الانتظار ما لا يتعدى 24 ساعة ليتم مراجعة وثائقكم من طرف الادمن</p>
  </div>
  <div class="card-footer bg-transparent border-success">
  <a href="home" class="btn btn-primary">الصفحة الرئيسية</a>
  </div>
</div>

<?php } ?>