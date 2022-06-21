<?php
  if (!(isset($_SESSION['logged'])) && !($_SESSION['role'] == 'عميل')) {
    Redirect::to('home');
    die();
  }
  $data = new JuristeControllers() ;
  $juristes = $data->getAllJuristes();
?>

  
  <main style="position: absolute; z-index: 20; width: calc(100% - 270px); top: 40px; right : 270px; padding: 20px;">
    <section class=" d-flex align-items-center px-3 justify-content-between" style=" margin-top : 40px; direction : rtl;">
      <h2 class="text-info text-center mb-5" style="margin-top :100px;">لائحة المحامين والموثقين</h2>

      <select name="statut" class="select mt-3 float-start" id="statut" style="width : 190px">
        <option selected="selected">الكل</option>
        <option value="محام">محام</option>
        <option value="موثق">موثق</option>
      </select>
    </section>
   <section class="d-flex  w-100">

    <?php foreach($juristes as $juriste): ?>
      <div class="col-4 card py-3 px-2 m-0" style="width: 18rem;">
      <img src="public/image/mr_nobody_new.svg" class="card-img-top w-50 m-auto" alt="photo">
      <div class="card-body m-auto">
        <h5 class="card-title"><?= $juriste['nom'] ?> <?= $juriste['prenom'] ?></h5>
        <p class="card-text"><?= $juriste['role'] ?></p>
        <form action="addDemande" method="POST">
          <input type="hidden" name="juriste_id" value="<?php echo $juriste['juriste_id'] ?>">
          <button type="submit" name="submit" class="btn btn-primary mb-3"> ارسال طلب</button>
        </form>

        </div>
      </div>
      <?php endforeach;?> 
    </section>
    
  </main>
  
