<header>
    <div class="navbar">
        <div class="logo"> <h2>Your <span> Own </span></h2></div>
            <ul class="links">
            @if (Route::has('login'))

                @auth
                <form action="{{ route('logout') }}" method="POST">
                @csrf

                <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                    this.closest('form').submit();">Logout</a></li>

                </form>
                @else

                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="">Contact</a></li>     
                

                @if (Route::has('register'))
                <li><a href="{{ route('register') }}">Register</a></li>
                @endif
                @endauth

            @endif
            </ul>
            <a href="" class="action_btn">Get Started</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>

            <div class="dropdown_menu ">
                @if (Route::has('login'))

                @auth
                <form action="{{ route('logout') }}" method="POST">
                @csrf

                <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                    this.closest('form').submit();">Logout</a></li>

                </form>
                @else

                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="">Contact</a></li>     
                

                @if (Route::has('register'))
                <li><a href="{{ route('register') }}">Register</a></li>
                @endif
                @endauth

            @endif
            
                <li><a href="" class="action_btn">Get Started</a></li>
            </div>

        </div>
</header>

<main>
    <section id="hero">
        <h1>Welcome</h1>
        <p>Lorem edita ut veritatis. Quibusdam <br> vel omnis distinctio!</p>
    </section>
</main>
