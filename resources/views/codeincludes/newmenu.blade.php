<head>
    <!-- include css -->
    <link rel="stylesheet" href="{{ asset('/css/newmenu.css') }}">
</head>

<!-- Menu button top right------------------------>
<header class="debug">
        <div class="photo_container debug">
                <img src="../images/logo_new.jpg" alt="logo" />
            </div>

        <div class="menu-btn">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
        </div>
<!-- Menu navigation menu text-------------------->
        <nav class="menu">
            <div class="menu-branding">
                <div class="menu-text">
                    <span class="text1">Navigation</span>
                    <span class="text2">Menu</span>
                </div>
            </div>
<!-- Menu links------------------------------------>
            <ul class="menu-nav">
                <li class="nav-item current">
                    <a href="#" class="nav-link">
                       Home 
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        About Me
                    </a>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        My Projects 
                    </a>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Contact 
                    </a>
                </li>
            </ul>
        </nav>
    </header>

        <!-- Authentication Links -->
        @guest
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif
        @else
    
        <div class="" aria-labelledby="navbarDropdown">
           
        </div>
        @endguest