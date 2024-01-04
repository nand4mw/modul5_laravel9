@extends('layout.format')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/jurusan">Data Jurusan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data Jurusan</li>
        </ol>
    </nav>
    
    <form action="" method="post" class="card">
        @csrf
        <div class="card-header">
            Form Jurusan
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="nama_jurusan">Nama Jurusan</label>
                        <input type="text" class="form-control @error('nama_jurusan') is-invalid @enderror"
                            value="{{ old('nama_jurusan') ?? $detail->nama_jurusan }}" name="nama_jurusan"
                            id="nama_jurusan">
                        @error('nama_jurusan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i>Simpan Perubahan</button>
            <a href="/jurusan" class="btn btn-danger">Kembali</a>
        </div>
    </form>
@endsection
