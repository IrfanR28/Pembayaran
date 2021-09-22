<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spp;
use App\User;
use Alert;

class SppController extends Controller
{

    public function __construct()
    {
        $this->middleware([
            'auth',
            'privilege:admin'
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'spp' => Spp::orderBy('id', 'DESC')->paginate(10),
        ];
        return view('dashboard.data-spp.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = spp::all();
        return view('dashboard.data-spp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute tidak boleh kosong!',
            'numeric' => ':attribute harus berupa angka!',
            'min' => ':attribute minimal harus :min angka !',
            'max' => ':attribute maksimal harus :max angka!',
            'integer' => ':attribute harus berupa nilai uang tanpa titik !'
        ];

        $validasi = $request->validate([
            'tahun' => 'required|min:4|max:11',
            'nominal' => 'required',
        ], $messages);

        if ($validasi) :
            $store = Spp::create([
                'tahun' => $request->tahun,
                'nominal' => $request->nominal,
            ]);

            if ($store) :
                Alert::success('Berhasil!', 'Data Berhasil Ditambahkan');
            else :
                Alert::error('Gagal!', 'Data Gagal Ditambahkan');
            endif;
        endif;

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function show(Spp $spp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'edit'  => spp::find($id),
            'user'  => user::find(auth()->user()->id)
        ];
        return view('dashboard.data-spp.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        if ($update = spp::find($id)) :
            $stat = $update->update([
                'tahun' => $req->tahun,
                'nominal'   => $req->nominal
            ]);
            if ($stat) :
                Alert::success('Berhasil', 'Data Berhasil di Update !');
            else :
                Alert::error('Terjadi Kesalahan', 'Data Gagal di Update !');
                return back();
            endif;
        endif;
        return redirect('dashboard/data-spp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (spp::find($id)->delete()) :
            Alert::success('Berhasil', 'Data Berhasil di Hapus');
        else :
            Alert::error('Terjadi Kesalahan', 'Data Gagal di Hapus');
        endif;

        return back();
    }
}
