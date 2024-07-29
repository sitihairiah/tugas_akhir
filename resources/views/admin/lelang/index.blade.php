<x-admin>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/lelang/create') }}" class="btn btn-primary float-right mb-10"> <span class="fa fa-plus"></span> Tambah Data</a>
                    <h4 class="card-title">DATA LELANG</h4>

                </div><!--end card-header-->
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama Lelang</th>
                                <th>Tanggal Lelang</th>
                                <th style="width: 50%" >Poto</th>
                                
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($list_lelang as $lelang)
                            @if (Auth::guard('admin')->user()->id_jenis_upc == $lelang->id_jenis_upc)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <x-button.info-button url="admin/lelang" id="{{ $lelang->id }}" />
                                        <x-button.edit-button url="admin/lelang" id="{{ $lelang->id }}" />
                                        <x-button.delete-button url="admin/lelang" id="{{ $lelang->id }}" />
                                        
                                    </div>
                                </td>
                                <td class="text-center">{{ $lelang->nama }}</td>
                                <td class="text-center">{{date("d-M-Y", strtotime($lelang->tanggal_lelang)) }}</td>
                                <td class="text-center">
                                    <img src="{{ url("public/$lelang->poto") }}" class="img" style="width: 30%">
                                </td>
                               
                            </tr>
                            @endif
                          
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin>