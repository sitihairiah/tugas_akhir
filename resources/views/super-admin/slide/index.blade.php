<x-app>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('super-admin/slide/create') }}" class="btn btn-primary float-right mb-10"> <span class="fa fa-plus"></span> Tambah Data</a>
                    <h4 class="card-title">DATA SLIDE</h4>

                </div><!--end card-header-->
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Poto</th>
                                
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($list_slide as $slide)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <x-button.info-button url="super-admin/slide" id="{{ $slide->id }}" />
                                        <x-button.edit-button url="super-admin/slide" id="{{ $slide->id }}" />
                                        <x-button.delete-button url="super-admin/slide" id="{{ $slide->id }}" />
                                        
                                    </div>
                                </td>
                                <td class="text-center">{{ $slide->title }}</td>
                                <td class="text-center">
                                    <img src="{{ url("public/$slide->poto") }}" class="img" style="width: 30%">
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