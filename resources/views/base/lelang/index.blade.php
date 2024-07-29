<x-base>
   
    <div class="section bg-primary p-t-25 p-b-25 cta-section-1 cta-section-2">
        <div class="container">
            <div class="block-left">
                <h3 class="title">Data Lelang </h3> 
            </div>
            <div class="block-right">
                
            </div>
        </div>
    </div>
    <div class="section p-t-0 p-b-70 bg-white m-t-150">
        <div class="container">
            <div class="row">
                @foreach ($list_jenis_upc as $jenis_upc)
                <div class="col-md-4 col-sm-6">
                    <div class="icon-box icon-box-6">
                        <div class="icon">
                            <a href="{{ url("lelang/detail/$jenis_upc->id") }}">
                                <img src="{{ url('public/base') }}/images/icons/ic-services-01.png" />
                            </a>
                        </div>
                        <h3 class="title">
                            <a href="{{ url("lelang/detail/$jenis_upc->id") }}">{{ $jenis_upc->nama_upc }}</a>
                        </h3>
                        
                    </div>
                </div>
                
                @endforeach
               
            </div>
        </div>
    </div>
</x-base>