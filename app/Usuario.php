<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Usuario extends Authenticatable implements JWTSubject
{

    use Notifiable;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'tb_usuario';

    protected $primaryKey = 'co_usuario';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'email',
        'sexo',
        'co_bairro',
        'co_perfil',
        'fone',
        'password',
        'dt_nasc',
        'peso',
        'cartao',
        'altura',
        'horario',
        'viagem',
        'local',
        'atende',
        'anal',
        'oralsem',
        'beijo',
        'acessorios',
        'co_etinia',
        'descricao'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'deleted_at'
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->co_usuario;
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [
            'nome' => $this->nome,
            'email' => $this->email
        ];
    }

    public function bairro()
    {
        return $this->hasOne('App\Bairro', 'co_bairro', 'co_bairro');
    }

    public function idioma()
    {
        return $this->belongsToMany('App\Idioma', 'rl_usuario_idioma', 'co_usuario', 'co_idioma');
    }

    public function sexoAtende()
    {
        return $this->belongsToMany('App\SexoAtende', 'rl_usuario_sexo_atende', 'co_usuario', 'co_sexo_atende');
    }

}
