@extends('masterPage.master')
@section('title','Anasayfa')
@section('content')

    @include('masterPage.head-nav-footer.header')

    <section class="cover-sec">
        <img src="{{asset('avatar/banner/'.$userDetails->banner_photo.'')}}" alt="">
    </section>

    <main>
        <div class="main-section">
            <div class="container">
                <div class="main-section-data">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="main-left-sidebar">
                                <div class="user_profile">
                                    <div class="user-pro-img">

                                        <img src="{{asset('avatar/'.$userDetails->photo.'')}}" width="170px" height="170px" alt="">
                                    </div><!--user-pro-img end-->
                                    <div class="user_pro_status">
                                        <ul class="flw-hr">
                                            <li><a href="#" title="" class="flww" id="followme"><i class="la la-plus"></i> Takip et</a></li>
                                            <li><a href="#" title="" class="hre">Hire</a></li>
                                        </ul>
                                        <ul class="flw-status">
                                            <li>
                                                <span>Takip</span>
                                                <b>34</b>
                                            </li>
                                            <li>
                                                <span>Takipçiler</span>
                                                <b>155</b>
                                            </li>
                                        </ul>
                                    </div><!--user_pro_status end-->
                                    <ul class="social_links">
                                        <li><a href="#" title=""><i class="fa fa-facebook-square"></i> {{$userDetails->facebook}}</a></li>
                                        <li><a href="#" title=""><i class="fa fa-twitter"></i> {{$userDetails->twitter}}</a></li>
                                        <li><a href="#" title=""><i class="fa fa-instagram"></i> {{$userDetails->instagram}}</a></li>
                                    </ul>
                                </div><!--user_profile end-->
                                <div class="suggestions full-width">
                                    <div class="sd-title">
                                        <h3>Yeni kişiler keşfet</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div><!--sd-title end-->
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
                                            <a href="#" title="">daha fazla</a>
                                        </div>
                                    </div><!--suggestions-list end-->
                                </div><!--suggestions end-->
                            </div><!--main-left-sidebar end-->
                        </div>

                        <div class="col-lg-6">
                            <div class="main-ws-sec">
                                <div class="user-tab-sec">
                                    <h3>{{$userDetails->name}} {{$userDetails->lastname}}</h3>
                                    <div class="star-descp">
                                        <span>Graphic Designer at Self Employed</span>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                    </div><!--star-descp end-->

                                </div><!--user-tab-sec end-->
                                @foreach($FriendShares as $friendshare)
                                <div class="product-feed-tab current" id="feed-dd">
                                    <div class="posts-section">
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="{{asset('avatar/'.$friendshare->user->photo.'')}}" width="50px" alt="">
                                                    <div class="usy-name">
                                                        <h3>{{$friendshare->user->name}}</h3>
                                                        <span><img src="images/clock.png" alt="">{{$friendshare->date}}</span>
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
                                                    <li><img src="{{asset('')}}images/icon8.png" alt=""><span>Epic Coder</span></li>
                                                    <li><img src="{{asset('')}}images/icon9.png" alt=""><span>{{$friendshare->city_name}}</span></li>
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <h3>{{$friendshare->title}}</h3>
                                                <ul class="job-dt">
                                                    <li><a href="#" title="">{{$friendshare->categoryDetail->category_name}}</a></li>
                                                    <li><span>$30 / hr</span></li>
                                                </ul>
                                                <p> {{$friendshare->description}} <a href="#" title="">devamını oku</a></p>
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
                                                        <a href="#"><i class="fas fa-heart"></i> Beğen</a>
                                                        <img src="{{asset('images/liked-img.png')}}" alt="">
                                                        <span>25</span>
                                                    </li>
                                                    <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Yorumlar 15</a></li>
                                                </ul>
                                                <a href="#"><i class="fas fa-eye"></i> 50</a>
                                            </div>
                                        </div><!--post-bar end-->

                                    </div><!--posts-section end-->
                                </div><!--product-feed-tab end-->
                                @endforeach
                                <div class="process-comm">
                                    <div class="spinner">
                                        <div class="bounce1"></div>
                                        <div class="bounce2"></div>
                                        <div class="bounce3"></div>
                                    </div>
                                </div><!--process-comm end-->
                                <div class="product-feed-tab" id="info-dd">
                                    <div class="user-profile-ov">
                                        <h3>Overview</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus. Aliquam accumsan ac magna convallis bibendum. Quisque laoreet augue eget augue fermentum scelerisque. Vivamus dignissim mollis est dictum blandit. Nam porta auctor neque sed congue. Nullam rutrum eget ex at maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem.</p>
                                    </div><!--user-profile-ov end-->
                                    <div class="user-profile-ov st2">
                                        <h3>Experience</h3>
                                        <h4>Web designer</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
                                        <h4>UI / UX Designer</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id.</p>
                                        <h4>PHP developer</h4>
                                        <p class="no-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
                                    </div><!--user-profile-ov end-->
                                    <div class="user-profile-ov">
                                        <h3>Education</h3>
                                        <h4>Master of Computer Science</h4>
                                        <span>2015 - 2018</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
                                    </div><!--user-profile-ov end-->
                                    <div class="user-profile-ov">
                                        <h3>Location</h3>
                                        <h4>India</h4>
                                        <p>151/4 BT Chownk, Delhi </p>
                                    </div><!--user-profile-ov end-->
                                    <div class="user-profile-ov">
                                        <h3>Skills</h3>
                                        <ul>
                                            <li><a href="#" title="">HTML</a></li>
                                            <li><a href="#" title="">PHP</a></li>
                                            <li><a href="#" title="">CSS</a></li>
                                            <li><a href="#" title="">Javascript</a></li>
                                            <li><a href="#" title="">Wordpress</a></li>
                                            <li><a href="#" title="">Photoshop</a></li>
                                            <li><a href="#" title="">Illustrator</a></li>
                                            <li><a href="#" title="">Corel Draw</a></li>
                                        </ul>
                                    </div><!--user-profile-ov end-->
                                </div><!--product-feed-tab end-->
                                <div class="product-feed-tab" id="portfolio-dd">
                                    <div class="portfolio-gallery-sec">
                                        <h3>Galeri</h3>
                                        <div class="gallery_pf">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="images/resources/pf-img1.jpg" alt="">
                                                        <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="images/resources/pf-img2.jpg" alt="">
                                                        <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="images/resources/pf-img3.jpg" alt="">
                                                        <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="images/resources/pf-img4.jpg" alt="">
                                                        <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="images/resources/pf-img5.jpg" alt="">
                                                        <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="images/resources/pf-img6.jpg" alt="">
                                                        <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="images/resources/pf-img7.jpg" alt="">
                                                        <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="images/resources/pf-img8.jpg" alt="">
                                                        <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="images/resources/pf-img9.jpg" alt="">
                                                        <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="gallery_pt">
                                                        <img src="images/resources/pf-img10.jpg" alt="">
                                                        <a href="#" title=""><img src="images/all-out.png" alt=""></a>
                                                    </div><!--gallery_pt end-->
                                                </div>
                                            </div>
                                        </div><!--gallery_pf end-->
                                    </div><!--portfolio-gallery-sec end-->
                                </div><!--product-feed-tab end-->
                            </div><!--main-ws-sec end-->
                        </div>
                        <!--Mesaj Gönder oluştur-->
                        <div class="post-popup2 pst-pj2">
                            <div class="post-project2">
                                <h3>Mesaj Gönder</h3>
                                <div class="post-project-fields2">
                                    <form method="post" action="{{route('friend.message', [$userDetails->id])}}">
                                        @csrf
                                        <div class="row">
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
                                </div><!--post-project-fields end-->
                                <a href="#" title=""><i class="la la-times-circle-o"></i></a>
                            </div><!--post-project end-->
                        </div>

                        <!--post-project-popup end-->
                        <div class="col-lg-3">
                            <div class="right-sidebar">
                                <div class="message-btn">
                                    <a href="#" class="post_project2" title=""><i class="fa fa-envelope"></i> Mesaj Gönder</a>
                                </div>
                            </div>
                                <div class="widget widget-portfolio">
                                    <div class="wd-heady">
                                        <h3>Portfolio</h3>
                                        <img src="images/photo-icon.png" alt="">
                                    </div>
                                    <div class="pf-gallery">
                                        <ul>
                                            <li><a href="#" title=""><img src="{{asset('images/resources/pf-gallery1.png')}}" alt=""></a></li>
                                        </ul>
                                    </div><!--pf-gallery end-->
                                </div><!--widget-portfolio end-->
                            </div><!--right-sidebar end-->
                        </div>
                    </div>
                </div><!-- main-section-data end-->
            </div>
        </div>
    </main>
    @endsection