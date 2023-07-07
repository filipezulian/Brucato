<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnderecoUsuario extends Model
{

    use HasFactory;
    
    protected $table = 'endereco_usuario';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id_usuario',
        'endereco',
        'cep'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
