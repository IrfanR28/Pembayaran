@extends('layouts.dashboard')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item active"><a href="#">Riwayat</a></li>
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
                            <th class="text-center">Identitas Pembayaran</th>
                            <!-- <th>Opsi</th> -->
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
                                        <i class="mdi mdi-check text-success"></i> {{ $value->created_at->format('d M, Y') }}
                                    </div>
                                    <div class="mt-4 text-uppercase">
                                        {{ $value->siswa->nama .' - '. $value->siswa->kelas->nama_kelas }}
                                    </div>
                                    <div>SPP Bulan <b class="text-capitalize">{{ $value->spp_bulan }}</b></div>
                                    <div>Nominal SPP Rp.{{ $spp = $value->siswa->spp->nominal }}</div>
                                    <div>Bayar <strong> Rp.{{ $bayar = $value->jumlah_bayar }}</strong></div>
                                    <div>Tunggakan <strong> Rp.{{ $spp - $bayar }}</strong></div>
                                </div>
                            </td>
                            <!-- <td>
                                <div class="btn-action">
                                    <a class="icon" href="{{ route('riwayat.create') }} " title="Cetak Data">
                                        <i class="fas fa-print"></i>
                                    </a>
                                    <a class="icon" data-id="{{ $value->id }}" data-toggle="modal" data-target="#DeleteModal-{{ $value->id }}" title="Hapus Data">
                                        <i class="fas fa-trash"></i>
                                    </a>

                                </div>
                            </td> -->
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