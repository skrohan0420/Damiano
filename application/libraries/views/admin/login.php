<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags and other head elements -->

    <title>Admin | Login</title>

    <!-- Custom fonts and styles -->
    <link href="<?= base_url() ?>assets_admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="<?= base_url() ?>assets_admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <style>
        #showHidePassword {
            border-top-right-radius: 25px;
            border-bottom-right-radius: 25px;
            cursor: pointer;
        }
    </style>

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="col-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back Admin!</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="userName"
                                            placeholder="User Name">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="password" class="form-control form-control-user" id="password"
                                                placeholder="Password">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="showHidePassword">
                                                    <i class="fa fa-eye-slash"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                                        </div>
                                    </div>
                                    <a class="btn btn-primary btn-user btn-block" id="loginBtn">
                                        Login
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript and jQuery -->
    <script src="<?= base_url() ?>assets_admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript -->
    <script src="<?= base_url() ?>assets_admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages -->
    <script src="<?= base_url() ?>assets_admin/js/sb-admin-2.min.js"></script>

    <!-- jQuery code for show/hide password -->
    <script>
        $(document).ready(function () {
            $('#showHidePassword').click(function () {
                var passwordInput = $('#password');
                var passwordIcon = $(this).find('i');

                if (passwordInput.attr('type') === 'password') {
                    passwordInput.attr('type', 'text');
                    passwordIcon.removeClass('fa-eye-slash').addClass('fa-eye');
                } else {
                    passwordInput.attr('type', 'password');
                    passwordIcon.removeClass('fa-eye').addClass('fa-eye-slash');
                }
            });


            $('#loginBtn').click(function () {
                let userName = $('#userName').val();
                let password = $('#password').val();

                $.ajax({
                    type: 'POST',
                    url: '<?= base_url('admin/Admin/admin_login') ?>',
                    data: {
                        userName: userName,
                        password: password
                    },
                    beforeSend: function () {
                        $('#loginBtn').prop("disabled", true)
                        $('#loginBtn').html(`<div class="spinner-border text-light"></div>`)
                    },
                    success: function (resp) {
                        resp = JSON.parse(resp)
                        Toastify({
                            text: resp.message.toUpperCase(),
                            duration: 3000,
                            position: "center",
                            stopOnFocus: true,
                            style: {
                                background: resp.status ? 'darkgreen' : 'darkred',
                            },

                        }).showToast();
                        if (resp.status) {
                            setTimeout(function () {
                                location.href = '<?= base_url('admin/dashboard') ?>'
                            }, 1000)
                        }
                    },
                    error: function (err) {
                        Toastify({
                            text: 'Server Error',
                            duration: 3000,
                            position: "center",
                            stopOnFocus: true,
                            style: {
                                background: 'darkred',
                            },

                        }).showToast();
                    },
                    complete: function(){
                        $('#loginBtn').prop("disabled", false)
                        $('#loginBtn').html(`Login`)
                    }
                })
            })


        });
    </script>
</body>

</html>