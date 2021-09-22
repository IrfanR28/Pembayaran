@extends ('layouts.dashboard')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="">Dashboard</a></li>
<li class="breadcrumb-item"><a href="">SPP</a></li>
<li class="breadcrumb-item"><a href="">Edit Data Kelas <span>{{ $edit->nama_kelas }} </span> </a></li>
@endsection


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Kelas</h4>
                <br>
                <form method="POST" action="{{ route('kelas.edit', $edit->id) }}">
                    @csrf
                    @method('put')
                    <div class="form-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">Nama Kelas </label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control @error('nama_kelas') is-invalid @enderror" name="nama_kelas" value="{{ $edit->nama_kelas}}">
                                            <span class="text-danger">@error('nama_kelas') {{$message}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">Nama Kompetensi Keahlian</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control @error('kompetensi_keahlian') is-invalid @enderror" name="kompetensi_keahlian" value="{{ $edit->kompetensi_keahlian}}">
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
                                Simpan Data
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