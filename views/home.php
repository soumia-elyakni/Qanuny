 <?php
    if (isset($_SESSION['logged']) && ($_SESSION['role'] === 'عميل')) {
      Redirect::to('juristeListe');

    } else if (isset($_SESSION['logged']) && ($_SESSION['role'] === 'محام' || $_SESSION['role'] === 'موثق')) {
      Redirect::to('demandes');

    } else if (isset($_SESSION['logged']) && $_SESSION['role'] === 'admin') {
      Redirect::to('nouveauxJuristes'); 
    }

    $juriste = new JuristeControllers();
    $avocats = $juriste-> getAllAvocat();
    $notaires = $juriste-> getAllNotaire();

  ?>

   <title>Al-Qanuny</title>
   <link rel="stylesheet" href="./public/css/style.css">
   </head>

   <body style="direction: rtl ;">
     <div class="back-img"></div>

     <main style="margin-top: 100px !important ;">
       <section class="align-items-center p-sm-2 p-5 border-bottom border-white-2 mx-5 mt-5">
         <div class="m-auto mt-sm-2 p-sm-2 p-4 text-center mt-5  ">
           <h1 class="mb-3">القانوني</h1>
           <h3 class="mb-5">خدمة تمكّن عموم الجمهور من البقاء على اتصال بالقرارات والإجراءات المتخذة في الدعاوى
             الخاصة بهم </br> كما تخول لهم البحث عن محام أو موثق لحل مشاكلهم بأسرع ما يمكن </h3>
         </div>
       </section>
       <div class="m-auto text-end px-5 pt-2 border-bottom border-white-2 mx-5 pb-2">
         <h4><a href="#" class="text-white">وثائق ومسارات</a></h4>
       </div>
       <section>
         <div>
           <h4 class="float-end me-5 mt-5">المحامون</h4>

           <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
             <div class="carousel-inner">
              
              <?php foreach($avocats as $avocat): ?>
               <div class="carousel-item active">
                 <img src="./public/image/mr_nobody_new.svg" class="d-block w-30" alt="...">
                 <span class="text-center"><?= $avocat['nom'] ?> <?= $avocat['prenom'] ?></span>
               </div>
              <?php endforeach ?>
              
             </div>
             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
             </button>
           </div>

         </div>
         <div>
           <h4 class="float-end me-5 mt-5">الموثقون</h4>

           <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">

             <div class="carousel-inner">
             <?php foreach($notaires as $notaire): ?>
               <div class="carousel-item active">
                 <img src="./public/image/mr_nobody_new.svg" class="d-block w-30" alt="...">
                 <span><?= $notaire['nom'] ?> <?= $notaire['prenom'] ?></span>
               </div>
               <?php endforeach ?>
             </div>
             
             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
             </button>
           </div>
       </section>
     </main>