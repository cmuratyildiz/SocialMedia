<header>
    <div class="container">
        <div class="header-data">
            <div class="logo">
                <a href="{{route('home')}}" title=""><img src="{{asset('images/logo.png')}}" alt=""></a>
            </div>
            <div class="search-bar">
                <form>
                    <input type="text" class="form-control" id="search" name="search"  value="{{ old('search') }}" placeholder="Aramak istediğiniz.." >
                    <button type="submit"><i class="la la-search"></i></button>
                </form>
            </div>
            <nav>
                <ul>
                    @foreach($page as $item)
                        @if($item->status == 1)
                            @if($item->children->count() >0)
                                <li>
                                    <a href="{{$item->url}}" title="">
                                        <span><img src="{{asset('images/'.$item->img.'')}}" alt=""></span>
                                        {{ $item->title }}
                                    </a>
                                    <ul>
                                        @foreach($item->children as $submenu)
                                            <li>
                                                <a href="{{$submenu->url}}">
                                                    {{ $submenu->title }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li>
                                    <a href="{{$item->url}}" title="">
                                        <span><img src="{{asset('images/'.$item->img.'')}}" alt=""></span>
                                        {{ $item->title }}
                                    </a>
                                </li>
                        @endif
                    @endif
                @endforeach
                    <!--<li>
                        <a href="companies.html" title="">
                            <span><img src="images/icon2.png" alt=""></span>
                            Companies
                        </a>
                        <ul>
                            <li><a href="companies.html" title="">Companies</a></li>
                            <li><a href="company-profile.html" title="">Company Profile</a></li>
                        </ul>
                    </li>-->
                    <li>
                        <a href="#" title="" class="not-box-openm">
                            <span><img src="{{asset('images/icon6.png')}}" alt=""></span>
                            Mesajlarım
                        </a>
                        <div class="notification-box msg" id="message">
                            <div class="nt-title">
                                <h4>Ayarlar</h4>
                                <a href="#" title="">Hepsini temizle</a>
                            </div>
                            <div class="nott-list">
                                <!--mesajları çekilecek-->
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="{{asset('images/resources/ny-img1.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="" title="">deneme</a> </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                                        <span>2 dk önce</span>
                                    </div>
                                </div>
                                <div class="view-all-nots">
                                    <a href="{{route('messages')}}" title="">Tüm mesajları göster</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" title="" class="not-box-open">
                            <span><img src="{{asset('images/icon7.png')}}" alt=""></span>
                            Bildirimler
                        </a>
                        <div class="notification-box noti" id="notification">
                            <div class="nt-title">
                                <h4>Ayarlar</h4>
                                <a href="#" title="">Hepsini temizle</a>
                            </div>
                            <div class="nott-list">
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="{{asset('images/resources/ny-img1.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="#" title="">deneme</a> deneme bildirim</h3>
                                        <span>2 dk önce</span>
                                    </div>
                                </div>
                                <div class="view-all-nots">
                                    <a href="#" title="">Tüm bildirimleri göster</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="menu-btn">
                <a href="#" title=""><i class="la la-bars"></i></a>
            </div>
            <div class="user-account">
                <div class="user-info">
                    <img src="{{asset(' ')}}" alt="">
                    <a href="#" title="">{{Auth::user()->nickname}}</a>
                    <i class="la la-sort-down"></i>
                </div>
                <div class="user-account-settingss" id="users">
                    <h3>Ayarlar</h3>
                    <ul class="us-links">
                        <li><a href="{{route('profile-settings')}}" title="">Hesap Ayarları</a></li>
                        <li><a href="#" title="">Gizlilik</a></li>
                        <li><a href="#" title="">SSS</a></li>
                        <li><a href="#" title="">Şartlar & koşullar</a></li>
                    </ul>
                    <h3 class="tc">
                        <a href="#" id="logout" title="">Çıkış</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</header>