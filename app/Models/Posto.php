<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posto extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'vc_nome',
        'vc_telefone',
        'vc_email',
        'vc_endereco',
        'it_id_cliete',
    ];

    protected $dates = ['deleted_at'];
}