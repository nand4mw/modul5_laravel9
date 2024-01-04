<?php

namespace App\Http\Controllers;

use App\Models\JurusanModel;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    //
    public function index()
    {
        $data = [
            'jurusan' => JurusanModel::getAllJurusan()->get(),
            'no' => 1,
            'title' => 'Jurusan'
        ];
        return view('jurusan.jurusan', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Jurusan'
        ];
        return view('jurusan.jurusan_tambah', $data);
    }
    public function tambah_action(Request $request)
    {
        $request->validate([
            'nama_jurusan' => 'required'
        ]);

        $data = [
            'nama_jurusan' => $request->nama_jurusan
        ];
        JurusanModel::create($data);
        return redirect('/jurusan')->with(['success' => 'Berhasil Menyimpan Data Jurusan']);
    }
    public function hapus($id)
    {
        JurusanModel::where('id_jurusan', $id)->delete();
        return redirect('/jurusan')->with(['success' => 'Berhasil Menghapus Data Jurusan']);
    }
    public function edit($id)
    {
        $data = [
            'detail' => JurusanModel::where('id_jurusan', $id)->first(),
            'title' => 'Edit Data Jurusan'
        ];
        return view('jurusan.jurusan_tambah', $data);
    }
    public function edit_action($id, Request $request)
    {
        $request->validate([
            'nama_jurusan' => 'required'
        ]);

        $data = [
            'nama_jurusan' => $request->nama_jurusan
        ];
        JurusanModel::where('id_jurusan', $id)->update($data);
        return redirect('/jurusan')->with(['success' => 'Berhasil Mengubah Data Jurusan']);
    }
}
