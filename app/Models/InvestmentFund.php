<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentFund extends Model
{
    use HasFactory;

    const TYPES = [
        'Tijolo',
        'Papel',
        'Indefinido',
        'Híbrido',
    ];

    const SEGMENTS = [
        'Logística',
        'Híbrido',
        'Shoppings',
        'Lajes Corporativas',
        'Outros',
        'Títulos e Val. Mob.',
    ];

    protected $fillable = [
        'name',
        'cnpj',
        'code',
        'type',
        'segment',
        'fund_manager_id',
    ];
}
