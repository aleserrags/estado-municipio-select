<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';

    public function municipios()
    {
        return $this->hasMany(Municipio::class, 'id_estado_fk', 'id');
    }
}
