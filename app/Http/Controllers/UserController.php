<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pegawai;


class UserController extends Controller
{
    // function __construct(){
    //     parent::__construct();

    // }

    public function dashboard()
    {
        $data['pegawai'] = Pegawai::all();
       return view('dashboard', $data);
    }

    public function edit($id)
    {
        $data['pegawai'] = Pegawai::where('id', $id)->first();
        return view('edit', $data);
    }

    public function proses(Request $request, $id)
    {

        Pegawai::where('id', $id)->update([
            'nip'=>$request->nip,
            'nama'=>$request->nama,
            'kota_asal'=>$request->kota_asal,
            'st_asal'=>$request->st_asal,
            'ket_asal'=>$request->ket_asal,
            'kota_tujuan'=>$request->kota_tujuan,
            'st_pulang'=>$request->st_pulang,
            'ket_pulang'=>$request->ket_pulang,
        ]);
        // $users->nip = $request->input('nip');
        // $users->nama = $request->input('nama');
        // $users->kota_asal = $request->input('kota_asal');
        // $users->st_asal = $request->input('st_asal');
        // $users->ket_asal = $request->input('ket_asal');
        // $users->kota_tujuan = $request->input('kota_tujuan');
        // $users->st_pulang = $request->input('st_pulang');
        // $users->ket_pulang = $request->input('ket_pulang');
        // $users->update();

        return redirect('/');
    }



    public function insert()
    {
        return view('tambah');
    }

    public function tambah(Request $request)
    {

        $pegawai = new Pegawai;
        $pegawai->nip = $request->nip;
        $pegawai->nama = $request->nama;
        $pegawai->kota_asal = $request->kota_asal;
        $pegawai->st_asal = $request->st_asal;
        $pegawai->ket_asal = $request->ket_asal;
        $pegawai->kota_tujuan = $request->kota_tujuan;
        $pegawai->st_pulang = $request->st_pulang;
        $pegawai->ket_pulang = $request->ket_pulang;
        $query = $pegawai->save();

        return redirect('/');
    }


    public function hapus($id)
    {
        $data = Pegawai::find($id);
        $data->delete();
        return redirect('/');
    }

    // public function proses(Request $request)
    // {
    //     $data = $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'alamat' => 'required',
    //         'no_telp' => 'required',
    //     ]);

    //     auth()->user()->update([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'alamat' => $request->alamat,
    //         'no_telp' => $request->no_telp,
    //     ]);

    //     return back()->with('success', 'Update Profile Success');
    // }

    // public function sidebar(){
    //     return view ('sidebar');
    // }
}
