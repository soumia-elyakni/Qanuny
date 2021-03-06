<?php

if(!isset($_SESSION['logged']) || !($_SESSION['role'] == "admin")){
  Redirect::to('home');
}

$data = new PreUserControllers();
$users = $data->getAllPUsers();
// print_r($users);
?>




<main style="position: absolute; z-index: 20; width: calc(100% - 270px); top: 62px; right : 270px;">
  <h2 class="text-info text-center mb-5" style="margin-top :100px;">لائحة الطلبات الجديدة</h2>
  <?php foreach ($users as $user) : ?>
    <div class="card w-75 mx-auto my-2" style="direction: rtl;">
      <div class="card-body pb-5">
        <h5 class="card-title"><?= $user['nom'] ?> <?= $user['prenom'] ?></h5>
        <h6><?= $user['role'] ?></h6>
        <div class="row d-flex p-2">
          <img src="./uploads/<?= $user['cinPhoto'] ?>" alt="cin" class="col-6 w-50">
          <img src="./uploads/<?= $user['cipPhoto'] ?>" alt="cip" class="col-6 w-50">
        </div>
        <div>
          <form method="POST" action="confirmUser">
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <button class="btn btn-primary text-light float-end">قبول</button>
          </form>
          <form method="POST" action="deleteAddJuriste">
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <button class="btn btn-secondary text-light me-2 float-end">رفض</button>
          </form>
        </div>

      </div>
    </div>
  <?php endforeach; ?>

</main>