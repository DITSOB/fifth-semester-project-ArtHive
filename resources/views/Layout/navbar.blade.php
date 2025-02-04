<!-- navbar -->
<nav>
        <ul class="sidebar">
            <li onclick="hideSidebar()"><a href="#"><i class="bi bi-x-lg"></i></a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Arts</a></li>
            <li><a href="#">Auction</a></li>
            <li><a href="#">Galleries</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Cart</a></li>
            <li><a href="#" class="login">Login<i class="bi bi-box-arrow-in-right"></i></a></li>
        </ul>
        <ul>
            <li><a href="{{ route('index'); }}">ArtHive</a></li>
            <div class="box-container">
                <div class="box">
                <div class="search-box">
                    <input type="text" placeholder="Search by artist, gallery, type, etc.">
                    <label for="" class="icon"><i class="bi bi-search"></i></label>
                </div>
                </div>
            </div>
            <li class="hideOnMobile {{ Route::currentRouteName()=='index'?'menu-active':''}}"><a href="{{ route('index'); }}">Home</a></li>
            <li class="hideOnMobile {{ Route::currentRouteName()=='art'?'menu-active':''}}"><a href="{{ route('art'); }}">Arts</a></li>
            <li class="hideOnMobile {{ Route::currentRouteName()=='auction'?'menu-active':''}}"><a href="{{ route('auction'); }}">Auction</a></li>
            <li class="hideOnMobile {{ Route::currentRouteName()=='gallery'?'menu-active':''}}"><a href="{{ route('gallery'); }}">Galleries</a></li>
            <li class="hideOnMobile {{ Route::currentRouteName()=='about'?'menu-active':''}}"><a href="{{ route('about'); }}">About</a></li>
            <li class="hideOnMobile {{ Route::currentRouteName()=='cart'?'menu-active':''}}"><a href="{{ route('cart'); }}">Cart<i class="bi bi-cart"></i></a></li>
            <li class="hideOnMobile"><a href="{{ route('login'); }}" id="login">Login<i class="bi bi-box-arrow-in-right"></i></a></li>
            <li class="menu-button" onclick=showSidebar()><a href="#"><i class="bi bi-list"></i></a></li>
        </ul>
    </nav>
    <!-- navbar end -->