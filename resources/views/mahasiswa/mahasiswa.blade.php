@extends('layout.format')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Mahasiswa</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header">
            List Mahasiswa
        </div>
        <div class="card-body">
            <a href="/mahasiswa_tambah" class="btn btn-primary btn-sm mb-3">+ Tambah Data Mahasiswa</a>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Tgl Lahir</th>
                            <th>Gender</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $get)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $get->nama_mahasiswa }}</td>
                                <td>{{ $get->nim_mahasiswa }}</td>
                                <td>{{ date('d-m-Y', strtotime($get->tgl_lahir)) }}</td>
                                <td>{{ $get->jenis_kelamin }}</td>
                                <td>{{ $get->nama_jurusan }}</td>
                                <td>
                                    <a href="/mahasiswa/{{ $get->id_mahasiswa }}/edit" class="btn btn-primary btn-sm">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirm{{ $get->id_mahasiswa }}">
                                        <i class="bi bi-trash"></i>
                                    </button>

                                    <div class="modal fade" id="confirm{{ $get->id_mahasiswa }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-exclamation-triangle"></i>Peringatan!</h1>
                                                </div>
                                                <div class="modal-body">
                                                    Yakin Ingin Menghapus Data Mahasiswa dengan Nama
                                                    <b>{{ $get->nama_mahasiswa }}</b>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <a href="/mahasiswa/{{ $get->id_mahasiswa }}/hapus" class="btn btn-danger">Ya! Hapus.</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection