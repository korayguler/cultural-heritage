<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        body {
            font-family: "Lato", sans-serif;

        }



        .main-head {
            height: 150px;
            background: #000;

        }

        .sidenav {
            height: 100%;
            background-color: rgba(0, 0, 0, 1) !important;
            overflow-x: hidden;
            padding-top: 20px;
        }


        .main {
            padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }
        }

        @media screen and (max-width: 450px) {
            .login-form {
                margin-top: 10%;
            }

            .register-form {
                margin-top: 10%;
            }
        }

        @media screen and (min-width: 768px) {
            .main {
                margin-left: 40%;
            }

            .sidenav {
                width: 40%;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
            }

            .login-form {
                margin-top: 80%;
            }

            .register-form {
                margin-top: 20%;
            }
        }


        .login-main-text {
            margin-top: 20%;
            padding: 60px;
            color: #fff;
        }

        .login-main-text h2 {
            font-weight: 300;
        }

        .btn-black {
            background-color: rgba(0, 0, 0, 1) !important;
            color: #fff;
        }
    </style>
</head>

<body>
    <?php if (isset($_GET["login"]) == "error") { ?>
        <script>
            alert('Hatalı Giriş')
        </script>
    <?php } ?>
    <div class="sidenav">
        <div class="login-main-text">
            <h2>Yönetim Paneli</h2>
            <p>Giriş Ekranı</p>
        </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form method="post" action="settings/islem.php">
                    <div class="form-group">
                        <label>Kullanıcı Adı</label>
                        <input type="text" required="" name="admin_username" class="form-control" placeholder="Kullanıcı Adınız">
                    </div>
                    <div class="form-group">
                        <label>Şifre</label>
                        <input type="password" required="" name="admin_pass" class="form-control" placeholder="Şifreniz">
                    </div>
                    <button type="submit" class="btn btn-black" name="admin_login">Giriş Yap</button>
                </form>
            </div>
        </div>
    </div>
</body>