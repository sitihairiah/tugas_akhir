<x-admin>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/berita/create') }}" class="btn btn-primary float-right mb-10"> <span class="fa fa-plus"></span> Tambah Data</a>
                    <h4 class="card-title">DATA BERITA</h4>

                </div><!--end card-header-->
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Judul</th>
                                <th>Poto</th>
                                
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($list_berita as $berita)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <x-button.info-button url="admin/berita" id="{{ $berita->id }}" />
                                        <x-button.edit-button url="admin/berita" id="{{ $berita->id }}" />
                                        <x-button.delete-button url="admin/berita" id="{{ $berita->id }}" />
                                        
                                        @if($berita->status == 1)
                                        <form action="{{url('admin/berita/arsip', $berita->id)}}" method="post">
                                            @method("PUT")
                                            @csrf
                                            <button class="btn btn-primary"><span class="fa fa-archive"></span> Arsip</button>
                                        </form>
                                        @endif
                                        
                                        @if($berita->status == 2)
                                        <form action="{{url('admin/berita/publis', $berita->id)}}" method="post">
                                            @method("PUT")
                                            @csrf
                                            
                                            <button class="btn btn-primary"><span class="fa fa-upload"></span> Publis</button>
                                        </form>
                                        @endif
                                    </div>
                                </td>
                                <td class="text-center">{{ $berita->judul }}</td>
                                <td class="text-center">
                                    <img src="{{ url("public/$berita->poto") }}" class="img" style="width: 50%">
                                </td>
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin>