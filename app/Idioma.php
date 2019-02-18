<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $table = 'tb_idioma';

    protected $primaryKey = 'co_idioma';

    public $timestamps = false;

    protected $hidden = [
        'deleted_at'
    ];
}
