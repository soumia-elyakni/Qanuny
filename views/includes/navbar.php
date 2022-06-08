
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
                          <label class="form-check-label text-dark" for="flexSwitchCheckDefault">تذكرني</label>
                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
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
             <div class="modal fade" id="signin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content p-4" style="direction : rtl;">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">حساب جديد</h5>
              <!--   -->
            </div>
            <div class="modal-body justify-between m-auto">
    
              <input type="text" placeholder="" name="nom" class="mb-4" id="nom">
    
              <input type="text" placeholder="" name="prenom" class="mb-4" id="prenom">
    
              <input type="text" placeholder="" name="cin" class="mb-4" id="cin">
    
              <input type="tel" placeholder="" name="tel" class="mb-4" id="tel">
    
              <select name="role" class="" id="role" style="width : 190px">
    
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
               
              <select name="role" class="" id="role" style="width : 190px">
                   <option selected="selected" value="0">-اختر الدور-</option>
                   <option value="عميل">عميل</option>
                   <option value="محام">محام</option>
                   <option value="موثق">موثق</option>
              </select>
    
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
              <button type="button" class="btn btn-primary">التالي</button>
            </div>
          </div>
        </div>
  </div>
    

      </body>