<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use PDF;

class KaryawanController extends Controller
{
    public function index(){
        return view('karyawan.index', [
            'karyawans' => Karyawan::get()
        ]);
    }

    public function create(){
        return view('karyawan.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'NIP' => ['required'],
            'Nama' => ['required'],
            'Tempat_Lahir' => ['required'],
            'Tanggal_Lahir' => ['required'],
            'Jenis_Kelamin' => ['required'],
            'Agama' => ['required'],
            'Alamat' => ['required'],
            'Status_Kawin' => ['required'],
            'Kewarganegaraan' => ['required'],
            'Pendidikan' => ['required'],
            'Jurusan' => ['required'],
            'Jabatan' => ['required'],
        ]);
    
        $karyawan = new Karyawan();

        $karyawan->NIP = $request->NIP;
        $karyawan->Nama = $request->Nama;
        $karyawan->Tempat_Lahir = $request->Tempat_Lahir;
        $karyawan->Tanggal_Lahir = $request->Tanggal_Lahir;
        $karyawan->Jenis_Kelamin = $request->Jenis_Kelamin;
        $karyawan->Agama = $request->Agama;
        $karyawan->Alamat = $request->Alamat;
        $karyawan->Status_Kawin = $request->Status_Kawin;
        $karyawan->Kewarganegaraan = $request->Kewarganegaraan;
        $karyawan->Pendidikan = $request->Pendidikan;
        $karyawan->Jurusan = $request->Jurusan;
        $karyawan->Jabatan = $request->Jabatan;

        $karyawan->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('karyawan.index');
    }

    public function edit($id){
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit', [
            'karyawan' => $karyawan,
        ]);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'NIP' => ['required'],
            'Nama' => ['required'],
            'Tempat_Lahir' => ['required'],
            'Tanggal_Lahir' => ['required'],
            'Jenis_Kelamin' => ['required'],
            'Agama' => ['required'],
            'Alamat' => ['required'],
            'Status_Kawin' => ['required'],
            'Kewarganegaraan' => ['required'],
            'Pendidikan' => ['required'],
            'Jurusan' => ['required'],
            'Jabatan' => ['required'],
        ]);
        
        $karyawan = Karyawan::find($id);

        $karyawan->NIP = $request->NIP;
        $karyawan->Nama = $request->Nama;
        $karyawan->Tempat_Lahir = $request->Tempat_Lahir;
        $karyawan->Tanggal_Lahir = $request->Tanggal_Lahir;
        $karyawan->Jenis_Kelamin = $request->Jenis_Kelamin;
        $karyawan->Agama = $request->Agama;
        $karyawan->Alamat = $request->Alamat;
        $karyawan->Status_Kawin = $request->Status_Kawin;
        $karyawan->Kewarganegaraan = $request->Kewarganegaraan;
        $karyawan->Pendidikan = $request->Pendidikan;
        $karyawan->Jurusan = $request->Jurusan;
        $karyawan->Jabatan = $request->Jabatan;

        $karyawan->save();
        session()->flash('info', 'Data Berhasil Diperbarui');
        return redirect()->route('karyawan.index');
    }

    public function destroy($id){
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        session()->flash('danger', 'Data Berhasil Dihapus');
        return redirect()->route('karyawan.index');
    }

    public function exportpdf(){
        $karyawan = Karyawan::all();
        view()->share('karyawans', $karyawan);
        $pdf = PDF::loadview('karyawan.cetak');
        return $pdf->download('karyawan.pdf');
    }
}