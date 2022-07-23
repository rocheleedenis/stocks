<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradingNote extends Model
{
    use HasFactory;

    public $fillable = [
        'date',
        'taxes',
        'stockbroker_id',
    ];
}
