<header>
    {{-- top header --}}
    <div class="top-header">
        <div class="container">
            <div class="t-header-text">
                <span class="uppercase">DC POWER VISA</span>
                <span>ADDITIONAL DC SITES</span>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="main-header d-flex">
                 {{-- logo --}}
                <div class="header-logo">
                    <img src="{{ asset('images/dc-logo.png') }}" alt="dc-logo">
                </div>
                {{-- navbar --}}
                <div class="navbar">
                    <ul>
                        <li><a href="">CHARACTERS</a></li>
                        <li><a href="{{route('comics.list')}}">COMICS</a></li>
                        <li><a href="">MOVIES</a></li>
                        <li><a href="">TV</a></li>
                        <li><a href="">GAMES</a></li>
                        <li><a href="">COLLECTIBLES</a></li>
                        <li><a href="">VIDEOS</a></li>
                        <li><a href="">FANS</a></li>
                        <li><a href="">NEWS</a></li>
                        <li><a href="">SHOP</a></li>
                    </ul>
                </div>
                {{-- input search da inserire--}}
                <div class="search">
                    <input type="search" name="Search" id="Search" placeholder="Search..." class="searchinput">
                    <i class="fas fa-search lente"></i>
                </div>
            </div>
        </div>
</header>