<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function tampil(){
        $siswa = Siswa::get();
        return view('adminDashboard', compact('siswa'));
    }


    function tambah(){
        return view('tambahDashboard',['title' => 'Tambah Data']);
    }

    function submit(Request $request){
        $siswa = new Siswa();
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->no_hp = $request->no_hp;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->hobi = $request->hobi;
        $siswa->save();

        return redirect()->route('admin.dashboard');
    }

    function edit($id){
        $siswa = Siswa::find($id);
        return view('updateSiswa', compact('siswa'),['title'=>'Update Data']);
    }

    function update(Request $request, $id){
        $siswa = Siswa::find($id);
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->no_hp = $request->no_hp;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->hobi = $request->hobi;
        $siswa->update();

        return redirect()->route('admin.dashboard');
    }

    function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect()->route('admin.dashboard');
    }

}
