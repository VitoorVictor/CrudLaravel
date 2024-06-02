<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';

    use HasFactory;

    protected $fillable = [
        'razao_social',
        'cnpj',
        'email',
    ];

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
