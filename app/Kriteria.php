<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    public $timestamps = false;


    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id_kriteria');
    }

    public function sub_kriteria()
    {
        return $this->hasMany(SubKriteria::class, 'id_kriteria');
    }
}
