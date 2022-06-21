<?php

if (!(isset($_SESSION['logged'])) && (!($_SESSION['role'] === 'محام') ||!($_SESSION['role'] === 'موثق'))){
  Redirect::to('home');
}; 

$id = $_SESSION['id'];
$data = new RendezVsControllers() ;
$demandes = $data-> getOneDemande($id);
var_dump($demandes);
die();

?>




<main style="position: absolute; z-index: 20; width: calc(100% - 270px); top: 62px; right : 270px; padding: 20px;">
    <section class=" d-flex align-items-center px-3 justify-content-between" style=" margin-top : 40px; direction:rtl;">
        <h2 class="text-info text-center mb-5" style="margin-top :100px;">لائحة الطلبات</h2>
   
    <select name="statut" class="select mt-3 float-start" id="statut" style="width : 190px">
             <option selected="selected">الكل</option>
             <option value="عميل">الانتظار</option>
             <option value="محام">مقبول</option>
    </select>
    </section>

<?php foreach ($demandes as $demande): ?>
<div class="card m-auto p-4 mb-4">
  <div class="card-header">
    <h6><?= $demande['nom']?> <?= $demande['prenom']?></h6>
    <p><?= $demande['demandeDate'] ?></p>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?= $demandes['title'] ?></h5>
    <p class="card-text">ل</p>

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
<?php endforeach; ?>


</main>

  