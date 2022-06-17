

<link rel="stylesheet" href="public/css/navbar.css">
<header class="header" style="direction : rtl;">
     
<?php  ?>

      <nav class="navbar rtl navbar navbar-expand-lg fixed-top bg-transparent">
        <div class="container-fluid">
          <a class="navbar-brand fs-3" href="home">القانوني</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="iconify" data-icon="octicon:law-24"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#signup">
                  حساب جديد
                </button> 
              </li>
              <li class="nav-item">
                <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#login">
                  تسجيل الدخول
                </button>
              </li>
              

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

                     <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                   </div>
                   <form class="modal-body" action="loginUser"  method="POST" id="loginform">

                        <input type="text" name="mail" placeholder="البريد الالكتروني للمستخدم" class="mb-1 text-secondary bg-light" id="usermail" style="border : none; border-bottom: grey solid 1px ;"></br>
                        <span class="" id="usmailMessage">5</span></br>

                        <input type="password" name="pass" placeholder="كلمة السر" class="mt-3 text-secondary bg-light" id="userpass" style="border : none; border-bottom: grey solid 1px ;"></br>
                        <span class="mb-2" id="upassMessage">5</span></br>
                        <a href="#" class="" style="font-size: 13px ;">هل نسيت كلمة السر؟</a>
                        <div class="form-check form-switch w-25">
                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                          <label class="form-check-label text-dark " for="flexSwitchCheckDefault">تذكرني</label>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                          <button type="submit" name="login" class="btn btn-primary">الدخول</button>
                        </div>
                   </form>
                 </div>
               </div>
             </div>

             <!-- / login modal -->
             <!-- iscription modal -->
          <div class="modal fade" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel"  aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content p-4" style="direction : rtl;">
            <div class="modal-header">
              <h4 class="modal-title text-primary" id="staticBackdropLabel">حساب جديد</h4>
              <button><i class="fa-light fa-xmark"></i></button>
               
            </div>


          <form action="addUser" method="POST"  id="fullsignup" enctype="multipart/form-data">
            <div class="modal-body">

            <div   class="row  justify-between m-auto"  id="signup1" >

              <div class="col-6 ">
                <input type="text" placeholder="الاسم العائلي" name="nom" class="mb-1" id="nom">
                <small class="text-danger" id="nomMessage"></small>
              </div>

              <div class="col-6">
                <input type="text" placeholder="الاسم الشخصي" name="prenom" class="mb-1" id="prenom">
                <small class="text-danger" id="prenomMessage"></small>
              </div>
              
              <div class="col-6">
                <input type="text" placeholder="رقم البطاقة الوطنية" name="cin" class="mt-3 mb-1" id="cin">
                <small class="text-danger" id="cinMessage"></small>
              </div>

              <div class="col-6">
                <input type="tel" placeholder="رقم الهاتف" name="telephone" class="mt-3 mb-1" id="tel">
                <small class="text-danger" id="telMessage"></small>
              </div>
              
              <div class="col-6 ">
              <select name="ville" class="select mt-3" id="ville" style="width : 190px">
    
                    <option selected="selected" value="0">-اختر العمالة أو الإقليم-</option>
                    <option value="أكادير إدا وتنان">أكادير إدا وتنان</option>
                    <option value="عين الشق">عين الشق</option>
                    <option value="عين السبع الحي المحمدي">عين السبع الحي المحمدي</option>
                    <option value="الفداء مرس السلطان">الفداء مرس السلطان</option>
                    <option value="الحوز">الحوز</option>
                    <option value="الحسيمة">الحسيمة</option>
                    <option value="أوسرد">أوسرد</option>
                    <option value="أسا-الزاك">أسا - الزاك</option>
                    <option value="أزيلال">أزيلال</option>
                    <option value="ابن مسيك">ابن مسيك</option>
                    <option value="بني ملال">بني ملال</option>
                    <option value="بنسليمان">بنسليمان</option>
                    <option value="بركان">بركان</option>
                    <option value="برشيد">برشيد</option>
                    <option value="بوجدور">بوجدور</option>
                    <option value="بولمان">بولمان</option>
                    <option value="الدار البيضاء">الدار البيضاء</option>
                    <option value="الدار البيضاء أنفا">الدار البيضاء أنفا</option>
                    <option value="شفشاون">شفشاون</option>
                    <option value="شيشاوة">شيشاوة</option>
                    <option value="اشتوكة ايت باها">اشتوكة ايت باها</option>
                    <option value="الدريوش">الدريوش</option>
                    <option value="الحاجب">الحاجب</option>
                    <option value="الجديدة">الجديدة</option>
                    <option value="قلعة السراغنة">قلعة السراغنة</option>
                    <option value="اليوسفية">اليوسفية</option>
                    <option value="الرشيدية">الرشيدية</option>
                    <option value="السمارة">السمارة</option>
                    <option value="الصويرة">الصويرة</option>
                    <option value="الفحص- أنجرة">الفحص- أنجرة</option>
                    <option value="فاس">فاس</option>
                    <option value="فجيج">فجيج</option>
                    <option value="الفقيه بنصالح">الفقيه بنصالح</option>
                    <option value="كلميم">كلميم</option>
                    <option value="جرسيف">جرسيف</option>
                    <option value="الحي الحسني">الحي الحسني</option>
                    <option value="ايفران">ايفران</option>
                    <option value="إنزكان أيت ملول">إنزكان أيت ملول</option>
                    <option value="جرادة">جرادة</option>
                    <option value="القنيطرة">القنيطرة</option>
                    <option value="الخميسات">الخميسات</option>
                    <option value="خنيفرة">خنيفرة</option>
                    <option value="خريبكة">خريبكة</option>
                    <option value="العيون">العيون</option>
                    <option value="العرائش">العرائش</option>
                    <option value="المضيق - الفنيدق">المضيق - الفنيدق</option>
                    <option value="مراكش">مراكش</option>
                    <option value="مديونة">مديونة</option>
                    <option value="مكناس">مكناس</option>
                    <option value="ميدلت">ميدلت</option>
                    <option value="المحمدية">المحمدية</option>
                    <option value="مولاي رشيد">مولاي رشيد</option>
                    <option value="مولاي يعقوب">مولاي يعقوب</option>
                    <option value="الناضور">الناضور</option>
                    <option value="النواصر">النواصر</option>
                    <option value="ورزازات">ورزازات</option>
                    <option value="وادي الذهب">وادي الذهب</option>
                    <option value="وزان">وزان</option>
                    <option value="وجدة-انجاد">وجدة-انجاد</option>
                    <option value="الرباط">الرباط</option>
                    <option value="الرحامنة">الرحامنة</option>
                    <option value="أسفي">أسفي</option>
                    <option value="سلا">سلا</option>
                    <option value="صفرو">صفرو</option>
                    <option value="سطات">سطات</option>
                    <option value="سيدي بنور">سيدي بنور</option>
                    <option value="سيدي البرنوصي">سيدي البرنوصي</option>
                    <option value="سيدي إفني">سيدي إفني</option>
                    <option value="سيدي قاسم">سيدي قاسم</option>
                    <option value="يدي سليمان">سيدي سليمان</option>
                    <option value="الصخيرات تمارة">الصخيرات تمارة</option>
                    <option value="طانطان">طانطان</option>
                    <option value="طنجة-اصيلة">طنجة-اصيلة</option>
                    <option value="تاونات">تاونات</option>
                    <option value="تاوريرت">تاوريرت</option>
                    <option value="طرفاية">طرفاية</option>
                    <option value="تارودانت">تارودانت</option>
                    <option value="طاطا">طاطا</option>
                    <option value="تازة">تازة</option>
                    <option value="تطوان">تطوان</option>
                    <option value="تنغير">تنغير</option>
                    <option value="تيزنيت">تيزنيت</option>
                    <option value="زاكورة">زاكورة</option>
    
            	</select>
              <small class="mb-1 text-danger" id="villeMessage"></small>
              </div>
              
              <div class="col-6 ">
              <select name="role" class="select mt-3" id="role" style="width : 190px">
                   <option selected="selected" value="0">-اختر نوع الحساب-</option>
                   <option value="عميل">عميل</option>
                   <option value="محام">محام</option>
                   <option value="موثق">موثق</option>
              </select>
              <small class="mb-1 text-danger" id="roleMessage"></small>
              </div>

              <div class="col-6 mb-3">
              <select name="sexe" class="select mt-3" id="sexe" style="width : 190px">
                   <option selected="selected" value="0">-الجنس-</option>
                   <option value="1">ذكر</option>
                   <option value="2">أنثى</option>
              </select>
              <small class="mb-1 text-danger" id="sexeMessage"></small>
              </div>
            
            </div>

              <div style="display: none;" id="signup2" class="m-auto p-3">

              <div class="col-6 mb-3 text-dark">
              <label for="cinPhoto" class="text-dark">انزل صورتك الشخصية رفقة بطاقتك الوطنية</label>
              <input type="file" filetype=".jpg|.jpeg|.png|.pdf" name="cinPhoto" id="cinphoto">
              <small class="mb-3 text-danger" id="pCinMessage"></small>
              </div>
              
              <div class="col-6 mt-3 text-dark"> 
              <label for="cipPhoto" class="text-dark">انزل صورة بطاقة الرخصة المهنية</label>
              <input type="file" filetype=".jpg|.jpeg|.png|.pdf" name="cipPhoto" id="cipphoto" >
              <small class="mb-3 text-danger" id="pCipMessage"></small> 
              </div>

              </div>

              

              <div style="display : none;" id="signup3" class="m-auto p-3"> 

              <div class="py-1 ">
              <input type="text" placeholder="البريد الالكتروني"name="usmail" class="mb-1 text-secondary" id="usmail">
              <small class="mb-3 text-danger" id="mailMessage"></small>
              </div>

              <div class="py-1 ">
              <input type="password" name="password" placeholder="كلمة السر" class="mb-1 text-secondary " id="pass"></br>
              <small class="mb-3 text-danger" id="passMessage"></small>
              </div>
             
              <div class="py-1 ">
              <input type="password" placeholder="أعد كلمة السر" class="mb-1 text-secondary"  id="copass"></br>
              <small class="mb-3 text-danger" id="copassMessage"></small>
              </div>
                
             </div>

          <div class="modal-footer">
          
          <button type="button" class="btn btn-secondary float-start" data-bs-dismiss="modal">الغاء</button>
          <button type="submit" class="btn btn-primary m-1 float-start" id="submit" name="submit">التسجيل</button>
          </div>

           </div>
         </form>

        </div>
      </div>
    </div>
      
    
      <script src="./public/js/navbar.js" defer></script>
      <script src="./public/js/formInscriptionuser.js"></script>
      <script src="./public/js/formValidateLogin.js"></script>