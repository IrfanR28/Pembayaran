@extends('layouts.dashboard')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="">Dashboard</a></li>
<li class="breadcrumb-item"><a href="">SPP</a></li>
<li class="breadcrumb-item"><a href="">Tambah Data</a></li>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tabel Tambah Data SPP.</h4>
                <br>
                <form method="POST" action="{{ url('/dashboard/data-spp') }}">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">Tahun Pelajaran </label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="{{ old('tahun') }}" placeholder="Masukkan Tahun Pelajaran">
                                            <span class="text-danger">@error('tahun') {{$message}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">Nominal SPP</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="number" class="form-control @error('nominal') is-invalid @enderror" name="nominal" value="{{ old('nominal') }}" placeholder="Masukkan Nominal SPP">
                                            <small id="textHelp" class="form-text text-muted">Penulisan hanya berupa angka. Contoh : 350000</small>
                                            <span class="text-danger">@error('nominal') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="text-right">
                            <button type="submit" class="btn btn-info">
                                Tambahkan Data
                            </button>
                            <a href="{{url('dashboard/data-spp') }}">
                                <button type="button" class="btn btn-dark float-left">
                                    <i class="fas fa-chevron-left"></i> Kembali
                                </button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection