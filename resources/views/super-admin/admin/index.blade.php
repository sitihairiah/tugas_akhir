<x-app>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('super-admin/admin/create') }}" class="btn btn-primary float-right mb-10"> <span
                            class="fa fa-plus"></span> Tambah Data</a>
                    <h4 class="card-title">DATA ADMIN</h4>

                </div><!--end card-header-->
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama UPC Pegadaian</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th style="width: 40%">Poto</th>

                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($list_admin as $admin)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <x-button.info-button url="super-admin/admin" id="{{ $admin->id }}" />
                                            <x-button.edit-button url="super-admin/admin" id="{{ $admin->id }}" />
                                            <x-button.delete-button url="super-admin/admin" id="{{ $admin->id }}" />
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $admin->upcpegadaian->nama_upc }}</td>
                                    <td class="text-center">{{ $admin->nama }}</td>
                                    <td class="text-center">{{ $admin->username }}</td>
                                    <td class="text-center">
                                        <img src="{{ url("public/$admin->poto") }}" class="img" style="width: 30%">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app>
