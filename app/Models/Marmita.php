<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marmita extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'it_quantidade',
        'it_investido',
        'dt_data',
    ];

    protected $dates = ['deleted_at'];
}