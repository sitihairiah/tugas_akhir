<x-base>
    <section>
        <div class="slider-1">
            <div class="rev_slider" id="js-slider" style="display:none;">
                <ul>
                    @foreach ($list_slide as $slide)
                        <li class="item-1" data-transition="fade">

                            <img class="rev-slidebg" src="{{ url("public/$slide->poto") }}" alt="#" />

                            <div class="tp-caption tp-resizeme caption-3"
                                data-frames="[{&quot;delay&quot;:2000,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                data-responsive="on" data-x="['center']" data-hoffset="['0', '0', '0', '0']"
                                data-y="['center']" data-voffset="['100', '100', '100', '140']"
                                data-width="['770', '770', '770', '480']">

                                <a class="au-btn au-btn-black m-l-5">
                                    <h4> {{ $slide->title }}</h4>
                                </a>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </section>

    <div class="section bg-white p-t-70 p-b-40">

    </div>
    <section class="section p-t-70 p-b-30 bg-white">
        <div class="container">
            <div class="relative">
                <div class="heading-section heading-section-1 dark">
                    <h3>Data Lelang Terbaru</h3>
                </div>
                <div class="owl-carousel dark nav-style-1" data-carousel-margin="45" data-carousel-nav="true" data-carousel-loop="true">
                    @foreach ($list_lelang as $lelang)
                    <div class="image-card image-card-4">
                        <div class="image">
                            <a href="{{ url("lelang/$lelang->id") }}">
                                <img src="{{ url("public/$lelang->poto") }}" style="object-fit: cover; position: static; width: 100%; height: 250px;">
                            </a>
                        </div>
                        <div class="date">
                            <strong>

                                <span style="font-size: 150%">{{ date("d-M-Y", strtotime($lelang->tanggal_lelang)) }}</span>
                            </strong>
                        </div>
                        <h3 class="title">
                            <a href="{{ url("lelang/$lelang->id") }}">{{ $lelang->nama }}</a>
                        </h3>
                       
                        <div class="link">
                           
                        </div>
                    </div>
                    
                    @endforeach
                  
                </div>
            </div>
        </div>
    </section>
    <div class="section bg-primary p-t-25 p-b-25 cta-section-1 cta-section-2">
        <div class="container">
            <div class="block-left">
                
            </div>
            <div class="block-right">
                
            </div>
        </div>
    </div>
    <br>
    <div class="section p-t-0 p-b-70 bg-white">
        <div class="container">
            <div class="heading-section heading-section-1 dark">
                <h3>Data Berita Terbaru</h3>
            </div>
            <div class="row">
                @foreach ($list_berita as $berita)
                <div class="col-md-6">
                    <div class="image-card image-card-4">
                        <div class="image">
                            <a href="{{ url("berita/$berita->id") }}">
                                <img src="{{ url("public/$berita->poto") }}" style="object-fit: cover; position: static; width: 100%; height: 250px;">
                            </a>
                        </div>
                        <div class="date">
                            <span>{{ date("d-M-Y", strtotime($berita->created_at)) }}</span>
                        </div>
                        <h3 class="title" style="font-size: 100%">
                            <a href="{{ url("berita/$berita->id") }}">{{ $berita->judul }}</a>
                        </h3>
                        
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
 
   
</x-base>
