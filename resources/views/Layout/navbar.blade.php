<!-- navbar -->
<nav>
        <ul class="sidebar">
            <li onclick="hideSidebar()"><a href="#"><i class="bi bi-x-lg"></i></a></li>
            <li><a href="{{ route('index'); }}">Home</a></li>
            <li><a href="{{ route('art'); }}">Arts</a></li>
            <li><a href="{{ route('auction'); }}">Auction</a></li>
            <li><a href="{{ route('gallery'); }}">Galleries</a></li>
            <li><a href="{{ route('about'); }}">About</a></li>
            <li><a href="{{ route('cart'); }}">Cart&nbsp;<i class="bi bi-cart"></i></a></li>
            <li><a href="{{ route('login'); }}" class="login">Login<i class="bi bi-box-arrow-in-right"></i></a></li>
        </ul>
        <ul>
            <li><a href="{{ route('index'); }}">ArtHive</a></li>
            <div class="box-container">
                <div class="box">
                <div class="search-box">
                    <input type="text" placeholder="Search by artist, gallery, type, etc." style="color: grey; font-weight: normal;">
                    <label for="" class="icon"><i class="bi bi-search"></i></label>
                </div>
                </div>
            </div>
            <li class="hideOnMobile"><a href="{{ route('index'); }}">Home</a></li>
            <li class="hideOnMobile"><a href="{{ route('art'); }}">Arts</a></li>
            <li class="hideOnMobile"><a href="{{ route('auction'); }}">Auction</a></li>
            <li class="hideOnMobile"><a href="{{ route('gallery'); }}">Galleries</a></li>
            <li class="hideOnMobile"><a href="{{ route('about'); }}">About</a></li>
            <li class="hideOnMobile"><a href="{{ route('cart'); }}">Cart&nbsp;<i class="bi bi-cart"></i></a></li>
            <li class="hideOnMobile"><a href="{{ route('login'); }}" id="login">Login<i class="bi bi-person-fill"></i></a></li>
            <li class="hideOnMobile"><a href="{{ route('logout'); }}" id="login">Logout<i class="bi bi-box-arrow-in-right"></i></a></li>
            <li class="menu-button" onclick=showSidebar()><a href="#"><i class="bi bi-list"></i></a></li>
        </ul>
    </nav>
    <!-- navbar end -->