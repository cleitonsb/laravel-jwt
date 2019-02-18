<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etinia extends Model
{
    protected $table = 'tb_etinia';

    protected $primaryKey = 'co_etinia';

    public $timestamps = false;

    protected $hidden = [
        'deleted_at'
    ];
}
