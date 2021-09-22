@extends('layouts.dashboard')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item active"><a href="#">SPP</a></li>
@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title"> Table Data Laporan</h3>
            <br><br>
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="card-title"> Buat Laporan & Cetak dalam PDF</div>

                            <div class="alert alert-warning">Buat laporan pembayaran SPP siswa, semua data siswa akan di rekap dan di buat laporannya !.</div>

                            <a href="{{ url('dashboard/laporan/cetak-pdf') }}" class="btn btn-primary">Buat Laporan</a>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection