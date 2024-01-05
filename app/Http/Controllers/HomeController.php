<?php

namespace App\Http\Controllers;

use App\Models\JurusanModel;
use App\Models\OperatorModel;
use App\Models\MahasiswaModel;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];

        $user = Auth::user();
        return view('home', $data, compact('user'));
    }

    public function dashboard()
    {
        $total_admin = OperatorModel::count();
        $total_mahasiswa = MahasiswaModel::count();
        $total_jurusan = JurusanModel::count();
        $total_laki = MahasiswaModel::where('jenis_kelamin', 'L')->count();
        $total_perempuan = MahasiswaModel::where('jenis_kelamin', 'P')->count();
        $nama_mhs = JurusanModel::all();

        $array = [];

        foreach ($nama_mhs as $jurusan) {
            $jumlah_mahasiswa_jurusan = MahasiswaModel::where('id_jurusan', $jurusan->id_jurusan)->count();

            $array[] = [
                'nama_jurusan' => $jurusan->nama_jurusan,
                'jumlah_jurusan' => $jumlah_mahasiswa_jurusan
            ];
        }

        return view('home', compact(
            'total_mahasiswa',
            'total_jurusan',
            'total_admin',
            'total_laki',
            'total_perempuan',
            'nama_mhs',
            'array'
        ));
    }
}
