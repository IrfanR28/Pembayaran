<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Pembayaran;
use App\Siswa;
use App\User;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $siswa  = Siswa::count();
        $kelas = Kelas::count();
        $pembayaran = Pembayaran::sum('jumlah_bayar');
        $petugas = User::count();

        return view('dashboard.index', [
            'siswa' => $siswa,
            'kelas' => $kelas,
            'pembayaran' => $pembayaran,
            'petugas' => $petugas
        ]);
    }
}
