<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    use HasFactory;

    protected $table = 'lojas';
    protected $primarykey = 'id';

    protected $fillable = [
        'nome_fantasia',
        'cnpj',
        'email',
        'telefone',
        'endereco',
        'bairro',
        'estado'
    ];

}
