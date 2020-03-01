<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Giriş</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/line-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/line-awesome-font-awesome.min.css')}}">
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/slick/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"></head>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/sweetalert2.min.css')}}">

<body class="sign-in">


<div class="wrapper">

    <div class="sign-in-page">
        <div class="signin-popup">
            <div class="signin-pop">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cmp-info">
                            <div class="cm-logo">
                                <img src="images/cm-logo.png" alt="">
                                <p>Universtagram, bir genç topluluğu.</p>
                            </div><!--cm-logo end-->
                            <img src="images/cm-main-img.png" alt="">
                        </div><!--cmp-info end-->
                    </div>
                    <div class="col-lg-6">
                        <div class="login-sec">
                            <ul class="sign-control">
                                <li data-tab="tab-1" class="current"><a href="#" title="">Giriş Yap</a></li>
                                <li data-tab="tab-2"><a href="#" title="">Kayıt ol!</a></li>
                            </ul>
                            <div class="sign_in_sec current" id="tab-1">
                                @if($errors->any())
                                    <div  class="alert alert-danger">
                                        {{$errors->first()}}

                                    </div>
                                @endif

                                <h3>Giriş Yap</h3>
                                <form action="{{ route('login.post')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input type="text" name="email" placeholder="Kullanıcı Adınız">
                                                <i class="la la-user"></i>
                                            </div><!--sn-field end-->
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input type="password" name="password" placeholder="Şifreniz">
                                                <i class="la la-lock"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <button type="submit" value="submit">Giriş</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="login-resources">
                                    <h4>Facebook ile Giriş</h4>
                                    <ul>
                                        <li><a href="#" title="" class="fb"><i class="la la-facebook"></i>Facebook</a></li>
                                    </ul>
                                </div><!--login-resources end-->
                            </div><!--sign_in_sec end-->
                            <div class="sign_in_sec" id="tab-2">
                                <div class="signup-tab">
                                    <i class="la la-long-arrow-right"></i>
                                    <h2>ornek@edu.com.tr</h2>
                                    <ul>
                                        <li data-tab="tab-3" class="current"><a href="#" title="">Öğrenci</a></li>
                                        <li data-tab="tab-4"><a href="#" title="">Kurumsal</a></li>
                                    </ul>
                                </div><!--signup-tab end-->
                                <div class="dff-tab current" id="tab-3">
                                    <form action="{{route('register.post')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="text" name="name" placeholder="isminiz">
                                                    <i class="la la-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="text" name="lastname" placeholder="soyisminiz">
                                                    <i class="la la-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="email" name="email" placeholder="Mail adresiniz">
                                                    <i class="fa fa-mail-forward"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="file" name="select_file" placeholder="Fotoğraf Seçiniz">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="password" name="password" placeholder="Şifreniz">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="password" name="repeat-password" placeholder="Şifre Tekrarı">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="checky-sec st2">
                                                    <div class="fgt-sec">
                                                        <input type="checkbox" name="cc" id="c2">
                                                        <label for="c2">
                                                            <span></span>
                                                        </label>
                                                        <small>Yasal Sorumlulukları kabul ediyor ve <u>onaylıyorum.</u></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <button type="submit" value="submit">Kayıt OL!</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="dff-tab" id="tab-4">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="text" name="company_name" placeholder="Kuruluş adı">
                                                    <i class="la la-building"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="email" name="email" placeholder="Country">
                                                    <i class="la la-globe"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="password" name="password" placeholder="Password">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="password" name="repeat-password" placeholder="Repeat Password">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="checky-sec st2">
                                                    <div class="fgt-sec">
                                                        <input type="checkbox" name="cc" id="c3">
                                                        <label for="c3">
                                                            <span></span>
                                                        </label>
                                                        <small>Yasal sorumlulukları kabul ediyor ve <u>onaylıyorum.</u></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <button type="submit" value="submit">Kayıt ol</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footy-sec">
            <div class="container">
                <ul>
                    <li><a href="{{route('login')}}" title="">Kayıt ol</a></li>
                    <li><a href="{{route('login')}}" title="">Giriş</a></li>
                    <li><a href="#" title="">İnstagram</a></li>
                    <li><a href="#" title="">Facebook</a></li>
                    <li><a href="" title="">Hakkımızda</a></li>
                    <li><a href="" title="">Forum</a></li>
                    <li><a href="#" title="">Copyright Policy</a></li>
                </ul>
                <p><img src="images/copy-icon.png" alt="">Copyright 2020-21 | Çağatay Murat YILDIZ</p>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sweetalert2.all.min.js')}}"></script>
@include('sweetalert::alert')
</body>
</html>