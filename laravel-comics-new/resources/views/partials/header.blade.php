<header class="container-90">
    <div class="header__nav">
         <img src="{{asset('img/dc-logo.png')}}" alt="" class="header__logo">
         <nav>
            <ul class="header__nav__list">
                <li class="header__nav__list-item">
                    <a href="{{route('characters')}}" class="{{ 'characters' === Route::currentRouteName() ? 'active' : '' }}">Characters</a>
                </li>
                <li class="header__nav__list-item">
                    <a href="{{route('home')}}" class="{{ 'home' === Route::currentRouteName() ? 'active' : '' }}">Comics</a>
                </li>
                <li class="header__nav__list-item">
                    <a href="{{route('movies')}}" class="{{ 'movies' === Route::currentRouteName() ? 'active' : '' }}">Movies</a>
                </li>
                <li class="header__nav__list-item">
                    <a href="{{route('tv')}}" class="{{ 'tv' === Route::currentRouteName() ? 'active' : '' }}">Tv</a>
                </li>
                <li class="header__nav__list-item">
                    <a href="{{route('games')}}" class="{{ 'games' === Route::currentRouteName() ? 'active' : '' }}">Games</a>
                </li>
                <li class="header__nav__list-item">
                    <a href="{{route('collectibles')}}" class="{{ 'collectibles' === Route::currentRouteName() ? 'active' : '' }}">Collections</a>
                </li>
                <li class="header__nav__list-item">
                    <a href="{{route('videos')}}" class="{{ 'videos' === Route::currentRouteName() ? 'active' : '' }}">Videos</a>
                </li>
                <li class="header__nav__list-item">
                    <a href="{{route('fans')}}" class="{{ 'fans' === Route::currentRouteName() ? 'active' : '' }}">Fans</a>
                </li>
                <li class="header__nav__list-item">
                    <a href="{{route('news')}}" class="{{ 'news' === Route::currentRouteName() ? 'active' : '' }}">News</a>
                </li>
                <li class="header__nav__list-item">
                    <a href="{{route('shop')}}" class="{{ 'shop' === Route::currentRouteName() ? 'active' : '' }}">Shop<i class="fa-solid fa-sort-down"></i></a>
                </li>
            </ul>
            <div class="search">
                <input type="text" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
         </nav>
         <div class="container">
            <div class="jumbotron relative"></div>
        </div>
    </div>
</header>