@section('nav')
    <header class="clearfix">
        <div class="tooltip" id="logo">
            <a href="#" class="logo-text">PlanetDebug</a>
            <img src="https://s33.postimg.cc/8h2maw11r/logo_trans.gif" onclick="toggleNavSmall()">
            <span class="tooltiptext">Click to expand</span>
        </div>
        <nav id="navbar">
            <ul class="nav-items">
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('projects')}}">Projects</a></li>
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li><a href="{{route('shop')}}">Products</a></li>
            </ul>
        </nav>
        <button>
            <div></div>
            <div></div>
            <div></div>
        </button>
    </header>
@endsection