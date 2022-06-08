
<header style="direction : rtl;">
     
      <nav class="rtl navbar navbar-expand-lg bg-transparent fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">القانوني</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="iconify" data-icon="octicon:law-24"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#signin">
                  حساب جديد
                </button> 
              </li>
              <li class="nav-item">
                <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#login">
                  تسجيل الدخول
                </button>
              </li>
              <li class="nav-item dropdown">

            </ul>

          </div>
        </div>
      </nav>
      </header>
      <body style="direction: rtl ;">

      <!-- login modal -->
      <div class="modal fade " id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
               <div class="modal-dialog">
                 <div class="rtl modal-content bg-light">
                   <div class="modal-header">
                     <h5 class="modal-title text-primary" id="staticBackdropLabel">تسجيل الدخول</h5>
                     <!-- <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button> -->
                   </div>
                   <form class="modal-body">

                        <input type="text" placeholder="اسم المستخدم" class="mb-5 text-secondary bg-light" style="border : none; border-bottom: grey solid 1px ;"></br>

                        <input type="text" placeholder="كلمة السر" class="mb-2 text-secondary bg-light" style="border : none; border-bottom: grey solid 1px ;"></br>
                        <div class="form-check form-switch w-25">
                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                          <label class="form-check-label" for="flexSwitchCheckDefault">تذكرني</label>
                        </div>

                   </form>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                     <button type="button" class="btn btn-primary">الدخول</button>
                   </div>
                 </div>
               </div>
             </div>

             <!-- / login modal -->


      </body>