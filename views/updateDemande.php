<?php
if(isset($_POST['submit'])){
    $id = $_POST['demande_id'];
    $_SESSION['demande_title']  = $_POST["demande_title"];
    $_SESSION['demande_descrip'] = $_POST["demande_descript"];
}

if(isset($_POST['update'])){

    $update= new RendezVsControllers();
    $update -> updateDemande();
}

?>

<main style="position: absolute; z-index: 20; width: calc(100% - 270px); top: 72px; right : 270px; padding: 30px;">

<div class="mb-3 p-2">
  <h3 class="m-auto text-center">تحديث الاستمارة</h3>
</div>
<form method="POST" class="w-75 m-auto">
<div class="mb-3">
  <input type="title" name="title" class="form-control" id="exampleFormControlInput1" value="<?= $_SESSION['demande_title'] ?>">
</div>
<div class="mb-3">
  <textarea class="form-control" name="descript" id="exampleFormControlTextarea1" rows="3" value=""><?= $_SESSION['demande_descrip'] ?></textarea>
</div>
<div class="col-auto">
    <input type="hidden" name="demande_id" value="<?= $id ?>">
    <button type="submit" name="update" class="btn btn-primary mb-3">تحديث</button>
  </div>

</form>


</main>