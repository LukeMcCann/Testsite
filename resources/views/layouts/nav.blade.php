@section('nav')
    <header class="clearfix">
        <div class="tooltip" id="logo">
            <a href="#" class="logo-text">PlanetDebug</a>
            <img src="https://s33.postimg.cc/8h2maw11r/logo_trans.gif" onclick="toggleNavSmall()">
            <span class="tooltiptext">Click to expand</span>
        </div>
        <nav id="navbar">
            <ul class="nav-items">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <button>
            <div></div>
            <div></div>
            <div></div>
        </button>
    </header>
@endsection