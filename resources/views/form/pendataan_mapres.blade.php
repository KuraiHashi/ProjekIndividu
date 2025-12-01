@extends('template.main')
@section('aktif', 'active')
@section('judul', 'Form Pendataan Mahasiswa Ber Prestasi')
@section('konten')
    
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">@yield('judul')</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active">@yield('judul')</li>
        </ol>
    </div>

    <div class="card mb-4">
        <h6 class="card-header">@yield('judul')</h6>
        <div class="card-body">
            <form action="{{route('FormMapresPost')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" required placeholder="Masukkan Nama">
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <label class="form-label">Universitas</label>
                    <input type="text" class="form-control" name="universitas" required placeholder="Masukkan Universitas">
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <label class="form-label">Fakultas</label>
                    <input type="text" class="form-control" name="fakultas" required placeholder="Masukkan Fakultas">
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <label class="form-label">Jenis Lomba</label>
                    <input type="text" class="form-control" name="jenis_lomba" required placeholder="Tahfiz/Futsal/dll">
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <label class="form-label">Tingkat Lomba</label>
                    <input type="text" class="form-control" name="tingkat_lomba" required placeholder="Nasional/Kab/Kota/Fakultas/dll">
                    <div class="clearfix"></div>
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
        </div>
    </div>

</div>

@endsection