<x-base>
   
    <div class="section bg-primary p-t-25 p-b-25 cta-section-1 cta-section-2">
        <div class="container">
            <div class="block-left">
                <h3 class="title">Data Berita Terbaru</h3> 
            </div>
            <div class="block-right">
                
            </div>
        </div>
    </div>
    <div class="section bg-white p-t-70 p-b-40">
        <div class="container">
            <div class="row">
                @foreach ($list_berita as $berita)
                <div class="col-md-4 col-sm-6">
                    <div class="image-card image-card-1 dark">
                        <div class="image">
                            <a href="{{ url("berita/$berita->id") }}">
                                <img src="{{ url("public/$berita->poto") }}" style="object-fit: cover; position: static; width: 90%; height: 200px;">
                            </a>
                        </div>
                        <h3 class="title">
                            <a href="{{ url("berita/$berita->id") }}">{{ $berita->judul }}</a>
                        </h3>
                        <div class="content">
                            
                        </div>
                        
                    </div>
                </div>
                @endforeach               
            </div>
        </div>
    </div>
   
    
</x-base>