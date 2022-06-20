
<?php 
if (isset($_POST['submit'])){
    $id = $_POST['id'];
} 

if (isset($_POST['send'])){
    $demande = new RendezVsControllers();
    $demande -> addDemande();
}
?>
<main style="position: absolute; z-index: 20; width: calc(100% - 270px); top: 72px; right : 270px; padding: 30px;">

<div class="mb-3 p-2">
  <h3 class="m-auto text-center">املأ الاستمارة</h3>
</div>
<form method="post" class="w-75 m-auto">
<div class="mb-3">
  <input type="title" name="title" class="form-control" id="exampleFormControlInput1" placeholder="العنوان">
</div>
<div class="mb-3">
  <textarea class="form-control" name="descript" id="exampleFormControlTextarea1" rows="3" placeholder="اشرح المشكلة"></textarea>
</div>
<div class="col-auto">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <button type="submit" name="send" class="btn btn-primary mb-3">ارسال</button>
  </div>

</form>


</main>