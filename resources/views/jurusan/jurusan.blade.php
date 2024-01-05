@extends('layout.template')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Jurusan</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header">
            Data Jurusan
        </div>
        <div class="card-body">
            <a href="/jurusan_tambah" class="btn btn-primary btn-sm mb-3">+ Tambah Data Jurusan</a>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <th>No</th>
                        <th>Nama Jurusan</th>
                        <th>Jumlah Mahasiswa</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($jurusan as $get)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $get->nama_jurusan }}</td>
                                <td>{{ $get->jumlah_mahasiswa }}</td>
                                <td>
                                    <a href="/jurusan/{{ $get->id_jurusan }}/edit" class="btn btn-primary btn-sm">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirm{{ $get->id_jurusan }}">
                                        <i class="bi bi-trash"></i>
                                    </button>

                                    <div class="modal fade" id="confirm{{ $get->id_jurusan }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-exclamation-triangle"></i>Peringatan!</h1>
                                                </div>
                                                <div class="modal-body">
                                                    Yakin Ingin Menghapus Data Jurusan dengan Nama
                                                    <b>{{ $get->nama_jurusan }}</b>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <a href="/jurusan/{{ $get->id_jurusan }}/hapus" class="btn btn-danger">Ya! Hapus.</a>
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