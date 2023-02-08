<header>
    <nav class="container">
        <div class="logo al">
            <a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/assets/images/dc-logo.png')}}" alt="DC logo"></a>
        </div>
        <ul>
            <li><a href="#">link 1</a></li>
            <li><a href="{{route('comics')}}">comics</a></li>
            <li><a href="#">link 3</a></li>
            <li><a href="#">link 4</a></li>
            <li><a href="#">link 5</a></li>
        </ul>
        <div></div>
    </nav>
</header>