<x-app>

    <div class="row mt-5">
        <div class="col-md-3"></div>
        <div class="col-md-6">


            <div class="card card-primary card-outline">
                <div class="card-header">
                    <x-button.back-button url="{{ url('super-admin/x') }}" />
                    <a href="{{ url("super-admin/x/$super_admin->id") }}/edit" class="btn btn-primary btn-sm float-right"><span
                            class="fa fa-edit"></span> Edit Data</a>
                </div>
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid circle" src="{{ url("public/$super_admin->poto") }}"
                            style="width:40%">
                    </div>

                    <h3 class="profile-username text-center">
                        {{ $super_admin->nama }}
                    </h3>

                    <p class="text-muted text-center">
                        {{ $super_admin->username }}
                    </p>

                    <a href="{{ url("super-admin/admin/$super_admin->id") }}/edit" class="btn btn-primary btn-block"><b><span
                                class="fa fa-edit"></span> Edit Data</b></a>
                </div>

            </div>



            {{-- <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>
                    
                    <div class="card-body">
                        

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                        <p class="text-muted">{{ $super_admin->alamat }}</p>

                        <hr>

                        <strong><i class="fas fa-phone-alt mr-1"></i> No Telp</strong>

                        <p class="text-muted">
                            <span class="tag tag-danger">{{ $super_admin->no_telp }}</span>
                        </p>
                    </div>
                    
                </div> --}}

        </div>
        <div class="col-md-3"></div>
    </div>

</x-app>
