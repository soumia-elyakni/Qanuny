<?php

$data = new PreUserControllers();
$users =$data-> getAllPUsers();
// print_r($users);
?>

<h2 class="text-info text-center mb-5" style="margin-top :100px;">Les nouveaux demandes d'inscription Juriste</h2>
<?php foreach($users as $user): ?>
<div class="card w-75 mx-auto" style="direction: rtl;">
  <div class="card-body">
    <h5 class="card-title"><?= $user['nom']?>  <?= $user['prenom']?></h5>
    <h6><?= $user['role']?></h6>
    <div>
    <img src="./uploads/<?= $user['cinPhoto']?>" alt="cin" class="w-50" >
    <img src="./uploads/<?= $user['cipPhoto']?>" alt="cip" class="w-50">
    </div>
    <a href="#" class="btn btn-success float-end">Accepter</a>
    <a href="#" class="btn btn-warning text-light me-2 float-end">Refuser</a>
  </div>
</div>
<?php endforeach;?>
