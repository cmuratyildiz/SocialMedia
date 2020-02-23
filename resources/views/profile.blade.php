@extends('masterPage.master')
@section('title','Anasayfa')
@section('content')

    @include('masterPage.head-nav-footer.header')

    <section class="cover-sec">
        <img src="{{'avatar/banner/'.$userDetails->banner_photo.''}}" width="1349px" height="400px" alt="">
        <div class="add-pic-box">
            <div class="container">
                <div class="row no-gutters">
                        <div class="col-lg-12 col-sm-12">
                            <input type="file"  id="file">
                            <label for="file">Arka Plan Fotoğrafı değiştir</label>
                        </div>
                </div>
            </div>
        </div>
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
                                        <img src="{{asset('avatar/'.$userDetails->photo.'')}}" width="170px" alt="">

                                        <div class="add-dp" id="OpenImgUpload">
                                            <input type="file" name="photo" id="file">
                                            <label for="file"><i class="fas fa-camera"></i></label>
                                        </div>
                                    </div><!--user-pro-img end-->
                                    <div class="user_pro_status">
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
                                        <li><a href="#" title=""><i class="la la-globe"></i> www.example.com</a></li>
                                        <li><a href="#" title=""><i class="fa fa-facebook-square"></i> {{$userDetails->facebook}}</a></li>
                                        <li><a href="#" title=""><i class="fa fa-twitter"></i> {{$userDetails->twitter}}</a></li>
                                        <li><a href="#" title=""><i class="fa fa-instagram"></i> {{$userDetails->instagram}}</a></li>
                                    </ul>
                                </div><!--user_profile end-->
                                <div class="suggestions full-width">
                                    <div class="sd-title">
                                        <h3>Profiline bakanlar</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div><!--sd-title end-->
                                    <div class="suggestions-list">
                                        <div class="suggestion-usd">
                                            <img src="" alt="">
                                            <div class="sgt-text">
                                                <h4>Tayip Songur</h4>
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
                                                <span>C & C++ Developer</span>
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
                                    </div><!--suggestions-list end-->
                                </div><!--suggestions end-->
                            </div><!--main-left-sidebar end-->
                        </div>
                        <div class="col-lg-6">
                            <div class="main-ws-sec">
                                <div class="user-tab-sec rewivew">
                                    <h3>{{$userDetails->name}} {{$userDetails->lastname}}</h3>
                                    <div class="star-descp">
                                        <span>deneme</span>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                        <a href="#" title="">Status</a>
                                    </div><!--star-descp end-->
                                    <div class="tab-feed st2 settingjb">
                                        <ul>
                                            <li data-tab="feed-dd" class="active">
                                                <a href="#" title="">
                                                    <img src="images/ic1.png" alt="">
                                                    <span>Akış</span>
                                                </a>
                                            </li>
                                            <li data-tab="info-dd">
                                                <a href="#" title="">
                                                    <img src="images/ic2.png" alt="">
                                                    <span>Bilgilerim</span>
                                                </a>
                                            </li>
                                            <li data-tab="saved-jobs">
                                                <a href="#" title="">
                                                    <img src="images/ic4.png" alt="">
                                                    <span>Jobs</span>
                                                </a>
                                            </li>
                                            <li data-tab="my-bids">
                                                <a href="#" title="">
                                                    <img src="images/ic5.png" alt="">
                                                    <span>Bids</span>
                                                </a>
                                            </li>
                                            <li data-tab="portfolio-dd">
                                                <a href="#" title="">
                                                    <img src="images/ic3.png" alt="">
                                                    <span>Galeri</span>
                                                </a>
                                            </li>
                                            <li data-tab="rewivewdata">
                                                <a href="#" title="">
                                                    <img src="images/review.png" alt="">
                                                    <span>Reviews</span>
                                                </a>
                                            </li>
                                            <li data-tab="payment-dd">
                                                <a href="#" title="">
                                                    <img src="images/ic6.png" alt="">
                                                    <span>Payment</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div><!-- tab-feed end-->
                                </div><!--user-tab-sec end-->
                                <div class="product-feed-tab" id="saved-jobs">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="mange-tab" data-toggle="tab" href="#mange" role="tab" aria-controls="home" aria-selected="true">Manage Jobs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="saved-tab" data-toggle="tab" href="#saved" role="tab" aria-controls="profile" aria-selected="false">Saved Jobs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#applied" role="tab" aria-controls="applied" aria-selected="false">Applied Jobs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="cadidates-tab" data-toggle="tab" href="#cadidates" role="tab" aria-controls="contact" aria-selected="false">Applied cadidates</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="mange" role="tabpanel" aria-labelledby="mange-tab">
                                            <div class="posts-bar">
                                                <div class="post-bar bgclr">
                                                    <div class="wordpressdevlp">
                                                        <h2>Senior Wordpress Developer</h2>

                                                        <p><i class="la la-clock-o"></i>Posted on 30 August 2018</p>
                                                    </div>
                                                    <br>
                                                    <div class="row no-gutters">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="cadidatesbtn">
                                                                <button type="button" class="btn btn-primary">
                                                                    <span class="badge badge-light">3</span>Candidates
                                                                </button>
                                                                <a href="#">
                                                                    <i class="far fa-edit"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="far fa-trash-alt"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12">
                                                            <ul class="bk-links bklink">
                                                                <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                                <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="posts-bar">
                                                <div class="post-bar bgclr">
                                                    <div class="wordpressdevlp">
                                                        <h2>Senior Php Developer</h2>

                                                        <p><i class="la la-clock-o"></i> Posted on 29 August 2018</p>
                                                    </div>
                                                    <br>
                                                    <div class="row no-gutters">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="cadidatesbtn">
                                                                <button type="button" class="btn btn-primary">
                                                                    <span class="badge badge-light">3</span>Candidates
                                                                </button>
                                                                <a href="#">
                                                                    <i class="far fa-edit"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="far fa-trash-alt"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12">
                                                            <ul class="bk-links bklink">
                                                                <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                                <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="posts-bar">
                                                <div class="post-bar bgclr">
                                                    <div class="wordpressdevlp">
                                                        <h2>Senior UI UX Designer</h2>

                                                        <div class="row no-gutters">
                                                            <div class="col-md-6 col-sm-12">
                                                                <p class="posttext"><i class="la la-clock-o"></i>Posted on 5 June 2018</p>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <p><i class="la la-clock-o"></i>Expiried on 5 October 2018</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row no-gutters">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="cadidatesbtn">
                                                                <button type="button" class="btn btn-primary">
                                                                    <span class="badge badge-light">3</span>Candidates
                                                                </button>
                                                                <a href="#">
                                                                    <i class="far fa-trash-alt"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12">
                                                            <ul class="bk-links bklink">
                                                                <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                                <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="saved" role="tabpanel" aria-labelledby="saved-tab">
                                            <div class="post-bar">
                                                <div class="p-all saved-post">
                                                    <div class="usy-dt">
                                                        <div class="wordpressdevlp">
                                                            <h2>Senior Wordpress Developer</h2>

                                                            <p><i class="la la-clock-o"></i>Posted on 30 August 2018</p>
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
                                                <ul class="savedjob-info saved-info">
                                                    <li>
                                                        <h3>Applicants</h3>
                                                        <p>10</p>
                                                    </li>
                                                    <li>
                                                        <h3>Job Type</h3>
                                                        <p>Full Time</p>
                                                    </li>
                                                    <li>
                                                        <h3>Salary</h3>
                                                        <p>$600 - Mannual</p>
                                                    </li>
                                                    <li>
                                                        <h3>Posted : 5 Days Ago</h3>
                                                        <p>Open</p>
                                                    </li>
                                                    <div class="devepbtn saved-btn">
                                                        <a class="clrbtn" href="#">Unsaved</a>
                                                        <a class="clrbtn" href="#">Message</a>
                                                    </div>
                                                </ul>
                                            </div>
                                            <div class="post-bar">
                                                <div class="p-all saved-post">
                                                    <div class="usy-dt">
                                                        <div class="wordpressdevlp">
                                                            <h2>Senior PHP Developer</h2>

                                                            <p><i class="la la-clock-o"></i>Posted on 30 August 2018</p>
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
                                                <ul class="savedjob-info saved-info">
                                                    <li>
                                                        <h3>Applicants</h3>
                                                        <p>10</p>
                                                    </li>
                                                    <li>
                                                        <h3>Job Type</h3>
                                                        <p>Full Time</p>
                                                    </li>
                                                    <li>
                                                        <h3>Salary</h3>
                                                        <p>$600 - Mannual</p>
                                                    </li>
                                                    <li>
                                                        <h3>Posted : 5 Days Ago</h3>
                                                        <p>Open</p>
                                                    </li>
                                                    <div class="devepbtn saved-btn">
                                                        <a class="clrbtn" href="#">Unsaved</a>
                                                        <a class="clrbtn" href="#">Message</a>
                                                    </div>
                                                </ul>
                                            </div>
                                            <div class="post-bar">
                                                <div class="p-all saved-post">
                                                    <div class="usy-dt">
                                                        <div class="wordpressdevlp">
                                                            <h2>UI UX Designer</h2>

                                                            <p><i class="la la-clock-o"></i>Posted on 30 August 2018</p>
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
                                                <ul class="savedjob-info saved-info">
                                                    <li>
                                                        <h3>Applicants</h3>
                                                        <p>10</p>
                                                    </li>
                                                    <li>
                                                        <h3>Job Type</h3>
                                                        <p>Full Time</p>
                                                    </li>
                                                    <li>
                                                        <h3>Salary</h3>
                                                        <p>$600 - Mannual</p>
                                                    </li>
                                                    <li>
                                                        <h3>Posted : 5 Days Ago</h3>
                                                        <p>Open</p>
                                                    </li>
                                                    <div class="devepbtn saved-btn">
                                                        <a class="clrbtn" href="#">Unsaved</a>
                                                        <a class="clrbtn" href="#">Message</a>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="applied" role="tabpanel" aria-labelledby="applied-tab">
                                            <div class="post-bar">
                                                <div class="p-all saved-post">
                                                    <div class="usy-dt">
                                                        <div class="wordpressdevlp">
                                                            <h2>Senior Wordpress Developer</h2>

                                                            <p><i class="la la-clock-o"></i>Posted on 30 August 2018</p>
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
                                                <ul class="savedjob-info saved-info">
                                                    <li>
                                                        <h3>Applicants</h3>
                                                        <p>10</p>
                                                    </li>
                                                    <li>
                                                        <h3>Job Type</h3>
                                                        <p>Full Time</p>
                                                    </li>
                                                    <li>
                                                        <h3>Salary</h3>
                                                        <p>$600 - Mannual</p>
                                                    </li>
                                                    <li>
                                                        <h3>Posted : 5 Days Ago</h3>
                                                        <p>Open</p>
                                                    </li>
                                                    <div class="devepbtn saved-btn">
                                                        <a class="clrbtn" href="#">Applied</a>
                                                        <a class="clrbtn" href="#">Message</a>
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </ul>
                                            </div>
                                            <div class="post-bar">
                                                <div class="p-all saved-post">
                                                    <div class="usy-dt">
                                                        <div class="wordpressdevlp">
                                                            <h2>Senior PHP Developer</h2>

                                                            <p><i class="la la-clock-o"></i>Posted on 30 August 2018</p>
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
                                                <ul class="savedjob-info saved-info">
                                                    <li>
                                                        <h3>Applicants</h3>
                                                        <p>10</p>
                                                    </li>
                                                    <li>
                                                        <h3>Job Type</h3>
                                                        <p>Full Time</p>
                                                    </li>
                                                    <li>
                                                        <h3>Salary</h3>
                                                        <p>$600 - Mannual</p>
                                                    </li>
                                                    <li>
                                                        <h3>Posted : 5 Days Ago</h3>
                                                        <p>Open</p>
                                                    </li>
                                                    <div class="devepbtn saved-btn">
                                                        <a class="clrbtn" href="#">Applied</a>
                                                        <a class="clrbtn" href="#">Message</a>
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </ul>
                                            </div>
                                            <div class="post-bar">
                                                <div class="p-all saved-post">
                                                    <div class="usy-dt">
                                                        <div class="wordpressdevlp">
                                                            <h2>UI UX Designer</h2>

                                                            <p><i class="la la-clock-o"></i>Posted on 30 August 2018</p>
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
                                                <ul class="savedjob-info saved-info">
                                                    <li>
                                                        <h3>Applicants</h3>
                                                        <p>10</p>
                                                    </li>
                                                    <li>
                                                        <h3>Job Type</h3>
                                                        <p>Full Time</p>
                                                    </li>
                                                    <li>
                                                        <h3>Salary</h3>
                                                        <p>$600 - Mannual</p>
                                                    </li>
                                                    <li>
                                                        <h3>Posted : 5 Days Ago</h3>
                                                        <p>Open</p>
                                                    </li>
                                                    <div class="devepbtn saved-btn">
                                                        <a class="clrbtn" href="#">Applied</a>
                                                        <a class="clrbtn" href="#">Message</a>
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="cadidates" role="tabpanel" aria-labelledby="cadidates-tab">
                                            <div class="post-bar">
                                                <div class="post_topbar applied-post">
                                                    <div class="usy-dt">
                                                        <img src="images/resources/us-pic.png" alt="">
                                                        <div class="usy-name">
                                                            <h3>John Doe</h3>
                                                            <div class="epi-sec epi2">
                                                                <ul class="descp descptab bklink">
                                                                    <li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
                                                                    <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                            <li><a href="#" title="">Edit Post</a></li>
                                                            <li><a href="#" title="">Accept</a></li>
                                                            <li><a href="#" title="">Unbid</a></li>
                                                            <li><a href="#" title="">Close</a></li>
                                                            <li><a href="#" title="">Hide</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="job_descp noborder">
                                                        <div class="star-descp review profilecnd">
                                                            <ul class="bklik">
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star-half-o"></i></li>
                                                                <a href="#" title="">5.0 of 5 Reviews</a>
                                                            </ul>
                                                        </div>
                                                        <div class="devepbtn appliedinfo noreply">
                                                            <a class="clrbtn" href="#">Accept</a>
                                                            <a class="clrbtn" href="#">View Profile</a>
                                                            <a class="clrbtn" href="#">Message</a>
                                                            <a href="#">
                                                                <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-bar">
                                                <div class="post_topbar  applied-post">
                                                    <div class="usy-dt">
                                                        <img src="images/resources/us-pic.png" alt="">
                                                        <div class="usy-name">
                                                            <h3>John Doe</h3>
                                                            <div class="epi-sec epi2">
                                                                <ul class="descp descptab bklink">
                                                                    <li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
                                                                    <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                            <li><a href="#" title="">Edit Post</a></li>
                                                            <li><a href="#" title="">Accept</a></li>
                                                            <li><a href="#" title="">Unbid</a></li>
                                                            <li><a href="#" title="">Close</a></li>
                                                            <li><a href="#" title="">Hide</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="job_descp noborder">
                                                        <div class="star-descp review profilecnd">
                                                            <ul class="bklik">
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star-half-o"></i></li>
                                                                <a href="#" title="">5.0 of 5 Reviews</a>
                                                            </ul>
                                                        </div>
                                                        <div class="devepbtn appliedinfo noreply">
                                                            <a class="clrbtn" href="#">Accept</a>
                                                            <a class="clrbtn" href="#">View Profile</a>
                                                            <a class="clrbtn" href="#">Message</a>
                                                            <a href="#">
                                                                <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-bar">
                                                <div class="post_topbar applied-post">
                                                    <div class="usy-dt">
                                                        <img src="images/resources/us-pic.png" alt="">
                                                        <div class="usy-name">
                                                            <h3>John Doe</h3>
                                                            <div class="epi-sec epi2">
                                                                <ul class="descp descptab bklink">
                                                                    <li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
                                                                    <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                            <li><a href="#" title="">Düzenle</a></li>
                                                            <li><a href="#" title="">Paylaş</a></li>
                                                            <li><a href="#" title="">Gizle</a></li>
                                                            <li><a href="#" title="">Sil</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="job_descp noborder">
                                                        <div class="star-descp review profilecnd">
                                                            <ul class="bklik">
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star-half-o"></i></li>
                                                                <a href="#" title="">5.0 of 5 Reviews</a>
                                                            </ul>
                                                        </div>
                                                        <div class="devepbtn appliedinfo noreply">
                                                            <a class="clrbtn" href="#">Accept</a>
                                                            <a class="clrbtn" href="#">View Profile</a>
                                                            <a class="clrbtn" href="#">Message</a>
                                                            <a href="#">
                                                                <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-feed-tab current" id="feed-dd">
                                    <div class="posts-section">
<!--Paylaşımlarım-->
                                        @foreach($shares as $share)
                                            <div class="posty">
                                                <div class="post-bar no-margin">
                                                    <div class="post_topbar">
                                                        <div class="usy-dt">
                                                            <img src="{{ asset('avatar/'.$share->user->photo.'') }}" width="50px" alt="">
                                                            <div class="usy-name">
                                                                <h3>{{$share->user->name}}</h3>
                                                                <span><img src="images/clock.png" alt="">
                                                                    {{$share->date}}

                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="ed-opts">
                                                            <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                            <ul class="ed-options">

                                                                <li><button class="btn btn-info post_project3">Düzenle</button></li>
                                                                <li><button class="btn btn-warning ">Paylaş</button></li>
                                                                <li><button class="btn btn-success ">Gizle</button></li>
                                                                <li><button class="btn btn-danger" id="delPost" data-id="{{$share->id}}">Sil</button></li>
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
                                                            <li><span>$30 / hr</span></li>
                                                        </ul>
                                                        <p>{{$share->description}} <a href="#" title="">view more</a></p>
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
                                                                <img src="images/liked-img.png" alt="">
                                                                <span>25</span>
                                                            </li>
                                                            <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Yorumlar ({{ count($share->comments) }})<a></li>
                                                        </ul>
                                                        <a href="#"><i class="fas fa-eye"></i>{{$share->hit}}</a>
                                                    </div>
                                                </div><!--post-bar end-->

                                                <div class="comment-section">
                                                    @if(count($share->comments))
                                                        @foreach ($share->comments as $comment)
                                                            <div class="comment-sec">
                                                                <ul>
                                                                    <li>
                                                                        <div class="comment-list">
                                                                            <div class="bg-img cm-img">
                                                                                <img src="{{asset('avatar/'.$comment->user->photo.'')}}" width="50px" alt="">
                                                                            </div>
                                                                            <div class="comment">
                                                                                <h3></h3>
                                                                                <span><img src="images/clock.png" alt=""> 3 min ago</span>
                                                                                <p>{{$comment->comment}}</p>
                                                                                <a href="#" title=""><i class="la la-reply-all"></i>Cevapla</a>
                                                                            </div>
                                                                        </div><!--comment-list end-->
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div class="comment-sec mb-3">
                                                            <ul>
                                                                <li>
                                                                    Yorum yok<!--comment-list end-->
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    @endif
                                                    <div class="post-comment">
                                                        <div class="cm_img">
                                                            <img src="{{asset('avatar/'.$share->user->photo.'')}}" alt="">
                                                        </div>
                                                        <div class="comment_box">
                                                            <form>
                                                                <input type="text" placeholder="Yorum gönderin..">
                                                                <button type="submit">Paylaş</button>
                                                            </form>
                                                        </div>
                                                    </div><!--post-comment end-->
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="process-comm">
                                            <div class="spinner">
                                                <div class="bounce1"></div>
                                                <div class="bounce2"></div>
                                                <div class="bounce3"></div>
                                            </div>
                                        </div><!--process-comm end-->
                                    </div><!--posts-section end-->
                                </div><!--product-feed-tab end-->


                                <div class="post-popup3 pst-pj3">
                                    <div class="post-project3">
                                        <h3>DÜZENLE</h3>
                                        <div class="post-project-fields3">
                                            <form method="post" action="{{route('profile.update.post')}}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <input type="hidden" value="{{$share->id}}" name="id">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <input type="text" name="title" value="{{$share->title}}" placeholder="başlık">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <textarea name="description">{{$share->description}}</textarea>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <ul>
                                                            <li><button class="active" type="submit" >Düzenle</button></li>
                                                            <li><a href="#" title="">Vazgeç</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </form>
                                        </div><!--post-project-fields end-->
                                        <a href="#" title=""><i class="la la-times-circle-o"></i></a>
                                    </div><!--post-project end-->
                                </div>

                                <div class="product-feed-tab" id="my-bids">
                                    <ul class="nav nav-tabs bid-tab" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Manage Bids</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="bidders-tab" data-toggle="tab" href="#bidders" role="tab" aria-controls="contact" aria-selected="false">Manage Bidders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My Active Bids</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="post-bar">
                                                <div class="post_topbar">
                                                    <div class="wordpressdevlp">
                                                        <h2>Travel Wordpress Theme</h2>

                                                        <p><i class="la la-clock-o"></i>5 Hour Lefts</p>
                                                    </div>
                                                    <ul class="savedjob-info mangebid manbids">
                                                        <li>
                                                            <h3>Bids</h3>
                                                            <p>4</p>
                                                        </li>
                                                        <li>
                                                            <h3>Avg Bid (USD)</h3>
                                                            <p>$510</p>
                                                        </li>
                                                        <li>
                                                            <h3>Project Budget (USD)</h3>
                                                            <p>$500 - $600</p>
                                                        </li>
                                                        <ul class="bk-links bklink">
                                                            <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                            <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                        </ul>
                                                    </ul>
                                                    <br>
                                                    <div class="cadidatesbtn bidsbtn">
                                                        <button type="button" class="btn btn-primary">
                                                            <span class="badge badge-light">3</span>Candidates
                                                        </button>
                                                        <a href="#">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-bar">
                                                <div class="post_topbar">
                                                    <div class="wordpressdevlp">
                                                        <h2>Travel Wordpress Theme</h2>

                                                        <p><i class="la la-clock-o"></i>5 Hour Lefts</p>
                                                    </div>
                                                    <ul class="savedjob-info mangebid manbids">
                                                        <li>
                                                            <h3>Bids</h3>
                                                            <p>4</p>
                                                        </li>
                                                        <li>
                                                            <h3>Avg Bid (USD)</h3>
                                                            <p>$510</p>
                                                        </li>
                                                        <li>
                                                            <h3>Project Budget (USD)</h3>
                                                            <p>$500 - $600</p>
                                                        </li>
                                                        <ul class="bk-links bklink">
                                                            <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                            <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                        </ul>
                                                    </ul>
                                                    <br>
                                                    <div class="cadidatesbtn bidsbtn">
                                                        <button type="button" class="btn btn-primary">
                                                            <span class="badge badge-light">3</span>Candidates
                                                        </button>
                                                        <a href="#">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-bar">
                                                <div class="post_topbar">
                                                    <div class="wordpressdevlp">
                                                        <h2>Travel Wordpress Theme</h2>

                                                        <p><i class="la la-clock-o"></i>5 Hour Lefts</p>
                                                    </div>
                                                    <ul class="savedjob-info mangebid manbids">
                                                        <li>
                                                            <h3>Bids</h3>
                                                            <p>4</p>
                                                        </li>
                                                        <li>
                                                            <h3>Avg Bid (USD)</h3>
                                                            <p>$510</p>
                                                        </li>
                                                        <li>
                                                            <h3>Project Budget (USD)</h3>
                                                            <p>$500 - $600</p>
                                                        </li>
                                                        <ul class="bk-links bklink">
                                                            <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                            <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                        </ul>
                                                    </ul>
                                                    <br>
                                                    <div class="cadidatesbtn bidsbtn">
                                                        <button type="button" class="btn btn-primary">
                                                            <span class="badge badge-light">3</span>Candidates
                                                        </button>
                                                        <a href="#">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="post-bar">
                                                <div class="post_topbar active-bids">
                                                    <div class="usy-dt">
                                                        <div class="wordpressdevlp" >
                                                            <h2>Travel Wordpress Theme</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="savedjob-info activ-bidinfo">
                                                    <li>
                                                        <h3>Fixed Price</h3>
                                                        <p>$500</p>
                                                    </li>
                                                    <li>
                                                        <h3>Delivery Time</h3>
                                                        <p>8 Days</p>
                                                    </li>
                                                    <div class="devepbtn activebtn">
                                                        <a href="#">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </ul>
                                            </div>
                                            <div class="post-bar">
                                                <div class="post_topbar active-bids">
                                                    <div class="usy-dt">
                                                        <div class="wordpressdevlp" >
                                                            <h2>Restaurant Android Application</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="savedjob-info activ-bidinfo">
                                                    <li>
                                                        <h3>Fixed Price</h3>
                                                        <p>$1500</p>
                                                    </li>
                                                    <li>
                                                        <h3>Delivery Time</h3>
                                                        <p>15 Days</p>
                                                    </li>
                                                    <div class="devepbtn activebtn">
                                                        <a href="#">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </ul>
                                            </div>
                                            <div class="post-bar">
                                                <div class="post_topbar active-bids">
                                                    <div class="usy-dt">
                                                        <div class="wordpressdevlp" >
                                                            <h2>Online Shopping Html Template with PHP</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="savedjob-info activ-bidinfo">
                                                    <li>
                                                        <h3>Fixed Price</h3>
                                                        <p>$1500</p>
                                                    </li>
                                                    <li>
                                                        <h3>Delivery Time</h3>
                                                        <p>15 Days</p>
                                                    </li>
                                                    <div class="devepbtn activebtn">
                                                        <a href="#">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                            <div class="post-bar">
                                                <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <div class="wordpressdevlp" >
                                                            <h2>Senior Wordpress Developer</h2>
                                                            <br>
                                                            <p><i class="la la-clock-o"></i>Posted on 30 August 2018</p>
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
                                                <ul class="savedjob-info">
                                                    <li>
                                                        <h3>Applicants</h3>
                                                        <p>10</p>
                                                    </li>
                                                    <li>
                                                        <h3>Job Type</h3>
                                                        <p>Full Time</p>
                                                    </li>
                                                    <li>
                                                        <h3>Salary</h3>
                                                        <p>$600 - Mannual</p>
                                                    </li>
                                                    <li>
                                                        <h3>Posted : 5 Days Ago</h3>
                                                        <p>Open</p>
                                                    </li>
                                                    <div class="devepbtn">
                                                        <a class="clrbtn" href="#">Applied</a>
                                                        <a class="clrbtn" href="#">Message</a>
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </ul>
                                            </div>
                                            <div class="post-bar">
                                                <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <div class="wordpressdevlp" >
                                                            <h2>Senior PHP Developer</h2>
                                                            <br>
                                                            <p><i class="la la-clock-o"></i>Posted on 30 August 2018</p>
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
                                                <ul class="savedjob-info">
                                                    <li>
                                                        <h3>Applicants</h3>
                                                        <p>10</p>
                                                    </li>
                                                    <li>
                                                        <h3>Job Type</h3>
                                                        <p>Full Time</p>
                                                    </li>
                                                    <li>
                                                        <h3>Salary</h3>
                                                        <p>$600 - Mannual</p>
                                                    </li>
                                                    <li>
                                                        <h3>Posted : 5 Days Ago</h3>
                                                        <p>Open</p>
                                                    </li>
                                                    <div class="devepbtn">
                                                        <a class="clrbtn" href="#">Applied</a>
                                                        <a class="clrbtn" href="#">Message</a>
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </ul>
                                            </div>
                                            <div class="post-bar">
                                                <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <div class="wordpressdevlp" >
                                                            <h2>UI UX Designer</h2>
                                                            <br>
                                                            <p><i class="la la-clock-o"></i>Posted on 30 August 2018</p>
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
                                                <ul class="savedjob-info">
                                                    <li>
                                                        <h3>Applicants</h3>
                                                        <p>10</p>
                                                    </li>
                                                    <li>
                                                        <h3>Job Type</h3>
                                                        <p>Full Time</p>
                                                    </li>
                                                    <li>
                                                        <h3>Salary</h3>
                                                        <p>$600 - Mannual</p>
                                                    </li>
                                                    <li>
                                                        <h3>Posted : 5 Days Ago</h3>
                                                        <p>Open</p>
                                                    </li>
                                                    <div class="devepbtn">
                                                        <a class="clrbtn" href="#">Applied</a>
                                                        <a class="clrbtn" href="#">Message</a>
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="bidders" role="tabpanel" aria-labelledby="bidders-tab">
                                            <div class="post-bar">
                                                <div class="post_topbar post-bid">
                                                    <div class="usy-dt">
                                                        <img src="images/resources/us-pic.png" alt="">
                                                        <div class="usy-name">
                                                            <h3>John Doe</h3>
                                                            <div class="epi-sec epi2">
                                                                <ul class="descp descptab bklink">
                                                                    <li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
                                                                    <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                            <li><a href="#" title="">Edit Post</a></li>
                                                            <li><a href="#" title="">Accept</a></li>
                                                            <li><a href="#" title="">Unbid</a></li>
                                                            <li><a href="#" title="">Close</a></li>
                                                            <li><a href="#" title="">Hide</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="job_descp noborder">
                                                        <div class="star-descp review profilecnd">
                                                            <ul class="bklik">
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star-half-o"></i></li>
                                                                <a href="#" title="">5.0 of 5 Reviews</a>
                                                            </ul>
                                                        </div>
                                                        <ul class="savedjob-info biddersinfo">
                                                            <li>
                                                                <h3>Fixed Price</h3>
                                                                <p>$500</p>
                                                            </li>
                                                            <li>
                                                                <h3>Delivery Time</h3>
                                                                <p>10 Days</p>
                                                            </li>
                                                        </ul>
                                                        <div class="devepbtn appliedinfo bidsbtn">
                                                            <a class="clrbtn" href="#">Accept</a>
                                                            <a class="clrbtn" href="#">View Profile</a>
                                                            <a class="clrbtn" href="#">Message</a>
                                                            <a href="#">
                                                                <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-bar">
                                                <div class="post_topbar post-bid">
                                                    <div class="usy-dt">
                                                        <img src="images/resources/Jassica.jpg" alt="">
                                                        <div class="usy-name">
                                                            <h3>John Doe</h3>
                                                            <div class="epi-sec epi2">
                                                                <ul class="descp descptab bklink">
                                                                    <li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
                                                                    <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                            <li><a href="#" title="">Edit Post</a></li>
                                                            <li><a href="#" title="">Accept</a></li>
                                                            <li><a href="#" title="">Unbid</a></li>
                                                            <li><a href="#" title="">Close</a></li>
                                                            <li><a href="#" title="">Hide</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="job_descp noborder">
                                                        <div class="star-descp review profilecnd">
                                                            <ul class="bklik">
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star-half-o"></i></li>
                                                                <a href="#" title="">5.0 of 5 Reviews</a>
                                                            </ul>
                                                        </div>
                                                        <ul class="savedjob-info biddersinfo">
                                                            <li>
                                                                <h3>Fixed Price</h3>
                                                                <p>$500</p>
                                                            </li>
                                                            <li>
                                                                <h3>Delivery Time</h3>
                                                                <p>10 Days</p>
                                                            </li>
                                                        </ul>
                                                        <div class="devepbtn appliedinfo bidsbtn">
                                                            <a class="clrbtn" href="#">Accept</a>
                                                            <a class="clrbtn" href="#">View Profile</a>
                                                            <a class="clrbtn" href="#">Message</a>
                                                            <a href="#">
                                                                <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-bar">
                                                <div class="post_topbar post-bid">
                                                    <div class="usy-dt">
                                                        <img src="images/resources/rock.jpg" alt="">
                                                        <div class="usy-name">
                                                            <h3>John Doe</h3>
                                                            <div class="epi-sec epi2">
                                                                <ul class="descp descptab bklink">
                                                                    <li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
                                                                    <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                            <li><a href="#" title="">Edit Post</a></li>
                                                            <li><a href="#" title="">Accept</a></li>
                                                            <li><a href="#" title="">Unbid</a></li>
                                                            <li><a href="#" title="">Close</a></li>
                                                            <li><a href="#" title="">Hide</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="job_descp noborder">
                                                        <div class="star-descp review profilecnd">
                                                            <ul class="bklik">
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star-half-o"></i></li>
                                                                <a href="#" title="">5.0 of 5 Reviews</a>
                                                            </ul>
                                                        </div>
                                                        <ul class="savedjob-info biddersinfo">
                                                            <li>
                                                                <h3>Fixed Price</h3>
                                                                <p>$500</p>
                                                            </li>
                                                            <li>
                                                                <h3>Delivery Time</h3>
                                                                <p>10 Days</p>
                                                            </li>
                                                        </ul>
                                                        <div class="devepbtn appliedinfo bidsbtn">
                                                            <a class="clrbtn" href="#">Accept</a>
                                                            <a class="clrbtn" href="#">View Profile</a>
                                                            <a class="clrbtn" href="#">Message</a>
                                                            <a href="#">
                                                                <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--product-feed-tab end-->

                                <div class="product-feed-tab" id="info-dd">
                                    <div class="user-profile-ov">
                                        <h3><a href="#" title="" class="overview-open">Overview</a>
                                            <a href="#" title="" class="overview-open"><i class="fa fa-pencil"></i></a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus. Aliquam accumsan ac magna convallis bibendum. Quisque laoreet augue eget augue fermentum scelerisque. Vivamus dignissim mollis est dictum blandit. Nam porta auctor neque sed congue. Nullam rutrum eget ex at maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem.</p>
                                    </div><!--user-profile-ov end-->
                                    <div class="user-profile-ov st2">
                                        <h3><a href="#" title="" class="exp-bx-open">Yetenek ve yetkinlikler </a><a href="#" title="" class="exp-bx-open"><i class="fa fa-pencil"></i></a> <a href="#" title="" class="exp-bx-open"><i class="fa fa-plus-square"></i></a></h3>
                                        <h4>Web designer <a href="#" title=""><i class="fa fa-pencil"></i></a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
                                        <h4>UI / UX Designer <a href="#" title=""><i class="fa fa-pencil"></i></a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id.</p>
                                        <h4>PHP developer <a href="#" title=""><i class="fa fa-pencil"></i></a></h4>
                                        <p class="no-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
                                    </div><!--user-profile-ov end-->
                                    <div class="user-profile-ov">
                                        <h3><a href="#" title="" class="ed-box-open">Eğitim</a> <a href="#" title="" class="ed-box-open"><i class="fa fa-pencil"></i></a> <a href="#" title=""><i class="fa fa-plus-square"></i></a></h3>
                                        <h4>Master of Computer Science</h4>
                                        <span>2015 - 2018</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
                                    </div><!--user-profile-ov end-->
                                    <div class="user-profile-ov">
                                        <h3><a href="#" title="" class="lct-box-open">Şehir</a> <a href="#" title="" class="lct-box-open"><i class="fa fa-pencil"></i></a> <a href="#" title=""><i class="fa fa-plus-square"></i></a></h3>
                                        <h4></h4>
                                        <p>{{$userDetails->city}}</p>
                                    </div><!--user-profile-ov end-->
                                    <div class="user-profile-ov">
                                        <h3><a href="#" title="" class="skills-open">Skills</a> <a href="#" title="" class="skills-open"><i class="fa fa-pencil"></i></a> <a href="#"><i class="fa fa-plus-square"></i></a></h3>
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
                                <div class="product-feed-tab" id="rewivewdata">
                                    <section ></section>
                                    <div class="posts-section">
                                        <div class="post-bar reviewtitle">
                                            <h2>Reviews</h2>
                                        </div><!--post-bar end-->
                                        <div class="post-bar ">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="images/resources/bg-img3.png" alt="">
                                                    <div class="usy-name">
                                                        <h3>Rock William</h3>
                                                        <div class="epi-sec epi2">
                                                            <ul class="descp review-lt">
                                                                <li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
                                                                <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="job_descp mngdetl">
                                                <div class="star-descp review">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                    <a href="#" title="">5.0 of 5 Reviews</a>
                                                </div>
                                                <div class="reviewtext">
                                                    <p>Lorem ipsum dolor sit amet, adipiscing elit. Nulla luctus mi et porttitor ultrices</p>
                                                    <hr>
                                                </div>

                                                <div class="post_topbar post-reply">
                                                    <div class="usy-dt">
                                                        <img src="images/resources/bg-img4.png" alt="">
                                                        <div class="usy-name">
                                                            <h3>John Doe</h3>
                                                            <div class="epi-sec epi2">
                                                                <p><i class="la la-clock-o"></i>3 min ago</p>
                                                                <p class="tahnks">Thanks :)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post_topbar rep-post rep-thanks">
                                                    <hr>
                                                    <div class="usy-dt">
                                                        <img src="images/resources/bg-img4.png" alt="">
                                                        <input class="reply" type="text" placeholder="Reply">
                                                        <a class="replybtn" href="#">Send</a>

                                                    </div>
                                                </div>

                                            </div>
                                        </div><!--post-bar end-->
                                        <div class="post-bar post-thanks">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="images/resources/bg-img1.png" alt="">
                                                    <div class="usy-name">
                                                        <h3>Jassica William</h3>
                                                        <div class="epi-sec epi2">
                                                            <ul class="descp review-lt">
                                                                <li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
                                                                <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                            </ul>
                                                        </div>
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

                                            <div class="job_descp mngdetl">
                                                <div class="star-descp review">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                    <a href="#" title="">5.0 of 5 Reviews</a><br><br>
                                                    <p>Awesome Work, Thanks John!</p>
                                                    <hr>
                                                </div>
                                                <div class="post_topbar rep-post">
                                                    <div class="usy-dt">
                                                        <img src="images/resources/bg-img4.png" alt="">

                                                        <input class="reply" type="text" placeholder="Reply">
                                                        <a class="replybtn" href="#">Send</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--post-bar end-->
                                    </div><!--posts-section end-->
                                </div><!--product-feed-tab end-->
                                <div class="product-feed-tab" id="my-bids">
                                    <div class="posts-section">
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="images/resources/us-pic.png" alt="">
                                                    <div class="usy-name">
                                                        <h3>John Doe</h3>
                                                        <span><img src="images/clock.png" alt="">3 min ago</span>
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
                                                    <li><img src="images/icon8.png" alt=""><span>Frontend Developer</span></li>
                                                    <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                    <li><a href="#" title="" class="bid_now">Bid Now</a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <h3>Simple Classified Site</h3>
                                                <ul class="job-dt">
                                                    <li><span>$300 - $350</span></li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                                                <ul class="skill-tags">
                                                    <li><a href="#" title="">HTML</a></li>
                                                    <li><a href="#" title="">PHP</a></li>
                                                    <li><a href="#" title="">CSS</a></li>
                                                    <li><a href="#" title="">Javascript</a></li>
                                                    <li><a href="#" title="">Wordpress</a></li>
                                                    <li><a href="#" title="">Photoshop</a></li>
                                                    <li><a href="#" title="">Illustrator</a></li>
                                                    <li><a href="#" title="">Corel Draw</a></li>
                                                </ul>
                                            </div>
                                            <div class="job-status-bar">
                                                <ul class="like-com">
                                                    <li>
                                                        <a href="#"><i class="la la-heart"></i> Like</a>
                                                        <img src="images/liked-img.png" alt="">
                                                        <span>25</span>
                                                    </li>
                                                    <li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a></li>
                                                </ul>
                                                <a><i class="la la-eye"></i>Views 50</a>
                                            </div>
                                        </div><!--post-bar end-->
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="images/resources/us-pic.png" alt="">
                                                    <div class="usy-name">
                                                        <h3>John Doe</h3>
                                                        <span><img src="images/clock.png" alt="">3 min ago</span>
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
                                                    <li><img src="images/icon8.png" alt=""><span>Frontend Developer</span></li>
                                                    <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                    <li><a href="#" title="" class="bid_now">Bid Now</a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <h3>Ios Shopping mobile app</h3>
                                                <ul class="job-dt">
                                                    <li><span>$300 - $350</span></li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                                                <ul class="skill-tags">
                                                    <li><a href="#" title="">HTML</a></li>
                                                    <li><a href="#" title="">PHP</a></li>
                                                    <li><a href="#" title="">CSS</a></li>
                                                    <li><a href="#" title="">Javascript</a></li>
                                                    <li><a href="#" title="">Wordpress</a></li>
                                                    <li><a href="#" title="">Photoshop</a></li>
                                                    <li><a href="#" title="">Illustrator</a></li>
                                                    <li><a href="#" title="">Corel Draw</a></li>
                                                </ul>
                                            </div>
                                            <div class="job-status-bar">
                                                <ul class="like-com">
                                                    <li>
                                                        <a href="#"><i class="la la-heart"></i> Like</a>
                                                        <img src="images/liked-img.png" alt="">
                                                        <span>25</span>
                                                    </li>
                                                    <li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a></li>
                                                </ul>
                                                <a><i class="la la-eye"></i>Views 50</a>
                                            </div>
                                        </div><!--post-bar end-->
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="images/resources/us-pic.png" alt="">
                                                    <div class="usy-name">
                                                        <h3>John Doe</h3>
                                                        <span><img src="images/clock.png" alt="">3 min ago</span>
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
                                                    <li><img src="images/icon8.png" alt=""><span>Frontend Developer</span></li>
                                                    <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                    <li><a href="#" title="" class="bid_now">Bid Now</a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <h3>Simple Classified Site</h3>
                                                <ul class="job-dt">
                                                    <li><span>$300 - $350</span></li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                                                <ul class="skill-tags">
                                                    <li><a href="#" title="">HTML</a></li>
                                                    <li><a href="#" title="">PHP</a></li>
                                                    <li><a href="#" title="">CSS</a></li>
                                                    <li><a href="#" title="">Javascript</a></li>
                                                    <li><a href="#" title="">Wordpress</a></li>
                                                    <li><a href="#" title="">Photoshop</a></li>
                                                    <li><a href="#" title="">Illustrator</a></li>
                                                    <li><a href="#" title="">Corel Draw</a></li>
                                                </ul>
                                            </div>
                                            <div class="job-status-bar">
                                                <ul class="like-com">
                                                    <li>
                                                        <a href="#"><i class="la la-heart"></i> Like</a>
                                                        <img src="images/liked-img.png" alt="">
                                                        <span>25</span>
                                                    </li>
                                                    <li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a></li>
                                                </ul>
                                                <a><i class="la la-eye"></i>Views 50</a>
                                            </div>
                                        </div><!--post-bar end-->
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="images/resources/us-pic.png" alt="">
                                                    <div class="usy-name">
                                                        <h3>John Doe</h3>
                                                        <span><img src="images/clock.png" alt="">3 min ago</span>
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
                                                    <li><img src="images/icon8.png" alt=""><span>Frontend Developer</span></li>
                                                    <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                    <li><a href="#" title="" class="bid_now">Bid Now</a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <h3>Ios Shopping mobile app</h3>
                                                <ul class="job-dt">
                                                    <li><span>$300 - $350</span></li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                                                <ul class="skill-tags">
                                                    <li><a href="#" title="">HTML</a></li>
                                                    <li><a href="#" title="">PHP</a></li>
                                                    <li><a href="#" title="">CSS</a></li>
                                                    <li><a href="#" title="">Javascript</a></li>
                                                    <li><a href="#" title="">Wordpress</a></li>
                                                    <li><a href="#" title="">Photoshop</a></li>
                                                    <li><a href="#" title="">Illustrator</a></li>
                                                    <li><a href="#" title="">Corel Draw</a></li>
                                                </ul>
                                            </div>
                                            <div class="job-status-bar">
                                                <ul class="like-com">
                                                    <li>
                                                        <a href="#"><i class="la la-heart"></i> Like</a>
                                                        <img src="images/liked-img.png" alt="">
                                                        <span>25</span>
                                                    </li>
                                                    <li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a></li>
                                                </ul>
                                                <a><i class="la la-eye"></i>Views 50</a>
                                            </div>
                                        </div><!--post-bar end-->
                                        <div class="process-comm">
                                            <a href="#" title=""><img src="images/process-icon.png" alt=""></a>
                                        </div><!--process-comm end-->
                                    </div><!--posts-section end-->
                                </div><!--product-feed-tab end-->
                                <div class="product-feed-tab" id="portfolio-dd">
                                    <div class="portfolio-gallery-sec">
                                        <h3>Galerim</h3>
                                        <div class="portfolio-btn">
                                            <a href="#" title=""><i class="fas fa-plus-square"></i> Fotoğraf ekle</a>
                                        </div>
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
                                <div class="product-feed-tab" id="payment-dd">
                                    <div class="billing-method">
                                        <ul>
                                            <li>
                                                <h3>Add Billing Method</h3>
                                                <a href="#" title=""><i class="fa fa-plus-circle"></i></a>
                                            </li>
                                            <li>
                                                <h3>See Activity</h3>
                                                <a href="#" title="">View All</a>
                                            </li>
                                            <li>
                                                <h3>Total Money</h3>
                                                <span>$0.00</span>
                                            </li>
                                        </ul>
                                        <div class="lt-sec">
                                            <img src="images/lt-icon.png" alt="">
                                            <h4>All your transactions are saved here</h4>
                                            <a href="#" title="">Click Here</a>
                                        </div>
                                    </div><!--billing-method end-->
                                    <div class="add-billing-method">
                                        <h3>Add Billing Method</h3>
                                        <h4><img src="images/dlr-icon.png" alt=""><span>With workwise payment protection , only pay for work delivered.</span></h4>
                                        <div class="payment_methods">
                                            <h4>Credit or Debit Cards</h4>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="cc-head">
                                                            <h5>Card Number</h5>
                                                            <ul>
                                                                <li><img src="images/cc-icon1.png" alt=""></li>
                                                                <li><img src="images/cc-icon2.png" alt=""></li>
                                                                <li><img src="images/cc-icon3.png" alt=""></li>
                                                                <li><img src="images/cc-icon4.png" alt=""></li>
                                                            </ul>
                                                        </div>
                                                        <div class="inpt-field pd-moree">
                                                            <input type="text" name="cc-number" placeholder="">
                                                            <i class="fa fa-credit-card"></i>
                                                        </div><!--inpt-field end-->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="cc-head">
                                                            <h5>First Name</h5>
                                                        </div>
                                                        <div class="inpt-field">
                                                            <input type="text" name="f-name" placeholder="">
                                                        </div><!--inpt-field end-->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="cc-head">
                                                            <h5>Last Name</h5>
                                                        </div>
                                                        <div class="inpt-field">
                                                            <input type="text" name="l-name" placeholder="">
                                                        </div><!--inpt-field end-->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="cc-head">
                                                            <h5>Expiresons</h5>
                                                        </div>
                                                        <div class="rowwy">
                                                            <div class="row">
                                                                <div class="col-lg-6 pd-left-none no-pd">
                                                                    <div class="inpt-field">
                                                                        <input type="text" name="f-name" placeholder="">
                                                                    </div><!--inpt-field end-->
                                                                </div>
                                                                <div class="col-lg-6 pd-right-none no-pd">
                                                                    <div class="inpt-field">
                                                                        <input type="text" name="f-name" placeholder="">
                                                                    </div><!--inpt-field end-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="cc-head">
                                                            <h5>Cvv (Security Code) <i class="fa fa-question-circle"></i></h5>
                                                        </div>
                                                        <div class="inpt-field">
                                                            <input type="text" name="l-name" placeholder="">
                                                        </div><!--inpt-field end-->
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button type="submit">Continue</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <h4>Add Paypal Account</h4>
                                        </div>
                                    </div><!--add-billing-method end-->
                                </div><!--product-feed-tab end-->
                            </div><!--main-ws-sec end-->
                        </div>
                        <div class="col-lg-3">
                            <div class="right-sidebar">
                                <div class="message-btn">
                                    <a href="{{route('profile-settings')}}" title=""><i class="fas fa-cog"></i> Ayarlar</a>
                                </div>
                                <div class="widget widget-portfolio">
                                    <div class="wd-heady">
                                        <h3>Galeri</h3>
                                        <img src="images/photo-icon.png" alt="">
                                    </div>
                                    <div class="pf-gallery">
                                        <ul>
                                            <li><a href="#" title=""><img src="images/resources/pf-gallery1.png" alt=""></a></li>
                                            <li><a href="#" title=""><img src="images/resources/pf-gallery2.png" alt=""></a></li>
                                            <li><a href="#" title=""><img src="images/resources/pf-gallery3.png" alt=""></a></li>
                                            <li><a href="#" title=""><img src="images/resources/pf-gallery4.png" alt=""></a></li>
                                            <li><a href="#" title=""><img src="images/resources/pf-gallery5.png" alt=""></a></li>
                                            <li><a href="#" title=""><img src="images/resources/pf-gallery6.png" alt=""></a></li>
                                            <li><a href="#" title=""><img src="images/resources/pf-gallery7.png" alt=""></a></li>
                                            <li><a href="#" title=""><img src="images/resources/pf-gallery8.png" alt=""></a></li>
                                            <li><a href="#" title=""><img src="images/resources/pf-gallery9.png" alt=""></a></li>
                                            <li><a href="#" title=""><img src="images/resources/pf-gallery10.png" alt=""></a></li>
                                            <li><a href="#" title=""><img src="images/resources/pf-gallery11.png" alt=""></a></li>
                                            <li><a href="#" title=""><img src="images/resources/pf-gallery12.png" alt=""></a></li>
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