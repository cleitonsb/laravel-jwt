<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Bairro extends Model
{
    use SoftDeletes;
    use Notifiable;

    protected $table = 'tb_bairro';

    protected $primaryKey = 'co_bairro';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_bairro',
        'nome',
    ];

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'co_bairro', 'co_bairro');
    }
}
