<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportadora extends Model
{
    use HasFactory;
    
    protected $table = 'transportadora';

    protected $fillable = [
        'nome_empresa',
        'telefone',
        'nome_responsavel',
        'preco_por_km',
        'cnpj',
        'cep',
    ];

    public $timestamps = false;
}
