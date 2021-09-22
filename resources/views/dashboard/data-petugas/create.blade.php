@extends('layouts.dashboard')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="">Dashboard</a></li>
<li class="breadcrumb-item"><a href="">Petugas</a></li>
<li class="breadcrumb-item"><a href="">Tambah Data</a></li>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tabel Tambah Data Petugas.</h4>
                <br>
                <form method="POST" action="{{ url('/dashboard/data-petugas') }}" id="create">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">Nama Petugas </label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama Petugas">
                                            <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">Nomor Induk Pegawai </label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="number" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" placeholder="Masukkan NIP">
                                            <span class="text-danger">@error('nip') {{$message}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">Email </label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email Aktif">
                                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">Password </label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Masukkan Passwordd">
                                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">Konfirmasi Password </label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" value="{{ old('confirm_password') }}" placeholder="Masukkan Konfirmasi Password">
                                            <span class="text-danger">@error('confirm_password') {{$message}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">Level</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <select name="level" class="custom-select @error('level') is-invalid @enderror">
                                                <option value="">Silahkan Pilih</option>
                                                <option value="admin">Admin</option>
                                                <option value="petugas">Petugas</option>
                                            </select>
                                            <span class="text-danger">@error('level') {{$message}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">File Upload</label>
                                <div class="col-lg-10">
                                    <div class="custom-file">
                                        <input type="file" id="gambar_profil" name="gambar_profil" accept="image/*" class="custom-file-input @error('gambar_profil') is-invalid @enderror ">
                                        <label class="custom-file-label col-md-12" for="gambar_profil" onchange="$('#gambar_profil').val($(this).val());">
                                            {{ $users->gambar_profil ?? 'Pilih gambar....'}}
                                        </label>
                                        @error('gambar_profil')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="form-actions">
                        <div class="text-right">
                            <button type="submit" class="btn btn-info">
                                Tambahkan Data
                            </button>
                            <a href="{{url('dashboard/data-petugas') }}">
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