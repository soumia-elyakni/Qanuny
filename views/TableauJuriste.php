<?php

if(!isset($_SESSION['logged']) || !($_SESSION['role'] == "admin")){
  Redirect::to('home');
}

$data = new JuristeControllers();
$juristes =$data-> getAllJuristes();



?>


<main class="" style="position: absolute; z-index: 20; width: calc(100% - 270px); top: 62px; right : 270px;">
                <!--avanttable-->

      <section class=" d-flex align-items-center px-3 justify-content-between" style=" margin-top : 40px; direction:rtl;">
      

        <h2 class="tabtitle col-6 align-self-center mt-1 text-end mb-3">لائحة المستخدمين</h2> 
        
        <select name="role" class="select mt-3 float-start" id="role" style="width : 190px">
               <option selected="selected" value="0">-اختر نوع الحساب-</option>
               <option value="عميل">عميل</option>
               <option value="محام">محام</option>
               <option value="موثق">موثق</option>
        </select>

       

      </section>

                   <!--table-->
          
      <div class="container py-5" style="direction:rtl; margin-top: 30px;">
          <div class="row">
              <div class="col-md-12 mx-auto">
                  <div class="card">
                      <div class="card-body bg-light table-responsive" >
                          <table class="table table-hover">
                            <thead class="text-muted" style="background: transparent;">
                              <tr>
                                <td class="d-none"></td>
                                <th scope="col">ر.ب.و</th>
                                <th scope="col">الاسم العائلي</th>
                                <th scope="col">الاسم الشخصي</th>
                                <th scope="col">البريد الالكتروني</th>
                                <th scope="col">نوع الحساب</th>
                                <th scope="col">المدينة</th>
                                <th scope="col" colspan="2"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach($juristes as $juriste): ?>
                                <tr>
                                <td class="d-none"></td>
                                <td scope="col"><?= $juriste['nom']?></td>
                                <td scope="col"><?= $juriste['cin']?></td>
                                <td scope="col"><?= $juriste['prenom']?></td>
                                <td scope="col"><?= $juriste['mail']?></td>
                                <td scope="col"><?= $juriste['role']?></td>
                                <td scope="col"><?= $juriste['ville']?></td>
                                <td scope="col" colspan="2">
                                        <form method="POST" action="deleteUser" class="mr-1">
                                            <input type="hidden" name="jurId" value="<?php echo $juriste['juriste_id']; ?>">
                                            <button type="submit" name="delete" class="border border-0">
                                                <i class="far fa-trash text-danger"></i>
                                            </button>
                                        </form>
                                </td>
                              </tr>
                              <?php endforeach;?>
                            </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
        </div>
</main>
