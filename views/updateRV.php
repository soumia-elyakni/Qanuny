<?php

if (isset($_POST['submit'])){
    $data = [
        'demande_id' => $_POST['demande_id'],
        'dateRV' => $_POST['dateRV'],
        'lienRV' => $_POST['lienRV'],
        'document' => $_POST['document']
    ];
}

if (isset($_POST['resend'])){
  
    $RV = new RendezVsControllers();
    $RV -> acceptDemande();
}

?>

<main style="position: absolute; z-index: 20; width: calc(100% - 270px); top: 62px; right : 270px; padding: 20px;">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header m-auto">
        <h5 class="modal-title" id="staticBackdropLabel">موعد الاجتماع</h5>
      </div>
      <form method="POST">
      <div class="modal-body d-flex flex-column">

        <input class="w-75 m-auto my-2" name="dateRV" type="datetime-local" max="" min="" value="<?= $data['dateRV']?>">
        <input class="w-75 m-auto my-2" name="lienRV" type="" min="" placeholder="ادخل رابط أو مكان اللقاء" value="<?= $data['lienRV']?>">
        <input class="w-75 m-auto my-2" name="document" type="text" placeholder="الوثائق المطلوبة" value="<?= $data['document']?>">
        
      </div>
      <div class="modal-footer">
 
        <input type="hidden" name="demande_id" value="<?= $data['demande_id'] ?>">
        <button type="submit" name="resend" class="btn btn-primary">تأكيد</button>
      </div>
      </form>
    </div>
  </div>
</div>
</main>