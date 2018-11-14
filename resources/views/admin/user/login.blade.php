<!DOCTYPE html>
<html >

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>TRANG ĐĂNG NHẬP</title>
    <!-- Favicon-->
    <link rel="icon" href="admin_asset/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="admin_asset/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="admin_asset/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="admin_asset/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="admin_asset/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"</b></a>
            <small>TRANG QUẢN LÝ</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST">
                    <div class="msg"> ĐĂNG NHẬP ĐỂ BẮT ĐẦU LÀM VIỆC</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="TÊN ĐĂNG NHẬP" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="MẬT KHẨU" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">GHI NHỚ ĐĂNG NHẬP</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">ĐĂNG NHẬP</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        
                        <div class="col-xs-12 align-right">
                            <a href="forgot-password.html">QUÊN MẬT KHẨU?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="admin_asset//plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="admin_asset/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="admin_asset/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="admin_asset/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="admin_asset/js/admin.js"></script>
    <script src="admin_asset/js/pages/examples/sign-in.js"></script>
</body>

</html>