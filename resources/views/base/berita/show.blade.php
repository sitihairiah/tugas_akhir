<x-base>
    <div class="section bg-primary p-t-25 p-b-25 cta-section-1 cta-section-2">
        <div class="container">
            <div class="block-left">
                <h3 class="title"><a href="{{ url("/") }}">Dashboard </a>/ Detail Berita</h3> 
            </div>
            <div class="block-right">
                
            </div>
        </div>
    </div>
    <br>
    <div class="page-content p-b-70">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <section class="section post-section-2 p-r-40">
                        <div class="post-header">
                            <h3 class="text-block text-black text-bold text-med-large m-b-25">
                                {{ $berita->judul }}
                            </h3>
                            <div class="post-info m-b-30">
                                <p class="text-block">
                                   
                                    <span>|</span>{{ date("d-M-Y", strtotime($berita->created_at)) }}
                                    <span>|</span>
                                   
                                </p>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="plyr-video m-b-50">
                                <img src="{{ url("public/$berita->poto") }}" style="object-fit: cover; position: static; width: 100%;">
                            </div>
                            <p class="text-block m-b-30">
                                {!! nl2br($berita->deskripsi) !!}
                            </p>
                            
                        </div>
                    </section>
                </div>
                <div class="col-md-3">
                    
                    <h4 class="text-block text-bold text-med m-t-90">Berita Terbaru</h4>
                    @foreach ($list_berita as $berita)
                    <div class="image-card image-card-9 m-t-20">
                        <div class="image">
                            <a href="{{ url("berita/$berita->id") }}">
                                <img src="{{ url("public/$berita->poto") }}" style="object-fit: cover; position: static; width: 100%;">
                            </a>
                        </div>
                        <div class="content">
                            <h3 class="title">
                                <a href="{{ url("berita/$berita->id") }}">{{ $berita->judul }}</a>
                            </h3>
                            <span class="subtitle">{{ date("d-M-Y", strtotime($berita->created_at)) }}</span>
                        </div>
                    </div>
                    
                    @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</x-base>