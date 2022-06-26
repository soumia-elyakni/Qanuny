<?php

if (!(isset($_SESSION['logged'])) && (!($_SESSION['role'] === 'محام') || !($_SESSION['role'] === 'موثق'))) {
  Redirect::to('home');
};

$RendezVs = new RendezVsControllers();
$demandes = $RendezVs->readDemandes();

if(isset($_POST['refu'])){
  $Refu = new RendezVsControllers();
  $Refu -> refuDemande();
}

?>




<main style="position: absolute; z-index: 20; width: calc(100% - 270px); top: 62px; right : 270px; padding: 20px;">
  <section class=" d-flex align-items-center px-3 justify-content-between" style=" margin-top : 40px; direction:rtl;">
    <h2 class="text-info text-center mb-5" style="margin-top :100px;">لائحة الطلبات</h2>


  </section>

  <?php foreach ($demandes as $demande) : ?>
    <div class="card m-auto p-4 mb-4">
      <div class="card-header">
        <h6><?= $demande['nom'] ?> <?= $demande['prenom'] ?></h6>
        <p><?= $demande['demande_date'] ?></p>
      </div>
      <div class="card-body">
        <h5 class="card-title"><?= $demande['title'] ?></h5>
        <p class="card-text"><?= $demande['descript'] ?></p>

        <div class=" d-flex float-start">
          <form class="ms-1" method="POST" action="updateRV">
            <input type="hidden" name="demande_id" value="<?= $demande['id'] ?>">
            <input type="hidden" name="dateRV" value="<?= $demande['dateRV'] ?>">
            <input type="hidden" name="lienRV" value="<?= $demande['lienRV'] ?>">
            <input type="hidden" name="document" value="<?= $demande['document'] ?>">
            <button type="submit" name="submit" class="btn btn-primary">القبول</button>
          </form>
          <form class="me-1" method="POST">
            <input type="hidden" name="demande_id" value="<?= $demande['id'] ?>">
            <button type="submit" name="refu" class="btn btn-primary">الرفض</button>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>


</main>

