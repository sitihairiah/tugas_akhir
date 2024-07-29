<x-app>
    <div class="row mt-5">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">TAMBAH DATA LELANG</h4>

                </div>
                <div class="card-body">
                    <div class="general-label">
                        <form action="{{ url('super-admin/lelang') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis UPC </label>
                                <div class="col-sm-10">
                                    <select name="id_jenis_upc" class="form-control" required>
                                        <option value=""> Pilih Jenis UPC</option>
                                        @foreach ($list_jenis_upc as $jenis_upc)
                                            <option value="{{ $jenis_upc->id }}"> {{ $jenis_upc->nama_upc }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Lelang </label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control" required
                                        placeholder="Masukan Nama lelang">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Lelang </label>
                                <div class="col-sm-10">
                                    <input type="date" name="tanggal_lelang" class="form-control" required
                                        placeholder="Masukan Tanggal lelang">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Deskripsi Lelang </label>
                                <div class="col-sm-10">
                                    <textarea name="deskripsi" class="summernote"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Poto </label>
                                <div class="col-sm-10">
                                    <input type="file" name="poto" class="form-control" required
                                        accept=".jpg, .png, .jpeg">
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
