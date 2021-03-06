<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;
    protected $fillable = ['valor', ['cartao' => 'titular', 'numero', 'data_expiracao', 'bandeira', 'cvv']];
}
