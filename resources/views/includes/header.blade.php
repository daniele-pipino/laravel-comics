<header>
    {{-- top header --}}
    <div class="top-header"></div>
        <div class="container">
            <div class="main-header d-flex">
                 {{-- logo --}}
                <div class="header-logo">
                    <img src="{{ asset('images/dc-logo.png') }}" alt="dc-logo">
                </div>
                {{-- navbar --}}
                <div class="navbar">
                    <ul>
                        <li><a href="{{route('home')}}">CHARACTERS</a></li>
                        <li><a href="{{route('comics')}}">COMICS</a></li>
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
            </div>
        </div>
</header>