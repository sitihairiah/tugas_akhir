<x-app>
    <div class="row mt-5">
                       
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-button.back-button url="{{ url('super-admin/admin') }}" />
                    <h4 class="card-title">
                        <h2 class="text-center">EDIT DATA ADMIN</h2>
                    </h4>
                    
                </div>
                <div class="card-body">                                    
                    <div class="general-label">
                        <form action="{{ url('super-admin/admin', $admin->id) }}" method="POST" enctype="multipart/form-data">
                            @method("PUT")
                            @csrf

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama UPC Pegadaian </label>
                                <div class="col-sm-10">
                                    <select name="id_jenis_upc" class="form-control">
                                        @foreach ($list_jenis_upc as $jenis_upc)
                                            <option @if ($jenis_upc->id == $admin->id_jenis_upc) selected @endif
                                                value="{{ $jenis_upc->id }}">
                                                {{ $jenis_upc->nama_upc }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama </label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control" value="{{ $admin->nama }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Username </label>
                                <div class="col-sm-10">
                                    <input type="text" name="username" class="form-control" value="{{ $admin->username }}">
                                </div>
                            </div>
                                
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Poto </label>
                                <div class="col-md-5">
                                    <img src="{{ url("public/$admin->poto") }}" style="width: 50%">
                                </div>
                                <div class="col-sm-5">
                                    <input type="file" name="poto" class="form-control" accept=".jpg, .png, .jpeg" value="{{ $admin->poto }}">
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