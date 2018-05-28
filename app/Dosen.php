<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{

    public $timestamps = false;

    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id_dosen');
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'id_kriteria');
    }
}
