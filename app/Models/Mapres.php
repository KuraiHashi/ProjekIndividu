<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapres extends Model
{
    use HasFactory;

    protected $table = 'form_mapres';

    protected $fillable = [
        'nama',
        'universitas',
        'fakultas',
        'jenis_lomba',
        'tingkat_lomba',
    ];
}
