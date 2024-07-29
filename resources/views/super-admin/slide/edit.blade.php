<x-app>
    <div class="row mt-5">
                       
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <x-button.back-button url="{{ url('super-admin/slide') }}" />
                    <h4 class="card-title">
                        <h2 class="text-center">EDIT DATA SLIDE</h2>
                    </h4>
                    
                </div>
                <div class="card-body">                                    
                    <div class="general-label">
                        <form action="{{ url('super-admin/slide', $slide->id) }}" method="POST" enctype="multipart/form-data">
                            @method("PUT")
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Title Slide </label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" value="{{ $slide->title }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Poto </label>
                                <div class="col-md-5">
                                    <img src="{{ url("public/$slide->poto") }}" style="width: 50%">
                                </div>
                                <div class="col-sm-5">
                                    <input type="file" name="poto" class="form-control" accept=".jpg, .png, .jpeg" value="{{ $slide->poto }}">
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