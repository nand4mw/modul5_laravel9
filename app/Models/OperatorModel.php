<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class OperatorModel extends Authenticatable
{
    use HasFactory;

    public $table = 'operator_sistem';

    protected $fillable = [
        'nama_operator',
        'email_operator',
        'password'
    ];

}
