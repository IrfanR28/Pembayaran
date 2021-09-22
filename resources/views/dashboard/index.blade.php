@extends('layouts.dashboard')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>

@endsection

@section('content')
<!-- *************************************************************** -->
<!-- Start First Cards -->
<!-- *************************************************************** -->
<div class="card-group">
    <div class="card border-right">
        <div class="card-body">
            <div class="d-flex d-lg-flex d-md-block align-items-center">
                <div>
                    <div class="d-inline-flex align-items-center">
                        <h2 class="text-dark mb-1 font-weight-medium">{{$siswa}} </h2>
                    </div>
                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Siswa Terdaftar</h6>
                </div>
                <div class="ml-auto mt-md-3 mt-lg-0">
                    <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-right">
        <div class="card-body">
            <div class="d-flex d-lg-flex d-md-block align-items-center">
                <div>
                    <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup class="set-doller">IDR.</sup>{{ $pembayaran }}</h2>
                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Pembayaran Bulan Ini
                    </h6>
                </div>
                <div class="ml-auto mt-md-3 mt-lg-0">
                    <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-right">
        <div class="card-body">
            <div class="d-flex d-lg-flex d-md-block align-items-center">
                <div>
                    <div class="d-inline-flex align-items-center">
                        <h2 class="text-dark mb-1 font-weight-medium">{{ $kelas }}</h2>
                        <!-- <span class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">-18.33%</span> -->
                    </div>
                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Kelas</h6>
                </div>
                <div class="ml-auto mt-md-3 mt-lg-0">
                    <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex d-lg-flex d-md-block align-items-center">
                <div>
                    <h2 class="text-dark mb-1 font-weight-medium">{{$petugas}} </h2>
                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Petugas & Admin</h6>
                </div>
                <div class="ml-auto mt-md-3 mt-lg-0">
                    <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- *************************************************************** -->
<!-- End First Cards -->
<!-- *************************************************************** -->
<!-- *************************************************************** -->
<!-- Start Sales Charts Section -->
<!-- *************************************************************** -->
<div class="row">
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Total Pembayaran</h4>
                <div id="campaign-v2" class="mt-2" style="height:283px; width:100%;"></div>
                <ul class="list-style-none mb-0">
                    <li>
                        <i class="fas fa-circle text-primary font-10 mr-2"></i>
                        <span class="text-muted">Kelas X</span>
                        <span class="text-dark float-right font-weight-medium">Rp. 2.346.000</span>
                    </li>
                    <li class="mt-3">
                        <i class="fas fa-circle text-danger font-10 mr-2"></i>
                        <span class="text-muted">Kelas XI</span>
                        <span class="text-dark float-right font-weight-medium">Rp 2.108.000</span>
                    </li>
                    <li class="mt-3">
                        <i class="fas fa-circle text-cyan font-10 mr-2"></i>
                        <span class="text-muted">Kelas XII</span>
                        <span class="text-dark float-right font-weight-medium">Rp. 1.204.000</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Total Pembayaran Semester Ini</h4>
                <div class="net-income mt-4 position-relative" style="height:294px;"></div>
                <ul class="list-inline text-center mt-5 mb-2">
                    <li class="list-inline-item text-muted font-italic">Buy for this month</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Earning by Location</h4>
                <div class="" style="height:180px">
                    <div id="visitbylocate" style="height:100%"></div>
                </div>
                <div class="row mb-3 align-items-center mt-1 mt-5">
                    <div class="col-4 text-right">
                        <span class="text-muted font-14">India</span>
                    </div>
                    <div class="col-5">
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-3 text-right">
                        <span class="mb-0 font-14 text-dark font-weight-medium">99%</span>
                    </div>
                </div>
                <div class="row mb-3 align-items-center">
                    <div class="col-4 text-right">
                        <span class="text-muted font-14">UK</span>
                    </div>
                    <div class="col-5">
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 74%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-3 text-right">
                        <span class="mb-0 font-14 text-dark font-weight-medium">21%</span>
                    </div>
                </div>
                <div class="row mb-3 align-items-center">
                    <div class="col-4 text-right">
                        <span class="text-muted font-14">USA</span>
                    </div>
                    <div class="col-5">
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-cyan" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-3 text-right">
                        <span class="mb-0 font-14 text-dark font-weight-medium">18%</span>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-4 text-right">
                        <span class="text-muted font-14">China</span>
                    </div>
                    <div class="col-5">
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-3 text-right">
                        <span class="mb-0 font-14 text-dark font-weight-medium">12%</span>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
<!-- *************************************************************** -->
<!-- End Sales Charts Section -->
<!-- *************************************************************** -->
@endsection