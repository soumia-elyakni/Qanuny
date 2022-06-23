<?php
  if (!isset($_SESSION['logged']) && !($_SESSION['role'] == 'عميل')) {
    Redirect::to('home');
    die();
  }

 $RendezVs = new RendezVsControllers() ;
 $demandes = $RendezVs -> readDemandes();

 
 if(isset($_POST['delete'])){
   $id = $_POST['demande_id'];
    $delete = new RendezVsControllers();
    $delete -> deleteDemande();
 }


?>
<main style="position: absolute; z-index: 20; width: calc(100% - 270px); top: 62px; right : 270px; padding: 20px;">

<section class=" d-flex align-items-center px-3 justify-content-between" style=" margin-top : 40px; direction:rtl;">
        <h2 class="text-info text-center mb-5" style="margin-top :100px;">لائحة الطلبات</h2>
        <select name="statut" class="select mt-3 float-start" id="statut" style="width : 190px">
             <option selected="selected">الكل</option>
             <option value="الانتظار">الانتظار</option>
             <option value="مقبول">مقبول</option>
             <option value="مرفوض">مرفوض</option>
    </select>
</section>
<?php 

 ?>
<?php foreach ($demandes as $demande):  ?>

  

<div class="card mb-3 m-auto p-3 bg-light" style="max-width: 90%;">
  <div class="row g-1">
    <div class="col-md-3 p-3 border-start border-secondary">
      <img src="public/image/mr_nobody_new.svg" class="img-fluid rounded-start w-50" alt="...">
      <h6><?= $demande['nom']?>  <?=$demande['prenom']?></h6>
      <p><?= $demande['mail']?></p>
      <p><?= $demande['telephone']?></p>
    </div>

    <div class="w-md-75 col-md-6 border-start border-secondary ">
      <div class="card-body">
        <h5 class="card-title"><?= $demande['title']?></h5>
        <p class="card-text"> <?= $demande['descript']?></p>
        
      </div>
    </div>
    <div class="col-md-3 p-3">
      <h6><?= $demande['statut']?></h6>
      <p><?= $demande['dateRV']?></p>
      <p><?= $demande['lienRV']?></p>
      <p><?= $demande['document']?></p>
    </div>
  </div>
  <div class="d-flex justify-content-between pt-3 pb-1">
    <p class="card-text"><small class="text-muted"><?= $demande['demande_date']?></small></p>
    <div class="d-flex">
    <form method="POST" action="updateDemande">
      <input type="hidden" name="demande_id" value="<?php echo $demande['id'] ?>">
      <input type="hidden" name="demande_title" value="<?php echo $demande['title'] ?>">
      <input type="hidden" name="demande_descript" value="<?php echo $demande['descript'] ?>">
      <button type="submit" name="submit" class="border border-0">
      <i class="fa-solid fa-pencil text-warning "></i>
      </button>
    </form>
    <form method="POST" name="">
      <input type="hidden" name="demande_id" value="<?php echo $demande['id'] ?>">
      <button type="submit" name="delete" class="border border-0">
      <i class="far fa-trash text-danger"></i>
      </button>
    </form>
    </div>
  </div>
</div>
<?php endforeach?>
</main>