@extends('layouts.app')

@section('title')
    Desa Wisata Tingkir Lor
@endsection

@section('content')
    <header class="text-center">
        <h1>
            Explore The Beautiful Village
            <br />
            As Easy One Click
        </h1>
        <p class="mt-3">
            You will see beautiful
            <br />
            moment you never see before
        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
    </header>
    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>{{ $transaction }}</h2>
                    <p>Pengunjung</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>{{ $travel_package }}</h2>
                    <p>Wisata</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>10</h2>
                    <p>Partner</p>
                </div>
            </section>
        </div>
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>
                            Something that you never try
                            <br />
                            before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items as $item)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column"
                                style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
                                <div class="travel-country">
                                    {{ $item->location }}
                                </div>
                                <div class="travel-location">
                                    {{ $item->title }}
                                </div>
                                <div class="travel-button mt-auto">
                                    <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section-testimonials-heading" id="testimonialsHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>
                            Moments were giving them
                            <br />
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-testimonials-content" id="testimonialsContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center match-height">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/testimoni.png') }}" alt=""
                                    class="mb-4 rounded-circle" />
                                <h3 class="mb-4">Yenny Wahid</h3>
                                <p class="testimonials">
                                    “Kalau ke Kota Salatiga, Mampir ni ke Tingkir Lor. Karena produk-produk UMKM nya
                                    menggiurkan semua ini. Ada cokelat tempe, ada kopi. Enak semuanya“
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/testimoni2.png') }}" alt=""
                                    class="mb-4 rounded-circle" />
                                <h3 class="mb-4">Muhammad Septian</h3>
                                <p class="testimonials">
                                    “Viewnya bagus dan udaranya seger, cocok buat olahraga pagi dan meditasi. Dankeeeee“
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="whatsapp://send?text=Hello&phone=+6289669366867" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
