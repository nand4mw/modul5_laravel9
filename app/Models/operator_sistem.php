<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class operator_sistem extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_operator',
        'email_operator',
        'password_generator'
    ];
}

