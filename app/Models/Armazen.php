<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armazen extends Model
{
    use HasFactory;

    protected $table = 'armazen';
    public $timestamps = false;
    
    protected $fillable = [
        'cep',
    ];

    public function estoques()
    {
        return $this->hasMany(Estoque::class, 'id_local');
    }
}
