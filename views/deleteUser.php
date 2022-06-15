<?php
if(isset($_POST['id'])){
    $exitUser = new UserControllers();
    $exitUser -> deleteUser();
    // Redirect::to('Tableau');
}
?>

<div class="container-fluid border border-secondary position-absolute top-50 mx-auto  translate-middle w-50 " >
  <div class="card-header bg-transparent border-secondary"></div>
  <div class="card-body text-primary p-4">
    
    <h4 class="card-text">لقد تم حذف الحساب بنجاح</h4>
  </div>
  <div class="card-footer bg-transparent border-secondary">
  <a href="Tableau" class="btn btn-primary float-start mb-2">لائحة المستخدمين</a>
  </div>
</div>