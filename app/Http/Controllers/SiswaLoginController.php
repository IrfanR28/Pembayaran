<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Alert;
use App\Siswa;
use App\Pembayaran;


class SiswaLoginController extends Controller
{
    public function siswaLogin()
    {
        if (session('nama') != null) :
            return redirect('dashboard/siswa/riwayat');
        endif;
        return view('auth.siswa-login');
    }

    public function login(Request $req)
    {
        $exists = Siswa::where('nisn', $req->nisn)->exists();

        if ($exists) :
            $siswa = Siswa::where('nisn', $req->nisn)->get();

            foreach ($siswa as $var) :
                Session::put('id', $var->id);
                $nama = $var->nama;
            endforeach;

            if (strtolower($nama) == strtolower($req->nama_siswa)) :

                Session::put('nama', $nama);
                Session::put('nisn', $req->nisn);

                return redirect('dashboard/siswa/riwayat');
            else :

                Alert::error('Maaf Login Gagal !', 'NISN atau Nama Siswa tidak sesuai');
                return back();
            endif;

        else :
            Alert::error('Maaf Akses ditolak !', 'Data Siswa dengan NISN ini tidak ditemukan');
            return back();
        endif;
    }

    public function logout()
    {
        Session::flush();
        return redirect('login/siswa');
    }

    public function index()
    {
        if (session('nama') == null) :
            return redirect('login/siswa');
        endif;

        $data = [
            'pembayaran' => Pembayaran::where('id_siswa', Session::get('id'))->paginate(10)
        ];

        return view('dashboard.data-akses-siswa.index', $data);
    }
}
