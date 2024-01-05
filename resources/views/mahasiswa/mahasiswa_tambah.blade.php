<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Tambah Data Mahasiswa</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Yosi Bagus Sadar Rasuli">
    <meta name="robots" content="">


    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://unibamadura.ac.id/page/images/profil/1.png">
    <link rel="stylesheet" href="{{ asset('assets/vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('') }}assets/vendor/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="{{ asset('') }}assets/css/style.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
        rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader" style="display: none;">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->




    <div id="main-wrapper" class="show">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo" aria-label="Gymove">
                <img class="logo-abbr" width="50" src="https://unibamadura.ac.id/page/images/profil/1.png"
                    alt="">


                <h4 class="logo-compact mt-2">Informatika <span style="font-size: 10px">Uniba Madura</span>
                </h4>
                <h4 class="brand-title mt-2">Informatika <span style="font-size: 10px">Uniba Madura </span>
                </h4>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->


        <!--**********************************
            Header start
        ***********************************-->
        <header class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                {{ $title }}
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">



                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-bs-toggle="dropdown">
                                    <img src="https://unibamadura.ac.id/page/images/profil/1.png" width="20" alt="">
                                    <div class="header-info">
                                        <span class="text-black"><strong>Ananda MW</strong></span>
                                        <p class="fs-12 mb-0">AnandaMW@gmail.com</p>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="/setting" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="/logout" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12">
                                            </line>
                                        </svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
       
        <div class="deznav">
            <div class="deznav-scroll mm-active">
                <ul class="metismenu mm-show" id="menu">
                    <li class=""><a href="/dashboard" class="ai-icon mm-active" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a href="/jurusan" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-notepad"></i>
                            <span class="nav-text">Data Jurusan</span>
                        </a>
                    </li>
                    <li><a href="/mahasiswa" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-television"></i>
                            <span class="nav-text">Data Mahasiswa</span>
                        </a>
                    </li>
                    <li><a href="/operator" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-settings-2"></i>
                            <span class="nav-text">Operator Sistems</span>
                        </a>
                    </li>
                </ul>
                <div class="add-menu-sidebar">
                    <img src="https://cdn-icons-png.flaticon.com/512/1053/1053210.png" width="50" alt="" class="me-3">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-link font-w500 mb-0" style="text-decoration: none; color: inherit;">Logout</button>
                    </form>
                </div>
                
              
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->


        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body default-height">
            <div class="container-fluid">
                <div class="">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{ $message }}.
                            <button type="button" class="btn-close" data-bd-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif







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













</div>
</div>
</div>
<!--**********************************
Content body end
***********************************-->


<!--**********************************
Footer start
***********************************-->
<footer class="footer">
<div class="copyright">
   
</div>
</footer>
<!--**********************************
Footer end
***********************************-->
</div>
<!--**********************************
Main wrapper end

***********************************-->

<!-- Required vendors -->
<script src="{{ asset('') }}assets/vendor/global/global.min.js"></script>
<script src="{{ asset('') }}assets/vendor/chart-js/chart.bundle.min.js"></script>
<script src="{{ asset('') }}assets/vendor/owl-carousel/owl.carousel.js"></script>
<!-- Chart piety plugin files -->
<script src="{{ asset('') }}assets/vendor/peity/jquery.peity.min.js"></script>

<!-- Apex Chart -->
<script src="{{ asset('') }}assets/vendor/apexchart/apexchart.js"></script>

<!-- Datatable -->
<script src="{{ asset('') }}assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<!-- Dashboard 1 -->
<script src="{{ asset('') }}assets/js/dashboard/dashboard-1.js"></script>

<script src="{{ asset('') }}assets/js/plugins-init/datatables.init.js"></script>
<script src="{{ asset('') }}assets/js/custom.min.js"></script>
<script src="{{ asset('') }}assets/js/deznav-init.js"></script>
<script>
(function() {
'use strict'

// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.querySelectorAll('.needs-validation')

// Loop over them and prevent submission
Array.prototype.slice.call(forms)
    .forEach(function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()
</script>


</body>

</html>

