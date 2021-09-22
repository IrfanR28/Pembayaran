@extends('layouts.dashboard-siswa')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item active"><a href="#">Riwayat Siswa</a></li>
@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Draf Riwayat Pembayaran SPP </h3>

            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>No</th>
                            <th class="text-center">Histori</th>
                        </tr>
                    </thead>
                    <tbody class=" border-primary">
                        @php
                        $i=1;
                        @endphp
                        @foreach($pembayaran as $value)

                        <tr>
                            <td scope="row">{{$i}}</td>
                            <td>
                                <div class="border-top">
                                    <div class="float-right">
                                        <span class="badge badge-success badge-rounded float-right">{{ $value->created_at->diffforHumans() }}</span>
                                    </div>
                                    <div class="mt-4 text-uppercase">
                                        {{ $value->siswa->nama }}
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Kelas <strong> {{ $value->siswa->kelas->nama_kelas }}<strong></li>
                                        <li class="list-group-item">Jumlah Bayar Rp. <strong> {{ $value->jumlah_bayar }}</strong></li>
                                        <li class="list-group-item">SPP Bulan <b class="text-capitalize text-bold">{{ $value->spp_bulan }}</b></li>
                                        <li class="list-group-item">Di bayarkan pada <strong> {{ $value->created_at->format('d M, Y') }}</strong></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>

                        <!-- Modal Hapus -->

                        <!--  -->
                        @php
                        $i++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
        </div>
    </div>
</div>
@endsection