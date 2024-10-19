<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turno extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'vc_nome',
        'vc_telefone',
        'it_id_grupo',
    ];

    protected $dates = ['deleted_at'];
}