@extends('plantilla')
@section('titulo', 'Home')
@section('contenido')
    <!-- preloader -->
    <div class="preloader">
        <div class="container">
            <div class="dot dot-1"></div>
            <div class="dot dot-2"></div>
            <div class="dot dot-3"></div>
        </div>
    </div>



    {{-- prueba
        
        
        
         --}}
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
                                <h4>Phone:<a href="#">+1 (850) 344 0 66</a></h4>
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
                                <h4>Email:<a href="#">info@domain.com</a></h4>
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
                                    <img alt="logo" src="assets/img/logo.png" style="width: 215px; padding-bottom: 76px;">
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
                                    <a href="#restaurantes">Restaurantes</a>
                                </li>
                                <li class="navbar-dropdown">
                                    <a href="#testimonios">Testimonios</a>
                                </li>
                                {{-- <div class="register">
                                    <i>
                                        <svg clip-rule="evenodd" fill-rule="evenodd" height="512" stroke-linejoin="round"
                                            stroke-miterlimit="2" viewBox="0 0 32 32" width="512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="Approved-User">
                                                <path
                                                    d="m10.105 22.3c.21-.482.511-.926.89-1.305.797-.797 1.878-1.245 3.005-1.245h4c1.127 0 2.208.448 3.005 1.245.379.379.68.823.89 1.305.166.379.608.553.988.387.379-.165.553-.608.387-.987-.285-.653-.691-1.253-1.204-1.766-1.078-1.078-2.541-1.684-4.066-1.684-1.3 0-2.7 0-4 0-1.525 0-2.988.606-4.066 1.684-.513.513-.919 1.113-1.204 1.766-.166.379.008.822.387.987.38.166.822-.008.988-.387z" />
                                                <path
                                                    d="m16 8.25c-3.174 0-5.75 2.576-5.75 5.75s2.576 5.75 5.75 5.75 5.75-2.576 5.75-5.75-2.576-5.75-5.75-5.75zm0 1.5c2.346 0 4.25 1.904 4.25 4.25s-1.904 4.25-4.25 4.25-4.25-1.904-4.25-4.25 1.904-4.25 4.25-4.25z" />
                                                <path
                                                    d="m26.609 12.25c.415 1.173.641 2.435.641 3.75 0 6.209-5.041 11.25-11.25 11.25s-11.25-5.041-11.25-11.25 5.041-11.25 11.25-11.25c1.315 0 2.577.226 3.75.641.39.138.819-.067.957-.457s-.067-.819-.457-.957c-1.329-.471-2.76-.727-4.25-.727-7.037 0-12.75 5.713-12.75 12.75s5.713 12.75 12.75 12.75 12.75-5.713 12.75-12.75c0-1.49-.256-2.921-.727-4.25-.138-.39-.567-.595-.957-.457s-.595.567-.457.957z" />
                                                <path
                                                    d="m21.47 8.53 2 2c.293.293.767.293 1.06 0l4-4c.293-.292.293-.768 0-1.06-.292-.293-.768-.293-1.06 0l-3.47 3.469s-1.47-1.469-1.47-1.469c-.292-.293-.768-.293-1.06 0-.293.292-.293.768 0 1.06z" />
                                            </g>
                                        </svg>
                                    </i><a href="login.html">
                                        @if (Route::has('login'))
                                            <div class="z-10 p-6 text-right sm:fixed sm:top-0 sm:right-0">
                                                @auth
                                                    <a href="{{ url('/admin') }}"
                                                        class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Admin</a>
                                                @else
                                                    <a href="{{ route('login') }}"
                                                        class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Admin</a>

                                                @endauth
                                            </div>
                                        @endif

                                    </a>
                                </div> --}}
                                <li class="navbar-dropdown">
                                    <a href="{{ url('/admin') }}">Admin</a>
                                    @if (Route::has('login'))
                                        @auth
                                            <a href="{{ url('/admin') }}"
                                                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Admin</a>
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
                <a href="/">
                    <img alt="logo" src="assets/img/logo.png" style="width: 315px" class="white-logo">
                </a>
            </div>
            <ul>
                <li class="navbar-dropdown">
                    <a href="/">home</a>

                </li>
                <li class="navbar-dropdown">
                    <a href="#restaurantes">Restaurantes</a>
                <li class="navbar-dropdown">
                    <a href="#testimonios">Testimonios</a>
                </li>

                <li class="navbar-dropdown">
                    <a href="{{ url('/admin') }}">Admin</a>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/admin') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Admin</a>
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

    {{-- fin prueba --}}
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
    <!-- section de nosotros -->
    <section class="gap" id="restaurantes">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="heading">
                        <span>
                            Nuestros Restaurantes</span>
                        <h2>Preparamos solo lo mejor para ti </h2>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-text">
                        <p>Descubre una experiencia gastronómica frente al mar. Explora nuestra selección de restaurantes en
                            la playa, donde el sabor se mezcla con la brisa marina para ofrecerte momentos inolvidables
                            junto a las olas del océano.</p>
                        <div class="mt-4 d-flex align-items-center">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 row">
                @foreach ($restaurante as $rest)
                    <div class="col-xl-4.5 col-lg-6" style="margin-top: 25px">
                        <div class="restaurant-card">
                            <img src="{{ asset('storage/' . $rest->foto_1_rest) }}" alt="Descripción de la imagen"
                                height="416px" width="635px">
                            <div class="restaurant-span">
                                <span>{{ $rest->nom_rest }}</span>
                            </div>
                            <div class="coctail-bar">
                                <h5>{{ $rest->nom_rest }}</h5>
                                <p>{{ $rest->desc_rest }}</p>
                                <a href="{{ route('resta1', $rest->id) }}">Ir Allá</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </section>

    {{-- <!-- Section productos relevantes -->
<section class="gap">
  <div class="container">
     <div class="row">
        <div class="col-lg-6">
           <div class="bbq" style="background-image: url(https://via.placeholder.com/630x366)">
              <h2>Steaks & BBQ</h2>
              <p>canonical classics to obscure<br> tiki drinks</p>
              <div class="bbr-price">
                 <div>
                    <h3>$120</h3>
                    <span>per person</span>
                 </div>
              </div>
           </div>
        </div>
        <div class="col-lg-6">
           <div class="mb-0 bbq" style="background-image: url(https://via.placeholder.com/630x366)">
              <h2>Cocktails</h2>
              <p>canonical classics to obscure <br> tiki drinks</p>
              <div class="bbr-price">
                 <div>
                    <h3>$120</h3>
                    <span>per person</span>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</section> --}}

    <!-- section de galeria de fotos -->
    <section class="gap section-featured" style="background-color: #f5f8fd;">
        <div class="container">
            <div class="heading-two">
                <h2> Fotos Destacadas </h2>
                <div class="line"></div>
            </div>
            <div class="row dishes owl-carousel owl-theme">

                <div class="item col-xl-12">
                    <div class="featured-dishes">
                        <div class="featured-dishes-img">
                            <img alt="featured-dishes" src="{{ asset('assets/img/m1.jpeg') }}" height="323px"
                                width="322px">
                        </div>
                        <ul class="star">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        {{-- <a href="product-details.html"><h5>Nombre</h5></a>
              <p><span>$</span>Precio</p> --}}
                    </div>
                </div>
                <div class="item col-xl-12">
                    <div class="featured-dishes">
                        <div class="featured-dishes-img">
                            <img alt="featured-dishes" src="{{ asset('assets/img/m3.jpg') }}" height="323px"
                                width="322px">
                        </div>
                        <ul class="star">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        {{-- <a href="product-details.html"><h5>Nombre</h5></a>
            <p><span>$</span>Precio</p> --}}
                    </div>
                </div>
                <div class="item col-xl-12">
                    <div class="featured-dishes">
                        <div class="featured-dishes-img">
                            <img alt="featured-dishes" src="{{ asset('assets/img/playa.jpeg') }}" height="323px"
                                width="322px">
                        </div>
                        <ul class="star">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        {{-- <a href="product-details.html"><h5>Nombre</h5></a>
            <p><span>$</span>Precio</p> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section de Testimonios -->
    <!-- section de opiniones -->
    <section class="gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="heading" id="testimonios">
                        <span>TESTIMONIOS Y RESEÑAS</span>
                        <h2>Nuestros comentarios personalizados</h2>
                    </div>
                    <div class="bratlee-slider owl-carousel owl-theme">
                        @foreach ($testimonio as $test)
                            <div class="bratlee-hamint item">
                                <p>{{ $test->testimonio }}</p>
                                <div class="mt-4 d-flex align-items-center">
                                    <h3>Clientes</h3>
                                    <ul class="star">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <img alt="quote" class="quote" src="assets/img/quote.png">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="bratlee-img">
                        <img alt="bratlee-hamin2" class="bratlee-hamint-2" src="{{ asset('assets/img/playa.jpeg') }}"
                            style="width:292px" height="292px">
                        <img alt="bratlee-hamint" class="bratlee-hamint-1" src="{{ asset('assets/img/m1.jpeg') }}"
                            style="width:292px" height="292px">
                        <img alt="bratlee-hamin3" class="bratlee-hamint-3" src="{{ asset('assets/img/m3.jpg') }}"
                            style="width:292px" height="292px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section de instagram gallery -->
    <section>
        <!-- footer -->
        <footer class="three" style="background-image:url(assets/img/patron-black.jpg)">
            <div class="container gap no-bottom">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="footer-text">
                            <a href="/">
                                <img alt="logo-white" src="assets/img/Logo_blanco.png" style="width: 190px;">
                            </a>
                            <p>En Santa Verónica, disfruta de una experiencia culinaria única con la frescura del mar en nuestros exquisitos mariscos, sabrosos filetes y divertidos menús infantiles. Además, ofrecemos un espacio ideal para eventos especiales junto al mar. Sumérgete en sabores frescos y auténticos que realzan la esencia misma de la playa.</p>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <ul class="booking">
                            <li class="contact">
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
                                <div>
                                    <span>Telefono</span>
                                    <a href="#"><span>3012736650</span></a>
                                </div>
                            </li>
                            <li class="contact">
                                <i>
                                    <svg height="512" viewBox="0 0 32 32" width="512"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="_01-Email" data-name="01-Email">
                                            <path
                                                d="m29.61 12.21-13-10a1 1 0 0 0 -1.22 0l-13 10a1 1 0 0 0 -.39.79v14a3 3 0 0 0 3 3h22a3 3 0 0 0 3-3v-14a1 1 0 0 0 -.39-.79zm-13.61-7.95 11.36 8.74-11.36 8.74-11.36-8.74zm11 23.74h-22a1 1 0 0 1 -1-1v-12l11.39 8.76a1 1 0 0 0 1.22 0l11.39-8.76v12a1 1 0 0 1 -1 1z">
                                            </path>
                                        </g>
                                    </svg>
                                </i>
                                <div>
                                    <span>Correo</span>
                                    <a href="#"><span>santaveronica210@gmail.com</span></a>
                                </div>
                            </li>
                            <li class="contact">
                                <i>
                                    <a href="https://maps.app.goo.gl/YRjdQkEpB7zJcHRa6" target="black_" ><svg height="512" viewBox="0 0 32 32" width="512"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="_06-Location" data-name="06-Location">
                                            <path
                                                d="m25 21.61a1 1 0 1 0 -.84 1.82c1.37.57 1.84 1.23 1.84 1.57 0 1.19-4 3-10 3s-10-1.81-10-3c0-.34.47-1 1.8-1.57a1 1 0 1 0 -.8-1.82c-2.49 1.12-3 2.46-3 3.39 0 3.28 6 5 12 5s12-1.72 12-5c0-.93-.51-2.27-3-3.39z">
                                            </path>
                                            <path
                                                d="m15.45 25.83a1 1 0 0 0 1.1 0c.39-.26 9.45-6.38 9.45-13.83a10 10 0 0 0 -20 0c0 7.45 9.06 13.57 9.45 13.83zm.55-21.83a8 8 0 0 1 8 8c0 5.41-6.1 10.36-8 11.77-1.9-1.41-8-6.36-8-11.77a8 8 0 0 1 8-8z">
                                            </path>
                                            <path d="m21 12a5 5 0 1 0 -5 5 5 5 0 0 0 5-5zm-8 0a3 3 0 1 1 3 3 3 3 0 0 1 -3-3z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                                </i>
                                <div>
                                    <span>Ubicación</span>
                                    <a href="https://maps.app.goo.gl/YRjdQkEpB7zJcHRa6" target="black_" ><h6>Santa Veronica</h6></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style="background-color: #000;">
                <div class="container">
                    <div class="footer-bootem">
                        <h6><span>© 2023 Tecnoparque</span> | Powered By Orlando Julio</h6>
                        <div class="header-social-media">
                            <a href="#">Facebook</a>
                            <a href="#">Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- progress -->
        <div id="progress">
            <span id="progress-value"><i class="fa-solid fa-arrow-up"></i></span>
        </div>
    @endsection
