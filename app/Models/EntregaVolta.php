<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EntregaVolta extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'vc_responsavel',
        'it_marmitas',
        'dt_data',
        'tm_hora',
        'it_id_turno',
    ];

    protected $dates = ['deleted_at'];
}