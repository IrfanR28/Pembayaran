@extends('layouts.dashboard')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="">Dashboard</a></li>
<li class="breadcrumb-item"><a href="">Transaksi Pembayaran</a></li>
<li class="breadcrumb-item"><a href="">Tambah Data</a></li>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tabel Tambah Data Transaksi Pembayaran.</h4>
                <br>
                <form method="POST" action="{{ url('/dashboard/data-transaksi') }}">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">NISN</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="number" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ old('nisn') }}" placeholder="Masukkan NISN">
                                            <span class="text-danger">@error('nisn') {{$message}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">SPP Bulan</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <select class="custom-select @error('spp_bulan') is-invalid @enderror" name="spp_bulan">
                                                <option value="">Silahkan Pilih</option>
                                                <option value="januari">Januari</option>
                                                <option value="februari">Februari</option>
                                                <option value="maret">Maret</option>
                                                <option value="april">April</option>
                                                <option value="mei">Mei</option>
                                                <option value="juni">Juni</option>
                                                <option value="juli">Juli</option>
                                                <option value="agustus">Agustus</option>
                                                <option value="september">September</option>
                                                <option value="oktober">Oktober</option>
                                                <option value="november">November</option>
                                                <option value="desember">Desember</option>
                                            </select>
                                            <span class="text-danger">@error('spp_bulan') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">Nominal Pembayaran</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="number" class="form-control @error('jumlah_bayar') is-invalid @enderror" name="jumlah_bayar" value="{{ old('jumlah_bayar') }}" placeholder="Masukkan Nominal Pembayaran">
                                            <small id="textHelp" class="form-text text-muted">Penulisan hanya berupa angka. Contoh : 350000</small>
                                            <span class="text-danger">@error('jumlah_bayar') {{ $message }} @enderror</span>
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
                            <a href="{{url('dashboard/data-transaksi') }}">
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