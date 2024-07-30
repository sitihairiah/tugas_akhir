<x-app>
    <div class="row mt-5">
                       
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">TAMBAH DATA BERITA</h4>
                    
                </div>
                <div class="card-body">                                    
                    <div class="general-label">
                        <form action="{{ url('super-admin/berita') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Judul Berita </label>
                                <div class="col-sm-10">
                                    <input type="text" name="judul" class="form-control" placeholder="Masukan Judul Berita">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Deskripsi Berita </label>
                                <div class="col-sm-10">
                                    <textarea name="deskripsi" class="summernote"></textarea>
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
</x-app>