<!-- navbar -->
<nav>
        <ul class="sidebar">
            <li onclick="hideSidebar()"><a href="#"><i class="bi bi-x-lg"></i></a></li>
            <li class="hideOnMobile"><a href="{{ route('index'); }}">Home</a></li>
            <li class="hideOnMobile"><a href="{{ route('art'); }}">Arts</a></li>
            <li class="hideOnMobile"><a href="{{ route('gallery'); }}">Galleries</a></li>
            <li class="hideOnMobile"><a href="{{ route('about'); }}">About</a></li>
            @auth 
                @if(Auth::user()->role === 'user')
                    <li class="hideOnMobile"><a href="{{ route('auction'); }}">Auction&nbsp;<i class="fa fa-gavel"></i></a></li>
                @endif
            @endauth
            <li class="hideOnMobile"><a href="{{ route('cart'); }}">Cart&nbsp;<i class="bi bi-cart"></i></a></li>
            @auth 
                @if(Auth::user()->role === 'user')
                    <li class="hideOnMobile"><a href="{{ route('profile') }}" id="login">Profile&nbsp;<i class="bi bi-person-circle"></i></a></li>
                @elseif(Auth::user()->role === 'admin')
                    <li class="hideOnMobile"><a href="{{ route('dashboard') }}" id="login">Dashboard&nbsp;<i class="bi bi-graph-up"></i></a></li>
                @endif
                @else
                <li class="hideOnMobile"><a href="{{ route('login'); }}" id="login">Login&nbsp;<i class="bi bi-person-fill"></i></a></li>
            @endauth
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
            <li class="hideOnMobile"><a href="{{ route('gallery'); }}">Galleries</a></li>
            <li class="hideOnMobile"><a href="{{ route('about'); }}">About</a></li>
            @auth 
                @if(Auth::user()->role === 'user')
                    <li class="hideOnMobile"><a href="{{ route('auction'); }}">Auction&nbsp;<i class="fa fa-gavel"></i></a></li>
                @endif
            @endauth
            <li class="hideOnMobile"><a href="{{ route('cart'); }}">Cart&nbsp;<i class="bi bi-cart"></i></a></li>
            @auth 
                @if(Auth::user()->role === 'user')
                    <li class="hideOnMobile"><a href="{{ route('profile') }}" id="login">Profile&nbsp;<i class="bi bi-person-circle"></i></a></li>
                @elseif(Auth::user()->role === 'admin')
                    <li class="hideOnMobile"><a href="{{ route('dashboard') }}" id="login">Dashboard&nbsp;<i class="bi bi-graph-up"></i></a></li>
                @endif
                @else
                <li class="hideOnMobile"><a href="{{ route('login'); }}" id="login">Login&nbsp;<i class="bi bi-person-fill"></i></a></li>
            @endauth
            <li class="menu-button" onclick=showSidebar()><a href="#"><i class="bi bi-list"></i></a></li>
        </ul>
    </nav>
    <!-- navbar end -->