@extends ('layouts.dashboard')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="">Dashboard</a></li>
<li class="breadcrumb-item"><a href="">Siswa</a></li>
<li class="breadcrumb-item"><a href="">Detail Data Siswa <span>{{ $siswa->nama }} </span> </a></li>
@endsection


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Detail Siswa</h4>
                <br>
                <form method="POST" action="{{ route('siswa.detail', $siswa->id) }}">
                    @csrf
                    @method('post')
                    <div class="form-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">NISN</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="number" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ $siswa->nisn}}" readonly>
                                            <span class="text-danger">@error('nisn') {{$message}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">NIS</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="number" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ $siswa->nis }}" readonly>
                                            <span class="text-danger">@error('nominal') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">Nama Lengkap</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $siswa->nama }}" readonly>
                                            <span class="text-danger">@error('nama') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">Kelas</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{ $siswa->kelas->nama_kelas}}" readonly>
                                            <span class="text-danger">@error('kelas') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">No. Telephone</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="number" class="form-control @error('nomor_telp') is-invalid @enderror" name="nomor_telp" value="{{ $siswa->nomor_telp }}" readonly>
                                            <span class="text-danger">@error('nomor_telp') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">Alamat</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea class="form-control @error('alamat') is-invalid @enderror" rows="5" name="alamat" readonly>{{ $siswa->alamat }}</textarea>
                                            <span class="text-danger">@error('alamat') {{ $message }} @enderror</span>
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
                                            <input type="text" class="form-control @error('spp') is-invalid @enderror" name="spp" value="{{ 'Tahun Pelajaran '.$siswa->spp->tahun.' - '.'Rp.'.$siswa->spp->nominal }}" readonly>
                                            <span class="text-danger">@error('spp') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="text-right">

                            <a href="{{url('dashboard/data-siswa') }}">
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