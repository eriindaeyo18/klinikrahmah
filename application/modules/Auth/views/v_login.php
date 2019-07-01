<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Administrator KLINIK RAHMAH | Log in</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/solid.min.css">
    </head>
    <body style="background-color:black;">
        <div class="container-fluid">
            <div class="row" style="margin:8% 0px;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card card-default card-primary">
                        <div class="card-header">
                            <p class="text-center text-uppercase" style="cursor:default;">login user klinik rahmah</p>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <p id="msguname" class="text-danger" style="display:none;"></p>
                                <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off" required="">
                            </div>
                            <div class="form-group">
                                <p id="msgpwd" class="text-danger" style="display:none;"></p>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" id="pwdtxt" name="password" placeholder="Password">
                                    <div class="input-group-append" onclick="showpwd()">
                                        <span class="input-group-text" id="basic-addon2"><i class="showpwd fas fa-eye"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="text-center" id="errmsg" style="display:none;color:#ed4956;"></p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin:10px 0px;">
                                        <a href="#">I forgot my password</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button type="button" onclick="login()" class="btn btn-primary btn-block">Sign In</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <p class="text-info" style="cursor:default;">     
                                © <?= date("Y") ?> KLINIK RAHMAH
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <script>
            /*! login js by bodo gila website | maspriyambodo.co.id */
            function showpwd() {
                switch (document.getElementById("pwdtxt").type) {
                    case"password":
                        document.getElementById("pwdtxt").type = "text", $(".showpwd").removeClass("fas fa-eye"), $(".showpwd").addClass("fas fa-eye-slash");
                        break;
                        case"text":
                        document.getElementById("pwdtxt").type = "password", $(".showpwd").removeClass("fas fa-eye-slash"), $(".showpwd").addClass("fas fa-eye")
                        }
            }
            function login() {
                var e, s;
                e = $("input[name=username]").val(), s = $("input[name=password]").val(), "" == e ? ($("#msguname").show("slow"), document.getElementById("msguname").innerHTML = "Masukkan username !", $("#msguname").delay(3e3).hide("slow")) : "" == s ? ($("#msgpwd").show("slow"), document.getElementById("msgpwd").innerHTML = "Masukkan password !", $("#msgpwd").delay(3e3).hide("slow")) : $.ajax({async: !1, type: "POST", url: "https://localhost/klinikrahmah/Auth/proses/", data: {username: e, password: s}, statusCode: {200: function (e) {
                            1 == e.lvl ? window.location.href = "https://localhost/klinikrahmah/Dokter/Dashboard/index" : 2 == e.lvl ? window.location.href = "https://localhost/klinikrahmah/Administrator/Dashboard/index" : 3 == e.lvl && (window.location.href = "https://localhost/klinikrahmah/Perawat/Dashboard/index")
                        }, 201: function (e) {
                            $("#errmsg").show("slow"), document.getElementById("errmsg").innerHTML = e.message, $("#errmsg").delay(3500).hide("slow")
                        }}})
            }
            document.addEventListener("keypress", function onEvent(event) {
                if (event.key === "Enter") {
                    login();
                }
            });
        </script>
        <script type="text/javascript" src="<?= base_url('assets/css/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>