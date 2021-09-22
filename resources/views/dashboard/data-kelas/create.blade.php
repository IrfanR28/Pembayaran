@extends('layouts.dashboard')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="">Dashboard</a></li>
<li class="breadcrumb-item"><a href="">Kelas</a></li>
<li class="breadcrumb-item"><a href="">Tambah Data</a></li>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tabel Tambah Data Kelas.</h4>
                <br>
                <form method="POST" action="{{ url('/dashboard/data-kelas') }}">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">Nama Kelas </label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control @error('nama_kelas') is-invalid @enderror" name="nama_kelas" value="{{ old('nama_kelas') }}" placeholder="Masukkan Nama Kelas">
                                            <span class="text-danger">@error('nama_kelas') {{$message}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">Nama Kompetensi Keahlian </label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control @error('kompetensi_keahlian') is-invalid @enderror" name="kompetensi_keahlian" value="{{ old('kompetensi_keahlian') }}" placeholder="Masukkan Nama Kompetensi Keahlian">
                                            <span class="text-danger">@error('kompetensi_keahlian') {{$message}} @enderror</span>
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
                            <a href="{{url('dashboard/data-kelas') }}">
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