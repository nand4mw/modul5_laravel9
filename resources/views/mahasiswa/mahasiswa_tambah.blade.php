@extends('layout.format')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/mahasiswa">Data Mahasiswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data Mahasiswa</li>
        </ol>
    </nav>

    <form action="" method="post" class="card">
        @csrf
        <div class="card-header">
            Form Mahasiswa
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="nama_mahasiswa">Nama Mahasiswa</label>
                        <input type="text" class="form-control @error('nama_mahasiswa') is-invalid @enderror"
                            value="{{ old('nama_mahasiswa') }}" name="nama_mahasiswa" id="nama_mahasiswa">
                        @error('nama_mahasiswa')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="nim_mahasiswa">NIM Mahasiswa</label>
                        <input type="text" class="form-control @error('nim_mahasiswa') is-invalid @enderror"
                            value="{{ old('nim_mahasiswa') }}" name="nim_mahasiswa" id="nim_mahasiswa">
                        @error('nim_mahasiswa')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="id_jurusan">Jurusan</label>
                        <select name="id_jurusan" id="id_jurusan"
                            class="form-select @error('id_jurusan') is-invalid @enderror" value="{{ old('id_jurusan') }}">
                            <option value="">Pilih Jurusan</option>
                            @foreach ($jurusan as $get)
                                <option value="{{ $get->id_jurusan }}">- {{ $get->nama_jurusan }}</option>
                            @endforeach
                        </select>
                        @error('id_jurusan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-6">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror"
                        value="{{ old('tgl_lahir') }}" name="tgl_lahir" id="tgl_lahir">
                    @error('tgl_lahir')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-lg-6">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio"
                            value="L" name="jenis_kelamin" id="jenkel1">
                        <label class="form-check-label" for="jenkel1">
                            Laki - Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio"
                            value="P" name="jenis_kelamin" id="jenkel2">
                        <label class="form-check-label" for="jenkel2">
                            Perempuan
                        </label>
                    </div>
                    @error('jenis_kelamin')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i>Simpan</button>
            <a href="/mahasiswa" class="btn btn-danger">Kembali</a>
        </div>
    </form>
@endsection
