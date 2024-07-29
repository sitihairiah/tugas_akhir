<?php

namespace App\Models;

use App\Models\Model;

class JenisUpc extends Model
{
    protected $table="jenis_upc_pegadaian";

    public function Admin()
    {
        return $this->belongsTo(Admin::class, 'id');
    }

    public function Lelang()
    {
        return $this->belongsTo(Lelang::class, 'id');
    }
}
