<x-app>
    <div class="row mt-5">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-button.back-button url="{{ url('super-admin/lelang') }}" />
                    <h4 class="card-title">
                        <h2 class="text-center">EDIT DATA LELANG</h2>
                    </h4>

                </div>
                <div class="card-body">
                    <div class="general-label">
                        <form action="{{ url('super-admin/lelang', $lelang->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis UPC </label>
                                <div class="col-sm-10">
                                    <select name="id_jenis_upc" class="form-control">
                                        @foreach ($list_jenis_upc as $jenis_upc)
                                            <option @if ($jenis_upc->id == $lelang->id_jenis_upc) selected @endif
                                                value="{{ $jenis_upc->id }}">
                                                {{ $jenis_upc->nama_upc }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Lelang </label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control"
                                        value="{{ $lelang->nama }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Harga Barang </label>
                                <div class="col-sm-10">
                                    <input type="text" name="harga" class="form-control"
                                        value="{{ $lelang->harga }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Lelang </label>
                                <div class="col-sm-10">
                                    <input type="date" name="tanggal_lelang" class="form-control"
                                        value="{{ $lelang->tanggal_lelang }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Deskripsi </label>
                                <div class="col-sm-10">
                                    <textarea name="deskripsi" class="form-control">{{ $lelang->deskripsi }}</textarea>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Poto </label>
                                <div class="col-md-5">
                                    <img src="{{ url("public/$lelang->poto") }}" style="width: 50%">
                                </div>
                                <div class="col-sm-5">
                                    <input type="file" name="poto" class="form-control" accept=".jpg, .png, .jpeg"
                                        value="{{ $lelang->poto }}">
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
