@extends('masterPage.master')
@section('title','Anasayfa')
@section('content')

    @include('masterPage.head-nav-footer.header')

    <main>
        <div class="main-section">
            <div class="container">
                <div class="main-section-data">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                            <div class="main-left-sidebar no-margin">
                                <div class="user-data full-width">
                                    <div class="user-profile">
                                        <div class="username-dt">
                                            <div class="usr-pic">
                                                <img src="{{ asset('avatar/'.$userDetails->photo.'') }}" alt="">

                                            </div>
                                        </div>
                                        <div class="user-specs">
                                            <h3>{{$userDetails->name}}</h3>
                                            <h3>{{$userDetails->lastname}}</h3>
                                            <span>{{$userDetails->email}}</span>
                                        </div>
                                          <div class="usr-pic">
                                            <span><img src="{{asset('avatar/siteimg/'.$userDetails->Verification.'')}}" alt=""></span>
                                        </div>
                                    </div>
                                    <ul class="user-fw-status">
                                        <li>
                                            <h4></h4>
                                            <span>34</span>
                                        </li>
                                        <li>
                                            <h4>Takipçiler</h4>
                                            <span>155</span>
                                        </li>
                                        <li>
                                            <a href="{{ route('profile') }}" title="">Profilim</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="suggestions full-width">
                                    <div class="sd-title">
                                        <h3>Yeni kişiler keşfet</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <div class="suggestions-list">
                                        @foreach($suggestions as $sugg)
                                        <div class="suggestion-usd">
                                            <img src="{{asset('avatar/'.$sugg->photo.'')}}" width="50px" alt="">
                                            <div class="sgt-text">
                                                <h4><a href="{{url('friends')}}/{{$sugg->nickname}}">{{$sugg->name}}</a></h4>
                                                <span>{{$sugg->email}}</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        @endforeach
                                        <div class="view-more">
                                            <a href="#" title=""><i class="la la-caret-right"> daha fazla</i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="tags-sec full-width">
                                    <ul>
                                        <li><a href="#" title="">Help Center</a></li>
                                        <li><a href="#" title="">About</a></li>
                                        <li><a href="#" title="">Privacy Policy</a></li>
                                        <li><a href="#" title="">Community Guidelines</a></li>
                                        <li><a href="#" title="">Cookies Policy</a></li>
                                        <li><a href="#" title="">Career</a></li>
                                        <li><a href="#" title="">Language</a></li>
                                        <li><a href="#" title="">Copyright Policy</a></li>
                                    </ul>
                                    <div class="cp-sec">
                                        <img src="images/logo2.png" alt="">
                                        <p><img src="images/cp.png" alt="">Copyright 2019</p>
                                    </div>
                                </div><!--tags-sec end-->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8 no-pd">
                            <div class="main-ws-sec">
                                <div class="post-topbar">
                                    <div class="user-picy">
                                        <img src="{{ asset('avatar/'.$userDetails->photo.'') }}" alt="">
                                    </div>
                                    <div class="post-st">
                                        <ul>
                                            <li><a class="post_project active" href="#" title="">Durum paylaş</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="posts-section">
                                        <div class="post-popup2 pst-pj2">
                                            <div class="post-project2">
                                                <h3>Mesaj Gönder</h3>
                                                <div class="post-project-fields2">
                                                    <form method="post" action="">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <input type="hidden" name="id">
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <textarea name="message" placeholder="Mesajın"></textarea>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <ul>
                                                                    <li><button class="active" type="submit" >Mesajı gönder</button></li>
                                                                    <li><a href="#" title="">Vazgeç</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <a href="#" title=""><i class="la la-times-circle-o"></i></a>
                                            </div>
                                        </div>

                                    @foreach($shares as $share)
                                    <div class="posty">
                                        <div class="post-bar no-margin">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="{{ asset('avatar/'.$share->user->photo.'') }}" width="50px" alt="">
                                                    <div class="usy-name">
                                                        <h3>{{$share->user->name}}</h3>
                                                        <span><img src="images/clock.png" alt="">{{$share->date}}</span>
                                                    </div>
                                                </div>
                                                <div class="ed-opts">
                                                    <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                    <ul class="ed-options">
                                                        <li><a href="#" title="">Edit Post</a></li>
                                                        <li><a href="#" title="">Unsaved</a></li>
                                                        <li><a href="#" title="">Unbid</a></li>
                                                        <li><a href="#" title="">Close</a></li>
                                                        <li><a href="#" title="">Hide</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="epi-sec">
                                                <ul class="descp">
                                                    <li><img src="images/icon9.png" alt=""><span>Sonra {{$share->city_name}}</span></li>
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <h3>{{$share->title}}</h3>
                                                <ul class="job-dt">
                                                    <li><a href="#" title="">{{ $share->categoryDetail->category_name }}</a></li>
                                                    <li><span>₺30 / hr</span></li>
                                                </ul>
                                                <p>{{$share->description}} <a href="{{route('view',$share->id)}}" title="">daha fazla</a></p>
                                                <ul class="skill-tags">
                                                    <li><a href="#" title="">HTML</a></li>
                                                    <li><a href="#" title="">PHP</a></li>
                                                    <li><a href="#" title="">CSS</a></li>
                                                    <li><a href="#" title="">Javascript</a></li>
                                                    <li><a href="#" title="">Wordpress</a></li>
                                                </ul>
                                            </div>
                                            <div class="job-status-bar">
                                                <ul class="like-com">
                                                    <li>
                                                        <a href="{{route('like',$share->id)}}">
                                                            <i class="fas fa-heart"></i> Beğen ({{count($share->likes)}})
                                                        </a>
                                                        <img src="images/liked-img.png" alt="">
                                                        <span>25</span>
                                                    </li>
                                                    <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Yorumlar ({{ count($share->comments) }})<a></li>
                                                </ul>
                                                <a href="#"><i class="fas fa-eye"></i>{{$share->hit}}</a>
                                            </div>
                                        </div>

                                            <div class="comment-section">
                                                @if(count($share->comments))
                                                @foreach ($share->comments as $comment)
                                                <div class="comment-sec">
                                                    <ul>
                                                        <li>
                                                            <div class="comment-list">
                                                                <div class="bg-img cm_img">
                                                                    <a href="friends/{{$comment->user->nickname}}"><img  src="{{asset('avatar/'.$comment->user->photo.'')}}" width="50px" alt=""></a>
                                                                </div>
                                                                <div class="comment">
                                                                    <span><img src="images/clock.png" alt=""> {{$comment->date}}</span>
                                                                    <p>{{$comment->comment}}</p>
                                                                    <a href="#" title=""><i class="la la-reply-all"></i>Cevapla</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                @endforeach
                                                @else
                                                    <div class="comment-sec mb-3">
                                                        <ul>
                                                            <li>
                                                                Bu paylaşıma ait yorum bulunmamakta!
                                                            </li>
                                                        </ul>
                                                    </div>
                                                @endif
                                                <div class="post-comment">
                                                    <div class="cm_img">
                                                        <img src="{{asset('avatar/'.$userDetails->photo)}}" alt="">
                                                    </div>
                                                    <div class="comment_box">
                                                        <form action="{{ route('add.comment') }}" method="post">
                                                            @csrf
                                                            <input type="text" name="comment" autocomplete="off" placeholder="Yorum gönderin..">
                                                            <input type="hidden" value="{{$share->id}}" name="shares_id">
                                                            <button type="submit" id="addCom">Paylaş</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    @endforeach
                                </div>

                                <div class="top-profiles">
                                    <div class="pf-hd">
                                        <h3>Yeni kişiler keşfet</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div>

                                    <div class="profiles-slider">
                                        @foreach($random as $rdn)
                                            <div class="user-profy">
                                                <img src="{{asset('avatar/'.$rdn->photo.'')}}" width="57px" height="57px" alt="">
                                                <h3>{{$rdn->name}}</h3>
                                                <span>Öğrenci</span>
                                                <ul>
                                                    <li><a href="#" title="" class="followw">Takip et</a></li>
                                                    <li><a href="#" title="" class="envlp post_project2"><img src="images/envelop.png" alt="">Mesaj</a></li>
                                                </ul>
                                                <a href="{{route('friends',$rdn->nickname)}}" title="">Profili görüntüle</a>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 pd-right-none no-pd">
                            <div class="right-sidebar">
                                <div class="widget widget-about">
                                    <img src="{{ asset('avatar/'.$userDetails->photo.'') }}" alt="">
                                    <h3><i><img src="{{asset('avatar/tac.jpg')}}" width="50px" alt=""></i> VIP Öğrenci</h3>

                                    <span>Çağatay Murat YILDIZ</span>
                                    <div class="sign_link">
                                        <h3><a href="sign-in.html" title="">Profili gör</a></h3>
                                        <a href="#" title="">Learn More</a>
                                    </div>
                                    <div class="sign_link">
                                        <h3>REKLAM VER</h3>
                                        <a href="#" title="">ayarlara git</a>
                                    </div>
                                </div>
                                <div class="widget widget-jobs">
                                    <div class="sd-title">
                                        <h3>Tüm ilan kategorileri</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <div class="jobs-list">
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Senior Product Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div>
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Senior UI / UX Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div>
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Junior Seo Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div><!--job-info end-->
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Senior PHP Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div>
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Senior Developer Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget widget-jobs">
                                    <div class="sd-title">
                                        <h3>Most Viewed This Week</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <div class="jobs-list">
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Senior Product Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div>
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Senior UI / UX Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div>
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Junior Seo Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget suggestions full-width">
                                    <div class="sd-title">
                                        <h3>Most Viewed People</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <div class="suggestions-list">
                                        <div class="suggestion-usd">
                                            <img src="images/resources/s1.png" alt="">
                                            <div class="sgt-text">
                                                <h4>Jessica William</h4>
                                                <span>Graphic Designer</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="suggestion-usd">
                                            <img src="images/resources/s2.png" alt="">
                                            <div class="sgt-text">
                                                <h4>John Doe</h4>
                                                <span>PHP Developer</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="suggestion-usd">
                                            <img src="images/resources/s3.png" alt="">
                                            <div class="sgt-text">
                                                <h4>Poonam</h4>
                                                <span>Wordpress Developer</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="suggestion-usd">
                                            <img src="images/resources/s4.png" alt="">
                                            <div class="sgt-text">
                                                <h4>Bill Gates</h4>
                                                <span>C &amp; C++ Developer</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="suggestion-usd">
                                            <img src="images/resources/s5.png" alt="">
                                            <div class="sgt-text">
                                                <h4>Jessica William</h4>
                                                <span>Graphic Designer</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="suggestion-usd">
                                            <img src="images/resources/s6.png" alt="">
                                            <div class="sgt-text">
                                                <h4>John Doe</h4>
                                                <span>PHP Developer</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="view-more">
                                            <a href="#" title="">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!------------------ Gönderi oluştur POPUP  ---------->
    <div class="post-popup pst-pj">
        <div class="post-project">
            @if($errors->any())
                <div  class="alert alert-danger">
                    {{$errors->first()}}

                </div>
            @endif
            <h3>Gönderi Oluştur</h3>
            <div class="post-project-fields">
                <form method="post" action="{{route('home.post')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" name="title" placeholder="Başlık">
                        </div>
                        <div class="col-lg-12">
                            <div class="inp-field">
                                <select name="category">
                                    <option>Kategoriler</option>
                                    @foreach($categories as $row)
                                        <option value="{{$row->id}}">{{$row->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="tag" placeholder="Etiket ekle">
                        </div>

                        <div class="col-lg-12">
                            <textarea name="description" placeholder="Açıklama"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <ul>
                                <li><button class="active" type="submit" >Paylaş</button></li>
                                <li><a href="#" title="">Vazgeç</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <a href="#" title=""><i class="la la-times-circle-o"></i></a>
        </div>
    </div>
    <!------------------  Gönderi 2. POPUP      ---------->
    <div class="post-popup job_post">
        <div class="post-project">
            <h3>Post a job</h3>
            <div class="post-project-fields">
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" name="title" placeholder="Title">
                        </div>
                        <div class="col-lg-12">
                            <div class="inp-field">
                                <select>
                                    <option>Category</option>
                                    <option>Category 1</option>
                                    <option>Category 2</option>
                                    <option>Category 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="skills" placeholder="Skills">
                        </div>
                        <div class="col-lg-6">
                            <div class="price-br">
                                <input type="text" name="price1" placeholder="Price">
                                <i class="la la-dollar"></i>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="inp-field">
                                <select>
                                    <option>Full Time</option>
                                    <option>Half time</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <textarea name="description" placeholder="Description"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <ul>
                                <li><button class="active" type="submit" value="post">Post</button></li>
                                <li><a href="#" title="">Cancel</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <a href="#" title=""><i class="la la-times-circle-o"></i></a>
        </div>
    </div>
    <!-----------------       BİTİŞ            ---------->



    <div class="chatbox-list">
        <div class="chatbox">
            <div class="chat-mg">
                <a href="#" title=""><img src="images/resources/usr-img1.png" alt=""></a>
                <span>2</span>
            </div>
            <div class="conversation-box">
                <div class="con-title mg-3">
                    <div class="chat-user-info">
                        <img src="images/resources/us-img1.png" alt="">
                        <h3>John Doe <span class="status-info"></span></h3>
                    </div>
                    <div class="st-icons">
                        <a href="#" title=""><i class="la la-cog"></i></a>
                        <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
                        <a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
                    </div>
                </div>
                <div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
                    <div class="chat-msg">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                        <span>Sat, Aug 23, 1:10 PM</span>
                    </div>
                    <div class="date-nd">
                        <span>Sunday, August 24</span>
                    </div>
                    <div class="chat-msg st2">
                        <p>Cras ultricies ligula.</p>
                        <span>5 minutes ago</span>
                    </div>
                    <div class="chat-msg">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                        <span>Sat, Aug 23, 1:10 PM</span>
                    </div>
                </div>
                <div class="typing-msg">
                    <form>
                        <textarea placeholder="Type a message here"></textarea>
                        <button type="submit"><i class="la la-send"></i></button>
                    </form>
                    <ul class="ft-options">
                        <li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
                        <li><a href="#" title=""><i class="la la-camera"></i></a></li>
                        <li><a href="#" title=""><i class="la la-paperclip"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="chatbox">
            <div class="chat-mg">
                <a href="#" title=""><img src="images/resources/usr-img2.png" alt=""></a>
            </div>
            <div class="conversation-box">
                <div class="con-title mg-3">
                    <div class="chat-user-info">
                        <img src="images/resources/us-img1.png" alt="">
                        <h3>John Doe <span class="status-info"></span></h3>
                    </div>
                    <div class="st-icons">
                        <a href="#" title=""><i class="la la-cog"></i></a>
                        <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
                        <a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
                    </div>
                </div>
                <div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
                    <div class="chat-msg">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                        <span>Sat, Aug 23, 1:10 PM</span>
                    </div>
                    <div class="date-nd">
                        <span>Sunday, August 24</span>
                    </div>
                    <div class="chat-msg st2">
                        <p>Cras ultricies ligula.</p>
                        <span>5 minutes ago</span>
                    </div>
                    <div class="chat-msg">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                        <span>Sat, Aug 23, 1:10 PM</span>
                    </div>
                </div>
                <div class="typing-msg">
                    <form>
                        <textarea placeholder="Type a message here"></textarea>
                        <button type="submit"><i class="la la-send"></i></button>
                    </form>
                    <ul class="ft-options">
                        <li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
                        <li><a href="#" title=""><i class="la la-camera"></i></a></li>
                        <li><a href="#" title=""><i class="la la-paperclip"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="chatbox">
            <div class="chat-mg bx">
                <a href="#" title=""><img src="images/chat.png" alt=""></a>
                <span>2</span>
            </div>
            <div class="conversation-box">
                <div class="con-title">
                    <h3>Messages</h3>
                    <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
                </div>
                <div class="chat-list">
                    <div class="conv-list active">
                        <div class="usrr-pic">
                            <img src="images/resources/usy1.png" alt="">
                            <span class="active-status activee"></span>
                        </div>
                        <div class="usy-info">
                            <h3>John Doe</h3>
                            <span>Lorem ipsum dolor <img src="images/smley.png" alt=""></span>
                        </div>
                        <div class="ct-time">
                            <span>1:55 PM</span>
                        </div>
                        <span class="msg-numbers">2</span>
                    </div>
                    <div class="conv-list">
                        <div class="usrr-pic">
                            <img src="images/resources/usy2.png" alt="">
                        </div>
                        <div class="usy-info">
                            <h3>John Doe</h3>
                            <span>Lorem ipsum dolor <img src="images/smley.png" alt=""></span>
                        </div>
                        <div class="ct-time">
                            <span>11:39 PM</span>
                        </div>
                    </div>
                    <div class="conv-list">
                        <div class="usrr-pic">
                            <img src="images/resources/usy3.png" alt="">
                        </div>
                        <div class="usy-info">
                            <h3>John Doe</h3>
                            <span>Lorem ipsum dolor <img src="images/smley.png" alt=""></span>
                        </div>
                        <div class="ct-time">
                            <span>0.28 AM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection