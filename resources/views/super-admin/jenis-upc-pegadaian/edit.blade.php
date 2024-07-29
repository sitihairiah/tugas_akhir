<x-app>
    <div class="row mt-5">
                       
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-button.back-button url="{{ url('super-admin/jenis-upc-pegadaian') }}" />
                    <h4 class="card-title">
                        <h2 class="text-center">EDIT DATA JENIS UPC PEGADAIAN</h2>
                    </h4>
                    
                </div>
                <div class="card-body">                                    
                    <div class="general-label">
                        <form action="{{ url('super-admin/jenis-upc-pegadaian', $jenis_upc_pegadaian->id) }}" method="POST" enctype="multipart/form-data">
                            @method("PUT")
                            @csrf
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama UPC Pegadaian </label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_upc" class="form-control" value="{{$jenis_upc_pegadaian->nama_upc}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat UPC Pegadaian </label>
                                <div class="col-sm-10">
                                    <input type="text" name="alamat" class="form-control" value="{{$jenis_upc_pegadaian->alamat}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No Telp </label>
                                <div class="col-sm-10">
                                    <input type="text" name="no_telp" class="form-control" value="{{$jenis_upc_pegadaian->no_telp}}">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-10 ml-auto">
                                    <button type="submit" class="btn btn-primary float-right">
                                        <span class="fa fa-save"></span> SIMPAN
                                    </button>
                                    
                                </div>
                            </div> 
                        </form>           
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>