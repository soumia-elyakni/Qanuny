<?php
if(isset($_POST['submit'])){
  $newUSer = new UserControllers();
  $newUser-> addUser();
}
?>

<link rel="stylesheet" href="public/css/navbar.css">
<header class="header" style="direction : rtl;">
     
      <nav class="navbar rtl navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="home">القانوني</a>
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
                   <form class="modal-body" action="" méthode="POST" id="loginform">

                        <input type="text" placeholder="البريد الالكتروني للمستخدم" class="mb-1 text-secondary bg-light" id="usermail" style="border : none; border-bottom: grey solid 1px ;"></br>
                        <span class="" id="usmailMessage">5</span></br>

                        <input type="text" placeholder="كلمة السر" class="mt-3 text-secondary bg-light" id="userpass" style="border : none; border-bottom: grey solid 1px ;"></br>
                        <span class="mb-2" id="upassMessage">5</span></br>
                        <a href="#" class="" style="font-size: 13px ;">هل نسيت كلمة السر؟</a>
                        <div class="form-check form-switch w-25">
                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                          <label class="form-check-label text-dark " for="flexSwitchCheckDefault">تذكرني</label>
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
             <!-- iscription modal -->
             <div class="modal fade" style="visibility : visible ;" id="signin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content p-4" style="direction : rtl;">
            <div class="modal-header">
              <h4 class="modal-title text-primary" id="staticBackdropLabel">حساب جديد</h4>

              

            </div>

            <form action="addUser" method="POST" style="display :block ;" class="modal-body justify-between m-auto"  id="signin1" >

               
    
              <input type="text" placeholder="الاسم العائلي" name="nom" class="mb-1" id="nom">
              <input type="text" placeholder="الاسم الشخصي" name="prenom" class="mb-1" id="prenom">

              </br>
              <span class="text-danger" style="margin-left: 150px ;" id="nomMessage"></span>
              <span class="text-danger" id="prenomMessage"></span>
              </br>

              <input type="text" placeholder="رقم البطاقة الوطنية" name="cin" class="mt-3 mb-1" id="cin">
              <input type="tel" placeholder="رقم الهاتف" name="tel" class="mt-3 mb-1" id="tel">
              </br>

              <span class="text-danger" id="cinMessage"></span>
              <span class="text-danger" id="telMessage"></span>
              </br>

              <select name="ville" class="select mt-3" id="ville" style="width : 190px">
    
                    <option selected="selected" value="0">-اختر العمالة أو الإقليم-</option>
                    <option value="31">أكادير إدا وتنان</option>
                    <option value="1704">عين الشق</option>
                    <option value="1717">عين السبع الحي المحمدي</option>
                    <option value="1716">الفداء مرس السلطان</option>
                    <option value="61">الحوز</option>
                    <option value="38">الحسيمة</option>
                    <option value="71">أوسرد</option>
                    <option value="50">أسا - الزاك</option>
                    <option value="42">أزيلال</option>
                    <option value="1706">ابن مسيك</option>
                    <option value="41">بني ملال</option>
                    <option value="82">بنسليمان</option>
                    <option value="74">بركان</option>
                    <option value="2040">برشيد</option>
                    <option value="56">بوجدور</option>
                    <option value="47">بولمان</option>
                    <option value="1702">الدار البيضاء</option>
                    <option value="1715">الدار البيضاء أنفا</option>
                    <option value="87">شفشاون</option>
                    <option value="60">شيشاوة</option>
                    <option value="33">اشتوكة ايت باها</option>
                    <option value="2037">الدريوش</option>
                    <option value="66">الحاجب</option>
                    <option value="79">الجديدة</option>
                    <option value="62">قلعة السراغنة</option>
                    <option value="2038">اليوسفية</option>
                    <option value="69">الرشيدية</option>
                    <option value="51">السمارة</option>
                    <option value="63">الصويرة</option>
                    <option value="1714">الفحص- أنجرة</option>
                    <option value="1708">فاس</option>
                    <option value="76">فجيج</option>
                    <option value="2031">الفقيه بنصالح</option>
                    <option value="48">كلميم</option>
                    <option value="2030">جرسيف</option>
                    <option value="1703">الحي الحسني</option>
                    <option value="67">ايفران</option>
                    <option value="32">إنزكان أيت ملول</option>
                    <option value="73">جرادة</option>
                    <option value="53">القنيطرة</option>
                    <option value="21">الخميسات</option>
                    <option value="68">خنيفرة</option>
                    <option value="81">خريبكة</option>
                    <option value="55">العيون</option>
                    <option value="86">العرائش</option>
                    <option value="1792">المضيق - الفنيدق</option>
                    <option value="1711">مراكش</option>
                    <option value="1712">مديونة</option>
                    <option value="1713">مكناس</option>
                    <option value="2036">ميدلت</option>
                    <option value="30">المحمدية</option>
                    <option value="1707">مولاي رشيد</option>
                    <option value="1710">مولاي يعقوب</option>
                    <option value="77">الناضور</option>
                    <option value="1709">النواصر</option>
                    <option value="36">ورزازات</option>
                    <option value="70">وادي الذهب</option>
                    <option value="2033">وزان</option>
                    <option value="72">وجدة-انجاد</option>
                    <option value="17">الرباط</option>
                    <option value="2035">الرحامنة</option>
                    <option value="78">أسفي</option>
                    <option value="1701">سلا</option>
                    <option value="46">صفرو</option>
                    <option value="80">سطات</option>
                    <option value="2039">سيدي بنور</option>
                    <option value="1705">سيدي البرنوصي</option>
                    <option value="2028">سيدي إفني</option>
                    <option value="54">سيدي قاسم</option>
                    <option value="2032">سيدي سليمان</option>
                    <option value="20">الصخيرات تمارة</option>
                    <option value="52">طانطان</option>
                    <option value="83">طنجة-اصيلة</option>
                    <option value="40">تاونات</option>
                    <option value="75">تاوريرت</option>
                    <option value="2034">طرفاية</option>
                    <option value="34">تارودانت</option>
                    <option value="49">طاطا</option>
                    <option value="39">تازة</option>
                    <option value="85">تطوان</option>
                    <option value="2029">تنغير</option>
                    <option value="35">تيزنيت</option>
                    <option value="37">زاكورة</option>
    
            	</select>
              
               
              <select name="role" class="select mt-3" id="role" style="width : 190px">
                   <option selected="selected" value="0">-اختر نوع الحساب-</option>
                   <option value="1">عميل</option>
                   <option value="2">محام</option>
                   <option value="3">موثق</option>
              </select>

              </br>
              <span class="mb-1 text-danger" id="villeMessage"></span>
              <span class="mb-1 text-danger" id="roleMessage"></span>
              </br>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
              <button type="submit" class="btn btn-primary m-1" id="suivant">
                  التالي
              </button>
            </div>
            
              </form>

              <form style="display: none;" id="signin2">
              
              <label for="cinphoto">انزل صورتك الشخصية رفقة بطاقتك الوطنية</label>
              <input type="file" name="cinphoto" id="cinphoto">
              <span class="mb-3 text-danger" id="pCinMessage">5</span>

              <label for="cinphoto">انزل صورة بطاقة الرخصة المهنية</label>
              <input type="file" name="cipphoto" id="cipphoto" >
              <span class="mb-3 text-danger" id="pCipMessage">5</span>

              <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>

              <button type="button" class="btn btn-primary m-1" id="precedent">الرجوع</button>
              <button type="submit" class="btn btn-primary m-1" id="suivant2">
                  التالي
              </button>
            </div>


              </form>

              

              <form style="display : none;" id="signin3"> 


              <input type="text" placeholder="البريد الالكتروني" class="mb-1 text-secondary bg-light" style="border : none; border-bottom: grey solid 1px ;" id="usmail"></br>
              <span class="mb-3 text-danger" id="mailMessage">5</span>

              <input type="text" placeholder="كلمة السر" class="mb-1 text-secondary bg-light" style="border : none; border-bottom: grey solid 1px ;" id="pass"></br>
              <span class="mb-3 text-danger" id="passMessage">5</span>
             
              <input type="text" placeholder="أعد كلمة السر" class="mb-1 text-secondary bg-light" style="border : none; border-bottom: grey solid 1px ;" id="copass"></br>
              <span class="mb-3 text-danger" id="copassMessage">5</span>
               
               
              <button type="submit" class="btn btn-primary m-1" id="submit" name="submit">
                
              </form>
              
            </div>
          </div>
        </div>
  </div>
    
      <script src="./public/js/navbar.js"></script>
      <script src="./public/js/formInscriptionuser.js"></script>
      <script src="./public/js/formValidateLogin.js"></script>