<?php if(!(isset($_SESSION['logged']))){ ?>

<footer class="fixed-bottom">
<div class="bg-transparent mt-5 d-flex px-5 w-100 justify-content-between" style="direction: rtl ;">
 <p>Create by Soumia EL YAKNI 2022</p>
 <p><a href="./loginAdmin">Admin</a></p>
</div>
</footer>

<?php } else {
?>

<footer class="fixed-bottom">
<div class="bg-transparent mt-5 d-flex px-5 w-100 justify-content-between" style="direction: rtl ; width: calc(- 270px + 100% );">
 
 <?php if($_SESSION['role'] != 'admin'){ ?>
    <p><?= $_SESSION['telephone'] ?></p>
    <?php  
 } ?>
    <p><?= $_SESSION['mail'] ?></p>
</div>
</footer>


<?php
}  ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>