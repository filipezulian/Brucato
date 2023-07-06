<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodoPagamento extends Model
{
    use HasFactory;

    protected $table = 'metodo_pagamento';
    public $timestamps = false;

    protected $fillable = [
        'id_usuario',
        'numero_cartao',
        'nome_cartao',
        'validade_cartao',
        'cvv_cartao',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }
}
