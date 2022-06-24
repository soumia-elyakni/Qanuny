<?php

if (!(isset($_SESSION['logged'])) && (!($_SESSION['role'] === 'محام') ||!($_SESSION['role'] === 'موثق'))){
  Redirect::to('home');
}

$RendezVs = new RendezVsControllers();
$demandes = $RendezVs->rendezVs(); 

?>



<main style="position: absolute; z-index: 20; width: calc(100% - 270px); top: 62px; right : 270px; padding: 20px;">

<section>
<h2 class="text-center my-3">لائحة المواعيد</h2>

</section>

<div class="row mt-5">
<?php foreach($demandes as $demande): ?>
<div class="card col-4 mx-2 py-2 px-2" style="width: 18rem;">
  <img src="public/image/mr_nobody_new.svg" class="card-img-top w-50 m-auto" alt="photo">
  <div class="card-body m-auto">
    <h5 class="card-title"><?= $demande['nom']?> <?= $demande['prenom']?></h5>
    <p class="card-text"><?= $demande['dateRV']?></p>
    <p class="card-text"><?= $demande['lienRV']?></p>

    <form class="ms-1" method="POST" action="updateRV">
            <input type="hidden" name="demande_id" value="<?= $demande['id'] ?>">
            <input type="hidden" name="dateRV" value="<?= $demande['dateRV'] ?>">
            <input type="hidden" name="lienRV" value="<?= $demande['lienRV'] ?>">
            <input type="hidden" name="document" value="<?= $demande['document'] ?>">
            <button type="submit" name="submit" class="btn float-start bg-primary"><i class="fa-solid fa-pencil text-warning "></i></button>
    </form>
  </div>
</div>
<?php endforeach ?>
</div>
</main>