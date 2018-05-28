<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubKriteria extends Model
{
    public $timestamps = false;

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'id_kriteria');
    }
}
