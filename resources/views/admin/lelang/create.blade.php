<x-admin>
    <div class="row mt-5">
                       
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">TAMBAH DATA LELANG</h4>
                    
                </div>
                <div class="card-body">                                    
                    <div class="general-label">
                        <form action="{{ url('admin/lelang') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="id_jenis_upc" value="{{ Auth::guard('admin')->user()->id_jenis_upc }}" hidden>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Lelang </label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lelang">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Harga Barang </label>
                                <div class="col-sm-10">
                                    <input type="text" name="harga" class="form-control" placeholder="Masukan Harga Barang">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Lelang </label>
                                <div class="col-sm-10">
                                    <input type="date" name="tanggal_lelang" class="form-control" placeholder="Masukan Tanggal lelang">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Deskripsi Lelang </label>
                                <div class="col-sm-10">
                                    <textarea name="deskripsi" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Poto </label>
                                <div class="col-sm-10">
                                    <input type="file" name="poto" class="form-control" accept=".jpg, .png, .jpeg">
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
</x-admin>