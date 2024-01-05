<?php

namespace App\Http\Controllers;

use App\Models\JurusanModel;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MahasiswaController extends Controller
{
    protected $mahasiswa;
    public function __construct()
    {
        $this->mahasiswa = new MahasiswaModel;
    }

    public function index()
    {
        $data = [
            'mahasiswa' => MahasiswaModel::getAllMahasiswa()->get(),
            'no' => 1,
            'title' => 'Mahasiswa'
        ];
        return view('mahasiswa.mahasiswa', $data);
    }
    public function tambah()
    {
        $data = [
            'jurusan' => JurusanModel::all(),
            'title' => 'Tambah Data Mahasiswa'
        ];
        return view('mahasiswa.mahasiswa_tambah', $data);
    }


    public function tambah_action(Request $request)
    {
        // validasi data
        $request->validate([
            'nama_mahasiswa' => 'required',
            'nim_mahasiswa' => 'required|integer|unique:data_mahasiswa',
            'id_jurusan' => 'required',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required'
        ]);

        // menangkap value dari form
        $data = [
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'nim_mahasiswa' => $request->nim_mahasiswa,
            'id_jurusan' => $request->id_jurusan,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin
        ];

        // input data ke database
        MahasiswaModel::create($data);
        return redirect('/mahasiswa')->with(['success' => 'Berhasil Menyimpan Data Mahasiswa']);
    }

    public function showJumlahMahasiswa()
    {
        $jumlahMahasiswa = MahasiswaModel::count();

        return view('home', ['nama_mahasiswa' => $jumlahMahasiswa]);
    }

    public function hapus($id)
    {
        MahasiswaModel::where('id_mahasiswa', $id)->delete();
        return redirect('/mahasiswa')->with(['success' => 'Berhasil Menghapus Data Mahasiswa']);
    }
    public function edit($id)
    {
        $data = [
            'detail' => MahasiswaModel::where('id_mahasiswa', $id)->first(),
            'jurusan' => JurusanModel::all(),
            'title' => 'Edit Data Mahasiswa'
        ];
        return view('mahasiswa.mahasiswa_edit', $data);
    }


    public function edit_action($id, Request $request)
    {
        $rules = [
            'nama_mahasiswa' => 'required',
            'nim_mahasiswa' => ['required', 'integer', Rule::unique('data_mahasiswa')->ignore($this->mahasiswa)],
            'id_jurusan' => 'required',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required'
        ];

        $request->validate($rules);

        $data = [
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'nim_mahasiswa' => $request->nim_mahasiswa,
            'id_jurusan' => $request->id_jurusan,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin
        ];

        MahasiswaModel::where('id_mahasiswa', $id)->update($data);
        return redirect('/mahasiswa')->with(['success' => 'Berhasil Mengubah Data Mahasiswa']);
    }
}
