@extends('template.main')
@section('aktif', 'active')
@section('judul', 'Dashboard Mahasiswa BerPrestasi')
@section('konten')

<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a>
            </li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </div>
    <div class="row">
        <!-- 1st row Start -->
        <div class="col-lg-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="">
                                    <h2 class="mb-2"> 256 </h2>
                                    <p class="text-muted mb-0"> Prestasi Nasional</p>
                                </div>
                                <div class="lnr lnr-chart-bars display-4 text-success"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="">
                                    <h2 class="mb-2">8451</h2>
                                    <p class="text-muted mb-0">Prestasi Kampus</p>
                                </div>
                                <div class="lnr lnr-chart-bars display-4 text-success"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card mb-4">
                <div class="card-header with-elements">
                    <h6 class="card-header-title mb-0">Statistics</h6>
                    <div class="card-header-elements ml-auto">
                        <label class="text m-0">
                            <span class="text-light text-tiny font-weight-semibold align-middle">SHOW
                                STATS</span>
                            <span
                                class="switcher switcher-primary switcher-sm d-inline-block align-middle mr-0 ml-2"><input
                                    type="checkbox" class="switcher-input" checked><span
                                    class="switcher-indicator"><span class="switcher-yes"></span><span
                                        class="switcher-no"></span></span></span>
                        </label>
                    </div>
                </div>
                <div class="card-body">
                    <div id="statistics-chart-1" style="height:300px"></div>
                </div>
            </div>
        </div>
        <!-- 1st row Start -->
    </div>

</div>

@endsection