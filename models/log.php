<?php 

namespace models;

use Illuminate\Database\Eloquent\Model;


class log extends Model
{
    protected $table = 'log';
    protected $fillable = ['id_usuario','ip','ingreso','salida'];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }

}   