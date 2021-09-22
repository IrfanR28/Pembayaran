@extends ('layouts.dashboard')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="">Dashboard</a></li>
<li class="breadcrumb-item"><a href="">Siswa</a></li>
<li class="breadcrumb-item"><a href="">Edit Data Siswa <span>{{ $siswa->nama }} </span> </a></li>
@endsection


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Siswa</h4>
                <br>
                <form method="POST" action="{{ route('siswa.edit', $siswa->id) }}">
                    @csrf
                    @method('put')
                    <div class="form-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">NISN</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="number" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ $siswa->nisn}}">
                                            <small>Cukup Masukkan angka Max.11</small>
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
                                            <input type="number" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ $siswa->nis }}">
                                            <small>Cukup Masukkan angka Max.7</small>
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
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $siswa->nama }}">
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
                                            <select name="kelas" class="custom-select @error('kelas') is-invalid @enderror" {{ count($kelas) == 0 ? 'disabled' : '' }}>
                                                @if(count($kelas) == 0)
                                                <option>Pilihan tidak ada</option>
                                                @else
                                                <option value="">Silahkan Pilih</option>
                                                @foreach($kelas as $value)
                                                <option value="{{ $value->id }}" {{ $siswa->id_kelas == $value->id ? 'selected' : '' }}>{{ $value->nama_kelas }}</option>
                                                @endforeach
                                                @endif
                                            </select>
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
                                            <input type="number" class="form-control @error('nomor_telp') is-invalid @enderror" name="nomor_telp" value="{{ $siswa->nomor_telp }}">
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
                                            <textarea class="form-control @error('alamat') is-invalid @enderror" rows="5" name="alamat">{{ $siswa->alamat }}</textarea>
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
                                            <select name="spp" class="custom-select @error('spp') is-invalid @enderror" {{ count($spp) == 0 ? 'disabled' : '' }}>
                                                @if(count($spp) == 0)
                                                <option>Pilihan tidak ada</option>
                                                @else
                                                <option value="">Silahkan Pilih</option>
                                                @foreach($spp as $value)
                                                <option value="{{ $value->id }}" {{ $siswa->id_spp == $value->id ? 'selected' : '' }}>{{ 'Tahun Pelajaran '.$value->tahun.' - '.'Rp.'.$value->nominal }}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                            <span class="text-danger">@error('spp') {{ $message }} @enderror</span>
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