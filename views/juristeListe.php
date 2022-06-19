<?php
  if (!(isset($_SESSION['logged'])) && !($_SESSION['role'] == 'عميل')) {
    Redirect::to('home');
    die();
  }
?>

  
  <main style="position: absolute; z-index: 20; width: calc(100% - 270px); top: 62px; right : 270px; padding: 20px;">
    <section class=" d-flex align-items-center px-3 justify-content-between" style=" margin-top : 40px; direction : rtl;">
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
        <!-- <a href="#" class="btn btn-primary float-start">ارسال طلب</a> -->
        <button type="button" class="btn btn-primary float-start" data-bs-toggle="modal" data-bs-target="#sendDemande">رسالة</button>

      </div>
    </div>
    <div class="modal fade" id="sendDemande" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

  </main>