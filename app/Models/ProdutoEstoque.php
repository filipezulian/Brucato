<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProdutoEstoque extends Model
{
    use HasFactory;

    protected $table = 'produto_estoque';
    public $timestamps = false;
    
    protected $primaryKey = 'id';
    protected $fillable = ['id_estoque', 'id_produto', 'quantidade_produto'];
    
    public function produto()
    {
        return $this->belongsTo('App\Models\Produto', 'id_produto');
    }
    
    public function estoque()
    {
        return $this->belongsTo('App\Models\Estoque', 'id_estoque');
    }
}
