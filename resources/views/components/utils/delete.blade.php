<form action="{{$url}}" method="post" class="form-inline" onclick="return confirm('Yakin Akan Menghapus Data Ini')">
    @csrf
    @method("delete")
    <button class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
</form>