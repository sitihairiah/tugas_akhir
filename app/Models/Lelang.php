<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;

class Lelang extends Model
{
    protected $table ="lelang";

    function handleUploadPoto()
    {
        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "lelang";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;
            $this->save();

        }
    }

    public function jenisUpc()
    {
        return $this->belongsTo(JenisUpc::class, 'id_jenis_upc');
    }
}
