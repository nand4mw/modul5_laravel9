<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JurusanModel extends Model
{
    use HasFactory;
    protected $table = 'data_jurusan';
    protected $guarded = [];

    public static function getAllJurusan()
    {
        $query = DB::table('data_jurusan')
            ->select('data_jurusan.id_jurusan', 'data_jurusan.nama_jurusan', DB::raw('COUNT(data_mahasiswa.id_mahasiswa) as jumlah_mahasiswa'))
            ->leftJoin('data_mahasiswa', 'data_jurusan.id_jurusan', '=', 'data_mahasiswa.id_jurusan')
            ->groupBy('data_jurusan.id_jurusan', 'data_jurusan.nama_jurusan');
        return $query;
    }
}
