
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Admin</title>
   
</head>
<body>
<div class="back-img"></div>
<div class="container-fluid w-50" >
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h2>Login</h2>
                    </div>

                    <div class="card-body">
                        <form action="">
                            <div class="form-group row">
                                <label for="txtemail" class="col-form-label col-sm-2">اسم الادمن</label>
                                <div class="col-sm-10">
                                    <input type="email" name="txtemail" id="txtemail" class="form-control" required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="txtpassword" class="col-form-label col-sm-2">كلمة السر</label>
                                <div class="col-sm-10">
                                    <input type="password" name="txtpassword" id="txtpassword" class="form-control"
                                        required />
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block">Login</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    <!-- <div class="container">
<div class="row justify-content-center align-items-center bg-light w-50 m-auto">   
<h2 class="text-center"></h2>
<form class="mx-auto">

<input type="text" placeholder="اسم المستخدم" class="mb-5 text-secondary bg-light" style="border : none; border-bottom: grey solid 1px ;"></br>

<input type="text" placeholder="كلمة السر" class="mb-2 text-secondary bg-light" style="border : none; border-bottom: grey solid 1px ;"></br>
<a href="#" class="" style="font-size: 13px ;">هل نسيت كلمة السر؟</a>
<div class="form-check form-switch w-25">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
  <label class="form-check-label text-dark " for="flexSwitchCheckDefault">تذكرني</label>
</div>


</form>
</div>
</div> -->
</body>
</html>