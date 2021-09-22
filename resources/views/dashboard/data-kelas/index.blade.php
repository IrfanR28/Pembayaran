@extends('layouts.dashboard')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item active"><a href="#">Kelas</a></li>
@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title"> Table Data Kelas</h3>
            <a href="{{route('kelas.create') }}">
                <button type="button" class="btn btn-outline-primary float-right">
                    <i class="fas fa-plus-square"></i> Tambahkan Data
                </button>
            </a><br><br>
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>No</th>
                            <th>Nama Kelas</th>
                            <th>Nama Kompetensi Keahlian</th>
                            <th>Dibuat</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody class=" border-primary">
                        @php
                        $i=1;
                        @endphp
                        @foreach($kelas as $value)

                        <tr>
                            <td scope="row">{{$i}}</td>
                            <td>{{$value->nama_kelas}}</td>
                            <td>{{$value->kompetensi_keahlian}}</td>
                            <td>{{$value->created_at->format('d M, Y')}}</td>
                            <td>
                                <div class="btn-action">
                                    <a class="icon" href="{{ route('kelas.edit', $value->id) }}" title="Edit Data">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a class="icon" data-id="{{ $value->id }}" data-toggle="modal" data-target="#DeleteModal-{{ $value->id }}" title="Hapus Data">
                                        <i class="fas fa-trash"></i>
                                    </a>

                                </div>
                            </td>
                        </tr>

                        <!-- Modal Hapus -->
                        <div id="DeleteModal-{{ $value->id}}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <form action=" {{ route("kelas.destroy", ['kelas' => $value->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <div class="modal-content modal-filled bg-danger">
                                        <div class="modal-body p-4">
                                            <button type="button" class="close" data-dismiss="modal">
                                                &times;</button>
                                            <div class="text-center">
                                                <i class="dripicons-wrong h1"></i>
                                                <h4 class="mt-2">Peringatan !</h4>
                                                <p class="mt-3">Anda yakin menghapus data ini, data yang dihapus tidak akan bisa dikembalikan!.</p>
                                                <button type="submit" class="btn btn-light my-2" onclick="this.form.submit()" data-dismiss="modal">Ya, Hapus</button>
                                            </div>
                                        </div>
                                    </div>
                                </form><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <!--  -->
                        @php
                        $i++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            @if(count($kelas) == 0)
            <div class="text-center">Data Tidak Ada !</div>
            @endif
        </div>
    </div>
</div>
@endsection