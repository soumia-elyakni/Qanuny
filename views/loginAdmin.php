
<?php 

    // if ($_SESSION['admin'] = true){
    //     Redirect::to('nouveauxJuristes');
    // }
    
	if(isset($_POST['submit'])){
        
		$loginAdmin = new AdminControllers();
		$loginAdmin->adminAuth($_POST['adminame'],$_POST['password']);
       
	}
?>
    <title>Admin</title>
    <link rel="stylesheet" href="public/css/style.css">
    
</head>
<body>
<div class="back-img"></div>
<div class="container-fluid w-75 position-absolute top-50  translate-middle mx-auto" style="direction:rtl;"  >
        <div class="row">
            <div class="col-6 offset-2">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h2>تسجيل الدخول</h2>
                    </div>
                    <div class="text-danger"></div>
                    <div class="card-body">
                        <form  id="loginform" method="POST">
                            <div class="form-group row mb-3 d-md-block">
                                
                                <div class="col-sm-10">
                                    <input type="text" name="adminame" id="adminame" class="form-control" placeholder="اسم الادمن" />
                                    <small class="text-danger" id="unameMessage"></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                
                                <div class="col-sm-10">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="كلمة السر" />
                                    <small class="text-danger" id="upassMessage"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-primary btn-block float-start">الدخول</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>


<script src="./public/js/formValidateloginAdmin.js"></script>
