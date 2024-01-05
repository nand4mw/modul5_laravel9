<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class OperatorModel extends Authenticatable
{
    use HasFactory;
    protected $table = 'operator_sistem';
    protected $guarded = [];

    public static function getAllOperator()
    {
        $query = DB::table('operator_sistem');
        return $query;
    }
}
