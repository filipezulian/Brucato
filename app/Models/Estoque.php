<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    use HasFactory;

    
    protected $table = 'estoque';
    protected $primaryKey = 'id_estoque';

    protected $fillable = [
        'CEP', 
        'quantidade', 
        'nome_local', 
        'id_produto'
       
    ];

    public function produto()
    {
        return $this->belongsTo(produto::class);
    }

    //fazer relção com pedido - pediu, baixa do estoque 
    //relação com transportadora - selecionar cep mais proximo 



}


