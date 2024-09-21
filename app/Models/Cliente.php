<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'vc_nome',
        'vc_telefone',
        'vc_email',
        'vc_nif',
        'it_valor_mensal',
    ];

    protected $dates = ['deleted_at'];
}
