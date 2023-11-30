<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/menu.css')}}">
    <link rel="icon" href="{{asset('assets/img/logo-icon.png')}}">
    <!-- CSS only -->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
     <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
  
     <!-- fancybox -->
     <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.min.css')}}">
     <!-- Font Awesome 6 -->
     <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
     <!-- style -->
     <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
     <!-- responsive -->
     <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
     <!-- color -->
     <link rel="stylesheet" href="{{asset('assets/css/color.css')}}">
     <!-- jQuery -->
     <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
     <script src="{{asset('assets/js/preloader.js')}}"></script>
    <title>Menu</title>
</head>
<body>
  <div class="preloader">
    <div class="container">
        <div class="dot dot-1"></div>
        <div class="dot dot-2"></div>
        <div class="dot dot-3"></div>
    </div>
</div>
<header class="one">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="d-flex align-items-center">
                        <div class="content-header me-5">
                            <i>
                                <svg height="512" viewBox="0 0 32 32" width="512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="_16-Smartphone" data-name="16-Smartphone">
                                        <path
                                            d="m23 2h-14a3 3 0 0 0 -3 3v22a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-22a3 3 0 0 0 -3-3zm-5.39 2-.33 1h-2.56l-.33-1zm6.39 23a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1-1v-22a1 1 0 0 1 1-1h3.28l.54 1.63a2 2 0 0 0 1.9 1.37h2.56a2 2 0 0 0 1.9-1.37l.54-1.63h3.28a1 1 0 0 1 1 1z" />
                                        <path d="m17 24h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2z" />
                                    </g>
                                </svg>
                            </i>
                            <h4>Celular:<a href="#">{{$restaurant->telefono_rest}}</a></h4>
                        </div>
                        <div class="content-header">
                            <i>
                                <svg height="512" viewBox="0 0 32 32" width="512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="_01-Email" data-name="01-Email">
                                        <path
                                            d="m29.61 12.21-13-10a1 1 0 0 0 -1.22 0l-13 10a1 1 0 0 0 -.39.79v14a3 3 0 0 0 3 3h22a3 3 0 0 0 3-3v-14a1 1 0 0 0 -.39-.79zm-13.61-7.95 11.36 8.74-11.36 8.74-11.36-8.74zm11 23.74h-22a1 1 0 0 1 -1-1v-12l11.39 8.76a1 1 0 0 0 1.22 0l11.39-8.76v12a1 1 0 0 1 -1 1z" />
                                    </g>
                                </svg>
                            </i>
                            <h4>Email:<a href="#">{{$restaurant->correo_rest}}</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="d-flex align-items-center login">
                        <div class="header-social-media">
                            <a href="#">
                                Facebook
                            </a>
                            <a href="#">
                                Instagram
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-bar " style="margin-bottom: -87px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="logo">
                            <a href="/">
                                <img alt="logo" src="{{ asset('assets/img/logo.png') }}"
                                    style="width: 215px; padding-bottom: 76px;">
                            </a>
                        </div>
                        <div class="d-flex cart-checkout">
                            <a href="cart-checkout.html">
                                {{-- <i>
                                    <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z">
                                            </path>
                                        </g>
                                    </svg>
                                </i> --}}
                            </a>
                            <div class="bar-menu">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <nav class="navbar">
                        <ul class="navbar-links">
                            <li class="navbar-dropdown">
                                <a href="/">home</a>

                            </li>
                            <li class="navbar-dropdown">
                                <a href="{{ url('/admin') }}">Admin</a>
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/admin') }}"
                                            class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
                                    @else
                                        <a href="{{ route('login') }}"
                                            class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>

                                    @endauth
                                @endif
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
    <div class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block;">
        <div class="res-log">
            <a href="">
                <img alt="logo" src="{{asset('assets/img/logo.png')}}" style="width: 315px" class="white-logo">
            </a>
        </div>
        <ul>
            <li class="navbar-dropdown">
                <a href="/">home</a>
            </li> 
            <li class="navbar-dropdown">
                <a href="{{ url('/admin') }}">Admin</a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/admin') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>

                    @endauth
                @endif
            </li>

        </ul>

        <a href="JavaScript:void(0)" id="res-cross"></a>
    </div>
</header>
<section class="slider-hero">
    <div class="slider-home-1 owl-carousel owl-theme">
        <div class="hero-section item"
            style=" background-image: url('{{ asset('assets/img/m1.jpeg') }}');background-color: #0000000d;
  background-size: cover;
  background-blend-mode: darken;
  background-position: center;"
            class="opacity_image">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-6">
                        <div class="featured-area">
                            <h2 class="yellow2">Tesoros del Mar Sabores. frescos en cada bocado.</h2>
                            <h4 style="color:white">Sumérgete en sabores frescos junto al mar. En nuestros
                                restaurantes, cada bocado de nuestros pescados capturan la esencia del océano.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-section item"
            style=" background-image: url('{{ asset('assets/img/camaron.jpeg') }}');background-color: #0000003b;
background-size: cover;
background-blend-mode: darken;
background-position: center; "
            class="opacity_image">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-6">
                        <div class="featured-area">
                            <h2 class="yellow2">Mariscos Exquisitos. Delicias costeras en cada plato.</h2>
                            <h4 style="color:white">Deléitate con la frescura del mar en cada camarón que servimos. En
                                nuestros restaurantes, los sabores costeros se encuentran en cada plato.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-section item"
            style=" background-image: url('{{ asset('assets/img/playa.jpeg') }}'); background-color: #00000061;
  background-size: cover;
  background-blend-mode: darken;">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-6">
                        <div class="featured-area">
                            <h2 class="yellow2">Gastronomía Costera. Sabores que acarician el alma playera.</h2>
                            <h4 style="color:white">Siente la brisa, saborea la frescura. En nuestros restaurantes a
                                orillas del mar, cada comida es una escapada tropical</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-section item"
            style=" background-image: url('{{ asset('assets/img/m3.jpg') }}');background-color: #0000002b;
  background-size: cover;
  background-blend-mode: darken;
  background-position: center;"
            class="opacity_image">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-6">
                        <div class="featured-area">
                            <h2 class="yellow2">Ritmo del Mar. Experiencias culinarias junto a la playa.</h2>
                            <h4 style="color:white">Descubre la magia de los sabores playeros en nuestros restaurantes.
                                Aquí, cada momento es una oda a la serenidad de la playa.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end preloader -->
<section class="interior-section-two menu-section">
    @foreach($categorias as $categoria)
        <div class="menu-list menu-list__dotted menu-list-{{ $loop->iteration }}">
            <h2 class="menu-list__title">{{ $categoria->nom_categoria }}</h2>
            <hr class="separator">
            <ul class="menu-list__items">
                @php
                    $productos = $categoria->productos->chunk(2); // Agrupar los productos de la categoría en grupos de 2
                @endphp

                @foreach($productos as $grupoProductos)
                    <div class="row">
                        @foreach($grupoProductos as $producto)
                            <div class="col-md-6">
                                <li class="menu-list__item">
                                    <h4 class="menu-list__item-title">
                                        <span class="item_title">{{ $producto->nom_produc}}</span>
                                        <span class="dots"></span>
                                    </h4>
                                    <p class="menu-list__item-desc">{{ $producto->desc_produc}}</p>
                                    <p></p>
                                    <span class="dots"></span>
                                    <span class="menu-list__item-price"><p>${{ $producto->precio_produc}}</p></span>
                                </li>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </ul>
        </div>
    @endforeach
</section>

<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- fancybox -->
<script src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<!-- Form Script -->
<script src="{{asset('assets/js/contact.js')}}"></script>
<script type="text/javascript" src=" {{asset('assets/js/sweetalert.min.js')}}"></script> 
</body>
</html>