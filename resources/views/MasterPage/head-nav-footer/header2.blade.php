<header>
    <div class="container">
        <div class="header-data">
            <div class="logo pd-btm">
                <a href="{{route('home')}}" title=""><img src="images/logo.png" alt=""></a>
            </div><!--logo end-->
            <div class="forum-bar">
                <h2>Forum</h2>
                <ul>
                    <li><a href="#" title="">#etikeler</a></li>
                    <li><a href="#" title="">#kullanıcılar</a></li>
                    <li><a href="#" title="" class="ask-question">Aklında ki ne?</a></li>
                </ul>
            </div><!--search-bar end-->
            <div class="user-account">
                <div class="user-info">
                    <img src="{{ asset('avatar/'.Auth::user()->photo) }}" width="30px" alt="">
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
            <div class="search-bar st2">
                <form>
                    <input type="text" name="search" placeholder="Ne arıyorsun ?">
                    <button type="submit"><i class="la la-search"></i></button>
                </form>
            </div><!--search-bar end-->
        </div><!--header-data end-->
    </div>
</header>