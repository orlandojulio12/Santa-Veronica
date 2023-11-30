@extends('Plantilla')
@section('titulo', 'Restaurantes')
@section('contenido')
    <div class="preloader">
        <div class="container">
            <div class="dot dot-1"></div>
            <div class="dot dot-2"></div>
            <div class="dot dot-3"></div>
        </div>
    </div>
    <!-- end preloader -->
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
                                <h4>Celular:<a href="#">{{ $restaurant->telefono_rest }}</a></h4>
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
                                <h4>Email:<a href="#">{{ $restaurant->correo_rest }}</a></h4>
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
                                    <img alt="logo"  src="{{asset('assets/img/logo.png')}}"  alt="Imagen" 
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
                                    <a href="{{ route('Menu', $restaurant->id) }}">Menu</a>
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
                    <img alt="logo"  src="{{asset('assets/img/logo.png')}}" alt="Imagen"  style="width: 315px" class="white-logo">
                </a>
            </div>
            <ul>
                <li class="navbar-dropdown">
                    <a href="/">home</a>
                </li>
                <li class="navbar-dropdown">
                    <a href="{{ route('Menu', $restaurant->id) }}">Menu</a>
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
    <!-- preloader -->
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
                                <h2 class="yellow2">Tesoros del Mar Sabores frescos en cada bocado.</h2>
                                <h4 style="color:white">Sumérgete en sabores frescos junto al mar. En nuestros restaurantes,
                                    cada bocado de nuestros pescado captura la esencia del océano.</h4>
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
                                <h2 class="yellow2">Mariscos Exquisitos Delicias costeras en cada plato.</h2>
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
                                <h2 class="yellow2">Gastronomía Costera Sabores que acarician el alma playera.</h2>
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
                                <h2 class="yellow2">Ritmo del Mar Experiencias culinarias junto a la playa.</h2>
                                <h4 style="color:white">Descubre la magia de los sabores playeros en nuestros restaurantes.
                                    Aquí, cada momento es una oda a la serenidad de la playa.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- preloader -->

    <!-- section de nosotros -->
    <section class="gap" id="nosotros">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="featured-arae-two-img">
                        <img src="{{ asset('storage/' . $restaurant->foto_1_rest) }}" alt="Descripción de la imagen"
                            height="300px" width="490px" >
                    </div>
                </div>
                <div class="col-xl-6 col-lg-9">
                    <div class="welcome-to-foodio">
                        <span>Bienvenidos a {{ $restaurant->nom_rest }}</span>

                        <p>{{ $restaurant->desc_rest }}</p>
                        @foreach ($horarios as $h)
                            <h6>{{ $h->dia }} - {{ $h->hora }}</h6>
                            @if ($restaurant->id == 2)
                            <h6>Sabado - Domingo - Festivos:   7:30 a.m - 7:00 p.m.</h6>  
                                    
                        @endif
                        @endforeach
                        <a href="callto:+441298123987">
                            <h4>{{ $restaurant->telefono_rest }}</h4>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="featured-arae-two-img">
                        <img src="{{ asset('storage/' . $restaurant->foto_2_rest) }}" alt="Descripción de la imagen"
                            height="353px" width="221px">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- section que ofrecemos -->
    <section class="gap no-bottom" style="background-color:#f5f8fd;">
        <div class="container">
            <div class="container gap">
                <div class="best-solutions">
                    <div class="heading">
                        <span>MEJORES SOLUCIONES</span>
                        <h2>Brindamos los mejores servicios</h2>
                    </div>
                    {{-- <p>Nisl quam nestibulum ac quam nec odio elementu aucan ligula. Orci varius natoque pena tibus et
                        maurient monte nascete ridiculus mus nellentesque um ac quam nec odio rbine.</p> --}}
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="best-solutions-service">
                            <i class="fas fa-fish" style="font-size: 70px; transition: transform 0.3s ease-in-out;"
                                onmouseover="this.style.transform='scale(1.2)'"
                                onmouseout="this.style.transform='scale(1)'"></i>
                            <a href="{{ route('Menu', $restaurant->id) }}">
                                <a href="{{ route('Menu', $restaurant->id) }}" ><h3>Pescados y Mariscos</h3></a>
                            </a>
                            <p>Del mar a tu plato: frescura y sabor se unen en cada bocado. ¡Descubre nuestra exquisita variedad de pescados y camarones, una experiencia marina inigualable!.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="best-solutions-service">
                            <i class="fas fa-cocktail" style="font-size: 70px; transition: transform 0.3s ease-in-out;"
                                onmouseover="this.style.transform='scale(1.2)'"
                                onmouseout="this.style.transform='scale(1)'"></i>
                            <a href="{{ route('Menu', $restaurant->id) }}">
                                <a href="{{ route('Menu', $restaurant->id) }}"><h3>Cocteles</h3></a>
                            </a>
                            <p>Siente la brisa marina mientras brindas con nuestros refrescantes cocteles. Cada sorbo es un viaje de sabores que te transportará a la esencia misma de la playa.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="best-solutions-service">
                            <i class="fas fa-child" style="font-size: 70px; transition: transform 0.3s ease-in-out;"
                                onmouseover="this.style.transform='scale(1.2)'"
                                onmouseout="this.style.transform='scale(1)'"></i>

                            <a href="{{ route('Menu', $restaurant->id) }}">
                                <a href="{{ route('Menu', $restaurant->id) }}"><h3>Menú Infantil</h3></a>
                            </a>
                            <p>Menú creado especialmente para los niños, donde el gusto y la alegría se encuentran</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="mb-0 best-solutions-service">
                            <i  class="fas fa-calendar-alt" style="font-size: 70px; transition: transform 0.3s ease-in-out;"
                                onmouseover="this.style.transform='scale(1.2)'"
                                onmouseout="this.style.transform='scale(1)'"></i>
                            <a href="#">
                                <h3>Eventos</h3>
                            </a>
                            <p>¿Buscas el lugar perfecto para tu evento junto al mar? Con nuestra hospitalidad y vistas espectaculares, convertiremos tu ocasión especial en un recuerdo inolvidable bajo el cielo azul y la arena dorada.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- section de reserva -->
    @if ($restaurant->id == 2 || $restaurant->id == 3)
        <section class="gap no-top">
            <div class="container">
                <div class="welcome-to-foodio about-food">
                    <span>
                        PAQUETES</span>
                    <h2>Una colección de experiencias únicas</h2>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="private-package">
                            <div class="private-table">
                                <div>
                                    <h3>Celebración de bodas.</h3>
                                    <ul class="higher-reach">
                                        <li>
                                            <div class="bol"></div>Menú personalizado
                                        </li>
                                        <li>
                                            <div class="bol"></div>Decoración especial 
                                        </li>
                                        <li>
                                            <div class="bol"></div>Espacio elegante y amplio
                                        </li>
                                        <li>
                                            <a href="https://api.whatsapp.com/send?phone=+57{{ $restaurant->telefono_rest }}&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20reserva"
                                                class="float" target="_blank" id="whatsappBtn">
                                                Reserve Aquí <i class="fab fa-whatsapp"></i>

                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="private-table-img">
                                <img alt="private-table"
                                    src="{{asset('assets/img/boda_playa.jpg')}}" width="360px" height="460px">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="private-package">
                            <div class="private-table">
                                <div>
                                    <h3>Especial de evento de fiesta de cumpleaños</h3>
                                    <ul class="higher-reach">
                                        <li>
                                            <div class="bol"></div>Globos
                                        </li>
                                        <li>
                                            <div class="bol"></div>Tartas y Pasteles
                                        </li>
                                        <li>
                                            <div class="bol"></div>Refresco
                                        </li>
                                        <li>
                                            <a href="https://api.whatsapp.com/send?phone=+57{{ $restaurant->telefono_rest }}&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20reserva"
                                                class="float" target="_blank" id="whatsappBtn">
                                                Reserve Aquí <i class="fab fa-whatsapp"></i>

                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="private-table-img">
                                <img alt="private-table" src="{{asset('assets/img/Cumpleaños_playa.jpg')}}"  width="360px" height="460px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- section de opiniones -->
    <section class="gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="heading">
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
                                <img alt="quote" class="quote" src="{{ asset('assets/img/quote.png') }}">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="bratlee-img">
                        <img alt="bratlee-hamin2" class="bratlee-hamint-2"  src="{{ asset('storage/' . $restaurant->foto_3_rest) }}" alt="Imagen"
                            style="width:292px" height="292px">
                        <img alt="bratlee-hamint" class="bratlee-hamint-1"  src="{{ asset('storage/' . $restaurant->foto_4_rest) }}" alt="Imagen"
                            style="width:292px" height="292px">
                        <img alt="bratlee-hamin3" class="bratlee-hamint-3"  src="{{ asset('storage/' . $restaurant->foto_5_rest) }}" alt="Imagen" 
                            style="width:292px" height="292px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- seccion de fotos --}}
    <section>
        <div class="container">
           <div class="p-0 follow">
              <i class="fa-brands fa-instagram"></i>
           </div>
        </div>
        
        <div class="gallery-img-style">
            @if ($restaurant->id == 2)
             <div class="featured-imagebox featured-imagebox-gallery">
                 <a href="{{ asset('assets/img/Adestacada1.jpg')}}" data-fancybox="gallery">
                 <div class="featured-link">
                     <div class="featured-thumbnail">                                                
                        <img class="img-fluid" src="{{ asset('assets/img/Adestacada1.jpg')}}" alt="gallery-img" style="width:365px" height="354px">
                       </div>
                     <div class="featured-overlay"></div>
                 </div>
               </a>
             </div>
             <div class="featured-imagebox featured-imagebox-gallery">
                 <a href="{{ asset('assets/img/Adestacada2.jpg')}}" data-fancybox="gallery">
                 <div class="featured-link">
                     <div class="featured-thumbnail">                                                
                        <img class="img-fluid" src="{{ asset('assets/img/Adestacada2.jpg')}}" alt="gallery-img" style="width:365px" height="354px">
                       </div>
                     <div class="featured-overlay"></div>
                 </div>
               </a>
             </div>
             <div class="featured-imagebox featured-imagebox-gallery">
                 <a href="{{ asset('assets/img/Adestacada3.jpg')}}" data-fancybox="gallery">
                 <div class="featured-link">
                     <div class="featured-thumbnail">                                                
                        <img class="img-fluid" src="{{ asset('assets/img/Adestacada3.jpg')}}" alt="gallery-img" style="width:365px" height="354px">
                       </div>
                     <div class="featured-overlay"></div>
                 </div>
               </a>
             </div>
             <div class="featured-imagebox featured-imagebox-gallery">
                <a href="{{ asset('assets/img/Adestacada7.jpg')}}" data-fancybox="gallery">
                <div class="featured-link">
                    <div class="featured-thumbnail">                                                
                       <img class="img-fluid" src="{{ asset('assets/img/Adestacada7.jpg')}}" alt="gallery-img" style="width:365px" height="354px">
                      </div>
                    <div class="featured-overlay"></div>
                </div>
              </a>
            </div>
            <div class="featured-imagebox featured-imagebox-gallery">
                <a href="{{ asset('assets/img/Adestacada5.jpg')}}" data-fancybox="gallery">
                <div class="featured-link">
                    <div class="featured-thumbnail">                                                
                       <img class="img-fluid" src="{{ asset('assets/img/Adestacada5.jpg')}}" alt="gallery-img" style="width:365px" height="354px">
                      </div>
                    <div class="featured-overlay"></div>
                </div>
              </a>
            </div>
            <div class="featured-imagebox featured-imagebox-gallery">
                <a href="{{ asset('assets/img/Adestacada6.jpg')}}" data-fancybox="gallery">
                <div class="featured-link">
                    <div class="featured-thumbnail">                                                
                       <img class="img-fluid" src="{{ asset('assets/img/Adestacada6.jpg')}}" alt="gallery-img" style="width:365px" height="354px">
                      </div>
                    <div class="featured-overlay"></div>
                </div>
              </a>
            </div>
            @endif
             @if ($restaurant->id == 1)
             <div class="featured-imagebox featured-imagebox-gallery">
                 <a href="{{ asset('assets/img/RMdestacada1.jpeg')}}" data-fancybox="gallery">
                 <div class="featured-link">
                     <div class="featured-thumbnail">                                                
                         <img class="img-fluid" src="{{ asset('assets/img/RMdestacada1.jpeg')}}" alt="gallery-img" style="width:365px" height="354px">
                       </div>
                     <div class="featured-overlay"></div>
                 </div>
               </a>
             </div>
             <div class="featured-imagebox featured-imagebox-gallery">
                 <a href="{{ asset('assets/img/RMdestacada2.jpeg')}}" data-fancybox="gallery">
                 <div class="featured-link">
                     <div class="featured-thumbnail">                                                
                         <img class="img-fluid" src="{{ asset('assets/img/RMdestacada2.jpeg')}}" alt="gallery-img" style="width:365px" height="354px">
                       </div>
                     <div class="featured-overlay"></div>
                 </div>
               </a>
             </div>
             <div class="featured-imagebox featured-imagebox-gallery">
                 <a href="{{ asset('assets/img/destacada6.jpg')}}" data-fancybox="gallery">
                 <div class="featured-link">
                     <div class="featured-thumbnail">                                                
                         <img class="img-fluid" src="{{ asset('assets/img/destacada6.jpg')}}" alt="gallery-img" style="width:365px" height="354px">
                       </div>
                     <div class="featured-overlay"></div>
                 </div>
               </a>
             </div>
             <div class="featured-imagebox featured-imagebox-gallery">
                <a href="{{ asset('storage/' . $restaurant->foto_5_rest) }}" data-fancybox="gallery">
                <div class="featured-link">
                    <div class="featured-thumbnail">                                                
                        <img class="img-fluid" src="{{ asset('storage/' . $restaurant->foto_5_rest) }}" alt="gallery-img" style="width:365px" height="354px">
                      </div>
                    <div class="featured-overlay"></div>
                </div>
              </a>
            </div>
            <div class="featured-imagebox featured-imagebox-gallery">
                <a href="{{ asset('storage/' . $restaurant->foto_3_rest) }}" data-fancybox="gallery">
                <div class="featured-link">
                    <div class="featured-thumbnail">                                                
                        <img class="img-fluid" src="{{ asset('storage/' . $restaurant->foto_3_rest) }}" alt="gallery-img" style="width:365px" height="354px">
                      </div>
                    <div class="featured-overlay"></div>
                </div>
              </a>
            </div>
            <div class="featured-imagebox featured-imagebox-gallery">
                <a href="{{ asset('assets/img/RMdestacada1.jpeg')}}" data-fancybox="gallery">
                <div class="featured-link">
                    <div class="featured-thumbnail">                                                
                        <img class="img-fluid" src="{{ asset('assets/img/RMdestacada1.jpeg')}}" alt="gallery-img" style="width:365px" height="354px">
                      </div>
                    <div class="featured-overlay"></div>
                </div>
              </a>
            </div>
             @endif
            @if ($restaurant->id == 3)
            <div class="featured-imagebox featured-imagebox-gallery">
                <a href="{{ asset('assets/img/culumpio.jpg')}}" data-fancybox="gallery">
                <div class="featured-link">
                    <div class="featured-thumbnail">                                                
                        <img class="img-fluid" src="{{ asset('assets/img/culumpio.jpg')}}" alt="gallery-img" style="width:365px" height="354px">
                      </div>
                    <div class="featured-overlay"></div>
                </div>
              </a>
            </div>
            <div class="featured-imagebox featured-imagebox-gallery">
                <a href="{{ asset('assets/img/destacada2.jpg')}}" data-fancybox="gallery">
                <div class="featured-link">
                    <div class="featured-thumbnail">                                                
                        <img class="img-fluid" src="{{ asset('assets/img/destacada2.jpg')}}" alt="gallery-img" style="width:365px" height="354px">
                      </div>
                    <div class="featured-overlay"></div>
                </div>
              </a>
            </div>
            <div class="featured-imagebox featured-imagebox-gallery">
                <a href="{{ asset('assets/img/destacada6.jpg')}}" data-fancybox="gallery">
                <div class="featured-link">
                    <div class="featured-thumbnail">                                                
                        <img class="img-fluid" src="{{ asset('assets/img/destacada6.jpg')}}" alt="gallery-img" style="width:365px" height="354px">
                      </div>
                    <div class="featured-overlay"></div>
                </div>
              </a>
            </div>
            @endif
            @if ($restaurant->id == 4)
            <div class="featured-imagebox featured-imagebox-gallery">
                <a href="{{ asset('assets/img/Edestacada5')}}" data-fancybox="gallery">
                <div class="featured-link">
                    <div class="featured-thumbnail">                                                
                        <img class="img-fluid" src="{{ asset('assets/img/Edestacada5.jpg')}}" alt="gallery-img" style="width:365px" height="354px">
                      </div>
                    <div class="featured-overlay"></div>
                </div>
              </a>
            </div>
            <div class="featured-imagebox featured-imagebox-gallery">
                <a href="{{ asset('assets/img/Edestacada7.jpg')}}" data-fancybox="gallery">
                <div class="featured-link">
                    <div class="featured-thumbnail">                                                
                        <img class="img-fluid" src="{{ asset('assets/img/Edestacada7.jpg')}}" alt="gallery-img" style="width:365px" height="354px">
                      </div>
                    <div class="featured-overlay"></div>
                </div>
              </a>
            </div>
            @endif
           </div>
    </section>
    <!-- footer -->
    <footer class="three" style="background-image:url({{ asset('assets/img/patron-black.jpg') }})">
        <div class="container gap no-bottom">
            <div class="row">
                <div class="col-xl-8">
                    <div class="footer-text">
                        <a href="index.html">
                            <img alt="logo-white" src="{{ asset('assets/img/Logo_Blanco.png') }}" style="width: 190px;">
                        </a>
                        <p>En Santa Verónica, disfruta de una experiencia culinaria única con la frescura del mar en nuestros exquisitos mariscos, sabrosos filetes y divertidos menús infantiles. Además, ofrecemos un espacio ideal para eventos especiales junto al mar. Sumérgete en sabores frescos y auténticos que realzan la esencia misma de la playa.</p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="link-about Newsletter">
                        @foreach ($horarios as $h)
                            <h3 class="mt-0">Horario de Atención</h3>
                            <ul>
                                <li><span>{{ $h->dia }}</span><span class="ps-5">{{ $h->hora }}</span></li>
                                @if ($restaurant->id == 2)
                                    <li><span>Sabado - Domingo - Festivos:</span><span class="ps-5">7:30 a.m - 7:00
                                            p.m.</span></li>
                                @endif

                            </ul>
                        @endforeach
                    </div>
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
                                <a href="{{ $restaurant->telefono_rest }}"><span>{{ $restaurant->telefono_rest }}</span></a>
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
                                <a href="{{ $restaurant->correo_rest }}"><span>{{ $restaurant->correo_rest }}</span></a>
                            </div>
                        </li>
                        <li class="contact">
                            <i>
                                <svg height="512" viewBox="0 0 32 32" width="512"
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
                            </i>
                            <div>
                                <span>Ubicación</span>
                                <h6>{{ $restaurant->ubicacion_rest }}</h6>
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
                        <a href="#">Twitter</a>
                        <a href="#">Instagram</a>
                        <a href="#">Youtube</a>
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
