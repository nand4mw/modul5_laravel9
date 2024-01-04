<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MahasiswaModel extends Model
{
    use HasFactory;
    // konfigurasi nama tabel
    protected $table = "data_mahasiswa";
    // pemanggilan semua field yang ada  di tabel
    protected $guarded = [];

    public static function getAllMahasiswa()
    {
        $query = DB::table('data_mahasiswa')
            ->join('data_jurusan', 'data_mahasiswa.id_jurusan', '=', 'data_jurusan.id_jurusan');
        return $query;
    }
}
