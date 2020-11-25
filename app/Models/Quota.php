<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quota extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_rs',
        'nama_rs',
        'quota',
        'filled_quota',
    ];
    // id_rs nama_rs quota

}
