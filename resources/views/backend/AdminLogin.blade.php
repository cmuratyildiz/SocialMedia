<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Giriş yap</title>
    <link rel="stylesheet" href="{{asset('asset/Admin/assets/styles/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/Admin/assets/styles/custom.css')}}">
    <!-- Waves Effect -->
    <link rel="stylesheet" href="{{asset('asset/Admin/assets/plugin/waves/waves.min.css')}}">
</head>

<body>
    <div id="single-wrapper">
        <form action="{{route('admin.login.post')}}" method="post" class="frm-single">
            @csrf
        <div class="inside">
            <div class="title"><strong>Universtagram</strong>Admin</div>
            <!-- /.title -->
            <div class="frm-title">Giriş</div>
            <!-- /.frm-title -->
            <div class="frm-input"><input type="email" name="email" placeholder="E-mail" class="frm-inp"><i class="fa fa-user frm-ico"></i></div>
            <!-- /.frm-input -->
            <div class="frm-input"><input type="password" name="password" placeholder="Şifreniz" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
            <!-- /.frm-input -->
            <div class="clearfix margin-bottom-20">
                <div class="float-left">
                    <div class="checkbox primary"><input type="checkbox" id="rememberme"><label for="rememberme">Hatırla</label></div>
                    <!-- /.checkbox -->
                </div>
                <!-- /.float-left -->
                <div class="float-right"><a href="page-recoverpw.html" class="a-link"><i class="fa fa-unlock-alt"></i>Şifremi Unuttum?</a></div>
                <!-- /.float-right -->
            </div>
            <!-- /.clearfix -->
            <button type="submit" class="frm-submit">Giriş yap<i class="fa fa-arrow-circle-right"></i></button>
            <div class="row small-spacing">
                <div class="col-md-12">
                    <div class="txt-login-with txt-center">sosyal medya ile</div>
                    <!-- /.txt-login-with -->
                </div>
                <!-- /.col-md-12 -->
                <div class="col-md-6"><button type="button" class="btn btn-sm btn-icon btn-icon-left btn-social-with-text btn-facebook text-white waves-effect waves-light"><i class="ico fa fa-facebook"></i><span>Facebook</span></button></div>
                <!-- /.col-md-6 -->
                <div class="col-md-6"><button type="button" class="btn btn-sm btn-icon btn-icon-left btn-social-with-text btn-google-plus text-white waves-effect waves-light"><i class="ico fa fa-google-plus"></i>Google+</button></div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
            <a href="page-register.html" class="a-link"><i class="fa fa-key"></i>Yeni Kayıt oluştur.</a>
            <div class="frm-footer">Universtagram © 2020.</div>
            <!-- /.footer -->
        </div>
        <!-- .inside -->
    </form>
    <!-- /.frm-single -->
</div>
<!-- ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('asset/Admin/assets/scripts/jquery.min.js')}}"></script>
<script src="{{asset('asset/Admin/assets/scripts/modernizr.min.js')}}"></script>
<script src="{{asset('asset/Admin/assets/plugin/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/Admin/assets/plugin/nprogress/nprogress.js')}}"></script>
<script src="{{asset('asset/Admin/assets/plugin/waves/waves.min.js')}}"></script>
<script src="{{asset('asset/Admin/assets/scripts/main.min.js')}}"></script>
<script src="{{asset('asset/Admin/assets/scripts/mycommon.js')}}"></script>
</body>
</html>