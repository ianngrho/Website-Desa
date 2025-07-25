<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ url('frontend/images/ic_desa.png') }}" alt="" />
            <span font-family: 'Assistant', sans-serif style="color: #071c4d;">
                Desa Wisata Tingkir Lor
            </span>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Social Media
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="https://www.instagram.com/desawisata_tingkirlor/">Instagram</a>
                        <a class="dropdown-item" href="https://web.facebook.com/desawisatatingkirlor/">Facebook</a>
                        <a class="dropdown-item" href="https://www.youtube.com/@dewitingkirlor6946">YouTube</a>
                    </div>
                </li>
                <li class="nav-item mx-md-2">
                    <a class="nav-link" href="#testimonialsHeading">Testimonial</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Kontak
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="whatsapp://send?text=Hello&phone=+6289669366867">Admin</a>
                    </div>
                </li>
            </ul>

            @guest
                <!-- Mobile button -->
                <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0" type="button"
                        onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                        Masuk
                    </button>
                </form>
                <!-- Desktop Button -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                        onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                        Masuk
                    </button>
                </form>
            @endguest


            @auth
                <!-- Mobile button -->
                <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-login my-2 my-sm-0" type="submit">
                        Keluar
                    </button>
                </form>
                <!-- Desktop Button -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                        Keluar
                    </button>
                </form>
            @endauth

        </div>
    </nav>
</div>
