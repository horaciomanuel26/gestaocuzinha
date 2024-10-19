<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prato extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'vc_nome',
        'vc_igredientes',
        'dt_data',
    ];

    protected $dates = ['deleted_at'];
}