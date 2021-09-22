@extends ('layouts.dashboard')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="">Dashboard</a></li>
<li class="breadcrumb-item"><a href="">SPP</a></li>
<li class="breadcrumb-item"><a href="">Edit Data Petugas <span>{{ $edit->name }} </span> </a></li>
@endsection


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Petugas</h4>
                <br>
                <form method="POST" action="{{ route('petugas.edit', $edit->id) }}" id="edit_data">
                    @csrf
                    @method('put')
                    <div class="form-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">Nama Petugas </label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $edit->name}}">
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
                                            <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ $edit->nip}}">
                                            <span class="text-danger">@error('nip') {{$message}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">Email</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $edit->email}}">
                                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">Password Baru </label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="password" class="form-control @error('password_baru') is-invalid @enderror" name="password_baru">
                                            <small id="name" class="form-text text-muted">Perubahan Password hanya Opsional.</small>
                                            <span class="text-danger">@error('password_baru') {{$message}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-2">Konfirmasi Password Baru</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="password" class="form-control @error('password_baru') is-invalid @enderror" name="password_baru">
                                            <small id="name" class="form-text text-muted">Perubahan Password hanya Opsional.</small>
                                            <span class="text-danger">@error('password_baru') {{$message}} @enderror</span>
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
                                                <option value="admin" {{ $edit->level == 'admin' ? 'selected' : '' }}>admin</option>
                                                <option value="petugas" {{ $edit->level == 'petugas' ? 'selected' : '' }}>petugas</option>
                                            </select>
                                            <span class="text-danger">@error('level') {{$message}} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-actions">
                        <div class="text-right">
                            <input type="hidden" id="old_pass" name="old_pass" value="">
                            <button type="button" class="btn btn-success" onclick="buttonEdit()">
                                <i class="mdi mdi-check"></i>Simpan Data
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

@section('sweet')

function buttonEdit()
{
var new_pass = $('#new_pass').val();
var confirm_new_pass = $('#confirm_new_pass').val();

if(new_pass == '' ){
var text = "Masukan Password Anda ?";
}else{
var text = "Masukan Password Lama Anda ?";
}

if(new_pass == confirm_new_pass){
swal.fire({
icon: 'question',
title: text,
input: 'password',
inputAttributes: {
autocapitalize: 'off',
},
confirmButtonText: 'Lanjut',
showLoaderOnConfirm: true,
showCancelButton: true,
cancelButtonText: 'Batal',
cancelButtonColor: '#d33'
})
.then((result) => {
if(result.value){
$('#old_pass').val(result.value);
$('#edit_data').submit();
}else{
const Toast = Swal.mixin({
toast: true,
position: 'top-end',
showConfirmButton: false,
timer: 3000,
timerProgressBar: true,
onOpen: (toast) => {
toast.addEventListener('mouseenter', Swal.stopTimer)
toast.addEventListener('mouseleave', Swal.resumeTimer)
}
});
Toast.fire({
icon: 'error',
title: 'Terjadi Kesalahan!'
});
}
});
}else{
Toast.fire({
icon: 'error',
title: 'Konfirmasi Password tidak Cocok!'
})
}

}

@endsection