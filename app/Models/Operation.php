<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $fillable = [
        'stock_id',
        'trading_note_id',
        'unit_price',
        'quantity',
        'type',
    ];
}
