<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    
    protected $table = 'produto';
    protected $primaryKey = 'id_produto';
    //public $timestamps = false;
    
    protected $fillable = [
        'nome',
        'descricao',
        'peso',
        'altura',
        'largura',
        'comprimento',
        'preco',
        'imagem',
    ];

    public function estoques()
    {
        return $this->belongsTo(Estoque::class);
    }
}
