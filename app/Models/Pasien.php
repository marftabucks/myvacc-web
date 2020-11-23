<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'nik',
        'email',
        'selfie',
        'verified',
        'filled-form'
    ];
}
