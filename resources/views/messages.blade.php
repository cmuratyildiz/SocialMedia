@extends('masterPage.master')
@section('title','Anasayfa')
@section('content')

    @include('masterPage.head-nav-footer.header')

    <section class="messages-page">
        <div class="container">
            <div class="messages-sec">
                <div class="row">
                    <div class="col-lg-4 col-md-12 no-pdd">
                        <div class="msgs-list">
                            <div class="msg-title">
                                <h3>Mesajlarım</h3>
                                <ul>
                                    <li><a href="#" title=""><i class="fa fa-cog"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-ellipsis-v"></i></a></li>
                                </ul>
                            </div><!--msg-title end-->
                            <div class="messages-list">
                                <ul>
                                    @foreach($AllMessages as $message)
                                    <li class="active">
                                        <div class="usr-msg-details">
                                            <div class="usr-ms-img">
                                                <img src="{{asset('avatar/'.$message->photo.'')}}" alt="">
                                                <span class="msg-status"></span>
                                            </div>
                                            <div class="usr-mg-info">
                                                <h3>{{$message->name}}</h3>
                                                <p>{{$message->content}} <img src="images/smley.png" alt=""></p>
                                            </div><!--usr-mg-info end-->
                                            <span class="posted_time">{{$message->date}}</span>
                                            <span class="msg-notifc">1</span>
                                        </div><!--usr-msg-details end-->
                                    </li>
                                   @endforeach
                                </ul>
                            </div><!--messages-list end-->
                        </div><!--msgs-list end-->
                    </div>
                    <div class="col-lg-8 col-md-12 pd-right-none pd-left-none">
                        <div class="main-conversation-box">
                            <div class="message-bar-head">
                                <div class="usr-msg-details">
                                    <div class="usr-ms-img">
                                        <img src="images/resources/m-img1.png" alt="">
                                    </div>
                                    <div class="usr-mg-info">
                                        <h3>John Doe</h3>
                                        <p>Online</p>
                                    </div><!--usr-mg-info end-->
                                </div>
                                <a href="#" title=""><i class="fa fa-ellipsis-v"></i></a>
                            </div><!--message-bar-head end-->
                            <div class="messages-line">
                                <div class="main-message-box">
                                    <div class="messg-usr-img">
                                        <img src="images/resources/m-img1.png" alt="">
                                    </div><!--messg-usr-img end-->
                                    <div class="message-dt">
                                        <div class="message-inner-dt img-bx">
                                            <img src="images/resources/mt-img1.png" alt="">
                                            <img src="images/resources/mt-img2.png" alt="">
                                            <img src="images/resources/mt-img3.png" alt="">
                                        </div><!--message-inner-dt end-->
                                        <span>Sat, Aug 23, 1:08 PM</span>
                                    </div><!--message-dt end-->
                                </div><!--main-message-box end-->
                                <div class="main-message-box ta-right">
                                    <div class="message-dt">
                                        <div class="message-inner-dt">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                                        </div><!--message-inner-dt end-->
                                        <span>Sat, Aug 23, 1:08 PM</span>
                                    </div><!--message-dt end-->
                                    <div class="messg-usr-img">
                                        <img src="images/resources/m-img2.png" alt="">
                                    </div><!--messg-usr-img end-->
                                </div><!--main-message-box end-->
                                <div class="main-message-box st3">
                                    <div class="message-dt st3">
                                        <div class="message-inner-dt">
                                            <p>Cras ultricies ligula.<img src="images/smley.png" alt=""></p>
                                        </div><!--message-inner-dt end-->
                                        <span>5 minutes ago</span>
                                    </div><!--message-dt end-->
                                    <div class="messg-usr-img">
                                        <img src="images/resources/m-img1.png" alt="">
                                    </div><!--messg-usr-img end-->
                                </div><!--main-message-box end-->
                                <div class="main-message-box ta-right">
                                    <div class="message-dt">
                                        <div class="message-inner-dt">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                                        </div><!--message-inner-dt end-->
                                        <span>Sat, Aug 23, 1:08 PM</span>
                                    </div><!--message-dt end-->
                                    <div class="messg-usr-img">
                                        <img src="images/resources/m-img2.png" alt="">
                                    </div><!--messg-usr-img end-->
                                </div><!--main-message-box end-->
                                <div class="main-message-box st3">
                                    <div class="message-dt st3">
                                        <div class="message-inner-dt">
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div><!--message-inner-dt end-->
                                        <span>2 minutes ago</span>
                                    </div><!--message-dt end-->
                                    <div class="messg-usr-img">
                                        <img src="images/resources/m-img1.png" alt="">
                                    </div><!--messg-usr-img end-->
                                </div><!--main-message-box end-->
                                <div class="main-message-box ta-right">
                                    <div class="message-dt">
                                        <div class="message-inner-dt">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                                        </div><!--message-inner-dt end-->
                                        <span>Sat, Aug 23, 1:08 PM</span>
                                    </div><!--message-dt end-->
                                    <div class="messg-usr-img">
                                        <img src="images/resources/m-img2.png" alt="">
                                    </div><!--messg-usr-img end-->
                                </div><!--main-message-box end-->
                                <div class="main-message-box st3">
                                    <div class="message-dt st3">
                                        <div class="message-inner-dt">
                                            <p>....</p>
                                        </div><!--message-inner-dt end-->
                                        <span>Typing...</span>
                                    </div><!--message-dt end-->
                                    <div class="messg-usr-img">
                                        <img src="images/resources/m-img1.png" alt="">
                                    </div><!--messg-usr-img end-->
                                </div><!--main-message-box end-->
                            </div><!--messages-line end-->
                            <div class="message-send-area">
                                <form>
                                    <div class="mf-field">
                                        <input type="text" name="message" placeholder="Type a message here">
                                        <button type="submit">Send</button>
                                    </div>
                                    <ul>
                                        <li><a href="#" title=""><i class="fa fa-smile-o"></i></a></li>
                                        <li><a href="#" title=""><i class="fa fa-camera"></i></a></li>
                                        <li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
                                    </ul>
                                </form>
                            </div><!--message-send-area end-->
                        </div><!--main-conversation-box end-->
                    </div>
                </div>
            </div><!--messages-sec end-->
        </div>
    </section><!--messages-page end-->




    @endsection