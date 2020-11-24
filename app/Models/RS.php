<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RS extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'email',
        'province',
        'city',
        'address',
    ];
}
