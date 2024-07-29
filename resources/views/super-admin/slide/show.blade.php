<x-app>

    <div class="row mt-5">
        <div class="col-md-3"></div>
        <div class="col-md-6">


            <div class="card card-primary card-outline">
                <div class="card-header">
                    <x-button.back-button url="{{ url('super-admin/slide') }}" />
                    <a href="{{ url("super-admin/slide/$slide->id") }}/edit" class="btn btn-primary btn-sm float-right"><span
                            class="fa fa-edit"></span> Edit Data</a>
                </div>
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid circle" src="{{ url("public/$slide->poto") }}"
                            style="width:80%">
                    </div>

                    <h3 class="profile-username text-center">
                        {{ $slide->title }}
                    </h3>

                  

                </div>

            </div>



            

        </div>
        <div class="col-md-3"></div>
    </div>

</x-app>
