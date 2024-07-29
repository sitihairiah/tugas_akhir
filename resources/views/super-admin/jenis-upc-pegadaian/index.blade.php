<x-app>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('super-admin/jenis-upc-pegadaian/create') }}" class="btn btn-primary float-right mb-10"> <span class="fa fa-plus"></span> Tambah Data</a>
                    <h4 class="card-title">DATA JENIS UPC</h4>

                </div><!--end card-header-->
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama UPC</th>
                                <th>Alamat</th>
                                <th>No Telp</th>
                                
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($list_jenis_upc_pegadaian as $jenis_upc_pegadaian)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <x-button.edit-button url="super-admin/jenis-upc-pegadaian" id="{{ $jenis_upc_pegadaian->id }}" />
                                        <x-button.delete-button url="super-admin/jenis-upc-pegadaian" id="{{ $jenis_upc_pegadaian->id }}" />
                                    </div>
                                </td>
                                <td class="text-center">{{ $jenis_upc_pegadaian->nama_upc }}</td>
                                <td class="text-center">{{ $jenis_upc_pegadaian->alamat }}</td>
                                <td class="text-center">{{ $jenis_upc_pegadaian->no_telp }}</td>
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app>