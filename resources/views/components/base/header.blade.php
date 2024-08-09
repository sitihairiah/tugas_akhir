  <header>
        <!-- header / start-->
        <div class="hidden-tablet-landscape-up">
            <div class="header header-mobile-1">
                <div class="top-header">
                    <div class="container-fluid">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ url('public/base') }}/logo-web.png" alt="Consulting" />
                            </a>
                        </div>
                        <div class="search-widget search-widget-1">
                            <div class="icon-search">
                                <i class="icon_search"></i>
                            </div>
                            <input class="animated" type="text" placeholder="Search" />
                        </div>
                        <button class="hamburger hamburger--spin hidden-tablet-landscape-up" id="toggle-icon">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="au-navbar-mobile navbar-mobile-1">
                    <ul class="au-navbar-menu">
                        <ul class="au-navbar-menu">
                            <li><a href="{{ url('/') }}">Dashboard</a></li>
                            <li><a href="{{ url('profil') }}"> Profil</a></li>
                            <li><a href="{{ url('lelang') }}"> Lelang</a></li>
                            <li><a href="{{ url('berita') }}"> Berita</a></li>
                            <li><a href="{{ url('contact') }}"> Contact</a></li>
                   
                        </ul>
                    </ul>
                </div>
                <div class="container-fluid">
                   
                </div>
            </div>
        </div>
        <div class="hidden-tablet-landscape">
           
            <div class="header header-1">
                <div class="container">
                    <div class="block-left">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ url('public/base') }}/logo-web.png" alt="Consulting" />
                            </a>
                        </div>
                    </div>
                    <div class="block-right">
                        <div class="contact-widget contact-widget-1">
                            <div class="icon-box icon-box-1">
                                <div class="icon">
                                    <i class="icon_phone"></i>
                                </div>
                                <div class="content">
                                    <p>(0534) 35454</p>
                                    <p>pegadaian@gmail.com</p>
                                </div>
                            </div>
                            <div class="icon-box icon-box-1">
                                <div class="icon">
                                    <i class="icon_pin"></i>
                                </div>
                                <div class="content">
                                    <p>Sampit, Kec. Delta Pawan, Kabupaten Ketapang</p>
                                    <p>  Kalimantan Barat 78811</p>
                                </div>
                            </div>
                            <div class="icon-box icon-box-1">
                                <div class="icon">
                                    <i class="icon_clock"></i>
                                </div>
                                <div class="content">
                                    <p>Senin - Sabtu </p>
                                    <p>08.00 – 15.30</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-navbar-1 bg-grey hidden-tablet-landscape" id="js-navbar-fixed">
            <div class="container">
                <div class="block-left">
                    <div class="logo-mobile">
                        <a href="{{ url('/') }}">
                            <img src="{{ url('public/base') }}/logo-web.png" alt="Consulting">
                        </a>
                    </div>
                    <nav>
                        <div class="au-navbar navbar-1">
                            <ul class="au-navbar-menu">
                                <li><a href="{{ url('/') }}">Dashboard</a></li>
                                <li><a href="{{ url('profil') }}"> Profil</a></li>
                                <li><a href="{{ url('lelang') }}"> Lelang</a></li>
                                <li><a href="{{ url('berita') }}"> Berita</a></li>
                                <li><a href="{{ url('contact') }}"> Contact</a></li>
                                
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="block-right">
                    <div class="search-widget search-widget-1">
                        
                    </div>
                </div>
            </div>
        </div>
    </header>