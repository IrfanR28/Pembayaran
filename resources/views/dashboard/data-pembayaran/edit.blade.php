@extends('layouts.dashboard')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="">Dashboard</a></li>
<li class="breadcrumb-item"><a href="">Transaksi Pembayaran</a></li>
<li class="breadcrumb-item"><a href="">Edit Data Siswa <span>{{ $edit->nama }} </span> </a></li>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit transaksi Pembayaran.</h4>
                <br>
                <form method="POST" action="{{ route('pembayaran.edit', $edit->id) }}">

                    @csrf
                    @method('put')
                    <div class="form-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">NISN</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="number" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ $edit->siswa->nisn }}" readonly>
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
                                                <option value="januari" {{ $edit->spp_bulan == 'januari' ? 'selected' : '' }}>Januari</option>
                                                <option value="februari" {{ $edit->spp_bulan == 'februari' ? 'selected' : '' }}>Februari</option>
                                                <option value="maret" {{ $edit->spp_bulan == 'maret' ? 'selected' : '' }}>Maret</option>
                                                <option value="april" {{ $edit->spp_bulan == 'april' ? 'selected' : '' }}>April</option>
                                                <option value="mei" {{ $edit->spp_bulan == 'mei' ? 'selected' : '' }}>Mei</option>
                                                <option value="juni" {{ $edit->spp_bulan == 'juni' ? 'selected' : '' }}>Juni</option>
                                                <option value="juli" {{ $edit->spp_bulan == 'juli' ? 'selected' : '' }}>Juli</option>
                                                <option value="agustus" {{ $edit->spp_bulan == 'agustus' ? 'selected' : '' }}>Agustus</option>
                                                <option value="september" {{ $edit->spp_bulan == 'september' ? 'selected' : '' }}>September</option>
                                                <option value="oktober" {{ $edit->spp_bulan == 'oktober' ? 'selected' : '' }}>Oktober</option>
                                                <option value="november" {{ $edit->spp_bulan == 'november' ? 'selected' : '' }}>November</option>
                                                <option value="desember" {{ $edit->spp_bulan == 'desember' ? 'selected' : '' }}>Desember</option>
                                            </select>
                                            <span class="text-danger">@error('spp_bulan') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">SPP</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control @error('spp') is-invalid @enderror" name="spp" value="{{ 'Tahun Pelajaran '.$edit->siswa->spp->tahun.' - '.'Rp.'.$edit->siswa->spp->nominal }}" readonly>
                                            <span class="text-danger">@error('spp') {{ $message }} @enderror</span>
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
                                            <input type="number" class="form-control @error('jumlah_bayar') is-invalid @enderror" name="jumlah_bayar" value="{{ $edit->jumlah_bayar }}">
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
                                Simpan Data
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