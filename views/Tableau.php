<?php

$data = new UserControllers();
$users =$data-> getAllUsers();
// print_r($users);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listeUsers</title>
</head>
<body class="m-0 p-0 w-100 h-100 bg-light">
<main>
                <!--avanttable-->

      <section class="nav_bar d-flex align-items-center px-3 bg-light">
            <h2 class="tabtitle col-9 align-self-center mt-1"> Liste des utilisateurs</h2> 
            <div class="col-3 align-self-center d-flex">
              <button style="border: transparent; background: transparent; align-self: center;"> 
                 <img src="">
              </button>

             </div>
      </section>

                   <!--table-->
          
      <div class="container">
          <div class="row">
              <div class="col-md-12 mx-auto">
                  <div class="card">
                      <div class="card-body bg-light" >
                          <table class="table table-responsive table-hover">
                            <thead class="text-muted" style="background: transparent;">
                              <tr>
                                <td class="d-none"></td>
                                <th scope="col">CIN</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Rôle</th>
                                <th scope="col">Ville</th>
                                <th scope="col" colspan="2">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach($users as $user): ?>
                                <tr>
                                <td class="d-none"></td>
                                <td scope="col"><?= $user['cin']?></td>
                                <td scope="col"><?= $user['nom']?></td>
                                <td scope="col"><?= $user['prenom']?></td>
                                <td scope="col"><?= $user['mail']?></td>
                                <td scope="col"><?= $user['role']?></td>
                                <td scope="col"><?= $user['ville']?></td>
                                <td scope="col" colspan="2"></td>
                              </tr>
                              <?php endforeach;?>
                            </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
        </div>

