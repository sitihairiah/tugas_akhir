<x-base>
   
    <div class="section bg-primary p-t-25 p-b-25 cta-section-1 cta-section-2">
        <div class="container">
            <div class="block-left">
                <h3 class="title">Detail Data Lelang Terbaru Di {{ $jenis_upc->nama_upc }}</h3> 
            </div>
            <div class="block-right">
                
            </div>
        </div>
    </div>
    <div class="section p-t-0 p-b-70 bg-white m-t-120">
        <div class="container">
            <div class="row">
                @foreach ($list_lelang as $lelang)
                <div class="col-md-4">
                    <div class="image-card image-card-4 m-b-100">
                        <div class="image">
                            
                                <img src="{{ url("public/$lelang->poto") }}" style="object-fit: cover; position: static; width: 100%; height: 250px;">
                            
                        </div>
                        <div class="date">
                            <span>{{ date("d-M-Y", strtotime($lelang->tanggal_lelang)) }}</span>
                        </div>
                        <h3 class="title">
                           {{ $lelang->nama }}
                        </h3>
                        <div class="content">
                            
                        </div>
                        <div class="link">
                            <a href="{{ url("lelang/$lelang->id") }}">Selengkapnya ..........</a>
                        </div>
                    </div>
                </div>
                
                @endforeach
               
            </div>
        </div>
    </div>
</x-base>